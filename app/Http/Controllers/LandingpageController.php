<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Prestasi;

class LandingpageController extends Controller
{
    public function index(){
        return view('landingpage.home');
    } 

    public function data_prestasi(Request $request)
    {
        $kejuaraan = Prestasi::sortable()->get();
        return view('landingpage.data_prestasi', compact(['kejuaraan']));
    }

    public function berita(){
        return view('landingpage.berita');
    } 

    public function pencarian_prestasi(Request $request)
    {
        $kejuaraan = $request->search;
        $kejuaraan = Prestasi::where('npm', 'like', "%" . $kejuaraan . "%")
                            ->orWhere('name', 'like', "%" . $kejuaraan . "%")->paginate(5);

        return view('landingpage.data_prestasi', compact('kejuaraan'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function visi_misi(){
        return view('landingpage.visi_misi');
    } 
}
