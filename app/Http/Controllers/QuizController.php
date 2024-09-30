<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        return redirect()->route('quiz.question', ['questionNumber' => 0]);
    }

    private function getQuestions()
    {
        return [
            [
                'question' => 'Sebagai gubernur, kebijakan apa yang akan Anda prioritaskan untuk meningkatkan kesejahteraan masyarakat?',
                'options' => [
                    'A' => ['text' => 'Memperkuat program kebudayaan lokal untuk melestarikan warisan budaya', 'category' => 'Budaya'],
                    'B' => ['text' => 'Meningkatkan investasi infrastruktur untuk mendukung pertumbuhan ekonomi', 'category' => 'Ekonomi'],
                    'C' => ['text' => 'Memperkuat sistem keamanan daerah melalui patroli rutin dan pelatihan aparat', 'category' => 'Keamanan dan Pertahanan'],
                    'D' => ['text' => 'Membangun lebih banyak fasilitas kesehatan di pedesaan', 'category' => 'Kesehatan'],
                ]
            ],
            [
                'question' => 'Jika Anda harus mengalokasikan dana daerah, di mana Anda akan menginvestasikan dana terbesar?',
                'options' => [
                    'A' => ['text' => 'Pengembangan fasilitas kesehatan di seluruh daerah', 'category' => 'Kesehatan'],
                    'B' => ['text' => 'Peningkatan sarana pendidikan dan pelatihan keterampilan budaya', 'category' => 'Pendidikan, Budaya'],
                    'C' => ['text' => 'Membangun infrastruktur pertanian untuk mendukung perekonomian daerah', 'category' => 'Pertanian, Ekonomi'],
                    'D' => ['text' => 'Penerapan teknologi untuk keamanan dan pertahanan daerah', 'category' => 'Keamanan dan Pertahanan, Teknologi'],
                ]
            ],
            [
                'question' => 'Apa langkah utama Anda untuk memajukan ekonomi daerah?',
                'options' => [
                    'A' => ['text' => 'Mendorong pariwisata budaya sebagai sumber pendapatan daerah', 'category' => 'Budaya, Ekonomi'],
                    'B' => ['text' => 'Menggalakkan investasi di sektor pertanian dan industri pengolahan hasil bumi', 'category' => 'Ekonomi, Pertanian'],
                    'C' => ['text' => 'Memperkuat keamanan untuk mendukung iklim investasi', 'category' => 'Keamanan dan Pertahanan, Ekonomi'],
                    'D' => ['text' => 'Mengimplementasikan teknologi digital untuk mendukung UMKM lokal', 'category' => 'Ekonomi, Teknologi'],
                ]
            ],
            [
                'question' => 'Bagaimana Anda akan menangani masalah kesehatan masyarakat di daerah terpencil?',
                'options' => [
                    'A' => ['text' => 'Membangun klinik keliling untuk melayani masyarakat terpencil', 'category' => 'Kesehatan'],
                    'B' => ['text' => 'Melakukan sosialisasi tentang kesehatan melalui program kebudayaan', 'category' => 'Budaya, Kesehatan'],
                    'C' => ['text' => 'Mendorong penggunaan teknologi telemedicine untuk meningkatkan layanan kesehatan jarak jauh', 'category' => 'Kesehatan, Teknologi'],
                    'D' => ['text' => 'Mengutamakan pembangunan infrastruktur untuk mempermudah akses ke pelayanan kesehatan', 'category' => 'Kesehatan, Lingkungan'],
                ]
            ],
            [
                'question' => 'Dalam rangka menjaga stabilitas daerah, apa prioritas utama Anda?',
                'options' => [
                    'A' => ['text' => 'Meningkatkan patroli keamanan dan kerjasama antar-aparat keamanan', 'category' => 'Keamanan dan Pertahanan'],
                    'B' => ['text' => 'Mengembangkan teknologi pemantauan wilayah untuk meningkatkan keamanan', 'category' => 'Keamanan dan Pertahanan, Teknologi'],
                    'C' => ['text' => 'Menggalakkan pendidikan budaya dan kebhinekaan untuk mencegah konflik sosial', 'category' => 'Budaya, Keamanan dan Pertahanan, Pendidikan'],
                    'D' => ['text' => 'Memastikan ketahanan pangan dengan mendukung pertanian lokal', 'category' => 'Pertanian, Keamanan dan Pertahanan'],
                ]
            ],
            [
                'question' => 'Bagaimana Anda akan mengatasi masalah polusi di kota-kota besar di wilayah Anda?',
                'options' => [
                    'A' => ['text' => 'Menggalakkan penggunaan transportasi umum dan ramah lingkungan', 'category' => 'Lingkungan, Teknologi'],
                    'B' => ['text' => 'Memperketat regulasi industri untuk mengurangi polusi', 'category' => 'Lingkungan, Ekonomi'],
                    'C' => ['text' => 'Menanam lebih banyak pohon dan menciptakan ruang hijau di perkotaan', 'category' => 'Lingkungan'],
                    'D' => ['text' => 'Mengedukasi masyarakat tentang pentingnya pengelolaan sampah', 'category' => 'Lingkungan, Pendidikan'],
                ]
            ],
            [
                'question' => 'Apa yang akan Anda lakukan untuk meningkatkan daya saing tenaga kerja di daerah?',
                'options' => [
                    'A' => ['text' => 'Meningkatkan kualitas pendidikan dengan kerjasama universitas dan industri', 'category' => 'Pendidikan, Ekonomi'],
                    'B' => ['text' => 'Memberikan pelatihan teknologi untuk mempersiapkan tenaga kerja menghadapi revolusi industri 4.0', 'category' => 'Pendidikan, Teknologi'],
                    'C' => ['text' => 'Mengembangkan pusat keterampilan bagi para petani dan nelayan', 'category' => 'Pendidikan, Pertanian'],
                    'D' => ['text' => 'Menyediakan beasiswa pendidikan tinggi untuk generasi muda berbakat', 'category' => 'Pendidikan'],
                ]
            ],
            [
                'question' => 'Langkah apa yang Anda ambil untuk meningkatkan pertanian daerah?',
                'options' => [
                    'A' => ['text' => 'Mendorong penggunaan pupuk organik dan teknologi ramah lingkungan', 'category' => 'Pertanian, Lingkungan'],
                    'B' => ['text' => 'Mengembangkan pasar digital untuk hasil pertanian lokal', 'category' => 'Pertanian, Teknologi, Ekonomi'],
                    'C' => ['text' => 'Melindungi lahan pertanian dari alih fungsi yang tidak terkontrol', 'category' => 'Pertanian, Keamanan dan Pertahanan'],
                    'D' => ['text' => 'Memperbanyak pelatihan bagi petani untuk meningkatkan keterampilan', 'category' => 'Pertanian, Pendidikan'],
                ]
            ],
            [
                'question' => 'Bagaimana Anda akan mempromosikan budaya lokal di era digital?',
                'options' => [
                    'A' => ['text' => 'Membuat platform digital untuk memperkenalkan budaya lokal ke dunia', 'category' => 'Budaya, Teknologi'],
                    'B' => ['text' => 'Menyelenggarakan festival budaya rutin dengan menggunakan teknologi siaran langsung', 'category' => 'Budaya'],
                    'C' => ['text' => 'Menggalakkan pendidikan seni dan budaya di sekolah-sekolah', 'category' => 'Budaya, Pendidikan'],
                    'D' => ['text' => 'Mendorong wisata budaya dengan membangun infrastruktur yang memadai', 'category' => 'Budaya, Ekonomi'],
                ]
            ],
            [
                'question' => 'Apa yang Anda anggap paling penting untuk mendukung inovasi teknologi di daerah Anda?',
                'options' => [
                    'A' => ['text' => 'Membangun pusat penelitian dan pengembangan teknologi', 'category' => 'Teknologi, Ekonomi'],
                    'B' => ['text' => 'Menyediakan beasiswa dan pelatihan di bidang teknologi untuk generasi muda', 'category' => 'Teknologi, Pendidikan'],
                    'C' => ['text' => 'Mengembangkan infrastruktur digital untuk memfasilitasi akses teknologi', 'category' => 'Teknologi, Keamanan dan Pertahanan'],
                    'D' => ['text' => 'Mendorong kemitraan antara pemerintah dan perusahaan teknologi untuk proyek-proyek inovatif', 'category' => 'Teknologi, Ekonomi'],
                ]
            ]
        ];
    }

    public function showQuestion($questionNumber)
    {
        $questions = $this->getQuestions();

        if (!isset($questions[$questionNumber])) {
            return redirect()->route('quiz.results'); // Jika tidak ada soal lagi, arahkan ke halaman hasil
        }

        $question = $questions[$questionNumber];
        return view('quiz.question', [
            'question' => $question,
            'currentQuestionNumber' => $questionNumber
        ]);
    }

    public function submitAnswer(Request $request, $questionNumber)
    {
        $questions = $this->getQuestions();
        $answer = $request->input('answer');

        if (!isset($questions[$questionNumber]['options'][$answer])) {
            return back()->with('error', 'Jawaban tidak valid');
        }

        $selectedOption = $questions[$questionNumber]['options'][$answer];
        $category = $selectedOption['category'];

        $scores = session()->get('scores', []);
        foreach (explode(',', $category) as $cat) {
            $cat = trim($cat);
            if (!isset($scores[$cat])) {
                $scores[$cat] = 0;
            }
            $scores[$cat] += 1;
        }

        session()->put('scores', $scores);

        if ($questionNumber + 1 < count($questions)) {
            return redirect()->route('quiz.question', ['questionNumber' => $questionNumber + 1]);
        } else {
            return redirect()->route('quiz.results');
        }
    }

    public function showResults()
    {
        $scores = session()->get('scores', []);
        arsort($scores);
        $topCategories = array_keys(array_slice($scores, 0, 3, true));

        return view('quiz.results', [
            'scores' => $scores,
            'topCategories' => $topCategories,
        ]);
    }

    public function resetQuiz()
    {
        session()->forget('scores');
        return redirect()->route('quiz.home');
    }
}
