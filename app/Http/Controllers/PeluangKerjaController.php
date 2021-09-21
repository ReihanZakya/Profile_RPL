<?php

namespace App\Http\Controllers;

use App\job_opportunities;
use Illuminate\Http\Request;

class PeluangKerjaController extends Controller
{
    public function index()
    {
        $data = job_opportunities::get();

        return view('fitur.peluang_kerja',compact('data'));
    }
}
