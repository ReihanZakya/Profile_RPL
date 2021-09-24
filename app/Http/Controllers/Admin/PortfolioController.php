<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $title = 'Portofolio';
        $data = Portfolio::get();

        return view('admin.portfolio.index',compact('title','data'));
    }

    public function add()
    {
        $title = 'Tambah Portofolio';

        return view('admin.portfolio.add',compact('title'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:3|unique:portfolios,name',
            'source' => 'required',
            'photo' => 'image'
        ],
        [
            'name.required' => 'Inputan nama wajib diisi',
            'name.min' => 'Inputan Nama Minimal 3 karakter',
            'name.unique' => 'Inputan nama sudah tersedia',
            'source.required' => 'Inputan sumber wajib diisi'
        ]);

        $file = $request->file('photo');
        $path = 'AdminLTE\portfolio';

       if ($file) {
        $file->move($path,$file->getClientOriginalName());
        Portfolio::create([
            'name' => $request->name,
            'source' => $request->source,
            'photo' => $file->getClientOriginalName()
        ]);
       }else{
        Portfolio::create([
            'name' => $request->name,
            'source' => $request->source,
        ]);

       }
        return redirect('portfolio')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $title = 'Edit Portofolio';
        $dt = Portfolio::findOrFail($id);

        return view('admin.portfolio.edit',compact('title','dt'));
    }

    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'name' => 'required|min:3|unique:portfolios,name,' .$id,
            'source' => 'required',
            'photo' => 'image'
        ],
        [
            'name.required' => 'Inputan nama wajib diisi',
            'name.min' => 'Inputan Nama Minimal 3 karakter',
            'name.unique' => 'Inputan nama sudah tersedia',
            'source.required' => 'Inputan sumber wajib diisi'
        ]);

        $file = $request->file('photo');
        $path = 'AdminLTE\portfolio';

        if ($file) {
            $file->move($path,$file->getClientOriginalName());
            Portfolio::findOrFail($id)->update([
                'name' => $request->name,
                'source' => $request->source,
                'photo' => $file->getClientOriginalName()
            ]);
           }else{
            Portfolio::findOrFail($id)->update([
                'name' => $request->name,
                'source' => $request->source,
            ]);

           }

           return redirect('portfolio')->with('success', 'Data Berhasil Diedit');
    }
    public function delete($id)
    {
        Portfolio::findOrFail($id)->delete();

        return redirect('portfolio')->with('success', 'Data Berhasil Didelete');
    }
}
