<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Prestasi;

class LandingpageController extends Controller
{
    public function index(){
        return view('landingpage.home');
    } 

    public function data_prestasi()
    {
        $kejuaraan = DB::table('prestasis')->get();
        return view('landingpage.data_prestasi', compact(['kejuaraan']));
    }

    public function berita(){
        return view('landingpage.berita');
    } 

    public function visi_misi(){
        return view('landingpage.visi_misi');
    } 
}
