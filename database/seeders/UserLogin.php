<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserLogin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'Admin',
                'username' => 'A030321080',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt(12345)
            ],
            [
                'name' => 'Pengawas',
                'username' => 'B030321080',
                'email' => 'pengawas@gmail.com',
                'role' => 'pengawas',
                'password' => bcrypt(12345)
            ],
            [
                'name' => 'Mahasiswa',
                'username' => 'C030321080',
                'email' => 'mahasiswa@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt(12345)
            ],

        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
