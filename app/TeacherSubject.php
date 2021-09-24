<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherSubject extends Model
{
    protected $guarded = [];



    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }


    public function unique()
    {
        return $this->hasMany('App\Subject','is_unique');
    }
}
