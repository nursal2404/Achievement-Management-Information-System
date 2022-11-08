<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('main_user');
    }

    public function daftarkan_lomba()
    {
        return view('daftarkan_lomba');
    }
}
