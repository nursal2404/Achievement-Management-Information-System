<?php

namespace App\Http\Controllers;
use DB;
use App\Models\User;
use App\Models\Lomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            "title" => 'Dasboard'
        ]);
    }

    public function profil()
    {
        return view('admin.profil' , [
            "title" => 'Profil'
        ]);
    }

    public function mahasiswa(Request $request)
    {           
        $items = User::where('level', 'user')->get();
        // dd($items);
        return view('admin.mahasiswa', compact(['items']) , [
            "title" => 'Manajemen Mahasiswa'
        ]);
    }

    public function add_mahasiswa(){
        return view('admin.add_mahasiswa' , [
            "title" => 'Manajemen Mahasiswa'
        ]);
    }

    public function create_mahasiswa(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'jurusan' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required|min:6|max:10',
        ]);

        User::create([
            'name' => $request->name,
            'jurusan' => $request->jurusan,
            'gender' => $request->gender,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('mahasiswa')->with('sukses','Data Berhasil Ditambahkan');
    }

    public function edit_mahasiswa($id)
    {
        $mahasiswa = User::find($id);
        return view('admin.edit_mahasiswa', compact('mahasiswa') , [
            "title" => 'Manajemen Mahasiswa'
        ]);
    }

    public function update_mahasiswa(Request $request, $id)
    {
        $items = User::find($id);
        $lomba = Lomba::where('npm', $items['username'])->get();

        $items->update($request->all());

        foreach ($lomba as $key => $value) {
            $lomba[$key]->update([
                'jurusan' => $request->jurusan,
            ]);
        }

        return redirect()->route('mahasiswa')->with('sukses','Data Berhasil DiEdit');
    }
    
    public function delete_mahasiswa($id){
        $data = User::find($id);
        $lomba = null;

        if (Lomba::where('npm', $data['username'])->first() != null) {
            $lomba = Lomba::where('npm', $data['username'])->first();
            $lomba->delete();
        }

        $data->delete();

        return redirect()->route('mahasiswa')->with('sukses','Data Berhasil Dihapus');
    }
   
    public function add_berita(){
        return view ('tambahkan_berita' , [
            "title" => 'Manajemen Berita'
        ]);
    }

}

