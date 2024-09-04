<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paslon;

class PaslonController extends Controller
{
    // Menampilkan daftar paslon
    public function index()
    {
        $paslons = Paslon::orderBy('id', 'asc')->get();
        return view('paslon.index', ['paslons' => $paslons]);
    }


    // Menampilkan detail paslon
    public function show($id)
    {
        $paslon = Paslon::find($id);

        if (!$paslon) {
            abort(404);
        }

        return view('paslon.show', ['paslon' => $paslon]);
    }

}
