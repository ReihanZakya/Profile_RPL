<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = [];


    public function portfolio()
    {
        return $this->belongsTo('App\Portfolio','portfolio_id');
    }
}
