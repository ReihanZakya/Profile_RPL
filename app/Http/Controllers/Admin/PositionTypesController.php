<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PositionTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PositionTypesController extends Controller
{
    public function index()
    {
        $title = 'Jenis Posisi';
        $data = PositionTypes::get();

        return view('admin.position_types.index',compact('title','data'));
    }

    public function add()
    {
        $title = 'Tambah Jenis Posisi';
        $unique = DB::table('position_types')
                    ->select('is_unique')
                    ->count();

        $unique1 = DB::table('position_types')
                    ->select('is_unique')
                    ->where('is_unique',1)
                    ->count();
                    // dd($unique1);

        return view('admin.position_types.add',compact('title','unique','unique1'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:3|unique:position_types,name',
        ],
        [
            'name.required' => 'Inputan nama tidak boleh kosong',
            'name.min' => 'Inputan minimal 3 karakter',
            'name.unique' => 'Inputan jenis posisi sudah tersedia',
        ]);
        $data = new PositionTypes;

       if ($request->is_unique == null) {
           $data->is_unique = '0';
           $data->name = $request->name;
       }else{
            $data->is_unique = $request->is_unique;
            $data->name = $request->name;
       }
        $data->save();

        return redirect('position_types')->with('success', 'Data Berhasil Ditambah');
    }

    public function edit($id)
    {
        $title = 'Edit Jenis Posisi';
        $dt = PositionTypes::findOrFail($id);
        $unique1 = DB::table('position_types')
                    ->select('is_unique')
                    ->where('is_unique',1)
                    ->count();

        return view('admin.position_types.edit',compact('title','dt','unique1'));
    }

    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'name' => 'required|min:3|unique:position_types,name,' .$id
        ],
        [
            'name.required' => 'Inputan nama tidak boleh kosong',
            'name.min' => 'Inputan minimal 3 karakter',
            'name.unique' => 'Inputan jenis posisi sudah tersedia',
        ]);
       
       $data = PositionTypes::findOrFail($id);

       if ($request->is_unique == null) {
           $data->is_unique = $data->is_unique;
           $data->name = $request->name;
       }else{
            $data->is_unique = $request->is_unique;
            $data->name = $request->name;
       }
        $data->save();
        return redirect('position_types')->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id)
    {
        PositionTypes::findOrFail($id)->delete();
       return redirect('position_types')->with('success', 'Data Berhasil Dihapus');
    }
}
