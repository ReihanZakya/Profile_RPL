<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $title = 'Berita';
        $data = News::get();

        return view('admin.news.index',compact('title','data'));
    }

    public function add()
    {
        $title = 'Tambah Berita';

        return view('admin.news.add',compact('title'));
    }

    public function store(Request $request)
    {
        $file = $request->file('photo');

        $path = 'AdminLTE\news';
        $file->move($path,$file->getClientOriginalName());

        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'photo' => $file->getClientOriginalName()
        ]);

        return redirect('news');
    }

    public function edit($id)
    {
        $title = 'Edit Berita';

        return view('admin.news.edit',compact('title'));
    }
}
