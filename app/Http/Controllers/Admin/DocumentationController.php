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

       if ($file) {
        $file->move($path,$file->getClientOriginalName());
        Documentation::create([
            'name' => $request->name,
            'source' => $request->source,
            'photo' => $file->getClientOriginalName()
        ]);
       }else{
        Documentation::create([
            'name' => $request->name,
            'source' => $request->source,
        ]);

       }
        return redirect('documentation');
    }

    public function edit($id)
    {
        $title = 'Edit Dokumentasi';
        $dt = Documentation::findOrFail($id);

        return view('admin.documentation.edit',compact('title','dt'));
    }

    public function update(Request $request,$id)
    {
        $file = $request->file('photo');
        $path = 'AdminLTE\documentation';

       if ($file) {
        $file->move($path,$file->getClientOriginalName());
        Documentation::findOrFail($id)->update([
            'name' => $request->name,
            'source' => $request->source,
            'photo' => $file->getClientOriginalName()
        ]);
       }else{
        Documentation::findOrFail($id)->update([
            'name' => $request->name,
            'source' => $request->source,
        ]);

       }
        return redirect('documentation');
    }
}
