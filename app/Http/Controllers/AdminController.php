<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    function index()
    {
        $data = DB::table('mahasiswa')->join('presensi', 'presensi.nim_mhs', '=', 'mahasiswa.nim')->get();
        return view('admin')->with('data', $data);
    }

    
}
