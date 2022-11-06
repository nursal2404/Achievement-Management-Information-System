<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Prestasi;
class PrestasiController extends Controller
{
    public function index()
    {
        $kejuaraan = DB::table('prestasis')->get();
        return view('manajemen.prestasi', compact(['kejuaraan']));
    }

    public function add()
    {
        return view('manajemen.add_prestasi');
    }

    public function add_proses(Request $request)
    {
        Prestasi::create([
            'name' => $request->name,
            'npm' => $request->npm,
            'jurusan' => $request->jurusan,
            'juara' => $request->juara,
            'lomba' => $request->lomba,
            'penyelenggara' => $request->penyelenggara,
            'tingkat' => $request->tingkat,
            'tanggal' => $request->date,
        ]);
        return redirect()->route('prestasi')->with('sukses','Data Berhasil Ditambahkan');;
    }

    public function delete($id){
        $data = Prestasi::find($id);
        $data->delete();
        return redirect()->route('prestasi')->with('sukses','Data Berhasil Dihapus');
    }

    public function edit($id)
    {
        $kejuaraan = DB::table('prestasis')->get();
        return view('manajemen.edit_prestasi', compact(['kejuaraan']));
    }
}
