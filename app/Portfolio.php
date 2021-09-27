<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    protected $guarded = [];

   public function members()
   {
       return $this->hasMany(Member::class);
   }

   public function member()
   {
       return $this->belongsTo(Member::class);
   }
}
