<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Session;
use Illuminate\Support\Facades\Auth;
use IntlDateFormatter;

class KomentarController extends Controller
{

    public function store(Request $request)
    {
        if (Auth::check()) {
            // Validasi input
            $request->validate([
                'komentar' => 'required|string|max:255',
            ]);

            // Menyimpan komentar ke database
            Komentar::create([
                'komentar' => $request->input('komentar'),
                'berita_id' => $request->input('berita_id'),
                'user_id' => auth()->user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            return redirect()->route('berita.detail', ['id' => $request->input('berita_id')])->with('success', 'Komentar berhasil ditambahkan!');
        } else {
            Session::flash('error', 'Login terlebih dahulu');
            return view('login');
        }
    }

    public function edit($id)
    {
        $komentar = Komentar::find($id);

        // Cek apakah user yang login adalah pemilik komentar
        if (Auth::user()->id != $komentar->user_id) {
            return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk mengedit komentar ini.');
        }

        return view('editKomentar', compact('komentar'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'komentar' => 'required|string|max:255',
        ]);

        $komentar = Komentar::find($id);

        // Cek apakah user yang login adalah pemilik komentar
        if (Auth::user()->id != $komentar->user_id) {
            return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk mengedit komentar ini.');
        }

        $komentar->update([
            'komentar' => $request->komentar,
        ]);

        return redirect()->route('berita.detail', ['id' => $komentar->berita_id])->with('success', 'Komentar berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $komentar = Komentar::find($id);

        // Cek apakah user yang login adalah pemilik komentar
        if (Auth::user()->id != $komentar->user_id) {
            return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk menghapus komentar ini.');
        }

        $komentar->delete();

        return redirect()->route('berita.detail', ['id' => $komentar->berita_id])->with('success', 'Komentar berhasil dihapus!');
    }


}
