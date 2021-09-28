<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = [];


    public function member()
    {
        return $this->hasMany('App\PortfolioMember','member_id')->select(array('id','member_id'));
    }
}
