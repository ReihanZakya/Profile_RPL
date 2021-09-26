<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $title = 'Mata Pelajaran';
        $data = Subject::get();

        return view('admin.subject.index',compact('title','data'));
    }

    public function add()
    {
        $title = 'Tambah Mata Pelajaran';

        return view('admin.subject.add',compact('title'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:3|unique:subjects,name',
            'class' => 'required'
        ],
        [
            'name.required' => 'Inputan nama wajib diisi',
            'name.min' => 'Inputan Nama Minimal 3 karakter',
            'name.unique' => 'Inputan nama sudah tersedia',
            'class.required' => 'Inputan Kelas Wajib Diisi'
        ]);

        Subject::create([
            'name' => $request->name,
            'class' => $request->class
        ]);

        return redirect('subject')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $title = 'Edit Mata Pelajaran';
        $dt = Subject::findOrFail($id);

        return view('admin.subject.edit',compact('title','dt'));
    }

    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'name' => 'required|min:3|unique:subjects,name,' .$id,
            'class' => 'required'
        ],
        [
            'name.required' => 'Inputan nama wajib diisi',
            'name.min' => 'Inputan Nama Minimal 3 karakter',
            'name.unique' => 'Inputan nama sudah tersedia',
            'class.required' => 'Inputan Kelas Wajib Diisi'
        ]);

        Subject::findOrFail($id)->update([
            'name' => $request->name,
            'class' => $request->class
        ]);

        return redirect('subject')->with('success', 'Data Berhasil Diedit');
    }

    public function delete($id)
    {
        try {
            Subject::findOrFail($id)->delete();
            return redirect('subject')->with('success', 'Data Berhasil hapus');
            }
            catch(\Exception $e) {
            echo 'Message: ' .$e->getMessage();
            return redirect('subject')->with('error', 'Data tidak bisa dihapus karena sudah terdaftar di guru mapel');
            }
    }
}
