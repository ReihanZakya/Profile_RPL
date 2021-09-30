<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subject;
use App\Teacher;
use Egulias\EmailValidator\Warning\TLD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index()
    {
        $title = 'Guru';
        $data = Teacher::get();
        $bg = DB::table('teachers')
                   ->select('teachers.position_types')
                   ->get();
        // dd($bg);
        return view('admin.teacher.index',compact('title','data'));
    }

    public function add()
    {
        $title = 'Tambah Guru';
        $unique = DB::table('teachers')
                   ->select('teachers.is_unique')
                   ->where('teachers.is_unique',1)
                   ->first();
// dd($unique);
        return view('admin.teacher.add',compact('title','unique'));
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

        $k_prodi = $request->position_types;
        $teacher = new Teacher;


        if ($k_prodi == 1) {
            if ($file) {
                $file->move($path,$file->getClientOriginalName());
                $teacher->name = $request->name;
                $teacher->gender = $request->gender;
                $teacher->position_types = $request->position_types;
                $teacher->is_unique = '1';
                $teacher->photo = $file->getClientOriginalName();
            }else{
                $teacher->name = $request->name;
                $teacher->gender = $request->gender;
                $teacher->position_types = $request->position_types;
                $teacher->is_unique = null;
            }
        }


        if ($k_prodi == 2) {
            if ($file) {
                $file->move($path,$file->getClientOriginalName());
                $teacher->name = $request->name;
                $teacher->gender = $request->gender;
                $teacher->position_types = $request->position_types;
                $teacher->photo = $file->getClientOriginalName();
            }else{
                $teacher->name = $request->name;
                $teacher->gender = $request->gender;
                $teacher->position_types = $request->position_types;
            }
        }
        $teacher->save();

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
            'name' => 'required|min:3',
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
        Teacher::findOrFail($id)->delete();
        return redirect('teacher')->with('success', 'Data Berhasil hapus');
    }
}

