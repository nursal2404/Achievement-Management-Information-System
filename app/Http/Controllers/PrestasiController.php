<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use App\Models\Lomba;
use Illuminate\Http\Request;
use PDF;
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
        $request->validate([
            'addMoreInputFields.*.name' => 'required',
            'addMoreInputFields.*.npm' => 'required',
            'addMoreInputFields.*.jurusan' => 'required',
            'lomba' => 'required',
            'juara' => 'required',
            'penyelenggara' => 'required',
            'tingkat' => 'required',
            'date' => 'required',
    
        ], [
            'addMoreInputFields.*.name.required' => 'Nama harus diisi',
            'addMoreInputFields.*.npm.required' => 'NPM harus diisi',
            'addMoreInputFields.*.jurusan.required' => 'Jurusan harus diisi',
            'lomba.required' => 'Lomba harus diisi',
            'juara.required' => 'Prestasi harus diisi',
            'penyelenggara.required' => 'Penyelenggara harus diisi',
            'tingkat.required' => 'Tingkat harus diisi',
            'date.required' => 'Tanggal harus diisi',
        ]);
        // dd($nama_team);

        $nama_team = [];
        $npm_team = [];
        $jurusan_team = [];
        
        // dd($request->all());
        
        foreach ($request->addMoreInputFields as $value) {
            array_push($nama_team, $value['name']);
            array_push($npm_team, $value['npm']);
            array_push($jurusan_team, $value['jurusan']);
        }

        Prestasi::create([
            'name' => implode(' & ', $nama_team),
            'npm' => implode(' & ', $npm_team),
            'jurusan' => implode(' & ', $jurusan_team),
            'juara' => $request->juara,
            'lomba' => $request->lomba,
            'penyelenggara' => $request->penyelenggara,
            'tingkat' => $request->tingkat,
            'tanggal' => $request->date,
        ]);

        return redirect()->route('prestasi')->with('sukses','Data berhasil ditambahkan');;
    }

    public function admin_edit_prestasi($id)
    {
        $kejuaraan = Prestasi::find($id);
        // Memisah String jadi array
        $nama_team = explode("&", $kejuaraan->name);
        $npm_team = explode("&", $kejuaraan->npm);
        $jurusan_team = explode("&", $kejuaraan->jurusan);
        
        
        $mahasiswa = array('nama' => $nama_team, 'npm' => $npm_team, 'jurusan' => $jurusan_team);
  
        return view('admin.edit_prestasi', compact(['kejuaraan','nama_team', 'npm_team', 'jurusan_team', 'mahasiswa']) , [
            "title" => 'Manajemen Prestasi'
        ]);
    }

    public function admin_update_prestasi(Request $request, $id)
    {
        $kejuaraan = Prestasi::find($id);

        $validasi = $request->validate([
            'addMoreInputFields.*name' => 'required',
            'addMoreInputFields.*.npm' => 'required',
            'addMoreInputFields.*.jurusan' => 'required',
            'lomba' => 'required',
            'juara' => 'required',
            'penyelenggara' => 'required',
            'tingkat' => 'required',
            'date' => 'required',
        ], [
            'addMoreInputFields.*.name.required' => 'Nama harus diisi',
            'addMoreInputFields.*.npm.required' => 'NPM harus diisi',
            'addMoreInputFields.*.jurusan.required' => 'Jurusan harus diisi',
            'lomba.required' => 'Lomba harus diisi',
            'juara.required' => 'Prestasi harus diisi',
            'penyelenggara.required' => 'Penyelenggara harus diisi',
            'tingkat.required' => 'Tingkat harus diisi',
            'date.required' => 'Tanggal harus diisi',
        ]);

        $nama_team = [];
        $npm_team = [];
        $jurusan_team = [];
                
        foreach ($request->addMoreInputFields as $value) {
            array_push($nama_team, $value['name']);
            array_push($npm_team, $value['npm']);
            array_push($jurusan_team, $value['jurusan']);
        }
        // dd($nama_team);
        
        $cek = [
                'name' => implode(' & ', $nama_team),
                'npm' => implode(' & ', $npm_team),
                'jurusan' => implode(' & ', $jurusan_team),
                'juara' => $request['juara'],
                'lomba' => $request['lomba'],
                'penyelenggara' => $request['penyelenggara'],
                'tingkat' => $request['tingkat'],
                'tanggal' => $request['date'],
            ];


        if($kejuaraan->update($cek)){
            $kejuaraan->save();
        }

        return redirect()->route('prestasi')->with('sukses','Data berhasil diedit');
    }

    public function admin_delete_prestasi($id){
        $data = Prestasi::find($id);
        $data->delete();
        return redirect()->route('prestasi')->with('sukses','Data berhasil dihapus');
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
            return redirect()->route('lomba')->with('sukses','Prestasi dikonfirmasi');
    }
    
    public function download(){
        $kejuaraan = Prestasi::all();
        return view('data_prestasi_pdf', compact(['kejuaraan']));
        // $pdf = PDF::loadview('data_prestasi_pdf' , compact(['kejuaraan']));
        // $pdf->setPaper('landscape');
        // return $pdf->stream('Data-Prestasi.pdf');
    }
 // End Route Admin

 public function user_download(){
    $kejuaraan = Prestasi::where("name", 'like', "%" . Auth::user()->name . "%")->get();
    return view('data_prestasi_pdf', compact(['kejuaraan']));
    // $pdf = PDF::loadview('data_prestasi_pdf' , compact(['kejuaraan']));
    // $pdf->setPaper('A4', 'potrait');
    // return $pdf->download('Data-Prestasi.pdf');
}
 
         
}


