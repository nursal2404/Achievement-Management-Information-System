<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view ('login');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]);

        $otentifikasi = $request->only('username','password');

            if (Auth::attempt($otentifikasi)) {
                $user = Auth::user();
                if ($user->level == 'admin') {
                    return redirect()->intended('admin');
                } elseif ($user->level == 'user') {
                    return redirect()->intended('user');
                }
                return redirect()->intended('/');
            }

        return redirect('login')
                                ->withInput()
                                ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }

    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        return redirect('login')->with('sukses','Berhasil Daftar');
    }

    public function forget_password(){
        return view ('lupa_password');
    }
}