<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\School;
use App\Athlete;
use App\Master;
use Hash;
use App\Code;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['athletes_c'] = Athlete::count();
        $data['athletes'] = Athlete::all();
        $data['masters'] = Master::where('school_id',\Session::get('school_id'))->count();
        return view('index',$data);
    }

    public function about()
    {
        return view('about');
    }

    public function schoolreg()
    {
        return view('school.code');
    }

    public function login()
    {
        return view('school.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pinValidate(Request $request)
    {
        $validator = Validator::make($request->all(),['code'=>'required|exists:codes']);
        if($validator->fails()){
            return redirect('school/schoolreg')->withErrors($validator)->withInputs($request->all());
        }
        $checkUsedCode = Code::where(['code' => $request['code'],'status'=>'used'])->count();
        if($checkUsedCode > 0){
            return redirect('/schoolreg')->withErrors('Code Already Used')->withInputs($request->all());
        }  
        $code = base64_encode(base64_encode($request['code']));
        return redirect('school/registration/'.$code);

    }

    public function regPage($id)
    {
        $data['code'] = $id;
        $code = base64_decode(base64_decode($id));
        $codeCheck = Code::where(['code' => $code,'status'=>'active'])->first();
        if($codeCheck){
            return view('school.reg',$data);
        }else{
            abort('404');
        }

    }
    public function confPage($id)
    {
        $data['code'] = $id;
        $code = base64_decode(base64_decode($id));
        $codeCheck = Code::where(['code' => $code,'status'=>'used'])->first();
        if($codeCheck){
            $data['codeDetail'] = Code::where(['code' => $code,'status'=>'used'])->first();
            return view('school.confirmation',$data);
        }else{
            abort('404');
        }

    }

    public function registerSchool(Request $request)
    {
       // dd($request->all());
       $validator = Validator::make($request->all(),
        ['code'=>'required',
         'name' => 'required',
         'address'=>'required',
         'city'=>'required',
         'email'=>'required|unique:schools',
         'phone'=>'required|unique:schools',
         'password'=>'required|confirmed',
        ]);
        if($validator->fails()){
            return redirect('registration/'.$request['code'])
                ->withErrors($validator)
                    ->withInput($request->all());
        }
        $code = base64_decode(base64_decode($request['code']));
        $codeCheck = Code::where(['code' => $code,'status'=>'active'])->count();
        $codeDetail = Code::where(['code' => $code,'status'=>'active'])->first();
        if ($codeCheck > 0) {
            $request['code_id'] = $codeDetail->id;
            $schNumber          = School::count();
            $schIncre           = $schNumber + 1;
            $request['password'] = Hash::make($request['password']);
            $request['app_num'] = 'SCH'.str_pad($schIncre, 4, '0', STR_PAD_LEFT);
            $updateCode = Code::where('id', $request['code_id'])->update(['status' => 'used']);
            $saveCode = School::create($request->except('code'));
            return redirect('school/confirmation/'.$request['code']);
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveAthlete(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
