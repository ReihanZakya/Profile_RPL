<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\portfolios;

class PortfolioController extends Controller
{
    public function index()
    {
        $title = 'Portofolio';
        $data = portfolios::get();

        return view('admin.portfolio.index',compact('title','data'));
    }

    public function add()
    {
        $title = 'Tambah Portofolio';

        return view('admin.portfolio.add',compact('title'));
    }

    public function store(Request $request)
    {
        $file = $request->file('photo');
        $path = 'AdminLTE\portfolio';

       if ($file) {
        $file->move($path,$file->getClientOriginalName());
        portfolios::create([
            'name' => $request->name,
            'source' => $request->source,
            'photo' => $file->getClientOriginalName()
        ]);
       }else{
        portfolios::create([
            'name' => $request->name,
            'source' => $request->source,
        ]);

       }
        return redirect('portfolio');
    }

    public function edit($id)
    {
        $title = 'Edit Portofolio';
        $dt = portfolios::findOrFail($id);

        return view('admin.portfolio.edit',compact('title','dt'));
    }

    public function update(Request $request,$id)
    {
        $file = $request->file('photo');
        $path = 'AdminLTE\portfolio';

        if ($file) {
            $file->move($path,$file->getClientOriginalName());
            portfolios::findOrFail($id)->update([
                'name' => $request->name,
                'source' => $request->source,
                'photo' => $file->getClientOriginalName()
            ]);
           }else{
            portfolios::findOrFail($id)->update([
                'name' => $request->name,
                'source' => $request->source,
            ]);

           }

           return redirect('portfolio');
    }
}
