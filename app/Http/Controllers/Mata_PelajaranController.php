<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mata_PelajaranController extends Controller
{
    public function index()
    {
        return view('fitur.mata_pelajaran');
    }
}
