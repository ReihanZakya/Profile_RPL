<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\job_opportunities;

class JobOpportunitiesController extends Controller
{
    public function index()
    {
        $title = 'Peluang Kerja';
        $data = job_opportunities::get();

        return view('admin.job_opportunities.index',compact('title','data'));
    }

    public function add()
    {
        $title = 'Tambah Pekerjaan';

        return view('admin.job_opportunities.add',compact('title'));
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:3|unique:job_opportunities,name',
            'description' => 'required|min:10',
        ],
        [
            'name.required' => 'Inputan nama tidak boleh kosong',
            'name.min' => 'Inputan Minimal 3 karakter',
            'name.unique' => 'Inputan nama sudah tersedia',
            'description.required' => 'Inputan deskripsi wajib diisi',
            'description.min' => 'Inputan minimal 10 karakter',
        ]);

        job_opportunities::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect('job_opportunities');
    }

    public function edit($id)
    {
        $title = 'Edit Peluang kerja';
        $dt = job_opportunities::findOrFail($id);

        return view('admin.job_opportunities.edit',compact('title','dt'));
    }

    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'name' => 'required|min:3|unique:job_opportunities,name,' .$id,
            'description' => 'required|min:10',
        ],
        [
            'name.required' => 'Inputan nama tidak boleh kosong',
            'name.min' => 'Inputan Minimal 3 karakter',
            'name.unique' => 'Inputan nama sudah tersedia',
            'description.required' => 'Inputan deskripsi wajib diisi',
            'description.min' => 'Inputan minimal 10 karakter',
        ]);

        job_opportunities::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect('job_opportunities');
    }

    public function delete($id)
    {
        job_opportunities::findOrFail($id)->delete();

        return redirect('job_opportunities');
    }
}
