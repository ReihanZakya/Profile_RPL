<?php

namespace App\Http\Controllers;

use App\Documentation;
use Illuminate\Http\Request;

class DokumentasiController extends Controller
{
    public function index()
    {
        $data = Documentation::get();

        return view('fitur.dokumentasi',compact('data'));
    }
}
