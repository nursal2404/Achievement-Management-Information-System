<?php

namespace App\Http\Controllers;
use DB;
use App\Models\User;
use App\Models\Lomba;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function index()
    {
        $data_lomba = Lomba::count();
        $data_prestasi = Prestasi::count();

        $lomba_jan = Lomba::whereMonth('tanggal' , '01')->count();
        $lomba_feb = Lomba::whereMonth('tanggal' , '02')->count();
        $lomba_maret = Lomba::whereMonth('tanggal' , '03')->count();
        $lomba_april = Lomba::whereMonth('tanggal' , '04')->count();
        $lomba_mei = Lomba::whereMonth('tanggal' , '05')->count();
        $lomba_juni = Lomba::whereMonth('tanggal' , '06')->count();
        $lomba_juli = Lomba::whereMonth('tanggal' , '07')->count();
        $lomba_agust = Lomba::whereMonth('tanggal' , '08')->count();
        $lomba_sep = Lomba::whereMonth('tanggal' , '09')->count();
        $lomba_okt = Lomba::whereMonth('tanggal' , '10')->count();
        $lomba_nov = Lomba::whereMonth('tanggal' , '11')->count();
        $lomba_des = Lomba::whereMonth('tanggal' , '12')->count();

        $prestasi_jan = Prestasi::whereMonth('tanggal' , '01')->count();
        $prestasi_feb = Prestasi::whereMonth('tanggal' , '02')->count();
        $prestasi_maret = Prestasi::whereMonth('tanggal' , '03')->count();
        $prestasi_april = Prestasi::whereMonth('tanggal' , '04')->count();
        $prestasi_mei = Prestasi::whereMonth('tanggal' , '05')->count();
        $prestasi_juni = Prestasi::whereMonth('tanggal' , '06')->count();
        $prestasi_juli = Prestasi::whereMonth('tanggal' , '07')->count();
        $prestasi_agust = Prestasi::whereMonth('tanggal' , '08')->count();
        $prestasi_sep = Prestasi::whereMonth('tanggal' , '09')->count();
        $prestasi_okt = Prestasi::whereMonth('tanggal' , '10')->count();
        $prestasi_nov = Prestasi::whereMonth('tanggal' , '11')->count();
        $prestasi_des = Prestasi::whereMonth('tanggal' , '12')->count();

        return view('admin.index', compact
        ([  
            'data_lomba','data_prestasi',
            'lomba_jan','lomba_feb','lomba_maret','lomba_april','lomba_mei','lomba_juni',
            'lomba_juli','lomba_agust','lomba_sep','lomba_okt','lomba_nov','lomba_des',
            'prestasi_jan','prestasi_feb','prestasi_maret','prestasi_april','prestasi_mei','prestasi_juni',
            'prestasi_juli','prestasi_agust','prestasi_sep','prestasi_okt','prestasi_nov','prestasi_des',

        ]),
        [
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
   
    public function add_berita($id){
        $kejuaraan = Prestasi::find($id);
        return view ('tambahkan_berita' , compact('kejuaraan') , [
            "title" => 'Manajemen Berita'
        ]);
    }

}

