<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use SoftDeletes;
    protected $guarded = [];


    public function teacher_subject()
    {
        return $this->hasMany(TeacherSubject::class);
    }
}
