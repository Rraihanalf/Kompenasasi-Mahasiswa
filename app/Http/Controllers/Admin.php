<?php

namespace App\Http\Controllers;

use App\Models\Kompensasi;
use App\Models\Pelaksanaan;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Carbon\Carbon;

class Admin extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function showsiswa(Request $request){
        $semester = $request->semester;
        $kelas = $request->kelas;
        $data = DB::table('kompensasis')
                ->join('mahasiswas', 'mahasiswas.nim', '=', 'kompensasis.nim_mhs')
                ->where('semester', 'LIKE', '%'.$semester.'%')
                ->where('kelas', 'LIKE', '%'.$kelas.'%')
                ->get();
        // dd($data);
        return view('admin.daftar_mahasiswa')->with('data', $data);
    }

    public function datakompen(){
        $id_kompen = Carbon::now()->format("mdYHis");
        $data = DB::table('mahasiswas')
                ->join('presensis', 'presensis.nim_mhs', '=', 'mahasiswas.nim')
                ->where('status', '!=', 'hadir')
                ->whereColumn('presensis.nim_mhs', 'mahasiswas.nim')
                ->select('mahasiswas.nim', 'mahasiswas.semester', 'mahasiswas.prodi', 'mahasiswas.kelas', 
                        'presensis.tanggal_absen', 'presensis.pertemuan', 'presensis.id_absen', 'presensis.id_matkul', 'presensis.status')
                ->distinct()
                ->get();
        
        $processedNim = [];
        foreach ($data as $row){
            $nim = $row->nim;
            
            if(!in_array($nim, $processedNim)){
                $data2 = DB::table('presensis')
                        ->where('nim_mhs', $nim)
                        ->where('status', '!=', 'hadir')
                        ->whereColumn('presensis.nim_mhs', 'mahasiswas.nim')
                        ->join('matakuliahs', 'presensis.id_matkul', '=', 'matakuliahs.kode_matkul')
                        ->join('mahasiswas', 'presensis.nim_mhs', '=', 'mahasiswas.nim')
                        ->select('matakuliahs.jam')
                        ->get();
                
                $totaljam = $data2->sum('jam');
                $totaljam = $totaljam * 2;
    
                Kompensasi::create([
                    'id_kompen' => $id_kompen,
                    'nim_mhs' => $nim, 
                    'total_jam' => $totaljam
                ]);

                $processedNim[] = $nim;
            }
        }
        
        // dd($data3);    
        return redirect()->intended('/showsiswa');
    }

    public function detail($nim){
        $data = DB::table('presensis')
                ->where('nim_mhs', $nim)
                ->join('mahasiswas', 'nim', '=', 'presensis.nim_mhs')
                ->join('matakuliahs', 'kode_matkul', '=', 'presensis.id_matkul')
                ->where('status', '!=', 'hadir')
                ->get();
        return view('admin.detail_mahasiswa')->with('data', $data);
    }

    public function pelaksanaan(){
        
        $data = DB::table('pelaksanaans')
                ->get();

        return view('admin.pelaksanaan')->with('data', $data);
    }

    public function store_pelaksanaan(Request $request){

        $validatedData = $request->validate([
            'semester_mhs' => 'required',
            'kelas_mhs' => 'required',
            'ruangan' => 'required',
            'prodi' => 'required',
            'pengawas' => 'required',
            'kegiatan' => 'required',
            'tgl_pelaksanaan' => 'required',
            'validasi_pengawas' => 'required',
            'validasi_admin' => 'required'
        ]);

        $validatedData['id_pelaksanaan'] = $validatedData['semester_mhs'] . $validatedData['kelas_mhs'] . $validatedData['tgl_pelaksanaan'];
        $validatedData['jumlah_mhs'] = DB::table('kompensasis')
                                        ->join('mahasiswas', 'mahasiswas.nim', '=', 'kompensasis.nim_mhs')
                                        ->where('semester', $validatedData['semester_mhs'])
                                        ->where('kelas', $validatedData['kelas_mhs'])
                                        ->where('prodi', $validatedData['prodi'])
                                        ->count();
        // dd($validatedData);
        Pelaksanaan::create($validatedData);

        return redirect()->intended('/admin/pelaksanaan')->with('success', 'Data Pelaksanaan Kompenasasi Baru Berhasil Dibuat!');
    }

    public function validasi_admin(Request $request, $id_pelaksanaan){
        $validasi = $request->validate([
            'validasi_admin' => 'required'
        ]);

        Pelaksanaan::where('id_pelaksanaan', $id_pelaksanaan)->update($validasi);

        return redirect()->intended('/admin/pelaksanaan')->with('success', 'Validasi Berhasil Dilakukan!');
    }


    public function showuser(){
        $data = User::all();

        return view('admin.daftar_user')->with('data', $data);
    }

}
