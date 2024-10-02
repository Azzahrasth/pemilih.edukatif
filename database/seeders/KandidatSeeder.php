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
        $kandidat = [
    [
        'nama' => 'Rahmat Mirzani Djausal, S.T.,M.M.',
        'image' => 'https://tse3.mm.bing.net/th?id=OIP.tPlt-HHKcSoaK8MV1Ehb_QAAAA&pid=Api&P=0&h=180',
        'tempat_lahir' => 'Kotabumi',
        'tanggal_lahir' => '1980-03-18',
        'latar_belakang' => 'Rahmat Mirzani Djausal saat ini berstatus Ketua DPD Gerindra Lampung. Ia juga merupakan Anggota DPRD Provinsi Lampung periode 2019-2024. Rahmat Mirzani Djausal adalah Anggota DPRD Lampung terpilih pada Pemilihan Legislatif (Pileg) 2024.',
        'pendidikan' => 'SD Negeri 1 Teladan Lampung Utara, 1986 - 1992$SMP Negeri 5 Kotabumi Lampung Utara, 1992 - 1995$SMA Negeri 2 Bandar Lampung, 1995 - 1998$S1 Universitas Tri Sakti, Sarjana Teknik, 1998 - 2005$S2 Universitas Lampung, Magister Manajemen, 2008 - 2012',
        'jejak_karir' => 'PT. Tiga Satu Mandiri Prima, 2005$PT. Rindang Tiga Satu, 2006',
        'prestasi' => 'Youth Awards Indonesia Sebagai Pelopor Pengusaha Muda di Provinsi Lampung - Lembaga Prestasi Indonesia Dunia dan Hiapolo Filantropi Indonesia (2021)$Inisiator Olahraga Indonesia - PWI (Persatuan Wartawan Indonesia) Pusat (2022)$Pendiri Tim E-Sport “The Pillars” - (2019)',
        'organisasi' => 'DPD Partai Gerindra Provinsi Lampung, Ketua, 2022 - 2027$KNPI (Komite Nasional Pemuda Indonesia) Provinsi Lampung, Wakil Ketua, 2009 - 2012$HKTI (Himpunan Kerukunan Tani Indonesia) Provinsi Lampung, Ketua, 2012 - 2023$BPD HIPMI (Himpunan Pengusaha Muda Indonesia) Provinsi Lampung, Ketua, 2008 - 2011$BPP HIPMI (Himpunan Pengusaha Muda Indonesia), Wakil Bendahara, 2011 - 2014$PII (Persatuan Insinyur Indonesia), Anggota, 2014 - 2017$Persatuan Baseball Softball (PERBASASI) Prov. Lampung, Ketua, 2007 - 2022$PD DMI (Dewan Majid Indonesia) Kota Bandar Lampung, Ketua, 2022 - 2027$Persatuan Golf Indonesia (PGI) Provinsi Lampung, Ketua, 2023 - 2028$Ikatan Pencak Silat Indonesia (IPSI) Provinsi Lampung, Dewan Kehormatan, 2020 - 2025$Klub Sepak Bola TS Saiburai Lampung, Pembina, 2017 - 2027$Asosiasi Pengusaha Konstruksi Nasional (ASPEKNAS) Provinsi Lampung, Sekretaris, 2007 - 2017$AABI (Asosiasi Aspal Beton Indonesia) Prov. Lampung, Wakil Ketua, 2009 - 2017',
        'paslon_id' => 1
    ],
    [
        'nama' => 'dr. Jihan Nurlela, M.M.',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Senator_Jihan_Nurlela.jpg/330px-Senator_Jihan_Nurlela.jpg',
        'tempat_lahir' => 'Sumberrejo',
        'tanggal_lahir' => '1994-04-22',
        'latar_belakang' => 'dr. Jihan Nurlela Chalim, M.M. (lahir 22 April 1994) adalah dokter dan politikus Indonesia yang menjabat sebagai Anggota Anggota DPD-RI Dapil Lampung periode 2019–2024 yang menjabat sejak 1 Oktober 2019. Ia memperoleh suara sebanyak 810.373 suara.',
        'pendidikan' => 'S2 Universitas Saburai, Magister Manajemen, 2021 - 2023$SD Negeri 2 Sumberrejo, Lampung Timur, 1999 - 2005$SMP Negeri 1 Waway Karya, Lampung Timur, 2005 - 2008$S1 Universitas Lampung, Sarjana Kedokteran, 2011 - 2015$SMA Negeri 1 Mayong, Kab. Jepara, Jawa Tengah, 2008 - 2011$S1 Universitas Lampung, Gelar Profesi, 2015 - 2017',
        'jejak_karir' => 'Anggota Dewan Perwakilan Daerah Republik Indonesia, 2019',
        'prestasi' => '-',
        'organisasi' => 'Pengurus Pusat Fatayat NU, Kepala Bidang, 2022 - 2027$DPW IKAPPI (Ikatan Pedagang Pasar Indonesia) Lampung, Ketua, 2020 - 2026$Pengurus Harian Satuan Komunitas Pramuka Ma’arif (Sako Ma’arif) Provinsi Lampung, Ketua, 2023 - 2025$Ikatan Dokter Indonesis (IDI) Wilayah Lampung, Anggota, 2022 - 2025$Asosiasi Senam Kebugaran Indonesia (ASKI), Dewan Pembina, 2021 - 2025$Lembaga Kemaslahatan Keluarga NU (LKKNU) Lampung Timur, Penasihat, 2023 - 2025$Pergerakan Mahasiswa Ismal Indonesia (PMII) Lampung, Alumni, 2024 - 2024$Pimpinan Wiayah Sako Ma’arif Lampung, Ketua, 2024 - 2029',
        'paslon_id' => 1
    ],
    [
        'nama' => 'Ir. Arinal Djunaidi',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Gubernur_Lampung_Arinal_Djunaidi.jpg/330px-Gubernur_Lampung_Arinal_Djunaidi.jpg',
        'tempat_lahir' => 'Anjung Karang',
        'tanggal_lahir' => '1956-06-17',
        'latar_belakang' => 'Dr. (H.C.) Ir. H. Arinal Djunaidi (lahir 17 Juni 1956) adalah politikus Indonesia dan mantan pegawai negeri sipil yang sedang menjabat Gubernur Lampung periode 2019–2024 bersama Chusnunia Chalim sebagai Wakil Gubernur Lampung. Sebelum menduduki jabatannya sebagai gubernur, Arinal pernah menjabat sebagai Sekretaris Daerah provinsi Lampung periode 2014–2016.',
        'pendidikan' => 'S1 Universitas Lampung, Ir. Agronomi/Budi Daya Pertanian, 1975 - 1981$SMA SLTA Kejuruan, 1971 - 1975$SMP SMPN 2, 1968 - 1971$SD SDN 17, 1962 - 1968',
        'jejak_karir' => 'Gubernur Lampung ke -10, 2019 - 2024$Sekertaris Daerah Provinsi Lampung',
        'prestasi' => '-',
        'organisasi' => 'Unila, Pengurus Dewan Mahasiswa Unila, 1977 - 1978$Fakultas Pertanian Unila, Ketua Umum Senat Mahasiswa, 1978 - 1981$Hmi Lampung, Ketua Umum Hmi Lampung, 1981 - 1982$Hipmi Lampung, Wakil Ketua Hipmi Lampung, 1982 - 1983$Gapensi Lampung, Komisaris Gapensi Lampung, 1983 - 1985$Knpi Lampung, Wakil Ketua Knpi Lampung, 1985 - 1992$Pii Lampung, Sekretaris Umum Pii, 1992 - 1996',
        'paslon_id' => 2
    ],
    [
        'nama' => 'Ir. H. Sutono, MM.',
        'image' => 'http://pantare.id/wp-content/uploads/2022/12/Sutono.jpg',
        'tempat_lahir' => 'Karang Anyar',
        'tanggal_lahir' => '1958-07-28',
        'latar_belakang' => 'Pengalaman yang luas dan beragam, Sutono memiliki latar belakang yang kuat dalam administrasi dan manajemen sektor publik. Selama bertahun-tahun, ia memegang berbagai posisi penting seperti Kepala Sekretariat Badan Koordinasi Penyuluhan Pertanian, Perikanan, dan Kehutanan Provinsi Lampung, Sekretaris Daerah Kabupaten Lampung Selatan, dan Sekretaris Daerah Provinsi Lampung.',
        'pendidikan' => 'S2 Universitas Satyagama Jakarta, M.M., 1997 - 1999$S1 Institut Pertanian Bogor, Ir., 1979 - 1983$SMA SMA Negeri Karang Anyar, Jawa Tengah, 1974 - 1977$SMP SMP Negeri Karang Anyar, Jawa Tengah, 1971 - 1974$SD SD Negeri Karang Anyar, Jawa Tengah, 1965 - 1971',
        'jejak_karir' => 'Staf di Dit Taman Nasional dan Hutan Wisata, Dephut, Bogor, 1983$Kasi Pemanfaatan di Taman Nasional Bukit Barisan Selatan, Kota Agung, 1987$Kasubag Evlap di Ditjen PHPA, Dephut, Jakarta, 1992$Kasi Penyusunan Program dan Anggaran Pembangunan, Ditjen PHPA, Dephut, Jakarta, 1994$Kepala Sub Balai KSDA DKI Jakarta, 1998$Kepala Subdivisi Bina Program di Dinas Kehutanan Provinsi Lampung, 1999$Kasubdit Perlindungan Hutan, Dishut Provinsi Lampung, 2003$Wakil Kepala Dishut Provinsi Lampung dan Plt Kepala Sekretariat BPBA Provinsi Lampung, 2007 - 2008$Kepala Sekretariat Badan Koordinasi Penyuluhan Pertanian, Perikanan, dan Kehutanan Provinsi Lampung, 2008$Kepala Dinas Perkebunan Provinsi Lampung, 2009 - 2010$Asisten untuk Bidang Ekonomi dan Pembangunan di Pemerintah Daerah Provinsi Lampung, 2010$Sekretaris Daerah Kabupaten Lampung Selatan, 2010 - 2012$Kepala Dinas Perkebunan di Provinsi Lampung, 2012 - 2013$Sekretaris Daerah di Kabupaten Lampung Selatan, 2013 - 2015$Kepala Dinas Kehutanan Provinsi Lampung, 2016$Sekretaris Daerah di Provinsi Lampung, 2016 - 2018$Sekretaris Umum DPD PDI Perjuangan Lampung, 2019 - 2024',
        'prestasi' => "-",
        'organisasi' => 'Dpd Himpunan Alumni Ipb Lampung, Wakil Ketua, 2002 - 2005$Dpd Himpunan Alumni Ipb Lampung, Ketua, 2005 - 2020$Saka Wanabhakti Lampung, Ketua, 2007 - 2010$Dpw Perhiptani Lampung, Wakil Ketua, 2011 - 2016$Dpw Perhiptani Lampung, Ketua, 2016 - 2023$Dpd Pdi Perjuangan Lampung, Wakil Ketua Bidang Pertanian, 2019 - 2022$Dpd Pdi Perjuangan Lampung, Sekretaris, 2022 - 2025',
        'paslon_id' => 2,
    ],
    [
        'nama' => 'Andra Soni, S.M., M.AP',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Anggota_DPRD_Banten_Andra_Soni.jpg/220px-Anggota_DPRD_Banten_Andra_Soni.jpg',
        'tempat_lahir' => 'Payakumbuh',
        'tanggal_lahir' => '1976-08-12',
        'latar_belakang' => 'Andra Soni, S.M., M.A.P. (lahir 12 Agustus 1976) adalah seorang pengusaha dan politikus Indonesia. Saat ini ia menjabat sebagai Ketua DPRD Provinsi Banten sejak 2019. Seorang kader Partai Gerakan Indonesia Raya, Andra saat ini memegang posisi ketua DPD Gerindra Provinsi Banten.',
        'pendidikan' => 'SD Teladan Kotabumi, 1992$SMP 5 Kotabumi, 1995$SMA 2 Tanjung Karang, 1998$S1 Universitas Trisakti, Teknik Mesin, 2005$S2 Universitas Lampung, Magister Manajemen, 2012',
        'jejak_karir' => 'Ketua Dewan Perwakilan Rakyat Daerah Provinsi Banten ke-5, 2019$Anggota Dewan Perwakilan Rakyat Daerah Provinsi Banten, 2014$Ketua DPD Partai Gerindra Banten, 2023',
        'prestasi' => '-',
        'organisasi' => 'BPC Hipmi Bandar Lampung, 2007 - 2008$BPD Hipmi Lampung, 2008 - 2011$BPP Hipmi, 2011 - 2014$HKTI Provinsi Lampung, 2013 - Sekarang$KNPI Provinsi Lampung, 2009 - 2012$LPJKD Provinsi Lampung, 2009 - 2012$KADIN Bandar Lampung$PP PII (Persatuan Insinyur Indonesia), 2013 - 2015$ASPEKNAS Provinsi Lampung, 2009 - 2019$AABI Provinsi Lampung, 2009 - 2013$Gerindra Provinsi Lampung',
        'paslon_id' => 3
    ],
    [
        'nama' => 'Dr. Achmad Dimyati Natakusumah, S.H., M.H.',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Dimyati_Natakusumah%2C_PKS_candidate_for_Banten_I_in_2024.jpg/220px-Dimyati_Natakusumah%2C_PKS_candidate_for_Banten_I_in_2024.jpg',
        'tempat_lahir' => 'Tangerang',
        'tanggal_lahir' => '1966-09-17',
        'latar_belakang' => 'Dr. H. Raden Achmad Dimyati Natakusumah S.H., M.H., M.Si. (lahir 17 September 1966) merupakan seorang politikus Indonesia. Ia pernah menjabat sebagai Wakil Ketua MPR RI dari 4 Juli 2014 hingga 1 Oktober 2014. Ia juga pernah menjadi Bupati Pandeglang periode 2000-2005 dan 2005-2009.',
        'pendidikan' => 'SDN 3 Labuan Pandeglang, 1973 - 1979$SMP Negeri 1 Pandeglang, 1979 - 1982$SMA Negeri 1 Pandeglang, 1982 - 1985$D3 WAIC Pert. WA, 1985 - 1987$S1 Universitas Indonesia Esa Unggul, S.H., 2000 - 2004$S2 Universitas Indonesia, M.Si., 2004 - 2006$S2 Universitas Pasundan, M.H., 2006 - 2007$S3 Universitas Padjajaran, Dr., 2007 - 2012',
        'jejak_karir' => 'Wakil Ketua Majelis Permusyawaratan Rakyat Republik Indonesia, 2014$Anggota Dewan Perwakilan Rakyat Republik Indonesia, 2019$Bupati Pandeglang ke-29, 2000 - 2009',
        'prestasi' => '-',
        'organisasi' => 'Ketua Hipmi Kab. Pandeglang, 1990 - 1995$Kadin Kab. Pandeglang, Ketua, 1990 - 1995$Gapensi Kab. Pandeglang, Bendahara, 1990 - 1995$Kadin Jawa Barat, Ketua Bidang Dana, 1995 - 2000$Hipmi Jawa Barat, Ketua, 1995 - 2000$Persipan, Ketua, 2000 - 2010$Koni Kab. Pandeglang, Ketua, 2000 - 2010$PPP Banten, Ketua Majelis Pakar, 2001 - 2006$PPP Banten, Ketua DPW, 2006 - 2011$PPP, Ketua DPP, 2011 - 2019$PKS, Anggota, 2019 - 2024',
        'paslon_id' => 3
    ],
    [
        'nama' => 'Dr. Airin Rachmi Diani, SH., MH',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Mayor_of_South_Tangerang_Airin_Rachmi_Diany.jpg/250px-Mayor_of_South_Tangerang_Airin_Rachmi_Diany.jpg',
        'tempat_lahir' => 'Banjar',
        'tanggal_lahir' => '1976-08-28',
        'latar_belakang' => 'Dr. Hj. Airin Rachmi Diany, S.H., M.H. (lahir 28 Agustus 1976) adalah Wali Kota Tangerang Selatan sejak 20 April 2011 hingga 20 April 2021. Airin merupakan alumni Fakultas Hukum Universitas Parahyangan, Bandung. Semasa kuliah, Airin pernah menjadi pemenang Mojang Parahyangan Bandung (1995) dan Mojang Provinsi Jawa Barat (1995).',
        'pendidikan' => 'SMA SMAN 20 Bandung, 1991 - 1994$S1 Universitas Parahyangan Bandung, S.H., 1994 - 1999$S2 Universitas Padjajaran Bandung, Spesialis Satu, 2000 - 2002$S2 Universitas Padjajaran Bandung, M.H., 2003 - 2005$S3 Universitas Padjajaran Bandung, Dr., 2019 - 2023',
        'jejak_karir' => 'Wali Kota Tangerang Selatan, 2011 - 2021',
        'prestasi' => 'Penghargaan Bakti Koperasi dan Usaha Kecil dan Menengah - Kementerian Koperasi, Usaha Kecil dan Menengah (2013)$Penghargaan Manggala Karya Kencana - Badan Kependudukan dan Keluarga Berencana Nasional (2013)$Lencana Darma Bakti Pramuka - Presiden Republik Indonesia (2013)$Penghargaan Karta Adhi Dharma Karang Taruna - Kementerian Sosial (2014)$Penghargaan Satya Lencana Pembangunan',
        'organisasi' => 'Dewan Pengurus Pusat (DPP) Partai Golkar, Ketua Bidang Perempuan, 2019 - 2024$Partai Golkar Tangerang Selatan, Ketua, 2020 - 2025$Taekwondo Indonesia Provinsi Banten, Ketua Umum, 2024 - 2028$Asosiasi Pemerintahan Kota Seluruh Indonesia, Ketua Dewan Pengurus, 2016 - 2020$PMI Kota Tangerang Selatan, Ketua, 2009 - 2024',
        'paslon_id' => 4
    ],
    [
        'nama' => 'H. Ade  Sumardi, SE',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Wakil_Bupati_Lebak_Ade_Sumardi.jpg/210px-Wakil_Bupati_Lebak_Ade_Sumardi.jpg',
        'tempat_lahir' => 'Lebak',
        'tanggal_lahir' => '1972-07-27',
        'latar_belakang' => 'H. Ade Sumardi, S.E., M.Si. (lahir 27 Juli 1972) adalah seorang wirausahawan dan politikus berkebangsaan Indonesia. Ade pernah menjadi Wakil Bupati Lebak selama dua periode berturut-turut: 2014–2019 dan 2019–2024. Ade sudah menjadi legislator di Dewan Perwakilan Rakyat Daerah Kabupaten Lebak sejak 1999 dan pernah menjabat ketua di tahun 2009 sampai 2013.',
        'pendidikan' => 'SD Negeri Citorek III, 1979 - 1985$SMP Negeri 01 Cipanas, 1986 - 1989$SMA Negeri 01 Rangkasbitung, 1989 - 1992$S1 Fakultas Ekonomi Universitas Islam Nusantara (UNINUS), S.E., 1992 - 1998',
        'jejak_karir' => 'Wakil Bupati Lebak, 2014 - 2023',
        'prestasi' => 'Lencana Darma Bhakti - Kwartir Nasional (2019)$Stunting Heroes Awarding 2002 Kategori Ketua Pelaksana Tim Percepatan Penurunan Stunting (TPPS) Kabupaten/Kota Terbaik - BKKBN (2022)$Lencana Melati - Kwartir Nasional (2023)',
        'organisasi' => 'DPD PDI Perjuangan Provinsi Banten, Ketua, 2019 - 2025$DPC PDI Perjuangan Kab. Lebak, Bendahara, 2000 - 2005$Koordinator wilayah zona II PDI Perjuangan, Ketua, 1998 - 2000$DPC PDI Perjuangan Kab. Lebak, Ketua, 2005 - 2019$BNK (Badan Narkotika Kabupaten) Kab. Lebak, Ketua, 2014 - 2023$Komisi Penanggulangan Aids (KPA) Kab. Lebak, Ketua, 2014 - 2023$Kwartir Cabang Gerakan Pramuka Kab. Lebak, Ketua, 2014 - 2025$MPO PPI (Purna Paskibraka Indonesia) Kab. Lebak, Ketua, 2014 - 2025$Pendiri dan Penasihat SPL (Saduluran Peternak Lebak), Pendiri dan Penasihat, 2019 - 2025$Tim Percepatan Penurunan Stunting (TP2S) Kab. Lebak, Ketua, 2019 - 2023$ESI (e-Sport Indonesia) Kab. Lebak, Pembina, 2014 - 2024$MPMK (Majelis Permusyawaratan Masyarakat Kasepuhan), Penasihat, 2020 - 2025$SABAKI (Kesatuan Adat Kasepuhan Banten Kidul), Penasihat, 2020 - 2025$HPDKI (Himpunan Peternak Kambing Indonesia) Prov. Banten, Penasihat, 2021 - 2025$GMC (Goat Milenial Community) Peternak Kambing Untuk Regional DKI, Jawa Barat dan Banten, Pendiri dan Penasihat, 2021 - 2025',
        'paslon_id' => 4
    ]
    ];

     foreach ($kandidat as $item) {
            Kandidat::create($item);
        }

    }
}
