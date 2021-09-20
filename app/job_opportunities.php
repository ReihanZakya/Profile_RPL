<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class job_opportunities extends Model
{
    use SoftDeletes;
    protected $guarded = [];
}
