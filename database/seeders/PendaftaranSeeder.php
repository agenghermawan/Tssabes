<?php

namespace Database\Seeders;

use App\Models\Register;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'namaLengkap' => 'admin',
            'alamat' => 'jakarta',
            'tanggalLahir' => now(),
            'email' => 'admin@gmail.com',
            'password' => Hash::make('irwansyah123'),
        ]);
    }
}
