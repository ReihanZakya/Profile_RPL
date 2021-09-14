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
        TeacherSubject::create([
            'teacher_id' => $request->teacher_id,
            'subject_id' => $request->subject_id
        ]);
    }
}
