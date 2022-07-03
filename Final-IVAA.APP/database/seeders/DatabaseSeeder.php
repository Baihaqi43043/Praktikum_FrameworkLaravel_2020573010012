<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use App\Models\Peminjaman;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now()
        ]);

        Karyawan::factory()->has(Peminjaman::factory()->count(7))->count(5)->create();
        }
}
