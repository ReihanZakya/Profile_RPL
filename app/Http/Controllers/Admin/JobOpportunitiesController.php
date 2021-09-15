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
        $file = $request->file('photo');

        $path = 'AdminLTE\job_opportunities';
        $file->move($path,$file->getClientOriginalName());

        job_opportunities::create([
            'job_name' => $request->job_name,
            'job_description' => $request->job_description,
            'photo' => $file->getClientOriginalName()
        ]);

        return redirect('job_opportunities');
    }

    public function edit($id)
    {
        $title = 'Edit Peluang kerja';
        $dt = job_opportunities::findOrFail($id);

        return view('admin.job_opportunities.edit',compact('title','dt'));
    }


}
