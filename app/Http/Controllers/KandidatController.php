<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kandidat;
use DateTime;
use IntlDateFormatter;

class KandidatController extends Controller
{
    public function index()
    {
        $data = Kandidat::orderBy('id', 'asc')->get();
        return view('kandidat', ['kandidats' => $data]);
    }

    
    public function show($id)
{
    $kandidat = Kandidat::find($id);

    if (!$kandidat) {
        abort(404);
    }

    // Menghitung umur
    $tanggalLahir = new DateTime($kandidat->tanggal_lahir);
    $sekarang = new DateTime('today');
    $umur = $tanggalLahir->diff($sekarang)->y; // Mengambil selisih dalam tahun

    // Memformat tanggal lahir
    $formatter = new IntlDateFormatter(
        'id_ID',
        IntlDateFormatter::LONG,
        IntlDateFormatter::NONE,
        'Asia/Jakarta'
    );

    $formattedDate = $formatter->format($tanggalLahir);
    $kandidat->tanggal_lahir = $formattedDate;

    $data = Kandidat::orderBy('id', 'asc')->get();

    return view('profilkandidat', [
        'kandidat' => $kandidat, 
        'datas' => $data, 
        'umur' => $umur
    ]);
}


}
