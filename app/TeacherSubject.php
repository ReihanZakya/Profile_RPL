<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TeacherSubject extends Model
{
    protected $guarded = [];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject','subject_id');
    }
}
