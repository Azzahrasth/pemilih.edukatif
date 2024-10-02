<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KomentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('komentars')->insert([
            [
                'komentar' => 'Abdullah Hafidz Furqon siap mendukung 01',
                'user_id' => 1,
                'berita_id' => 1,
                'created_at' => Carbon::now(), // Menggunakan waktu sekarang
                
            ],
            [
                'komentar' => 'Noqruf fans gibran bngt',
                'user_id' => 2,
                'berita_id' => 1,
                'created_at' => Carbon::now(), // Menggunakan waktu sekarang
                
            ],
            // Tambahkan data lainnya jika diperlukan
        ]);
    }
}
