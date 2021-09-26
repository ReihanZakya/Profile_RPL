<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $guarded = [];


    public function teachers()
    {
        return $this->belongoMany('App\Teacher');
    }
}
