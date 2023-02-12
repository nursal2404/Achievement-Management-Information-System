<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Lomba;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class LombaController extends Controller
{

// Route Admin
    public function lomba()
    {
        $lomba = Lomba::all();
        return view('admin.lomba', compact(['lomba']) , [
            "title" => 'Manajemen Lomba'
        ]);
    }

    public function admin_add_lomba()
    {
        return view('admin.add_lomba' ,[
            "title" => 'Manajemen Lomba'
        ]);
    }

    public function admin_create_lomba(Request $request)
    {
        $validasi = $request->validate([
            'addMoreInputFields.*.name' => 'required',
            'addMoreInputFields.*.npm' => 'required',
            'addMoreInputFields.*.jurusan' => 'required',
            'lomba' => 'required',
            'penyelenggara' => 'required',
            'tingkat' => 'required',
            'date' => 'required',
            'sertifikat'  => 'required|mimes:png,pdf',
        ],[
            'addMoreInputFields.*.name.required' => 'Nama harus diisi',
            'addMoreInputFields.*.npm.required' => 'NPM harus diisi',
            'addMoreInputFields.*.jurusan.required' => 'Jurusan harus diisi',
            'lomba.required' => 'Lomba harus diisi',
            'penyelenggara.required' => 'Penyelenggara harus diisi',
            'tingkat.required' => 'Tingkat harus diisi',
            'date.required' => 'Tanggal harus diisi',
            'sertifikat.required' => 'Sertifikat harus diisi',
        ]);

        $namafile = time() . '_' . $request->name . '_' . $request->sertifikat->getClientOriginalName();
        $request->sertifikat->move('sertifikat/', $namafile);

        $nama_team = [];
        $npm_team = [];
        $jurusan_team = [];

        foreach ($request->addMoreInputFields as $value) {
            array_push($nama_team, $value['name']);
            array_push($npm_team, $value['npm']);
            array_push($jurusan_team, $value['jurusan']);
        }

        Lomba::create([
            'user_id' => Auth::user()->username,
            'name' => implode(' & ', $nama_team),
            'npm' => implode(' & ', $npm_team),
            'jurusan' => implode(' & ', $jurusan_team),
            'lomba' => $request->lomba,
            'penyelenggara' => $request->penyelenggara,
            'tingkat' => $request->tingkat,
            'tanggal' => $request->date,
            'sertifikat'=> 'sertifikat/' . $namafile,
        ]);
        return redirect()->route('lomba')->with('sukses','Lomba berhasil didaftarkan');;
    }

    public function admin_edit_lomba($id){
        $lomba = Lomba::find($id);
        // Memisah String jadi array
        $nama_team = explode("&", $lomba->name);
        $npm_team = explode("&", $lomba->npm);
        $jurusan_team = explode("&", $lomba->jurusan);
  
        $mahasiswa = array('nama' => $nama_team, 'npm' => $npm_team, 'jurusan' => $jurusan_team);
        return view('admin.edit_lomba', compact(['lomba','nama_team', 'npm_team', 'jurusan_team', 'mahasiswa']) , [
            "title" => 'Manajemen Lomba'
        ]);
    }    

    public function admin_update_lomba(Request $request, $id)
    {
        $lomba = Lomba::find($id);

        $validasi = $request->validate([
            'addMoreInputFields.*name' => 'required',
            'addMoreInputFields.*.npm' => 'required',
            'addMoreInputFields.*.jurusan' => 'required',
            'lomba' => 'required',
            'penyelenggara' => 'required',
            'tingkat' => 'required',
            'date' => 'required',
            'sertifikat'  => 'required|mimes:png,pdf',
        ],[
            'addMoreInputFields.*.name.required' => 'Nama harus diisi',
            'addMoreInputFields.*.npm.required' => 'NPM harus diisi',
            'addMoreInputFields.*.jurusan.required' => 'Jurusan harus diisi',
            'lomba.required' => 'Lomba harus diisi',
            'penyelenggara.required' => 'Penyelenggara harus diisi',
            'tingkat.required' => 'Tingkat harus diisi',
            'date.required' => 'Tanggal harus diisi',
            'sertifikat.required' => 'Sertifikat harus diisi',
        ]);
        
        // Ambil File Kemudian Hapus
        $file = $lomba->sertifikat;
        // Impor Illuminate\Support\Facades\File
        File::delete($file);
        // 

        $perubahan = $request->sertifikat;

        $namafile = time() . '_' . $request->name . '_' . $perubahan->getClientOriginalName();
        $perubahan->move('sertifikat/', $namafile);

        $nama_team = [];
        $npm_team = [];
        $jurusan_team = [];

        foreach ($request->addMoreInputFields as $value) {
            array_push($nama_team, $value['name']);
            array_push($npm_team, $value['npm']);
            array_push($jurusan_team, $value['jurusan']);
        }
        
        $cek = [
            'user_id' => Auth::user()->username,
            'name' => implode(' & ', $nama_team),
            'npm' => implode(' & ', $npm_team),
            'jurusan' => implode(' & ', $jurusan_team),
            'lomba' => $request['lomba'],
            'penyelenggara' => $request['penyelenggara'],
            'tingkat' => $request['tingkat'],
            'tanggal' => $request['date'],
            'sertifikat' => 'sertifikat/' . $namafile,
        ];

        if($lomba->update($cek)){
            $lomba->save();
        }
        return redirect()->route('lomba')->with('sukses','Data berhasil diedit');
    }

    public function admin_delete_lomba($id){
        $lomba = Lomba::find($id);

        $kejuaraan = null;

        if (Prestasi::where('lomba', $lomba['lomba'])
                    ->where('name', $lomba['name'])->first() != null) {
            $kejuaraan = Prestasi::where('lomba', $lomba['lomba'])->
                                   where('name', $lomba['name'])->first();

            $kejuaraan->delete();
        }

        File::delete($lomba->sertifikat);
        $lomba->delete();
        return redirect()->route('lomba')->with('sukses','Data berhasil dihapus');
    }
// End Route Admin


//Route Mahasiswa 
    public function user_create_lomba(Request $request)
    {
        $validasi = $request->validate([
            'lomba' => 'required',
            'penyelenggara' => 'required',
            'tingkat' => 'required',
            'date' => 'required',
            'sertifikat'  => 'required|mimes:png,pdf',
        ],[
            'lomba.required' => 'Lomba harus diisi',
            'penyelenggara.required' => 'Penyelenggara harus diisi',
            'tingkat.required' => 'Tingkat harus diisi',
            'date.required' => 'Tanggal harus diisi',
            'sertifikat.required' => 'Sertifikat harus diisi',
        ]);

        $namafile = time() . '_' . Auth::user()->name . '_' . $request->sertifikat->getClientOriginalName();
        $request->sertifikat->move('sertifikat/', $namafile);

        $nama_team = [];
        $npm_team = [];
        $jurusan_team = [];

         // Jika $request->addMoreInputFields tidak 0
        if (!(is_null($request->addMoreInputFields))){
            foreach ($request->addMoreInputFields as $value) {
                array_push($nama_team, $value['name']);
                array_push($npm_team, $value['npm']);
                array_push($jurusan_team, $value['jurusan']);
            }
            Lomba::create([
                'user_id' => Auth::user()->username,
                'name' => Auth::user()->name . ' & '.implode(' & ', $nama_team),
                'npm' => Auth::user()->username . ' & ' . implode(' & ', $npm_team),
                'jurusan' => Auth::user()->jurusan . ' & ' . implode(' & ', $jurusan_team),
                'lomba' => $request->lomba,
                'penyelenggara' => $request->penyelenggara,
                'tingkat' => $request->tingkat,
                'tanggal' => $request->date,
                'sertifikat'=> 'sertifikat/' . $namafile,
            ]);
        }else{
            Lomba::create([
                'user_id' => Auth::user()->username,
                'name' => Auth::user()->name,
                'npm' => Auth::user()->username,
                'jurusan' => Auth::user()->jurusan,
                'lomba' => $request->lomba,
                'penyelenggara' => $request->penyelenggara,
                'tingkat' => $request->tingkat,
                'tanggal' => $request->date,
                'sertifikat'=> 'sertifikat/' . $namafile,
            ]);
        }

        
        return redirect()->route('user_lomba')->with('sukses','Lomba berhasil didaftarkan');;
    }

    public function user_edit_lomba($id){
        $lomba = Lomba::find($id);
        $nama_team = explode("&", $lomba->name);
        $npm_team = explode("&", $lomba->npm);
        $jurusan_team = explode("&", $lomba->jurusan);
  
        $mahasiswa = array('nama' => $nama_team, 'npm' => $npm_team, 'jurusan' => $jurusan_team);

        return view('user.edit_lomba', compact(['lomba','nama_team', 'npm_team', 'jurusan_team', 'mahasiswa']) , [
            "title" => 'Manajemen Lomba'
        ]);
    }

    public function user_update_lomba(Request $request, $id)
    {
        $lomba = Lomba::find($id);

        $validasi = $request->validate([
            'lomba' => 'required',
            'penyelenggara' => 'required',
            'tingkat' => 'required',
            'date' => 'required',
            'sertifikat'  => 'required|mimes:png,pdf',
        ],[
            'lomba.required' => 'Lomba harus diisi',
            'penyelenggara.required' => 'Penyelenggara harus diisi',
            'tingkat.required' => 'Tingkat harus diisi',
            'date.required' => 'Tanggal harus diisi',
            'sertifikat.required' => 'Sertifikat harus diisi',
        ]);
        
        // Ambil File Kemudian Hapus
        $file = $lomba->sertifikat;
        // Impor Illuminate\Support\Facades\File
        File::delete($file);
        // 

        $perubahan = $request->sertifikat;

        $namafile = time() . '_' . Auth::user()->name . '_' . $perubahan->getClientOriginalName();
        $perubahan->move('sertifikat/', $namafile);

        
        $nama_team = [];
        $npm_team = [];
        $jurusan_team = [];

        // Jika $request->addMoreInputFields tidak 0 
        if (!(is_null($request->addMoreInputFields))){
            foreach ($request->addMoreInputFields as $value) {
                array_push($nama_team, $value['name']);
                array_push($npm_team, $value['npm']);
                array_push($jurusan_team, $value['jurusan']);
            }
            $cek = [
                'user_id' => Auth::user()->username,
                'name' => Auth::user()->name . ' & '.implode(' & ', $nama_team),
                'npm' => Auth::user()->username . ' & ' . implode(' & ', $npm_team),
                'jurusan' => Auth::user()->jurusan . ' & ' . implode(' & ', $jurusan_team),
                'lomba' => $request['lomba'],
                'penyelenggara' => $request['penyelenggara'],
                'tingkat' => $request['tingkat'],
                'tanggal' => $request['date'],
                'sertifikat' => 'sertifikat/' . $namafile,
            ];
        }else{
            $cek = [
                'user_id' => Auth::user()->username,
                'name' => Auth::user()->name,
                'npm' => Auth::user()->username,
                'jurusan' => Auth::user()->jurusan,
                'lomba' => $request['lomba'],
                'penyelenggara' => $request['penyelenggara'],
                'tingkat' => $request['tingkat'],
                'tanggal' => $request['date'],
                'sertifikat' => 'sertifikat/' . $namafile,
            ];
        }

        if($lomba->update($cek)){
            $lomba->save();
        }
        return redirect()->route('user_lomba')->with('sukses','Data berhasil diedit');
    }

    public function user_delete_lomba($id){
        $lomba = Lomba::find($id);
        File::delete($lomba->sertifikat);
        $lomba->delete();
        return redirect()->route('user_lomba')->with('sukses','Data berhasil dihapus');
    }
//End Route Mahasiswa

}
