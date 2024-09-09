<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Abdullah Hafidz Furqon',
                'email' => 'abdullahhafidzfurqon@gmail.com',
                'username' => 'bedulsundae',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('bedulsundae'),
                'created_at' => Carbon::now(), // Menggunakan waktu sekarang
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Noqruf Zdifah Halludba',
                'email' => 'ahf@gmail.com',
                'username' => 'ahf',
                'email_verified_at' => null,
                'password' => bcrypt('ahf'),
                'created_at' => Carbon::now(), // Menggunakan waktu sekarang
                'updated_at' => Carbon::now(),
            ],
            // Tambahkan data lainnya jika diperlukan
        ]);
    }
}
