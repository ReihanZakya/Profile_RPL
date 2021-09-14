<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobOpportunitiesController extends Controller
{
    public function index()
    {
        $title = 'Peluang Kerja';

        return view('admin.job_opportunities.index',compact('title'));
    }
}
