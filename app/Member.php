<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{


    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
