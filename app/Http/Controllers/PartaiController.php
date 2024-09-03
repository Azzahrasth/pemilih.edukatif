<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partai;
use DateTime;
use IntlDateFormatter;

class PartaiController extends Controller
{
    public function index()
    {
        $data = Partai::orderBy('id', 'asc')->get();
        return view('partai', ['partais' => $data]);
    }

    
    public function show($id)
    {
        $partai = Partai::find($id);

        if (!$partai) {
            abort(404);
        }

        $date = new DateTime($partai->tanggal_dibentuk);

        $formatter = new IntlDateFormatter(
            'id_ID',
            IntlDateFormatter::LONG,
            IntlDateFormatter::NONE,
            'Asia/Jakarta'
        );

        $formattedDate = $formatter->format($date);
        $partai->tanggal_dibentuk = $formattedDate;

        return view('profilpartai', ['partai' => $partai]);
    }

}
