<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subject;
use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $title = 'Guru';
        $data = Teacher::get();

        return view('admin.teacher.index',compact('title','data'));
    }

    public function add()
    {
        $title = 'Tambah Guru';

        return view('admin.teacher.add',compact('title'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:3|unique:teachers,name',
            'gender' => 'required',
            'position_types' => 'required',
            'photo' => 'image'
        ],
        [
            'name.required' => 'Inputan nama tidak boleh kosong',
            'name.min' => 'Inputan nama minimal 3 karakter',
            'name.unique' => 'Inputan nama sudah tersedia',
            'gender.required' => 'Inputan jenis kelamin wajib diisi',
            'position_types.required' => 'Inputan jenis posisi wajib diisi',
            'photo.image' => 'Format foto salah'
        ]);

        $file = $request->file('photo');
        $path = 'AdminLTE\teacher';

        if ($file) {
            $file->move($path,$file->getClientOriginalName());
            Teacher::create([
                'name' => $request->name,
                'gender' => $request->gender,
                'position_types' => $request->position_types,
                'photo' => $file->getClientOriginalName()
            ]);
        }else{
            Teacher::create([
                'name' => $request->name,
                'gender' => $request->gender,
                'position_types' => $request->position_types,
            ]);

        }

            return redirect('teacher')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $title = 'Edit Guru';
        $dt = Teacher::findOrFail($id);

        return view('admin.teacher.edit',compact('title','dt'));
    }

    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'name' => 'required|min:3|unique:teachers,name,' .$id,
            'gender' => 'required',
            'position_types' => 'required',
            'photo' => 'image'
        ],
        [
            'name.required' => 'Inputan nama tidak boleh kosong',
            'name.min' => 'Inputan Minimal 3 karakter',
            'name.unique' => 'Inputan nama sudah tersedia',
            'gender.required' => 'Inputan jenis kelamin wajib diisi',
            'position_types.required' => 'Inputan jenis posisi wajib diisi',
            'photo.image' => 'Format foto salah'
        ]);

        $file = $request->file('photo');
        $path = 'AdminLTE\teacher';

        if($file){
            $file->move($path,$file->getClientOriginalName());
            Teacher::findOrFail($id)->update([
                'photo' => $file->getClientOriginalName()
            ]);
           }else{
            Teacher::findOrFail($id)->update([
                'name' => $request->name,
                'gender' => $request->gender,
                'position_types' => $request->position_types
            ]);
           }


        return redirect('teacher')->with('success', 'Data Berhasil Diedit');
    }

    public function delete($id)
    {
        try {
            Teacher::findOrFail($id)->delete();
            return redirect('teacher')->with('success', 'Data Berhasil hapus');
            }
            catch(\Exception $e) {
            echo 'Message: ' .$e->getMessage();
            return redirect('teacher')->with('error', 'Data tidak bisa dihapus karena sudah terdaftar di guru mapel');
            }
    }
}

