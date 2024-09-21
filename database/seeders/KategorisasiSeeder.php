<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategorisasi;

class KategorisasiSeeder extends Seeder
{
    public function run()
    {
        $visiMisi = [
            ['visi_misi' => 'Lampung Adil Makmur Untuk Semua', 'kategori_isu' => 'Visi', 'paslon_id' => 1],
            ['visi_misi' => 'Bersama Lampung Maju Menuju Lampung Emas 2045', 'kategori_isu' => 'Visi', 'paslon_id' => 2],
            ['visi_misi' => 'Gerak cepat menuju Banten Unggul', 'kategori_isu' => 'Visi', 'paslon_id' => 3],
            ['visi_misi' => 'Banten semakin di depan', 'kategori_isu' => 'Visi', 'paslon_id' => 4],
            ['visi_misi' => 'Manusia Lampung yang sehat, terdidik, dan sejahtera', 'kategori_isu' => 'Kesehatan', 'paslon_id' => 1],
            ['visi_misi' => 'Lampung unggul dalam bidang inovasi dan teknologi', 'kategori_isu' => 'Teknologi', 'paslon_id' => 2],
            ['visi_misi' => 'Banten unggul dalam bidang inovasi dan teknologi', 'kategori_isu' => 'Teknologi', 'paslon_id' => 3],
            ['visi_misi' => 'Ekonomi yang tangguh dan berdikari', 'kategori_isu' => 'Ekonomi', 'paslon_id' => 3],
            ['visi_misi' => 'Hilangnya kemiskinan dan ketimpangan antarwilayah dari akarnya', 'kategori_isu' => 'Ekonomi', 'paslon_id' => 4],
            ['visi_misi' => 'Ekosistem digital yang mengutamakan akses internet cepat dan terjangkau', 'kategori_isu' => 'Teknologi', 'paslon_id' => 1],
            ['visi_misi' => 'Ekosistem digital yang mengutamakan akses internet cepat dan terjangkau', 'kategori_isu' => 'Teknologi', 'paslon_id' => 4],
            ['visi_misi' => 'Pembangunan ekonomi yang memperhatikan kelestarian lingkungan', 'kategori_isu' => 'Ekonomi', 'paslon_id' => 2],
            ['visi_misi' => 'Pembangunan ekonomi yang memperhatikan kelestarian lingkungan', 'kategori_isu' => 'Lingkungan', 'paslon_id' => 2],
            ['visi_misi' => 'Pembangunan ekonomi yang memperhatikan kelestarian lingkungan', 'kategori_isu' => 'Lingkungan', 'paslon_id' => 3],
            ['visi_misi' => 'Demokrasi terjaga melalui pemberantasan korupsi dan pemerintahan inklusif berlandaskan supremasi hukum', 'kategori_isu' => 'Keamanan dan Pertahanan', 'paslon_id' => 3],
            ['visi_misi' => 'Banten bangsa terhormat di kancah internasional, serta pertahanan yang tangguh dan modern', 'kategori_isu' => 'Keamanan dan Pertahanan', 'paslon_id' => 4],
            ['visi_misi' => 'Memperkokoh ideologi Pancasila, demokrasi, dan hak asasi manusia (HAM)', 'kategori_isu' => 'Budaya', 'paslon_id' => 1],
            ['visi_misi' => 'Memperkokoh ideologi Pancasila, demokrasi, dan hak asasi manusia (HAM)', 'kategori_isu' => 'Budaya', 'paslon_id' => 3],
            ['visi_misi' => 'Memantapkan sistem pertahanan keamanan negara dan mendorong kemandirian bangsa melalui swasembada pangan, energi, air, ekonomi syariah, ekonomi digital, ekonomi hijau, dan ekonomi biru', 'kategori_isu' => 'Keamanan dan Pertahanan', 'paslon_id' => 2],
            ['visi_misi' => 'Melanjutkan pengembangan infrastruktur dan meningkatkan lapangan kerja yang berkualitas, mendorong kewirausahaan, mengembangkan industri kreatif serta mengembangkan agro-maritim industri di sentra produksi melalui peran aktif koperasi', 'kategori_isu' => 'Ekonomi', 'paslon_id' => 3],
            ['visi_misi' => 'Memperkuat pembangunan sumber daya manusia (SDM), sains, teknologi, pendidikan, kesehatan, prestasi olahraga, kesetaraan gender, serta penguatan peran perempuan, pemuda (generasi milenial dan generasi Z), dan penyandang disabilitas', 'kategori_isu' => 'Pendidikan, Teknologi, Kesehatan', 'paslon_id' => 4],
            ['visi_misi' => 'Memperkuat pembelajaran kampus merdeka belajar', 'kategori_isu' => 'Pendidikan', 'paslon_id' => 4],
            ['visi_misi' => 'Memperkuat pembangunan sumber daya manusia (SDM), sains, teknologi, pendidikan, kesehatan, prestasi olahraga, kesetaraan gender, serta penguatan peran perempuan, pemuda (generasi milenial dan generasi Z), dan penyandang disabilitas', 'kategori_isu' => 'Pendidikan, Teknologi, Kesehatan', 'paslon_id' => 1],
            ['visi_misi' => 'Memperkuat pembelajaran kampus merdeka belajar', 'kategori_isu' => 'Pendidikan', 'paslon_id' => 2],
            ['visi_misi' => 'Melanjutkan hilirisasi dan mengembangkan industri berbasis sumber daya alam untuk meningkatkan nilai tambah di dalam negeri', 'kategori_isu' => 'Ekonomi', 'paslon_id' => 1],
            ['visi_misi' => 'Membangun dari desa dan dari bawah untuk pertumbuhan ekonomi, pemerataan ekonomi, dan pemberantasan kemiskinan', 'kategori_isu' => 'Ekonomi', 'paslon_id' => 2],
            ['visi_misi' => 'Memperkuat reformasi politik, hukum, dan birokrasi, serta memperkuat pencegahan dan pemberantasan korupsi, narkoba, judi, dan penyelundupan', 'kategori_isu' => 'Keamanan dan Pertahanan', 'paslon_id' => 1],
            ['visi_misi' => 'Memperkuat penyelarasan kehidupan yang harmonis dengan lingkungan, alam dan budaya, serta peningkatan toleransi antarumat beragama untuk mencapai masyarakat yang adil dan makmur', 'kategori_isu' => 'Budaya', 'paslon_id' => 4],
            ['visi_misi' => 'Memperkuat penyelarasan kehidupan yang harmonis dengan lingkungan, alam dan budaya, serta peningkatan toleransi antarumat beragama untuk mencapai masyarakat yang adil dan makmur', 'kategori_isu' => 'Lingkungan', 'paslon_id' => 4],
            ['visi_misi' => 'Memperkuat penyelarasan kehidupan yang harmonis dengan lingkungan, alam dan budaya, serta peningkatan toleransi antarumat beragama untuk mencapai masyarakat yang adil dan makmur', 'kategori_isu' => 'Budaya', 'paslon_id' => 2],
            ['visi_misi' => 'Memperkuat penyelarasan kehidupan yang harmonis dengan lingkungan, alam dan budaya, serta peningkatan toleransi antarumat beragama untuk mencapai masyarakat yang adil dan makmur', 'kategori_isu' => 'Lingkungan', 'paslon_id' => 1],
            ['visi_misi' => 'Memastikan Ketersediaan Kebutuhan Pokok dan Biaya Hidup Murah melalui Kemandirian Pangan, Ketahanan Energi, dan Kedaulatan Air', 'kategori_isu' => 'Ekonomi', 'paslon_id' => 1],
            ['visi_misi' => 'Mengentaskan Kemiskinan dengan Memperluas Kesempatan Berusaha dan Menciptakan Lapangan Kerja, Mewujudkan Upah Berkeadilan, Menjamin Kemajuan Ekonomi Berbasis Kemandirian dan Pemerataan, serta Mendukung Korporasi Indonesia Berhasil di Negeri Sendiri dan Bertumbuh di Kancah Global', 'kategori_isu' => 'Ekonomi', 'paslon_id' => 2],
            ['visi_misi' => 'Mewujudkan Keadilan Ekologis Berkelanjutan untuk Generasi Mendatang', 'kategori_isu' => 'Ekonomi', 'paslon_id' => 3],
            ['visi_misi' => 'Membangun Kota dan Desa Berbasis Kawasan yang Manusiawi, Berkeadilan dan Saling Memajukan', 'kategori_isu' => 'Ekonomi', 'paslon_id' => 4],
            ['visi_misi' => 'Mewujudkan Manusia Lampung yang Sehat, Cerdas, Produktif, Berakhlak, dan Berbudaya', 'kategori_isu' => 'Kesehatan', 'paslon_id' => 2],
            ['visi_misi' => 'Mewujudkan Manusia Banten yang Sehat, Cerdas, Produktif, Berakhlak, dan Berbudaya', 'kategori_isu' => 'Kesehatan', 'paslon_id' => 4],
            ['visi_misi' => 'Mewujudkan Keluarga Banten yang Sejahtera dan Bahagia sebagai Akar Kekuatan Bangsa', 'kategori_isu' => 'Kesehatan', 'paslon_id' => 3],
            ['visi_misi' => 'Memperkuat Sistem Pertahanan dan Keamanan Negara, serta Meningkatkan Peran dan Kepemimpinan Banten dalam Arena Politik Global untuk Mewujudkan Kepentingan Nasional dan Perdamaian Dunia', 'kategori_isu' => 'Keamanan dan Pertahanan', 'paslon_id' => 3],
            ['visi_misi' => 'Memulihkan Kualitas Demokrasi, Menegakkan Hukum dan HAM, Memberantas Korupsi Tanpa Tebang Pilih, serta Menyelenggarakan Pemerintahan yang Berpihak pada Rakyat', 'kategori_isu' => 'Keamanan dan Pertahanan', 'paslon_id' => 4],
            ['visi_misi' => 'Memperkuat Sistem Pertahanan dan Keamanan Negara, serta Meningkatkan Peran dan Kepemimpinan Lampung dalam Arena Politik Global untuk Mewujudkan Kepentingan Nasional dan Perdamaian Dunia', 'kategori_isu' => 'Keamanan dan Pertahanan', 'paslon_id' => 1],
            ['visi_misi' => 'Memulihkan Kualitas Demokrasi, Menegakkan Hukum dan HAM, Memberantas Korupsi Tanpa Tebang Pilih, serta Menyelenggarakan Pemerintahan yang Berpihak pada Rakyat', 'kategori_isu' => 'Keamanan dan Pertahanan', 'paslon_id' => 2],
            ['visi_misi' => 'Mendorong kemandirian bangsa melalui swasembada pangan, dengan peningkatan produktivitas pertanian berbasis teknologi modern dan ramah lingkungan', 'kategori_isu' => 'Pertanian', 'paslon_id' => 1],
            ['visi_misi' => 'Mengembangkan agro-maritim industri di sentra produksi melalui peran aktif koperasi dan meningkatkan kesejahteraan petani', 'kategori_isu' => 'Pertanian', 'paslon_id' => 2],
            ['visi_misi' => 'Membangun ketahanan pangan nasional melalui revitalisasi sektor pertanian dan perbaikan infrastruktur irigasi', 'kategori_isu' => 'Pertanian', 'paslon_id' => 3],
            ['visi_misi' => 'Mewujudkan ketahanan pangan dengan memperkuat peran petani, peternak, dan nelayan dalam menciptakan ekonomi pedesaan yang berdaya saing', 'kategori_isu' => 'Pertanian', 'paslon_id' => 4],


        ];

        foreach ($visiMisi as $item) {
            Kategorisasi::create($item);
        }
    }
}

