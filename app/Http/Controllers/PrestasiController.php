<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use App\Models\Lomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrestasiController extends Controller
{
// Route Admin
    public function index()
    {  
        $kejuaraan = Prestasi::sortable()->get();
        return view('admin.prestasi', compact(['kejuaraan']) , [
            "title" => 'Manajemen Prestasi'
        ]);
    }

    public function admin_add_prestasi()
    {
        return view('admin.add_prestasi' , [
            "title" => 'Manajemen Prestasi'
        ]);
    }

    public function admin_create_prestasi(Request $request)
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

    public function admin_edit_prestasi($id)
    {
        $kejuaraan = Prestasi::find($id);
        return view('admin.edit_prestasi', compact(['kejuaraan']) , [
            "title" => 'Manajemen Prestasi'
        ]);
    }

    public function admin_update_prestasi(Request $request, $id)
    {
        $kejuaraan = Prestasi::find($id);
        $kejuaraan->update($request->all());
        return redirect()->route('prestasi')->with('sukses','Data Berhasil Diedit');
    }

    public function admin_delete_prestasi($id){
        $data = Prestasi::find($id);
        $data->delete();
        return redirect()->route('prestasi')->with('sukses','Data Berhasil Dihapus');
    }

    
  
    public function perolehan_prestasi($id)
    {
        $lomba = Lomba::find($id);
        return view('admin.perolehan_prestasi',compact(['lomba']) , [
            "title" => 'Manajemen Lomba'
        ]);
    }

    public function konfirmasi_lomba(Request $request, $id){
        $lomba = Lomba::find($id);        
        Prestasi::create(
             [
                'name' => $lomba->name,
                'npm' => $lomba->npm,
                'jurusan' => $lomba->jurusan,
                'juara' => $request->juara,
                'lomba' => $lomba->lomba,
                'penyelenggara' => $lomba->penyelenggara,
                'tingkat' => $lomba->tingkat,
                'tanggal' => $lomba->tanggal,
             ]
        );
            return redirect()->route('lomba')->with('sukses','Prestasi Dikonfirmasi');
    } 
 // End Route Admin
         
}


