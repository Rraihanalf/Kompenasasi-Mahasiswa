<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\Pengawas;
use App\Models\Presensi;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengawas = [
            [
                'nik' => 'pengawas',
                'nama_pengawas' => 'Novi Andrea',
                'jurusan' => 'Teknik Elekro'
            ],

            [
                'nik' => 'Reja123',
                'nama_pengawas' => 'Reja Kelandis',
                'jurusan' => 'Teknik Elekro'
            ],

            [
                'nik' => 'dimas222',
                'nama_pengawas' => 'Dimas Magreta',
                'jurusan' => 'Teknik Elekro'
            ],
        ];

        foreach($pengawas as $key => $value){
            Pengawas::create($value);
        }

        $user =[
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt('123456'),
                'level' => '1',
                'email' => 'admin@example.net',
            ],
            [
                'name' => 'Supervisor',
                'username' => 'pengawas',
                'password' => bcrypt('123456'),
                'level' => '2',
                'email' => 'pengawas@example.net',
            ],
            [
                'name' => 'Student',
                'username' => 'mahasiswa',
                'password' => bcrypt('123456'),
                'level' => '3',
                'email' => 'mahasiswa@example.net',
            ],

            [
                'name' => 'Aldi',
                'username' => 'C030322001',
                'password' => bcrypt('123456'),
                'level' => '3',
                'email' => 'aldi@example.net',
            ]
        ];

        foreach($user as $key => $value){
            User::create($value);
        }

        $mahasiswas = [
            [
                'nama_mhs' => 'Aldi',
                'nim' => 'C030322001',
                'email' => 'aldi@gmail.com',
                'semester' => '2',
                'kelas' => 'A',
                'alamat' => 'asdasdasdas',
                'no_hp_mhs' => '08493829182'
            ],
            [
                'nama_mhs' => 'Bagus',
                'nim' => 'C030322002',
                'email' => 'bagus@gmail.com',
                'semester' => '2',
                'kelas' => 'A',
                'alamat' => 'afgfjgfhfghf',
                'no_hp_mhs' => '08758463722'
            ],
            [
                'nama_mhs' => 'Caca',
                'nim' => 'C030322003',
                'email' => 'caca@gmail.com',
                'semester' => '2',
                'kelas' => 'A',
                'alamat' => 'amvnvjfmkfm',
                'no_hp_mhs' => '086453627261'
            ],
            [
                'nama_mhs' => 'Dian',
                'nim' => 'C030322004',
                'email' => 'dian@gmail.com',
                'semester' => '2',
                'kelas' => 'B',
                'alamat' => 'kkowkokawsadha',
                'no_hp_mhs' => '085342729123'
            ],
            [
                'nama_mhs' => 'Ethan',
                'nim' => 'C030322005',
                'email' => 'ethan@gmail.com',
                'semester' => '2',
                'kelas' => 'B',
                'alamat' => 'aryekhyjdhss',
                'no_hp_mhs' => '0884895742341'
            ]
        ];

        foreach($mahasiswas as $key => $value){
            Mahasiswa::create($value);
        }

        $matakuliahs = [
            [
                'nama_matkul' => 'Jaringan',
                'kode_matkul' => 'J0001',
                'sks' => '2',
                'jam' => '3'
            ],
            [
                'nama_matkul' => 'Sistem Operasi',
                'kode_matkul' => 'SO002',
                'sks' => '3',
                'jam' => '3'
            ],
            [
                'nama_matkul' => 'Basis Data',
                'kode_matkul' => 'BD003',
                'sks' => '3',
                'jam' => '4'
            ],
            [
                'nama_matkul' => 'Aljabar Linier',
                'kode_matkul' => 'AL004',
                'sks' => '2',
                'jam' => '3'
            ],
            [
                'nama_matkul' => 'Agama',
                'kode_matkul' => 'AG005',
                'sks' => '2',
                'jam' => '2'
            ],
        ];

        foreach($matakuliahs as $key => $value){
            Matakuliah::create($value);
        }

        $presensi = [
            //1/1

            [
                'id_absen' => 'Absen1',
                'id_matkul' => 'J0001',
                'nim_mhs' => 'C030322001',
                'tanggal_absen' => '2023-06-05',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen2',
                'id_matkul' => 'J0001',
                'nim_mhs' => 'C030322002',
                'tanggal_absen' => '2023-06-05',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen3',
                'id_matkul' => 'J0001',
                'nim_mhs' => 'C030322003',
                'tanggal_absen' => '2023-06-05',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen4',
                'id_matkul' => 'J0001',
                'nim_mhs' => 'C030322004',
                'tanggal_absen' => '2023-06-05',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen5',
                'id_matkul' => 'SO002',
                'nim_mhs' => 'C030322005',
                'tanggal_absen' => '2023-06-05',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            
            //1/2

            [
                'id_absen' => 'Absen6',
                'id_matkul' => 'SO002',
                'nim_mhs' => 'C030322001',
                'tanggal_absen' => '2023-06-06',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen7',
                'id_matkul' => 'SO002',
                'nim_mhs' => 'C030322002',
                'tanggal_absen' => '2023-06-06',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen8',
                'id_matkul' => 'SO002',
                'nim_mhs' => 'C030322003',
                'tanggal_absen' => '2023-06-06',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen9',
                'id_matkul' => 'SO002',
                'nim_mhs' => 'C030322004',
                'tanggal_absen' => '2023-06-06',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen10',
                'id_matkul' => 'SO002',
                'nim_mhs' => 'C030322005',
                'tanggal_absen' => '2023-06-06',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],

            //1/3

            [
                'id_absen' => 'Absen11',
                'id_matkul' => 'BD003',
                'nim_mhs' => 'C030322001',
                'tanggal_absen' => '2023-06-07',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen12',
                'id_matkul' => 'BD003',
                'nim_mhs' => 'C030322002',
                'tanggal_absen' => '2023-06-07',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen13',
                'id_matkul' => 'BD003',
                'nim_mhs' => 'C030322003',
                'tanggal_absen' => '2023-06-07',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen14',
                'id_matkul' => 'BD003',
                'nim_mhs' => 'C030322004',
                'tanggal_absen' => '2023-06-07',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen15',
                'id_matkul' => 'BD003',
                'nim_mhs' => 'C030322005',
                'tanggal_absen' => '2023-06-07',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],

            //1/4

            [
                'id_absen' => 'Absen16',
                'id_matkul' => 'AL004',
                'nim_mhs' => 'C030322001',
                'tanggal_absen' => '2023-06-08',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen17',
                'id_matkul' => 'AL004',
                'nim_mhs' => 'C030322002',
                'tanggal_absen' => '2023-06-08',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen18',
                'id_matkul' => 'AL004',
                'nim_mhs' => 'C030322003',
                'tanggal_absen' => '2023-06-08',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen19',
                'id_matkul' => 'AL004',
                'nim_mhs' => 'C030322004',
                'tanggal_absen' => '2023-06-08',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen20',
                'id_matkul' => 'AL004',
                'nim_mhs' => 'C030322005',
                'tanggal_absen' => '2023-06-08',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],

            //1/5

            [
                'id_absen' => 'Absen21',
                'id_matkul' => 'AG005',
                'nim_mhs' => 'C030322001',
                'tanggal_absen' => '2023-06-09',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen22',
                'id_matkul' => 'AG005',
                'nim_mhs' => 'C030322002',
                'tanggal_absen' => '2023-06-09',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen23',
                'id_matkul' => 'AG005',
                'nim_mhs' => 'C030322003',
                'tanggal_absen' => '2023-06-09',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen24',
                'id_matkul' => 'AG005',
                'nim_mhs' => 'C030322004',
                'tanggal_absen' => '2023-06-09',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen25',
                'id_matkul' => 'AG005',
                'nim_mhs' => 'C030322005',
                'tanggal_absen' => '2023-06-09',
                'pertemuan' => '1',
                'status' => 'hadir'
            ],

            //2/1

            [
                'id_absen' => 'Absen26',
                'id_matkul' => 'J0001',
                'nim_mhs' => 'C030322001',
                'tanggal_absen' => '2023-06-12',
                'pertemuan' => '2',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen27',
                'id_matkul' => 'J0001',
                'nim_mhs' => 'C030322002',
                'tanggal_absen' => '2023-06-12',
                'pertemuan' => '2',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen28',
                'id_matkul' => 'J0001',
                'nim_mhs' => 'C030322003',
                'tanggal_absen' => '2023-06-12',
                'pertemuan' => '2',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen29',
                'id_matkul' => 'J0001',
                'nim_mhs' => 'C030322004',
                'tanggal_absen' => '2023-06-12',
                'pertemuan' => '2',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen30',
                'id_matkul' => 'SO002',
                'nim_mhs' => 'C030322005',
                'tanggal_absen' => '2023-06-12',
                'pertemuan' => '2',
                'status' => 'hadir'
            ],
            
            //2/2

            [
                'id_absen' => 'Absen31',
                'id_matkul' => 'SO002',
                'nim_mhs' => 'C030322001',
                'tanggal_absen' => '2023-06-13',
                'pertemuan' => '2',
                'status' => 'sakit'
            ],
            [
                'id_absen' => 'Absen32',
                'id_matkul' => 'SO002',
                'nim_mhs' => 'C030322002',
                'tanggal_absen' => '2023-06-13',
                'pertemuan' => '2',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen33',
                'id_matkul' => 'SO002',
                'nim_mhs' => 'C030322003',
                'tanggal_absen' => '2023-06-13',
                'pertemuan' => '2',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen34',
                'id_matkul' => 'SO002',
                'nim_mhs' => 'C030322004',
                'tanggal_absen' => '2023-06-13',
                'pertemuan' => '2',
                'status' => 'alpha'
            ],
            [
                'id_absen' => 'Absen35',
                'id_matkul' => 'SO002',
                'nim_mhs' => 'C030322005',
                'tanggal_absen' => '2023-06-13',
                'pertemuan' => '2',
                'status' => 'hadir'
            ],

            //2/3

            [
                'id_absen' => 'Absen36',
                'id_matkul' => 'BD003',
                'nim_mhs' => 'C030322001',
                'tanggal_absen' => '2023-06-14',
                'pertemuan' => '2',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen37',
                'id_matkul' => 'BD003',
                'nim_mhs' => 'C030322002',
                'tanggal_absen' => '2023-06-14',
                'pertemuan' => '2',
                'status' => 'ijin'
            ],
            [
                'id_absen' => 'Absen38',
                'id_matkul' => 'BD003',
                'nim_mhs' => 'C030322003',
                'tanggal_absen' => '2023-06-14',
                'pertemuan' => '2',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen39',
                'id_matkul' => 'BD003',
                'nim_mhs' => 'C030322004',
                'tanggal_absen' => '2023-06-14',
                'pertemuan' => '2',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen40',
                'id_matkul' => 'BD003',
                'nim_mhs' => 'C030322005',
                'tanggal_absen' => '2023-06-14',
                'pertemuan' => '2',
                'status' => 'sakit'
            ],

            //2/4

            [
                'id_absen' => 'Absen41',
                'id_matkul' => 'AL004',
                'nim_mhs' => 'C030322001',
                'tanggal_absen' => '2023-06-15',
                'pertemuan' => '2',
                'status' => 'alpha'
            ],
            [
                'id_absen' => 'Absen42',
                'id_matkul' => 'AL004',
                'nim_mhs' => 'C030322002',
                'tanggal_absen' => '2023-06-15',
                'pertemuan' => '2',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen43',
                'id_matkul' => 'AL004',
                'nim_mhs' => 'C030322003',
                'tanggal_absen' => '2023-06-15',
                'pertemuan' => '2',
                'status' => 'alpha'
            ],
            [
                'id_absen' => 'Absen44',
                'id_matkul' => 'AL004',
                'nim_mhs' => 'C030322004',
                'tanggal_absen' => '2023-06-15',
                'pertemuan' => '2',
                'status' => 'sakit'
            ],
            [
                'id_absen' => 'Absen45',
                'id_matkul' => 'AL004',
                'nim_mhs' => 'C030322005',
                'tanggal_absen' => '2023-06-15',
                'pertemuan' => '2',
                'status' => 'hadir'
            ],

            //2/5

            [
                'id_absen' => 'Absen46',
                'id_matkul' => 'AG005',
                'nim_mhs' => 'C030322001',
                'tanggal_absen' => '2023-06-16',
                'pertemuan' => '2',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen47',
                'id_matkul' => 'AG005',
                'nim_mhs' => 'C030322002',
                'tanggal_absen' => '2023-06-16',
                'pertemuan' => '2',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen48',
                'id_matkul' => 'AG005',
                'nim_mhs' => 'C030322003',
                'tanggal_absen' => '2023-06-16',
                'pertemuan' => '2',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen49',
                'id_matkul' => 'AG005',
                'nim_mhs' => 'C030322004',
                'tanggal_absen' => '2023-06-16',
                'pertemuan' => '2',
                'status' => 'hadir'
            ],
            [
                'id_absen' => 'Absen50',
                'id_matkul' => 'AG005',
                'nim_mhs' => 'C030322005',
                'tanggal_absen' => '2023-06-16',
                'pertemuan' => '2',
                'status' => 'hadir'
            ]
        ];

        foreach($presensi as $key => $value){
            Presensi::create($value);
        }
    }
}
