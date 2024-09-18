@extends('layouts.app')
@section('content')
<div class="container" style="padding: 50px 20px; max-width: 800px;">
    <div class="col-12 poppins-bold text-left judul-berita" style="color: #162f50; margin-bottom: 15px; margin-top: 50px;">Quiz</div>
    <div class="col-12 pt-lg-2 pt-3 ps-lg-0 ps-4 pe-lg-0 pe-4 pb-lg-0 pb-3 poppins-bold text-left deskripsi-berita" style="color: #162f50; margin-bottom: 15px;">
        Yuk ukur tingkat pemahamanmu mengenai Pilkada!
    </div>
    
    <!-- Quiz Question -->
    <div class="quiz-container" style="margin-bottom: 50px; margin-top: 50px;">
        <div class="question-number poppins-bold" style="margin-bottom: 50px;">
            <span style="background-color: #162f50; color: white; border-radius: 15px; padding: 10px 30px;">Pertanyaan 1 dari 5</span>
        </div>
        <div class="question-text poppins" style="font-size: 1.5rem; margin-bottom: 20px; color: #162f50;">
            Siapakah wakil presiden yang paling famous?
        </div>

        <!-- Quiz Options (Horizontal Layout) -->
        <form id="quizForm">
            <div class="d-flex justify-content-between" style="gap: 20px; margin-bottom: 20px;">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="quizOption" id="option1">
                    <label class="form-check-label" for="option1" style="font-size: 1.2rem; color: #162f50;">
                        Gibran
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="quizOption" id="option2">
                    <label class="form-check-label" for="option2" style="font-size: 1.2rem; color: #162f50;">
                        Moh Hatta
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="quizOption" id="option3">
                    <label class="form-check-label" for="option3" style="font-size: 1.2rem; color: #162f50;">
                        Ma'ruf Amin
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="quizOption" id="option4">
                    <label class="form-check-label" for="option4" style="font-size: 1.2rem; color: #162f50;">
                        Kaesang
                    </label>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="d-flex justify-content-start mt-4 poppins-bold">
                <button type="button" class="btn" style="background-color: #162f50; color: white; border-radius: 15px; padding: 10px 30px; font-size: 1.2rem; display: none;" id="nextButton">Next</button>
                <button type="submit" class="btn" style="background-color: #28a745; color: white; border-radius: 15px; padding: 10px 30px; font-size: 1.2rem;" id="submitButton">Submit</button>
                <button type="button" class="btn" style="background-color: #F6B951; color: white; border-radius: 15px; padding: 10px 30px; font-size: 1.2rem; margin-left: 20px;" id="backButton">Back</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('nextButton').addEventListener('click', function () {
        // Logika untuk menampilkan tombol submit ketika di pertanyaan terakhir
        // Contoh: Misalnya kamu sudah sampai di pertanyaan terakhir (Pertanyaan 5)
        const currentQuestionNumber = 1; // ganti ini dengan nomor pertanyaan dinamis
        const totalQuestions = 5;

        if (currentQuestionNumber === totalQuestions) {
            // Sembunyikan tombol Next dan tampilkan tombol Submit
            document.getElementById('nextButton').style.display = 'none';
            document.getElementById('submitButton').style.display = 'inline-block';
        }
    });
</script>
@endsection
