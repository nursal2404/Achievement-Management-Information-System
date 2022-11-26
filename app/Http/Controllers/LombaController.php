<?php

namespace App\Http\Controllers;
use App\Models\Lomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LombaController extends Controller
{   
    public function lomba()
    {
        $lomba = Lomba::all();
        return view('admin.lomba', compact(['lomba']));
    }

    public function add()
    {
        return view('admin.add_lomba');
    }

    public function add_proses_admin(Request $request)
    {
        Lomba::create([
            'name' => $request->name,
            'npm' => $request->npm,
            'jurusan' => $request->jurusan,
            'lomba' => $request->lomba,
            'penyelenggara' => $request->penyelenggara,
            'tingkat' => $request->tingkat,
            'tanggal' => $request->date,
        ]);
        return redirect()->route('lomba')->with('sukses','Lomba Berhasil Didaftarkan');;
    }

    public function add_proses_user(Request $request)
    {
        Lomba::create([
            'name' => Auth::user()->name,
            'npm' => Auth::user()->username,
            'jurusan' => $request->jurusan,
            'lomba' => $request->lomba,
            'penyelenggara' => $request->penyelenggara,
            'tingkat' => $request->tingkat,
            'tanggal' => $request->date,
        ]);
        return redirect()->route('user_lomba')->with('sukses','Lomba Berhasil Didaftarkan');;
    }

    public function user_delete($id){
        $data = Lomba::find($id);
        $data->delete();
        return redirect()->route('user_lomba')->with('sukses','Data Berhasil Dihapus');
    }

    public function admin_delete($id){
        $data = Lomba::find($id);
        $data->delete();
        return redirect()->route('lomba')->with('sukses','Data Berhasil Dihapus');
    }
}
