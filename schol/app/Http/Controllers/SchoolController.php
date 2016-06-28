<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Athlete;
use App\Master;
use Validator;
use Image;
use Hash;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
         $validator = Validator::make($request->all(),[
            'app_num' =>'required',
            'password' =>'required'
            ]);
        if ($validator->fails()) {
                   return redirect('school/login')
                    ->withErrors($validator)
                        ->withInput($request->all());
        }
        $app_number      = $request['app_num'];
        $password        =  $request['password'];
        $data = [
            'app_num' => $app_number,
        ];
        $checkSchool = School::where($data)->count();
        if ($checkSchool > 0) {
            $schoolDetail = School::where($data)->first(); 
           if (Hash::check($password, $schoolDetail['password']))
            {
                \Session::put('school_id', $schoolDetail->id);
                return redirect::to('school/dashboard');
            }else{
                return redirect::to('school/login')->withErrors('Invalid Crendtials');
            }
        }else{
            return redirect::to('school/login')->withErrors('Invalid Crendtials');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        if(!\Session::has('school_id'))return redirect('/');
        $data['title'] = 'Dashboard';
        $data['athletes'] = Athlete::where('school_id',\Session::get('school_id'))->count();
        $data['athletes_c'] = Athlete::where('school_id',\Session::get('school_id'))->get();
        $data['masters'] = Master::where('school_id',\Session::get('school_id'))->count();
        return view('school.dashboard',$data);
    }

    public function athletes()
    {
        $data['title'] = 'Athletes';
        $data['athletes'] = Athlete::where('school_id',\Session::get('school_id'))->get();
        return view('school.athletes',$data); 
    }

    public function newAthlete()
    {
        $data['title'] = 'New Athlete';
        $data['events'] = DB::table('events')->get();
        return view('school.newathlete',$data); 
    }

    public function masters()
    {
        $data['title'] = 'Games Masters';
        $data['masters'] = Master::where('school_id',\Session::get('school_id'))->get();
        return view('school.masters',$data); 
    }

    public function newMaster()
    {
        $data['title'] = 'New Games Master';
        $data['events'] = DB::table('events')->get();
        return view('school.newmaster',$data); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAthlete(Request $request)
    {
        
         // dd($request->all());
         $validator = Validator::make($request->all(),[
            'name' =>'required',
            'dob' =>'required',
            'class' =>'required',
            'event' =>'required',
            'image' =>'required',
            ]);
        if ($validator->fails()) {
           return redirect('school/newathlete')
            ->withErrors($validator)
                ->withInput($request->all());
        }
        if (count($request['event']) > 2) {
            return redirect('school/newathlete')
            ->withErrors('select only two athletics Event(s)')
                ->withInput($request->all());
        }
         $request['event'] = implode(',', $request['event']);
        $athNumber          = Athlete::count();
        $athIncre           = $athNumber + 1;
        $request['ath_num'] = 'ATH'.str_pad($athIncre, 4, '0', STR_PAD_LEFT);
        $imageFile = Image::make($request['image']);
        $imageFile->resize(150, 150, function ($constraint) {
            $constraint->aspectRatio();
        });
        $imageFile->save('athletes/'.$request['ath_num'].'.jpg');
        $request['photo'] = $request['ath_num'].'.jpg';
        $request['school_id'] = \Session::get('school_id');
        $athlete = Athlete::create($request->except('image'));
        \Session::flash('flash_message','Athlete Successfully Created');
        return redirect('school/newathlete');

    }


    public function storeMaster(Request $request)
    {
         
         // dd($request->all());
         $validator = Validator::make($request->all(),[
            'name' =>'required',
            'event' =>'required',
            'image' =>'required',
            ]);
        if ($validator->fails()) {
           return redirect('school/newmaster')
            ->withErrors($validator)
                ->withInput($request->all());
        }
        $request['event'] = implode(',', $request['event']);
        $mstNumber          = Master::count();
        $mstIncre           = $mstNumber + 1;
        $request['mst_num'] = 'GMS'.str_pad($mstIncre, 4, '0', STR_PAD_LEFT);
        $imageFile = Image::make($request['image']);
        $imageFile->resize(150, 150, function ($constraint) {
            $constraint->aspectRatio();
        });
        $imageFile->save('master/'.$request['mst_num'].'.jpg');
        $request['photo'] = $request['mst_num'].'.jpg';
        $request['school_id'] = \Session::get('school_id');
        $athlete = Master::create($request->except('image'));
        \Session::flash('flash_message','Games Master Successfully Created');
        return redirect('school/newmaster');

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
