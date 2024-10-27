<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Daftar pengguna yang akan ditambahkan
        $users = [
            [
                'name' => 'Ferdinand Maulana Za Fauzi',
                'username' => 'One',
                'role' => 'Admin',
                'pfp' => 'public/profile_pic/1.jpg', // Sesuaikan dengan lokasi penyimpanan foto
                'password' => Hash::make('password1'), // Ganti dengan password yang diinginkan
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rahan Jean',
                'username' => 'MewTwo',
                'role' => 'Penulis',
                'pfp' => 'public/profile_pic/2.jpg', // Sesuaikan dengan lokasi penyimpanan foto
                'password' => Hash::make('password2'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan pengguna lain di sini
        ];

        // Menyimpan pengguna ke database
        foreach ($users as $user) {
            Users::create($user);
        }
    }
}
