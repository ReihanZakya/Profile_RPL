<?php

namespace App\Http\Controllers\Admin;

use App\Documentation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function index()
    {
        $title = 'Dokumentasi';
        $data = Documentation::get();

        return view('admin.documentation.index',compact('title','data'));
    }

    public function add()
    {
        $title = 'Tanmbah Dokumentasi';

        return view('admin.documentation.add',compact('title'));
    }

    public function store(Request $request)
    {
        $file = $request->file('photo');

        $path = 'AdminLTE\documentation';
        $file->move($path,$file->getClientOriginalName());

        Documentation::create([
            'name' => $request->name,
            'source' => $request->source,
            'photo' => $file->getClientOriginalName()
        ]);

        return redirect('documentation');
    }

    public function edit($id)
    {
        $title = 'Edit Dokumentasi';
        $dt = Documentation::findOrFail($id);

        return view('admin.documentation.edit',compact('title','dt'));
    }
}
