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
        Paslon::create([
            'nama' => 'John Doe - Jane Smith',
            'image' => 'storage/images/avatar-paslon.png',
            'kategori' => 'Gubernur',
            'daerah' => 'Jawa Barat',
            'target_sasaran' => 'Kemandirian pangan$Kemudahan akases hunian$Ketahanan energi$Kedaulatan air$Pengentasan Kemiskinan$Penciptaan lapangan kerja berkualitas',
            'motivasi' => 'Tiap kali ada panggilan tugas dari lingkungan masyarakat, kami selalu menyatakan siap dan menjalankan dengan sebaik-baiknya. Baik di lingkungan kampung, sekolah, ataupun kampus. Apalagi jika ada panggilan untuk mengabdi pada negara dan bangsa, maka kami nyatakan siap. Itulah rekam jejak dan perjalanan hidup kami. Ketika kesempatan itu Allah swt berikan maka kami pilih utk menjawab dan memenuhi panggilan negara itu. Kami memilih untuk ikut menjadi bagian yang secara aktif turut serta melunasi janji kemerdekaan kita: kemajuan, kesejahteraan, dan keadilan bagi seluruh rakyat Indonesia. Orang-tua orang-tua kami, menghibahkan hidupnya untuk menggulung kolonialisme dari bumi pertiwi. Atas rahmat dan hidayah dari Allah swt, mereka berhasil. Kini tanggung jawab kami sebagai generasi penerusnya adalah ikut serta dlm menggelar keadilan dan kesejahteraan bagi seluruh bangsa. Itulah motivasi kami. Semoga Allah swt meridloi, memudahkan dan membukakan jalan untuk keberhasilan bagi bangsa dan negara kita di masa depan.',
        ]);

        Paslon::create([
            'nama' => 'Michael Brown - Lisa White',
            'image' => 'storage/images/avatar-paslon.png',
            'kategori' => 'Gubernur',
            'daerah' => 'Jawa Barat',
            'target_sasaran' => 'Memajukan kinerja Pemerintahan untuk melunasi cita-cita abadi bangsa Indonesia$mengejar pelunasan target RPJPN Indonesia Emas 2045$Pemerataan ekonomi$Sumber daya alam berkelanjutan',
            'motivasi' => 'Kami percaya jika dikelola dengan baik, Indonesia memiliki peluang untuk menjadi negara maju dan makmur sesuai cita-cita Indonesia Emas 2045. Untuk mencapai Indonesia Emas 2045, mulai tahun 2025 dibutuhkan pertumbuhan ekonomi yang berkelanjutan di angka 6% hingga 7%. Pertumbuhan ini perlu didukung dengan penguatan peran pemerintah dalam roda ekonomi dan pembangunan bangsa sesuai falsafah Ekonomi Pancasila. Ini semua harus kita lakukan di tengah ketidakpastian ekonomi global, ketidakpastian geopolitik, dan krisis perubahan iklim yang sekarang sudah ada di tengah-tengah kita.',
        ]);

        Paslon::create([
            'nama' => 'Robert Green - Emily Black',
            'image' => 'storage/images/avatar-paslon.png',
            'kategori' => 'Gubernur',
            'daerah' => 'Jakarta',
            'target_sasaran' => 'Mempercepat Pembangunan Manusia Indonesia Unggul yang Berkualitas, Produktif dan Berkepribadian$Mempercepat Pemerataan Pembangunan Ekonomi$Mempercepat Pembangunan Sistem Digital Nasional',
            'motivasi' => 'Melihat Indonesia sedang menghadapi tantangan besar, tetapi sekaligus peluang, yaitu membludaknya orang-orang muda produktif yang sering disebut sebagai bonus demografi. Jika tidak dikelola dengan baik, bonus demografi akan berujung pada malapetaka demografi dimana orang-orang muda yang seyogyanya produktif menjadi pengangguran dan ini akan berujung kepada krisis sosial yang mengancam stabilitas bangsa. Oleh karena itu, agar bonus demografi menjadi keuntungan demografi, kita harus menyiapkan generasi muda kita menjadi manusia-manusia yang unggul yaitu sehat, cerdas, terampil, produktif dan berdaya. Komitmen membangun manusia Indonesia yang unggul menjadi prasyarat agar Indonesia bisa menjadi negara maritim maju sebelum tahun 2045, sebelum peluang bonus demografi ini hilang.',
        ]);
        Paslon::create([
            'nama' => 'David Blue - Sophia Yellow',
            'image' => 'storage/images/avatar-paslon.png',
            'kategori' => 'Gubernur',
            'daerah' => 'Jakarta',
            'target_sasaran' => 'Mempercepat Pembangunan Ekonomi Berdikari Berbasis Pengetahuan dan Nilai Tambah$Mempercepat Pelaksanaan Demokrasi Substantif, Penghormatan HAM,',
            'motivasi' => 'Tiap kali ada panggilan tugas dari lingkungan masyarakat, kami selalu menyatakan siap dan menjalankan dengan sebaik-baiknya. Baik di lingkungan kampung, sekolah, ataupun kampus. Apalagi jika ada panggilan untuk mengabdi pada negara dan bangsa, maka kami nyatakan siap. Itulah rekam jejak dan perjalanan hidup kami. Ketika kesempatan itu Allah swt berikan maka kami pilih utk menjawab dan memenuhi panggilan negara itu. Kami memilih untuk ikut menjadi bagian yang secara aktif turut serta melunasi janji kemerdekaan kita: kemajuan, kesejahteraan, dan keadilan bagi seluruh rakyat Indonesia. Orang-tua orang-tua kami, menghibahkan hidupnya untuk menggulung kolonialisme dari bumi pertiwi. Atas rahmat dan hidayah dari Allah swt, mereka berhasil. Kini tanggung jawab kami sebagai generasi penerusnya adalah ikut serta dlm menggelar keadilan dan kesejahteraan bagi seluruh bangsa. Itulah motivasi kami. Semoga Allah swt meridloi, memudahkan dan membukakan jalan untuk keberhasilan bagi bangsa dan negara kita di masa depan.',
        ]);

    }
}
