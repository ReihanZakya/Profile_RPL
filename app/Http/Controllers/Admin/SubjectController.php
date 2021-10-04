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
            'name.required' => 'Inputan mata pelajaran wajib diisi',
            'name.min' => 'Inputan mata pelajaran Minimal 3 karakter',
            'name.unique' => 'Inputan mata pelajaran sudah tersedia',
            'class.required' => 'Inputan Kelas Wajib Diisi'
        ]);

        Subject::create([
            'name' => $request->name,
            'class' => $request->class,
        ]);

        return redirect('subject')->with('success', 'Data Berhasil Ditambah');
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
            'name.required' => 'Inputan mata pelajaran wajib diisi',
            'name.min' => 'Inputan mata pelajaran Minimal 3 karakter',
            'name.unique' => 'Inputan mata pelajaran sudah tersedia',
            'class.required' => 'Inputan Kelas Wajib Diisi'
        ]);

        Subject::findOrFail($id)->update([
            'name' => $request->name,
            'class' => $request->class
        ]);

        return redirect('subject')->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id)
    {
        Subject::findOrFail($id)->delete();
        return redirect('subject')->with('success', 'Data Berhasil Dihapus');
    }
}
