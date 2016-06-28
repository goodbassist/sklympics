<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class School extends Model
{
    protected $fillable = ['name','email','phone','address','city','state','code_id','password','app_num'];
}
