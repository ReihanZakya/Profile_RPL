<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subject;
use App\Teacher;
use App\PositionTypes;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index()
    {
        $title = 'Guru';
        $data = Teacher::join('position_types','position_types.id','=','position_types_id')
                        ->select('position_types.name as p_name','teachers.*')
                        ->get();

        return view('admin.teacher.index',compact('title','data'));
    }

    public function add()
    {
        $title = 'Tambah Guru';
        $join = DB::table('teachers')
                        ->join('position_types','position_types.id','=','position_types_id')
                        ->where('is_unique',1)
                        ->first();
                        // dd($join);
        $null = DB::table('position_types')
                    ->where('is_unique',0)
                    ->get();
                    // dd($null);
        $position = PositionTypes::get();

        return view('admin.teacher.add',compact('title','position','join','null'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:3|unique:teachers,name',
            'gender' => 'required',
            'position_types_id' => 'required',
            'photo' => 'image'
        ],
        [
            'name.required' => 'Inputan nama tidak boleh kosong',
            'name.min' => 'Inputan nama minimal 3 karakter',
            'name.unique' => 'Inputan nama sudah tersedia',
            'gender.required' => 'Inputan jenis kelamin wajib diisi',
            'position_types_id.required' => 'Inputan jenis posisi wajib diisi',
        ]);

        $file = $request->file('photo');
        $path = 'AdminLTE\teacher';

        $teacher = new Teacher;
        if ($file) {
            $file->move($path,$file->getClientOriginalName());
            $teacher->name = $request->name;
            $teacher->gender = $request->gender;
            $teacher->photo = $file->getClientOriginalName();
            $teacher->position_types_id = $request->position_types_id;
        }else{
            $teacher->name = $request->name;
            $teacher->gender = $request->gender;
            $teacher->position_types_id = $request->position_types_id;
        }

        $teacher->save();
        return redirect('teacher')->with('success', 'Data Berhasil Ditambah');
    }

    public function edit($id)
    {
        $title = 'Edit Guru';
        $dt = Teacher::findOrFail($id);
        $position = DB::table('position_types')
                    ->get();

        return view('admin.teacher.edit',compact('title','dt','position'));
    }

    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'name' => 'required|min:3',
            'gender' => 'required',
            'position_types_id' => 'required',
            'photo' => 'image'
        ],
        [
            'name.required' => 'Inputan nama tidak boleh kosong',
            'name.min' => 'Inputan nama minimal 3 karakter',
            'name.unique' => 'Inputan nama sudah tersedia',
            'gender.required' => 'Inputan jenis kelamin wajib diisi',
            'position_types_id.required' => 'Inputan jenis posisi wajib diisi',
            'photo.image' => 'Format foto salah'
        ]);

        $file = $request->file('photo');
        $path = 'AdminLTE\teacher';

        $teacher = Teacher::findOrFail($id);
        if ($file) {
            $file->move($path,$file->getClientOriginalName());
            $teacher->name = $request->name;
            $teacher->gender = $request->gender;
            $teacher->photo = $file->getClientOriginalName();
            $teacher->position_types_id = $request->position_types_id;
        }else{
            $teacher->name = $request->name;
            $teacher->gender = $request->gender;
            $teacher->position_types_id = $request->position_types_id;
        }

        $teacher->save();

        return redirect('teacher')->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id)
    {
        Teacher::findOrFail($id)->delete();
        return redirect('teacher')->with('success', 'Data Berhasil Dihapus');
    }
}

