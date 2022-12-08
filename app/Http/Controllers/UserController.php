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
