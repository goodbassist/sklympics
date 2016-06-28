<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $fillable = ['name','email','phone','school_id','mst_num','photo','event'];
}
