<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Register;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PendaftaranSeeder::class,
        ]);
// //        \App\Models\User::factory(10)->create();
//         \App\Models\Register::factory(10)->create();
    }
}
