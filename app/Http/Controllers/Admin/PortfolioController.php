<?php

namespace App\Http\Controllers\Admin;

use App\Group;
use App\Http\Controllers\Controller;
use App\Member;
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
        $member = Member::where('unique',null)->get();

        return view('admin.portfolio.add',compact('title','member'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'photo' => 'image',
            'member_id' => 'required',
        ],
        [
            'name.required' => 'Inputan nama wajib diisi',
            'member_id.required' => 'Inputan anggota wajib diisi'
        ]);

        $name = $request->name;
        $source = $request->source;
        $member = $request->member_id;
        $file = $request->file('photo');
        $path = 'AdminLTE\portfolio';
        if ($file) {
            $file->move($path,$file->getClientOriginalName());
        foreach ($member as $key => $value) {
            $dt_member = Member::where('id',$member[$key])->first();

            Portfolio::insert([
                'name' => $name,
                'member_id' => $member[$key],
                'photo' => $file->getClientOriginalName(),
                'source' => $source,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            Member::where('id',$member[$key])->update([
                'unique' => 1
            ]);
        }
    }else{
        foreach ($member as $key => $value) {
            $dt_member = Member::where('id',$member[$key])->first();

            Portfolio::insert([
                'name' => $name,
                'member_id' => $member[$key],
                'source' => $source,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            Member::where('id',$member[$key])->update([
                'unique' => 1
            ]);
        }
    }
        return redirect('portfolio')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $title = 'Edit Portofolio';
        $dt = Portfolio::findOrFail($id);
        $member = Member::get();
        $hidden = Portfolio::join('members','members.id','=','portfolios.member_id')
        ->select('portfolios.member_id')
        ->find($id);

        return view('admin.portfolio.edit',compact('title','dt','hidden','member'));
    }

    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'member_id' => 'required|unique:portfolios,member_id,' .$id,
            'photo' => 'image'
        ],
        [
            'name.required' => 'Inputan nama wajib diisi',
            'member_id.unique' => 'Inputan nama sudah tersedia',
        ]);

        $name = $request->name;
        $source = $request->source;
        $member = $request->member_id;
        $file = $request->file('photo');
        $path = 'AdminLTE\portfolio';
        $old = $request->old_member_id;

        if ($file) {
            $file->move($path,$file->getClientOriginalName());
            Portfolio::findOrFail($id)->update([
                'name' => $name,
                'member_id' => $member,
                'photo' => $file->getClientOriginalName(),
                'source' => $source,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            if ($request->member_id) {
                if ($request->old_member_id) {
                   Member::where('id',$old)->update([
                       'unique' => null
                   ]);
                }
                    Member::where('id',$member)->update([
                        'unique' => 1
                    ]);
            }

            }else{
                Portfolio::findOrFail($id)->update([
                    'name' => $name,
                    'member_id' => $member,
                    'source' => $source,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);

                if ($request->member_id) {
                    if ($request->old_member_id) {
                    Member::where('id',$old)->update([
                        'unique' => null
                    ]);
                    }
                        Member::where('id',$member)->update([
                            'unique' => 1
                        ]);
            }
        }
            return redirect('portfolio')->with('success', 'Data Berhasi Diupdate');
    }

    public function delete($id)
    {
        $portfolio = Portfolio::with('member')->find($id);
        // dd($teacher_subject);
        $portfolio->member()->update([
            'unique' => null
        ]);

        Portfolio::findOrFail($id)->delete();
        return redirect('portfolio')->with('success', 'Data Berhasil Dihapus');
    }
}
