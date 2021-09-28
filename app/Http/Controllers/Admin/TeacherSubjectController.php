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
        $subject = Subject::where('unik','')->get();
        // $subject = Subject::get();

        return view('admin.teacher_subject.add',compact('title','teacher','subject'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'teacher_id' => 'required',
            'subject_id' => 'required|unique:teacher_subjects,subject_id',
        ],
        [
            'teacher_id.required' => 'Inputan guru wajib diisi',
            'teacher_id.unique' => 'Inputan guru sudah ada',
            'subject_id.required' => 'Inputan mata pelajaran wajib diisi',
            'subject_id.unique' => 'Inputan mata pelajaran sudah ada'
        ]);

        // $teacher = $request->teacher_id;
        // $subject = $request->subject_id;

        // foreach ($subject as $key => $value) {
        //     $dt_subject = Subject::where('id',$subject[$key])->first();

        //     TeacherSubject::insert([
        //         'teacher_id' => $teacher,
        //         'subject_id' => $dt_subject[$key],
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s')
        //     ]);

        //     Subject::where('id',$subject[$key])->update([
        //         'unik' => 1
        //     ]);
        // }


        TeacherSubject::create([
            'teacher_id' => $request->teacher_id,
            'subject_id' => $request->subject_id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        Subject::where('id',$request->subject_id)->update([
            'unik' => 1
        ]);
        $dt_subject = Subject::where('id',$request->subject_id);


        return redirect('teacher_subject')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $title = 'Edit Guru Mapel';
        $dt = TeacherSubject::findOrFail($id);
        $hidden = TeacherSubject::join('subjects','subjects.id','=','teacher_subjects.id')
        ->select('teacher_subjects.subject_id')
        ->find($id);
        $teacher = Teacher::get();
        $subject = Subject::get();

        return view('admin.teacher_subject.edit',compact('title','dt','teacher','subject','hidden'));
    }

    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'teacher_id' => 'required',
            'subject_id' => 'required|unique:teacher_subjects,subject_id,' .$id
        ],
        [
            'teacher_id.required' => 'Inputan guru wajib diisi',
            'teacher_id.unique' => 'Inputan guru sudah ada',
            'subject_id.required' => 'Inputan mata pelajaran wajib diisi',
            'subject_id.unique' => 'Inputan mata pelajaran sudah ada'
        ]);

        $teacher = $request->teacher_id;
        $subject = $request->subject_id;
        $old = $request->old_subject_id;

            TeacherSubject::findOrFail($id)->update([
                'teacher_id' => $teacher,
                'subject_id' => $subject,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            if ($request->subject_id) {
                if ($request->old_subject_id) {
                   Subject::where('id',$old)->update([
                       'unik' => ''
                   ]);
                }
                Subject::where('id',$subject)->update([
                    'unik' => 1
                ]);
            }

        return redirect('teacher_subject')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {

        $teacher_subject = TeacherSubject::with('subject')->find($id);
        // dd($teacher_subject);
        $teacher_subject->subject()->update([
            'unik' => ''
        ]);

        TeacherSubject::findOrFail($id)->delete();
        return redirect('teacher_subject')->with('success', 'Data Berhasil Dihapus');
    }
}
