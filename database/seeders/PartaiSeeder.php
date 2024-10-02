<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partai;

class PartaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partai::create([
            'nama' => 'Partai Keadilan Sejahtera',
            'singkatan' => 'PKS',
            'image' => 'pks.png',
            'tanggal_dibentuk' => '1998-05-20',
            'deskripsi' => 'Partai Keadilan Sejahtera (PKS) adalah partai politik Islam di Indonesia.',
            'ketua_umum' => 'Ahmad Syaikhu',
            'sejarah' => 'PKS berdiri sebagai penerus Partai$Keadilan pada tahun 1998.',
            'ideologi' => 'Islamis'
        ]);

        Partai::create([
            'nama' => 'Partai Gerindra',
            'singkatan' => 'Gerindra',
            'image' => 'gerindra.png',
            'tanggal_dibentuk' => '2008-02-06',
            'deskripsi' => 'Partai Gerakan Indonesia Raya (Gerindra) adalah partai nasionalis yang didirikan oleh Prabowo Subianto.',
            'ketua_umum' => 'Prabowo Subianto',
            'sejarah' => 'Gerindra didirikan pada tahun 2008 dengan$visi untuk mengedepankan kepentingan rakyat.',
            'ideologi' => 'Nasionalis'
        ]);

        Partai::create([
            'nama' => 'Partai Demokrasi Indonesia Perjuangan',
            'singkatan' => 'PDIP',
            'image' => 'pdip.png',
            'tanggal_dibentuk' => '1973-01-10',
            'deskripsi' => 'Partai Demokrasi Indonesia Perjuangan (PDIP) adalah partai politik terbesar di Indonesia saat ini.',
            'ketua_umum' => 'Megawati Soekarnoputri',
            'sejarah' => 'PDIP merupakan kelanjutan dari Partai Nasional$Indonesia yang didirikan oleh Soekarno.',
            'ideologi' => 'Sosialis Demokratis'
        ]);

        Partai::create([
            'nama' => 'Partai Kebangkitan Bangsa',
            'singkatan' => 'PKB',
            'image' => 'pkb.png',
            'tanggal_dibentuk' => '1998-07-23',
            'deskripsi' => 'Partai Kebangkitan Bangsa (PKB) adalah partai yang didirikan oleh Nahdlatul Ulama.',
            'ketua_umum' => 'Muhaimin Iskandar',
            'sejarah' => 'PKB didirikan sebagai partai politik yang$mewakili aspirasi umat Islam, khususnya Nahdlatul Ulama.',
            'ideologi' => 'Islam Tradisionalis'
        ]);

        Partai::create([
            'nama' => 'Partai Keadilan Sejahtera',
            'singkatan' => 'PKS',
            'image' => 'pks.png',
            'tanggal_dibentuk' => '1998-05-20',
            'deskripsi' => 'Partai Keadilan Sejahtera (PKS) adalah partai politik Islam di Indonesia.',
            'ketua_umum' => 'Ahmad Syaikhu',
            'sejarah' => 'PKS berdiri sebagai penerus Partai$Keadilan pada tahun 1998.',
            'ideologi' => 'Islamis'
        ]);

        Partai::create([
            'nama' => 'Partai Gerindra',
            'singkatan' => 'Gerindra',
            'image' => 'gerindra.png',
            'tanggal_dibentuk' => '2008-02-06',
            'deskripsi' => 'Partai Gerakan Indonesia Raya (Gerindra) adalah partai nasionalis yang didirikan oleh Prabowo Subianto.',
            'ketua_umum' => 'Prabowo Subianto',
            'sejarah' => 'Gerindra didirikan pada tahun 2008$dengan visi untuk mengedepankan kepentingan rakyat.',
            'ideologi' => 'Nasionalis'
        ]);

        Partai::create([
            'nama' => 'Partai Demokrasi Indonesia Perjuangan',
            'singkatan' => 'PDIP',
            'image' => 'pdip.png',
            'tanggal_dibentuk' => '1973-01-10',
            'deskripsi' => 'Partai Demokrasi Indonesia Perjuangan (PDIP) adalah partai politik terbesar di Indonesia saat ini.',
            'ketua_umum' => 'Megawati Soekarnoputri',
            'sejarah' => 'PDIP merupakan kelanjutan dari$Partai Nasional Indonesia yang didirikan oleh Soekarno.',
            'ideologi' => 'Sosialis Demokratis'
        ]);

        Partai::create([
            'nama' => 'Partai Kebangkitan Bangsa',
            'singkatan' => 'PKB',
            'image' => 'pkb.png',
            'tanggal_dibentuk' => '1998-07-23',
            'deskripsi' => 'Partai Kebangkitan Bangsa (PKB) adalah partai yang didirikan oleh Nahdlatul Ulama.',
            'ketua_umum' => 'Muhaimin Iskandar',
            'sejarah' => 'PKB didirikan sebagai partai$politik yang mewakili aspirasi umat Islam, khususnya Nahdlatul Ulama.',
            'ideologi' => 'Islam Tradisionalis'
        ]);

    }
}
