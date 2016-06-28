<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    protected $fillable = ['name','dob','class','height','weight','event','ath_num','photo','school_id'];

    public function school()
    {
    	return $this->belongsTo('App\School');
    }
}
