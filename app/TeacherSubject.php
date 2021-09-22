<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherSubject extends Model
{
    protected $guarded = [];

    use SoftDeletes;

    public function teacher()
    {
        return $this->BelongsTo(Teacher::class,'teacher_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
