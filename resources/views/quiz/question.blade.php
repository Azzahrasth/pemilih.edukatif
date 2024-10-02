@extends('layouts.app')

@section('content')
<style>
    .form-check-input {
        width: 18px; /* Ukuran checkbox */
        height: 18px; /* Ukuran checkbox */
        border: 2px solid #162f50; /* Garis border */
        border-radius: 50%; /* Membuatnya bulat */
        background-color: white; /* Warna latar belakang */
    }

    .form-check-input:checked {
        background-color: #162f50; /* Warna latar saat terpilih */
        border: 2px solid #162f50; /* Garis border saat terpilih */
    }

    .form-check-input:focus {
        outline: none; /* Menghilangkan outline default */
        box-shadow: 0 0 5px rgba(22, 47, 80, 0.5); /* Efek bayangan saat fokus */
    }
</style>

<div class="container" style="padding: 10px 10px; max-width: 800px;">
    <div class="col-12 poppins-bold text-left judul-berita" style="color: #162f50; margin-bottom: 15px; margin-top: 50px;">Quiz</div>
    <div class="col-12 pt-lg-2 pt-3 ps-lg-0 ps-4 pe-lg-0 pe-4 pb-lg-0 pb-3 poppins-bold text-left deskripsi-berita" style="color: #162f50; margin-bottom: 15px;">
        Yuk ukur tingkat pemahamanmu mengenai Pilkada!
    </div>
    
    <!-- Quiz Question -->
    <div class="quiz-container" style="margin-bottom: 50px; margin-top: 50px;">
        <div class="question-number poppins-bold" style="margin-bottom: 50px;">
            <span style="background-color: #162f50; color: white; border-radius: 15px; padding: 10px 30px;">
                Pertanyaan {{ $currentQuestionNumber+1 }} dari 10
            </span>
        </div>

        <div class="question-text poppins" style="font-size: 1.5rem; margin-bottom: 20px; color: #162f50;">
            {{ $question['question'] }}
        </div>

        <!-- Quiz Options (Vertical Layout) -->
        <form action="{{ route('quiz.submit', ['questionNumber' => $currentQuestionNumber]) }}" method="POST" id="quizForm">
            @csrf
            @foreach($question['options'] as $key => $option)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="option{{ $key }}" value="{{ $key }}" required>
                    <label class="form-check-label" for="option{{ $key }}" style="font-size: 1.2rem; color: #162f50;">
                        {{ $option['text'] }}
                    </label>
                </div>
            @endforeach

            <!-- Navigation Buttons -->
            <div class="d-flex justify-content-start mt-4 poppins-bold">
                <form method="POST" action="{{ route('quiz.submit', ['questionNumber' => $currentQuestionNumber]) }}">
                    @csrf
                    @if($currentQuestionNumber < 9)
                        <button type="submit" class="btn" style="background-color: #162f50; color: white; border-radius: 15px; padding: 10px 30px; font-size: 1.2rem;" id="nextButton">Next</button>
                    @else
                        <button type="submit" class="btn" style="background-color: #28a745; color: white; border-radius: 15px; padding: 10px 30px; font-size: 1.2rem;" id="submitButton">Submit</button>
                    @endif
                </form>
            
                @if($currentQuestionNumber > 0)
                    <a href="{{ route('quiz.question', ['questionNumber' => $currentQuestionNumber - 1]) }}" class="btn" style="background-color: #F6B951; color: white; border-radius: 15px; padding: 10px 30px; font-size: 1.2rem; margin-left: 20px;">Back</a>
                @endif
            </div>
            </div>
            
        </form>
        
    </div>
</div>
@endsection

