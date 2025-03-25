@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg mt-8 text-center">
        <h2 class="text-2xl font-bold mb-4">Relaksasi</h2>
        <p class="text-lg">Silakan istirahat sejenak sebelum melanjutkan ke kategori berikutnya.</p>
        <p class="text-lg">Waktu relaksasi:</p>

        <div id="countdown" class="text-4xl font-bold text-blue-500 mt-4"></div>

        <script>
            let timeLeft = 10;
            const countdownEl = document.getElementById('countdown');

            function updateCountdown() {
                countdownEl.innerText = timeLeft + " detik";
                if (timeLeft > 0) {
                    timeLeft--;
                    setTimeout(updateCountdown, 1000);
                } else {
                    window.location.href =
                        "{{ route('test.instructions', ['participantId' => $participant->id, 'categoryId' => $nextCategoryId]) }}";
                }
            }

            updateCountdown();
        </script>
        <script>
            window.onload = function() {
                sessionStorage.clear();
            };
        </script>
    </div>
@endsection
