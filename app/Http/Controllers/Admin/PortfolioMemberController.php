<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Member;
use App\Portfolio;
use App\PortfolioMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioMemberController extends Controller
{
    public function index()
    {
        $title = 'Anggota Portfolio';
        $data = DB::table('portfolio_members')
                                ->join('members','members.id','=','portfolio_members.member_id')
                                ->join('portfolios','portfolios.id','=','portfolio_members.portfolio_id')
                                ->select('portfolio_members.id as pm','portfolios.*','members.*')
                                ->orderBy('name','asc')
                                ->get();
        $jb = PortfolioMember::get();

        return view('admin.portfolio_member.index',compact('title','data','jb'));
    }

    public function add()
    {
        $title = 'Tambah Anggota Portofolio';
        $member = Member::leftjoin('portfolio_members','portfolio_members.member_id','=','members.id')
                        ->select('portfolio_members.member_id','members.*')
                        ->where('portfolio_members.member_id',NULL)
                        ->get();
        $portfolio = Portfolio::get();

        return view('admin.portfolio_member.add',compact('title','member','portfolio'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'portfolio_id' => 'required',
            'member_id' => 'required',
        ],
        [
            'portfolio_id.required' => 'Inputan portofolio wajib diisi',
            'member_id.required' => 'Inputan anggota wajib diisi',
        ]);

        $portfolio = $request->portfolio_id;
        $member = $request->member_id;

        foreach ($member as $key => $value) {
            $pm = new PortfolioMember();
            $pm->portfolio_id = $portfolio;
            $pm->member_id = $member[$key];
            $pm->save();
        }

        return redirect('portfolio_member')->with('success','Data berhasil ditambahkan');

    }

    public function edit($id)
    {
        $title = 'Edit Anggota Portofolio';
        $dt = PortfolioMember::findOrFail($id);
        $portfolio = Portfolio::orderBy('name','asc')->get();
        $member = Member::orderBy('member_name','asc')->get();

        return view('admin.portfolio_member.edit',compact('title','dt','portfolio','member'));
    }

    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'portfolio_id' => 'required',
            'member_id' => 'required|unique:portfolio_members,member_id,' .$id
        ],
        [
            'portfolio_id.required' => 'Inputan portofolio wajib diisi',
            'member_id.required' => 'Inputan anggota wajib diisi',
            'member_id.unique' => 'Inputan anggota sudah ada'
        ]);
        PortfolioMember::findOrFail($id)->update([
            'portfolio_id' => $request->portfolio_id,
            'member_id' => $request->member_id,
        ]);

        return redirect('portfolio_member')->with('success','Data berhasil diubah');
    }

    public function delete($id)
    {
        PortfolioMember::findOrFail($id)->delete();
        return redirect('portfolio_member')->with('success','Data berhasil dihapus');
    }
}

