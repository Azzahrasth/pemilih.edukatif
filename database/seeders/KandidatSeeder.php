<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kandidat;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kandidat::create([
            'nama' => 'John Doe',
            'image' => 'storage/images/avatar.png',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '1970-01-01',
            'latar_belakang' => 'Politikus',
            'pendidikan' => 'S1 Ilmu Politik',
            'jejak_karir' => 'Anggota DPR, Wali Kota',
            'prestasi' => 'Membangun 10 jembatan di kota',
            'kontroversi' => 'Dugaan korupsi 2015',
            'organisasi' => 'Partai XYZ',
            'paslon_id' => 1,
        ]);

        Kandidat::create([
            'nama' => 'Jane Smith',
            'image' => 'storage/images/avatar.png',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '1980-02-15',
            'latar_belakang' => 'Akademisi',
            'pendidikan' => 'S2 Ekonomi',
            'jejak_karir' => 'Dosen Ekonomi, Peneliti',
            'prestasi' => 'Peneliti terbaik nasional 2020',
            'kontroversi' => 'Komentar kontroversial tentang ekonomi',
            'organisasi' => 'Partai ABC',
            'paslon_id' => 1,
        ]);

        Kandidat::create([
            'nama' => 'Michael Brown',
            'image' => 'storage/images/avatar.png',
            'tempat_lahir' => 'Surabaya',
            'tanggal_lahir' => '1975-03-22',
            'latar_belakang' => 'Pengusaha',
            'pendidikan' => 'S1 Manajemen',
            'jejak_karir' => 'CEO Perusahaan Teknologi',
            'prestasi' => 'Mendirikan startup unicorn',
            'kontroversi' => 'Kontroversi dengan rekan bisnis',
            'organisasi' => 'Partai DEF',
            'paslon_id' => 2,
        ]);

        Kandidat::create([
            'nama' => 'Lisa White',
            'image' => 'storage/images/avatar.png',
            'tempat_lahir' => 'Medan',
            'tanggal_lahir' => '1982-05-12',
            'latar_belakang' => 'Aktivis',
            'pendidikan' => 'S1 Hukum',
            'jejak_karir' => 'Pengacara HAM, Aktivis Lingkungan',
            'prestasi' => 'Memenangkan kasus penting HAM',
            'kontroversi' => 'Terlibat dalam protes kontroversial',
            'organisasi' => 'Partai GHI',
            'paslon_id' => 2,
        ]);

        Kandidat::create([
            'nama' => 'Robert Green',
            'image' => 'storage/images/avatar.png',
            'tempat_lahir' => 'Makassar',
            'tanggal_lahir' => '1979-07-30',
            'latar_belakang' => 'Militer',
            'pendidikan' => 'S2 Strategi Pertahanan',
            'jejak_karir' => 'Komandan TNI, Penasehat Militer',
            'prestasi' => 'Memimpin operasi militer sukses',
            'kontroversi' => 'Kebijakan militer kontroversial',
            'organisasi' => 'Partai JKL',
            'paslon_id' => 3,
        ]);

        Kandidat::create([
            'nama' => 'Emily Black',
            'image' => 'storage/images/avatar.png',
            'tempat_lahir' => 'Semarang',
            'tanggal_lahir' => '1985-09-25',
            'latar_belakang' => 'Jurnalis',
            'pendidikan' => 'S1 Jurnalistik',
            'jejak_karir' => 'Reporter, Editor-in-Chief',
            'prestasi' => 'Memenangkan penghargaan jurnalisme investigasi',
            'kontroversi' => 'Artikel kontroversial tentang pemerintah',
            'organisasi' => 'Partai MNO',
            'paslon_id' => 3,
        ]);

        Kandidat::create([
            'nama' => 'David Blue',
            'image' => 'storage/images/avatar.png',
            'tempat_lahir' => 'Yogyakarta',
            'tanggal_lahir' => '1988-11-11',
            'latar_belakang' => 'Dokter',
            'pendidikan' => 'S2 Kedokteran',
            'jejak_karir' => 'Dokter Spesialis, Peneliti Medis',
            'prestasi' => 'Penemuan metode pengobatan baru',
            'kontroversi' => 'Pandangan kontroversial tentang vaksin',
            'organisasi' => 'Partai PQR',
            'paslon_id' => 4,
        ]);

        Kandidat::create([
            'nama' => 'Sophia Yellow',
            'image' => 'storage/images/avatar.png',
            'tempat_lahir' => 'Palembang',
            'tanggal_lahir' => '1990-04-18',
            'latar_belakang' => 'Pendidik',
            'pendidikan' => 'S2 Pendidikan',
            'jejak_karir' => 'Guru, Kepala Sekolah',
            'prestasi' => 'Mengembangkan kurikulum pendidikan inklusif',
            'kontroversi' => 'Kebijakan sekolah yang kontroversial',
            'organisasi' => 'Partai STU',
            'paslon_id' => 4,
        ]);
    }
}
