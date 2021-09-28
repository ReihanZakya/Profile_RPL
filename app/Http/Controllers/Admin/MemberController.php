<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $title = 'Anggota';
        $data = Member::orderBy('member_name','asc')->get();

        return view('admin.member.index',compact('title','data'));
    }

    public function add()
    {
        $title = 'Tambah Anggota';

        return view('admin.member.add',compact('title'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'member_name' => 'required|min:3|unique:members,member_name'
        ],
        [
            'member_name.required' => 'Inputan nama tidak boleh kosong',
            'member_name.min' => 'Inputan Minimal 3 karakter',
            'member_name.unique' => 'Inputan nama sudah tersedia',
        ]);

        Member::create([
            'member_name' => $request->member_name
        ]);

        return redirect('member')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $title = 'Edit Anggota';
        $dt = Member::findOrFail($id);

        return view('admin.member.edit',compact('title','dt'));
    }

    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'member_name' => 'required|min:3|unique:members,member_name,' .$id
        ],
        [
            'member_name.required' => 'Inputan nama tidak boleh kosong',
            'member_name.min' => 'Inputan Minimal 3 karakter',
            'member_name.unique' => 'Inputan nama sudah tersedia',
        ]);

        Member::findOrFail($id)->update([
            'member_name' => $request->member_name
        ]);

        return redirect('member')->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id)
    {
        try {
            Member::findOrFail($id)->delete();
            return redirect('member')->with('success', 'Data Berhasil hapus');
            }
            catch(\Exception $e) {
            echo 'Message: ' .$e->getMessage();
            return redirect('member')->with('error', 'Data tidak bisa dihapus karena sudah terdaftar Anggota Portofolio');
            }
    }
}
