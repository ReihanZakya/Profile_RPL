<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use SoftDeletes;
    protected $guarded = [];


    public function teachers()
    {
        return $this->belongoMany('App\Teacher')->withPivot('id');
    }

    public function ts()
    {
        return $this->hasMany('App\TeacherSubject','is_unique');
    }
}
