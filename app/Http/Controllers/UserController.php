<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Lomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function user_lomba()
    {
        $lomba = Lomba::where("npm", 'LIKE', "%" . Auth::user()->username . "%");
        return view('user.lomba', compact(['lomba']));
    }

    public function daftarkan_lomba()
    {
        return view('user.add_lomba');
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

    public function upload_sertifikat(Request $request){
        $this->validate($request, [
            'sertifkat_file'  => 'mimes:pdf,jpeg,jpg,png',
        ]);

        $upload = $request->sertifikat_file;
        $nama_file = $upload->getClientOriginalName();

        $tampung_data = new Lomba;
        $tampung_data->sertifikat_file=$nama_file;

        $upload->move(public_path(). '/img' , $nama_file);
        $tampung_data->save();
    }

    public function profil()
    {
        return view('user.profil');
    }
}
