<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('quiz.home');
    }

    // Menampilkan detail paslon
    public function show()
    {
        return view('quiz.soal');
    }

    public function show2()
    {
        return view('quiz.hasil');
    }
}
