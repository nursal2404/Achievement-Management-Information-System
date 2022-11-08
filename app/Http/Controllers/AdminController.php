<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function manajemen_user(Request $request)
    {
        if($request->has('search')){
            $items = User::where('username','LIKE','%'.$request->search.'%')->paginate(5);
        }
        else{
            $items = User::sortable()->paginate(5);
            return view('data_user', compact(['items']));
        }
                
        $items = User::sortable()->paginate(5);
        return view('data_user', compact(['items']));
    }

    public function tambah_user(){
        return view('tambah_user');
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

        return redirect()->route('data_user')->with('sukses','Data Berhasil Ditambahkan');;
    }

    public function edit($id)
    {
        $items = User::find($id);
        return view('edit_user', compact('items'));
    }

    public function proses_edit(Request $request, $id)
    {
        $items = User::find($id);
        $items->update($request->all());
        return redirect()->route('data_user')->with('sukses','Data Berhasil DiEdit');
    }

    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('data_user')->with('sukses','Data Berhasil Dihapus');
    }

    public function search(Request $request)
    {
        $items = $request->search;
        $items = User::where('username', 'like', "%" . $items . "%")->paginate(5);
        return view('data_user', compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}

