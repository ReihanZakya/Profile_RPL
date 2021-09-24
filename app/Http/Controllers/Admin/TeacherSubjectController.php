<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subject;
use App\Teacher;
use App\TeacherSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherSubjectController extends Controller
{
    public function index()
    {
        $title = 'Guru Mapel';
        $data = TeacherSubject::orderBy('teacher_id','asc')->get();

        return view('admin.teacher_subject.index',compact('title','data'));
    }

    public function add()
    {
        $title = 'Tambah Mata Pelajaran';
        $teacher = Teacher::get();
        $subject = Subject::orderBy('class','asc')->get();


        return view('admin.teacher_subject.add',compact('title','teacher','subject'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'teacher_id' => 'required|unique:teacher_subjects,teacher_id',
            'subject_id' => 'required|unique:teacher_subjects,subject_id',
        ],
        [
            'teacher_id.required' => 'Inputan guru wajib diisi',
            'teacher_id.unique' => 'Inputan guru sudah ada',
            'subject_id.required' => 'Inputan mata pelajaran wajib diisi',
            'subject_id.unique' => 'Inputan mata pelajaran sudah ada'
        ]);

        $teacher = $request->teacher_id;
        $subject = $request->subject_id;

        foreach ($subject as $key => $value) {
            $dt_subject = Subject::where('id',$subject[$key])->first();

            TeacherSubject::insert([
                'teacher_id' => $teacher,
                'subject_id' => $subject[$key],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }

        return redirect('teacher_subject')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $title = 'Edit Guru Mapel';
        $dt = TeacherSubject::findOrFail($id);
        $teacher = Teacher::get();
        $subject = Subject::get();
        $count = TeacherSubject::where('subject_id')->count();

        return view('admin.teacher_subject.edit',compact('title','dt','teacher','subject','count'));
    }

    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'teacher_id' => 'required',
            'subject_id' => 'required',
        ],
        [
            'teacher_id.required' => 'Inputan guru wajib diisi',
            'teacher_id.unique' => 'Inputan guru sudah ada',
            'subject_id.required' => 'Inputan mata pelajaran wajib diisi',
            'subject_id.unique' => 'Inputan mata pelajaran sudah ada'
        ]);

        $teacher = $request->teacher_id;
        $subject = $request->subject_id;

            TeacherSubject::findOrFail($id)->update([
                'teacher_id' => $teacher,
                'subject_id' => $subject,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);


        return redirect('teacher_subject')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $tc = TeacherSubject::findOrFail($id);
        $tc->delete();

        return redirect('teacher_subject')->with('success', 'Data Berhasil Didelete');
    }
}
