<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    public function school()
    {
    	return $this->hasOne('App\School');
    }
}
