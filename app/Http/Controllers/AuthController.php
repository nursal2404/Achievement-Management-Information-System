<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function login()
    {
        return view ('auth.login');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'username' => 'required|exists:users',
                'password' => 'required',
            ],[
                'username.required' => 'Username harus diisi',
                'username.exists' => 'Username belum didaftarkan',
                'password.required' => 'Password harus diisi',
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

        return redirect('login')->with('eror','Masukkan username dan password yang benar');
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }

    public function register()
    {
        return view ('auth.register');
    }
    
    public function proses_register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'jurusan' => 'required',
                'gender' => 'required',
                'email' => ['required', 'unique:users'],
                // 'email' => ['required', 'unique:users' , 'regex:/(.*)@gmail\.com/i'],
                'username' => ['required', 'unique:users', 'regex:/G1/'],
                'password' => 'required',
            ],[
                'name.required' => 'Nama harus diisi',
                'jurusan.required' => 'Jurusan harus diisi',
                'gender.required' => 'Jenis Kelamin harus diisi',
                'email.required' => 'Email harus diisi',
                'username.required' => 'Username harus diisi',
                'username.unique' => 'Username sudah ada',
                'username.regex' => 'Username harus awalan G1',
                'password.required' => 'Password harus diisi',
            ]);

            
            User::create([
                'name' => $request->name,
                'jurusan' => $request->jurusan,
                'gender' => $request->gender,
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);
        return redirect('login')->with('sukses','Berhasil Daftar');       
    }

    public function forget_password(){
        return view ('auth.lupa_password');
    }

    public function send_request_reset(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $token = \Str::random(64);

        \DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        $action_link = route('reset_password',['token'=>$token,'email'=>$request->email]);
        $body = "Kami menerima permintaan untuk reset password pada <b>SI Manajamen Prestasi</b> dengan email ".$request->email.
        ". Tekan link untuk reset password";

        \Mail::send('email-forgot',['action_link'=>$action_link,'body'=>$body], function($message) use ($request){
            $message->from('noreply@example.com','SI Manajemen Prestasi');
            $message->to($request->email,'SI Manajemen Prestasi')
                    ->subject('Reset Password');
        });
        return back()->with('sukses', 'Berhasil mengirim request reset password');
    }

    public function reset_password(Request $request, $token = null){
        return view('auth.reset_password')->with(['token'=>$token,'email'=>$request->email]);
    }

    public function update_password(Request $request){
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5|confirmed',
            'password_confirmation'=>'required',
        ]);

        $check_token = \DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token,
        ])->first();

        if(!$check_token){
            return back()->withInput()->with('eror', 'Invalid Email');
        }else{

            User::where('email', $request->email)->update([
                'password'=>\Hash::make($request->password)
            ]);

            \DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();

            return redirect()->route('login')->with('sukses', 'Password berhasil direset! Silahkan Login');
        }
    }
}