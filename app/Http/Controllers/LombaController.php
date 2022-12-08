<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Lomba;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        Lomba::create([
            'user_id' => Auth::user()->username,
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

    public function admin_edit_lomba($id){
        $lomba = Lomba::find($id);
        return view('admin.edit_lomba', compact(['lomba']) , [
            "title" => 'Manajemen Lomba'
        ]);
    }    

    public function admin_update_lomba(Request $request, $id)
    {
        $lomba = Lomba::find($id);
        $mahasiswa = User::where('username', $lomba['npm'])->get();

        $lomba->update($request->all());

        return redirect()->route('lomba')->with('sukses','Data Berhasil Diedit');
    }

    public function admin_delete_lomba($id){
        $lomba = Lomba::find($id);

        $kejuaraan = null;

        if (Prestasi::where('lomba', $lomba['lomba'])->first() != null) {
            $kejuaraan = Prestasi::where('lomba', $lomba['lomba'])->first();
            $kejuaraan->delete();
        }

        $lomba->delete();
        return redirect()->route('lomba')->with('sukses','Data Berhasil Dihapus');
    }
// End Route Admin


//Route Mahasiswa 
    public function user_create_lomba(Request $request)
    {
        $data = $request->validate([
            'lomba' => 'required',
            'penyelenggara' => 'required',
            'tingkat' => 'required',
            'date' => 'required',
            'sertifikat_file'  => 'required|mimes:png,pdf',
        ]);

        $namafile = time() . '_' . Auth::user()->name . '_' . $request->sertifikat_file->getClientOriginalName();
        $request->sertifikat_file->move('sertifikat/', $namafile);

        Lomba::create([
            'user_id' => Auth::user()->username,
            'name' => Auth::user()->name,
            'npm' => Auth::user()->username,
            'jurusan' => Auth::user()->jurusan,
            'lomba' => $request->lomba,
            'penyelenggara' => $request->penyelenggara,
            'tingkat' => $request->tingkat,
            'tanggal' => $request->date,
            'sertifikat_file'=> 'sertifikat/' . $namafile,
        ]);
        return redirect()->route('user_lomba')->with('sukses','Lomba Berhasil Didaftarkan');;
    }

    public function user_edit_lomba($id){
        $lomba = Lomba::where('name' , Auth::user()->name)->first();
        // dd($lomba);
        return view('user.edit_lomba', compact(['lomba']) , [
            "title" => 'Manajemen Lomba'
        ]);
    }

    public function user_update_lomba(Request $request, $id)
    {
        $lomba = Lomba::where('name' , Auth::user()->name)->first();
        if( $request->file('sertifikat_file') == ""){
            
            $cek = [
            'user_id' => Auth::user()->username,
            'name' => Auth::user()->name,
            'npm' => Auth::user()->username,
            'jurusan' => Auth::user()->jurusan,
            'lomba' => $request['lomba'],
            'penyelenggara' => $request['penyelenggara'],
            'tingkat' => $request['tingkat'],
            'tanggal' => $request['date'],
            'sertifikat_file' => $request['sertifikat_file']
            ];
        }
        else
        {
            $file = $lomba->sertifikat_file;
            File::delete($file);

            $perubahan = $request->sertifikat_file;

            $namafile = time() . '_' . Auth::user()->name . '_' . $perubahan->getClientOriginalName();
            $perubahan->move(public_path() . 'sertifikat/', $namafile);

            $cek = [
                'user_id' => Auth::user()->username,
                'name' => Auth::user()->name,
                'npm' => Auth::user()->username,
                'jurusan' => Auth::user()->jurusan,
                'lomba' => $request['lomba'],
                'penyelenggara' => $request['penyelenggara'],
                'tingkat' => $request['tingkat'],
                'tanggal' => $request['date'],
                'sertifikat_file' => 'sertifikat/' . $namafile,
            ];
        }

        if($lomba->update($cek)){
            $lomba->save();
        }
        return redirect()->route('user_lomba')->with('sukses','Data Berhasil Diedit');
    }

    public function user_delete_lomba($id){
        $data = Lomba::find($id);
        $data->delete();
        return redirect()->route('user_lomba')->with('sukses','Data Berhasil Dihapus');
    }
//End Route Mahasiswa

}
