<?php

namespace App\Http\Controllers\Admin;

use App\Documentation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $validate = $request->validate([
            'name' => 'required|min:3|unique:documentations,name',
            'photo' => 'required|image'
        ],
        [
            'name.required' => 'Inputan nama wajib diisi',
            'name.min' => 'Inputan nama minimal 3 karakter',
            'name.unique' => 'Inputan nama sudah tersedia',
            'source.min' => 'Inputan sumber minimal 5 karakter'
        ]);

        $file = $request->file('photo');
        $path = 'AdminLTE\documentation';

        $file = $request->file('photo');
        $path = 'AdminLTE\documentation';
            $file->move($path,$file->getClientOriginalName());
            Documentation::create([
                'name' => $request->name,
                'photo' => $file->getClientOriginalName(),
                'source' => $request->source
            ]);

        return redirect('documentation')->with('success', 'Data Berhasil Ditambah');
    }

    public function edit($id)
    {
        $title = 'Edit Dokumentasi';
        $dt = Documentation::findOrFail($id);

        return view('admin.documentation.edit',compact('title','dt'));
    }

    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'name' => 'required|min:3|unique:documentations,name,' .$id,
            'photo' => 'image'
        ],
        [
            'name.required' => 'Inputan nama wajib diisi',
            'name.min' => 'Inputan nama minimal 3 karakter',
            'name.unique' => 'Inputan nama sudah tersedia',
            'source.min' => 'Inputan sumber minimal 5 karakter'
        ]);

        $file = $request->file('photo');
        $path = 'AdminLTE\documentation';
        $dt = Documentation::findOrFail($id);

        if ($request->file('photo')) {
            if ($request->old_photo) {
               File::delete('AdminLTE/documentation/'.$request->old_photo);
            }
            $file->move($path,$file->getClientOriginalName());
            $photo = $file->getClientOriginalName();
        }else{
            $photo = $dt->photo;
        }

        $dt->name = $request->name;
        $dt->photo = $photo;
        $dt->source = $request->source;
        $dt->save();

        return redirect('documentation')->with('success', 'Data Berhasi Diubah');
    }
    public function delete($id)
    {
        Documentation::findOrFail($id)->delete();

        return redirect('documentation')->with('success', 'Data Berhasil Dihapus');
    }
}
