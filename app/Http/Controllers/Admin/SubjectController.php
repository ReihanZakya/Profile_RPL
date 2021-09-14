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
        Subject::create([
            'name_subject' => $request->name_subject,
            'class' => $request->class
        ]);

        return redirect('/manage_subject');
    }

    public function edit($id)
    {
        $title = 'Edit Mata Pelajaran';
        $dt = Subject::findOrFail($id);

        return view('admin.subject.edit',compact('title','dt'));
    }

    public function update(Request $request,$id)
    {
        Subject::findOrFail($id)->update([
            'name_subject' => $request->name_subject,
            'class' => $request->class
        ]);

        return redirect('/manage_subject');
    }

    public function delete($id)
    {
        Subject::findOrFail($id)->delete();

        return redirect('subject');
    }
}
