<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;
    protected $guarded = [];


    public function subjects()
    {
        return $this->belongsToMany('App\Subject')->withPivot('id');
    }

}
