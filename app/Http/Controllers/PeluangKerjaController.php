<?php

namespace App\Http\Controllers;

use App\JobOpportunities;
use Illuminate\Http\Request;

class PeluangKerjaController extends Controller
{
    public function index()
    {
        $data = JobOpportunities::get();

        return view('fitur.peluang_kerja',compact('data'));
    }
}
