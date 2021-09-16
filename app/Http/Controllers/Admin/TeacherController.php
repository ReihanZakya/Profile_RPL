<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $file = $request->file('photo');

        $path = 'AdminLTE\teacher';
        $file->move($path,$file->getClientOriginalName());

        Teacher::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'position_types' => $request->position_types,
            'photo' => $file->getClientOriginalName()
        ]);

        return redirect('teacher');
    }

    public function edit($id)
    {
        $title = 'Edit Guru';
        $dt = Teacher::findOrFail($id);

        return view('admin.teacher.edit',compact('title','dt'));
    }

    public function update(Request $request,$id)
    {
        Teacher::findOrFail($id)->update([
            'teacher_name' => $request->teacher_name,
            'gender' => $request->gender,
            'position_types' => $request->position_types
        ]);

        return redirect('teacher');
    }

    public function delete($id)
    {
        Teacher::findOrFail($id)->delete();

        return redirect('teacher');
    }
}
