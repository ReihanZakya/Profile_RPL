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
        $validate = $request->validate([
            'title' => 'required|min:3|unique:news,title',
            'content' => 'required|min:10',
            'photo' => 'image'
        ],
        [
            'title.required' => 'Inputan nama tidak boleh kosong',
            'title.min' => 'Inputan Minimal 3 karakter',
            'title.unique' => 'Inputan judul sudah tersedia',
            'content.required' => 'Inputan konten wajib diisi',
            'content.min' => 'Inputan minimal 10 karakter',
        ]);

        $file = $request->file('photo');
        $path = 'AdminLTE\news';

       if ($file) {
        $file->move($path,$file->getClientOriginalName());
        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'photo' => $file->getClientOriginalName()
        ]);
       }else{
        News::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

       }
        return redirect('news');
    }

    public function edit($id)
    {
        $title = 'Edit Berita';
        $dt = News::findOrFail($id);

        return view('admin.news.edit',compact('title','dt'));
    }

    public function update(Request $request,$id)
    {
        $validate = $request->validate([
            'title' => 'required|min:3|unique:news,title,' .$id,
            'content' => 'required|min:10',
            'photo' => 'image'
        ],
        [
            'title.required' => 'Inputan nama tidak boleh kosong',
            'title.min' => 'Inputan Minimal 3 karakter',
            'title.unique' => 'Inputan judul sudah tersedia',
            'content.required' => 'Inputan konten wajib diisi',
            'content.min' => 'Inputan minimal 10 karakter',
        ]);

        $file = $request->file('photo');
        $path = 'AdminLTE\news';

       if ($file) {
        $file->move($path,$file->getClientOriginalName());
        News::findOrFail($id)->update([
            'title' => $request->title,
            'content' => $request->content,
            'photo' => $file->getClientOriginalName()
        ]);
       }else{
        News::findOrFail($id)->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

       }
        return redirect('news');
    }

    public function delete($id)
    {
        News::findOrFail($id)->delete();

        return redirect('news');
    }
}
