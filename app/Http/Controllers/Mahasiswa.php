<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Mahasiswa extends Controller
{
    public function index(){
        $data = DB::table('mahasiswas')->where('nim', auth()->user()->username)->get();

        return view('mahasiswa.dashboard')->with('data', $data);
    }

    public function dft_pelaksanaan(){
        // $user = DB::table('mahasiswas')->where('nim', auth()->user()->username)->get();

        $data = DB::table('mahasiswas')
                ->where('nim', auth()->user()->username)
                ->join('pelaksanaans AS pelaksanaan', function ($join) {
                    $join->on('pelaksanaan.semester_mhs', '=', 'mahasiswas.semester')
                         ->on('pelaksanaan.kelas_mhs', '=', 'mahasiswas.kelas')
                         ->on('pelaksanaan.prodi', '=', 'mahasiswas.prodi');
                })
                ->join('kompensasis', 'kompensasis.nim_mhs', '=', 'mahasiswas.nim')
                ->get();

        return view('mahasiswa.pelaksanaan')->with('data', $data);
    }
}
