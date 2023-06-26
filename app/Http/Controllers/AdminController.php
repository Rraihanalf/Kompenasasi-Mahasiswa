<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    function index()
    {
        $data = DB::table('mahasiswa')->join('presensi', 'presensi.nim_mhs', '=', 'mahasiswa.nim')->get();
        return view('admin.admin')->with('data', $data);
    }
    
    function admin()
    {
        $data = DB::table('mahasiswa')->join('presensi', 'presensi.nim_mhs', '=', 'mahasiswa.nim')->get();
        return view('admin.admin')->with('data', $data);
    }
    function pengawas()
    {
        $data = [
            'title' => 'Halaman Utama',
            'message' => 'Selamat datang di halaman utama aplikasi.'
        ];

        return view('pengawas', $data);
    }

    
}
