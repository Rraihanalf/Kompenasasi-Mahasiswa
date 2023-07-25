<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelaksanaan;
use DB;

class Pengawas extends Controller
{
    public function index(){
        $data = DB::table('pengawas')->where('nik', auth()->user()->username)->get();

        return view('pengawas.dashboard')->with('data', $data);
    }

    public function dft_pelaksanaan(){
        $data = DB::table('pelaksanaans')
                ->where('pengawas', auth()->user()->username)
                ->get();

        return view('pengawas.pelaksanaan')->with('data', $data);
    }

    public function detail($id_pelaksanaan) {
        $data = DB::table('pelaksanaans')
        ->where('id_pelaksanaan', $id_pelaksanaan)
        ->join('mahasiswas AS mhs_semester', function ($join) {
            $join->on('mhs_semester.semester', '=', 'pelaksanaans.semester_mhs')
                 ->on('mhs_semester.kelas', '=', 'pelaksanaans.kelas_mhs')
                 ->on('mhs_semester.prodi', '=', 'pelaksanaans.prodi');
        })
        ->join('kompensasis', 'kompensasis.nim_mhs', '=', 'mhs_semester.nim')
        ->get();
        
        return view('pengawas.detail_pelaksanaan')->with('data', $data);
    }


    public function validasi_pengawas(Request $request, $id_pelaksanaan){
        $validasi = $request->validate([
            'validasi_pengawas' => 'required'
        ]);

        Pelaksanaan::where('id_pelaksanaan', $id_pelaksanaan)->update($validasi);
        
        return redirect()->intended('/pengawas/pelaksanaan')->with('success', 'Validasi Berhasil Dilakukan!');
    }
}
