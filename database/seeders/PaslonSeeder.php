<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Paslon;

class PaslonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $paslon = [
            ['daerah' => 'Lampung'],
            ['daerah' => 'Lampung'],
            ['daerah' => 'Banten'],
            ['daerah' => 'Banten'],
        ];

         foreach ($paslon as $item) {
            Paslon::create($item);
        }

    }
}
