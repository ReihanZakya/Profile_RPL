<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function index()
    {
        $title = 'Portofolio';
        $data = Portfolio::orderBy('name','asc')->get();

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
            'name' => 'required|unique:portfolios,name',
            'photo' => 'required|image',
        ],
        [
            'name.required' => 'Inputan nama wajib diisi',
            'name.unique' => 'Inputan nama sudah ada',
        ]);

        $file = $request->file('photo');
        $path = 'AdminLTE\portfolio';
            $file->move($path,$file->getClientOriginalName());
            Portfolio::create([
                'name' => $request->name,
                'photo' => $file->getClientOriginalName(),
                'source' => $request->source
            ]);

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
            'name' => 'required',
            'photo' => 'image'
        ],
        [
            'name.required' => 'Inputan nama wajib diisi',
            'member_id.unique' => 'Inputan nama sudah tersedia',
        ]);

        $file = $request->file('photo');
        $path = 'AdminLTE\portfolio';
        $dt = Portfolio::findOrFail($id);

        if ($request->file('photo')) {
            if ($request->old_photo) {
               File::delete('AdminLTE/portfolio/'.$request->old_photo);
            }
            $file->move($path,$file->getClientOriginalName());
            $photo = $file->getClientOriginalName();
        }else{
            $photo = $dt->photo;
        }

        $dt->name = $request->name;
        $dt->photo = $photo;
        $dt->source = $request->source;
        $dt->save();

        return redirect('portfolio')->with('success', 'Data Berhasi Diupdate');
    }

    public function delete($id)
    {
        $dt = Portfolio::findOrFail($id);
        File::delete('AdminLTE/portfolio/'.$dt->photo);
        $dt->delete();
        return redirect('portfolio')->with('success', 'Data Berhasil Dihapus');
    }
}
