<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $items = User::all();
        return view('admin', compact(['items']));
    }

    public function proses_tambah(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required|min:6|max:10',
            'level' => '',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => $request->level,
        ]);

        return redirect()->route('admin')->with('sukses','Data Berhasil Ditambahkan');;
    }

    public function edit($id)
    {

        return redirect()->back();
    }

    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('admin')->with('sukses','Data Berhasil Dihapus');
    }

    public function manajemen_user(){
        $items = User::all();
        return view('data_user', compact(['items']));
    }
}

