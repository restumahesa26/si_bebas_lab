<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Mufti Restu Mahesa',
            'nip' => '12345678910',
            'email' => 'mufti.restumahesa@gmail.com',
            'no_hp' => '08117482512',
            'role' => 'LABORAN',
            'password' => Hash::make('password')
        ]);

        User::create([
            'nama' => 'Murfid Aqil',
            'npm' => 'G1A019076',
            'email' => 'murfidaqil@gmail.com',
            'no_hp' => '08117482512',
            'role' => 'MAHASISWA',
            'password' => Hash::make('password')
        ]);

        User::create([
            'nama' => 'Ferzha Putra Utama S.T., M.Eng.',
            'nip' => '12345678910',
            'email' => 'ferzha@gmail.com',
            'no_hp' => '08117482512',
            'role' => 'KEPALA LAB',
            'password' => Hash::make('password')
        ]);
    }
}
