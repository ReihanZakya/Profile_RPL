<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $guarded = [];


    public function subjects()
    {
        return $this->belongsToMany('App\Subject');
    }

    public function unique()
    {
        return $this->hasMany('App\TeacherSubject','teacher_id')->select(array('teacher_id','subject_id'));
    }
}
