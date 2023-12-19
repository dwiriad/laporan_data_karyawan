<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang_Divisi;
use App\Models\User;
use App\Models\datakaryawan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function dashboard()
    {
        $user = User::count();
        $divisi = Bidang_Divisi::count();
        $data_karyawan = datakaryawan::count();
        return view('dashboard1', compact('user', 'divisi', 'data_karyawan'));
    }
}
