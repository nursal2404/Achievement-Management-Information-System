<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.berita', compact(['posts']) , [
            "title" => 'Manajemen Berita'
        ]);
    }

    public function add_berita()
    {
        return view('admin.add_berita' , [
            "title" => 'Manajemen Berita'
        ]);
    }

    public function create(Request $request)
    {
        $validasi = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'deskripsi' => 'required',
            'photo' => 'required|mimes:png,jpeg,jpg',
        ]);

        $namafile = $request->photo->getClientOriginalName();
        $request->photo->move('file_berita/' , $namafile);
        
        Post::create(
            [
                'title' => $request->title,
                'body' => $request->body,
                'deskripsi' => $request->deskripsi,
                'photo' => 'file_berita/' . $namafile,
            ]
        );
        return redirect()->route('berita')->with('sukses','Berita Berhasil Dibuat');
    }

    public function show()
    {
        $posts = Post::latest()->paginate(4);
        return view('landingpage.postingan' , compact(['posts']),[
            "title" => 'Berita'
        ]);
    }

    public function show_detail($id)
    {
        $posts = Post::find($id);
        return view('landingpage.detail_postingan' , compact(['posts']),[
            "title" => 'Berita'
        ]);
    }

    public function edit($id)
    {
        $posts = Post::find($id);
        return view('admin.edit_berita', compact(['posts']) , [
            "title" => 'Manajemen Berita'
        ]);
    }

    public function update(Request $request, $id)
    {
        $posts = Post::find($id);

        if( $request->file('photo') == ""){
            
            $cek = [
            'title' => $request['title'],
            'body' => $request['body'],
            'deskripsi' => $request['deskripsi'],
            'photo' => $request['photo'],
            ];
        }
        else
        {
            $file = $posts->photo;
            File::delete($file);

            $perubahan = $request->photo;

            $namafile = $perubahan->getClientOriginalName();
            $perubahan->move('file_berita/', $namafile);

            $cek = [
                'title' => $request['title'],
                'body' => $request['body'],
                'deskripsi' => $request['deskripsi'],
                'photo' => 'file_berita/' . $namafile,
                ];
        }

        if($posts->update($cek)){
            $posts->save();
        }
        // $posts->update($request->all());
        return redirect()->route('berita')->with('sukses','Berita Berhasil Diedit');
    }

    public function destroy($id)
    {
        $posts = Post::find($id);
        File::delete($posts->photo);
        $posts->delete();
        return redirect()->route('berita')->with('sukses','Berita Berhasil Dihapus');
    }
}
