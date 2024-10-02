<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengusung;

class PengusungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengusung::create([
            'partai_id' => 1,
            'paslon_id' => 1,
        ]);
        Pengusung::create([
            'partai_id' => 3,
            'paslon_id' => 1,
        ]);
        Pengusung::create([
            'partai_id' => 2,
            'paslon_id' => 1,
        ]);
        Pengusung::create([
            'partai_id' => 8,
            'paslon_id' => 2,
        ]);
        Pengusung::create([
            'partai_id' => 1,
            'paslon_id' => 2,
        ]);
        Pengusung::create([
            'partai_id' => 6,
            'paslon_id' => 2,
        ]);
        Pengusung::create([
            'partai_id' => 8,
            'paslon_id' => 3,
        ]);
        Pengusung::create([
            'partai_id' => 7,
            'paslon_id' => 3,
        ]);
        Pengusung::create([
            'partai_id' => 6,
            'paslon_id' => 3,
        ]);
        Pengusung::create([
            'partai_id' => 2,
            'paslon_id' => 4,
        ]);
        Pengusung::create([
            'partai_id' => 3,
            'paslon_id' => 4,
        ]);
        Pengusung::create([
            'partai_id' => 4,
            'paslon_id' => 4,
        ]);
        Pengusung::create([
            'partai_id' => 1,
            'paslon_id' => 4,
        ]);
    }
}
