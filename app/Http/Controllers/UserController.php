<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Lomba;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index', [
            "title" => 'Dashboard'
        ]);
    }

    public function user_lomba()
    {
        $lomba = Lomba::where("name", Auth::user()->name)->get();
        return view('user.lomba', compact(['lomba']) , [
            "title" => 'Manajemen Lomba'
        ]);
    }

    public function daftarkan_lomba()
    {
        return view('user.add_lomba' , [
            "title" => 'Manajemen Lomba'
        ]);
    }

    public function proses_daftarkan_lomba()
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
    }

    // public function upload_sertifikat(Request $request){
    //     $data = $this->validate($request, [
    //         'sertifkat_file'  => 'mimes:pdf,jpeg,jpg,png',
    //     ]);

        // $upload = $request->sertifikat_file;
        // $nama_file = $upload->getClientOriginalName();


        // $tampung_data = new Lomba;
        // $tampung_data->sertifikat_file=$nama_file;

        // $upload->move(public_path(). '/img' , $nama_file);
        // $tampung_data->save();
    //     dd($data);
    //     $imageFile = time() . '-' . Auth::user()->name . '.';
    // }

    public function user_prestasi()
    {
        $kejuaraan = Prestasi::where("name", Auth::user()->name)->get();
        return view('user.prestasi', compact(['kejuaraan']) , [
            "title" => 'Perolehan Prestasi'
        ]);
    }

    public function profil()
    {
        return view('user.profil' , [
            "title" => 'Profil'
        ]);
    }
}
