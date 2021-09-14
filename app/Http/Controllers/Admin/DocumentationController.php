<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function index()
    {
        $title = 'Dokumentasi';

        return view('admin.documentation.index',compact('title'));
    }
}
