<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subject;
use App\Teacher;
use App\TeacherSubject;
use Illuminate\Http\Request;

class TeacherSubjectController extends Controller
{
    public function index()
    {
        $title = 'Guru Mapel';
        $data = TeacherSubject::get();

        return view('admin.teacher_subject.index',compact('title','data'));
    }

    public function add()
    {
        $title = 'Tambah Mata Pelajaran';
        $teacher = Teacher::get();
        $subject = Subject::get();


        return view('admin.teacher_subject.add',compact('title','teacher','subject'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'teacher_id' => 'required',
            'subject_id' => 'required',
        ],
        [
            'teacher_id.required' => 'Inputan guru wajib diisi',
            'subject_id.required' => 'Inputan mata pelajaran wajib diisi',
        ]);
        TeacherSubject::create([
            'teacher_id' => $request->teacher_id,
            'subject_id' => $request->subject_id
        ]);

        return redirect('teacher_subject');
    }

    public function edit($id)
    {
        $title = 'Edit Guru Mapel';
        $dt = TeacherSubject::findOrFail($id);
        $teacher = Teacher::get();
        $subject = Subject::get();

        return view('admin.teacher_subject.edit',compact('title','dt','teacher','subject'));
    }

    public function update(Request $request,$id)
    {
        TeacherSubject::findOrFail($id)->update([
            'teacher_id' => $request->teacher_id,
            'subject_id' => $request->subject_id
        ]);

        return redirect('teacher_subject');
    }

    public function delete($id)
    {
        TeacherSubject::findOrFail($id)->delete();

        return redirect('teacher_subject');
    }
}
