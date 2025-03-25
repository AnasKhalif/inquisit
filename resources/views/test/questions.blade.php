{{-- @extends('layouts.app')

@section('content')
    <div class="w-full mx-0 bg-white p-6 rounded-lg shadow-lg mt-8 text-center">
        <h2 class="text-2xl font-bold mb-4">Soal - {{ $category->kategori }}</h2>
        <div class="flex justify-center gap-4">
            <p class="text-lg">D = red</p>
            <p class="text-lg">F = green</p>
            <p class="text-lg">J = blue</p>
            <p class="text-lg">K = black</p>
        </div>

        <form
            action="{{ route('test.storeAnswer', ['participantId' => $participant->id, 'categoryId' => $category->id, 'questionId' => $currentQuestion->id]) }}"
            method="POST" id="answer-form">
            @csrf
            <div class="mt-4 p-4 text-center">
                @if ($category->id == 1)
                    <p id="question-text" class="text-4xl font-semibold {{ $currentQuestion->warna_display }}">
                        {{ $currentQuestion->pertanyaan }}
                    </p>
                @else
                    <p class="text-lg font-semibold">{{ $currentQuestion->pertanyaan }}</p>
                    <input type="text" name="answer" class="w-full border p-2 mt-2 rounded" required>
                @endif
            </div>

            <!-- Hidden input to store the chosen color -->
            <input type="hidden" name="answer" id="color-answer" value="">

            <input type="hidden" name="time_left" id="time_left" value="240">
            <button type="submit" class="bg-[#2E6638] text-white px-6 py-2 mt-4 rounded-lg" style="display:none;">Kirim
                Jawaban</button>
        </form>

        <div class="text-lg font-bold text-red-500 mt-6">Sisa Waktu: <span id="countdown">4:00</span></div>

        <script>
            let timeLeft = 240;
            const countdownEl = document.getElementById('countdown');
            const timeLeftInput = document.getElementById('time_left');

            const keyMap = {
                'd': 'merah',
                'f': 'hijau',
                'j': 'biru',
                'k': 'hitam', // 'k' for black
            };

            // Setup event listener for key press
            document.addEventListener('keydown', function(event) {
                let key = event.key.toLowerCase();
                if (keyMap[key]) {
                    // Set the color value to the hidden input
                    document.getElementById('color-answer').value = keyMap[key];

                    // Submit the form
                    document.querySelector('form').submit();
                }
            });

            function updateCountdown() {
                let minutes = Math.floor(timeLeft / 60);
                let seconds = timeLeft % 60;
                countdownEl.innerText = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
                if (timeLeft > 0) {
                    timeLeft--;
                    timeLeftInput.value = timeLeft; // Set waktu yang digunakan
                    setTimeout(updateCountdown, 1000);
                } else {
                    document.querySelector("form").submit();
                }
            }
            updateCountdown();
        </script>
    </div>
@endsection --}}
@extends('layouts.app')

@section('content')
    <div class="w-full mx-0 bg-white p-6 rounded-lg shadow-lg mt-8 text-center">
        <h2 class="text-2xl font-bold mb-4">Soal - {{ $category->kategori }}</h2>
        <div class="flex justify-center gap-4">
            <p class="text-lg">D = red</p>
            <p class="text-lg">F = green</p>
            <p class="text-lg">J = blue</p>
            <p class="text-lg">K = black</p>
        </div>

        <form
            action="{{ route('test.storeAnswer', ['participantId' => $participant->id, 'categoryId' => $category->id, 'questionId' => $currentQuestion->id]) }}"
            method="POST" id="answer-form">
            @csrf
            <div class="mt-4 p-4 text-center">
                @if ($category->id == 1)
                    <p id="question-text" class="text-4xl font-semibold {{ $currentQuestion->warna_display }}">
                        {{ $currentQuestion->pertanyaan }}
                    </p>
                @else
                    <p class="text-lg font-semibold">{{ $currentQuestion->pertanyaan }}</p>
                    <input type="text" name="answer" class="w-full border p-2 mt-2 rounded" required>
                @endif
            </div>

            <!-- Hidden input to store the chosen color -->
            <input type="hidden" name="answer" id="color-answer" value="">

            <!-- Hidden input to store time left -->
            <input type="hidden" name="time_left" id="time_left" value="240">
            <button type="submit" class="bg-[#2E6638] text-white px-6 py-2 mt-4 rounded-lg" style="display:none;">Kirim
                Jawaban</button>
        </form>

        <div class="text-lg font-bold text-red-500 mt-6">Sisa Waktu: <span id="countdown">4:00</span></div>

        <script>
            // Get remaining time if it exists in sessionStorage
            let timeLeft = sessionStorage.getItem('remainingTime') ? parseInt(sessionStorage.getItem('remainingTime')) : 240;
            const countdownEl = document.getElementById('countdown');
            const timeLeftInput = document.getElementById('time_left');

            const keyMap = {
                'd': 'merah',
                'f': 'hijau',
                'j': 'biru',
                'k': 'hitam',
            };

            // Timer update function
            function updateCountdown() {
                let minutes = Math.floor(timeLeft / 60);
                let seconds = timeLeft % 60;
                countdownEl.innerText = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

                if (timeLeft > 0) {
                    timeLeft--;
                    timeLeftInput.value = timeLeft; // Store remaining time to hidden input
                    sessionStorage.setItem('remainingTime', timeLeft); // Store time in sessionStorage
                    setTimeout(updateCountdown, 1000);
                } else {
                    document.querySelector("form").submit(); // Submit answer when time is up
                }
            }

            // Listen for keydown events and submit form when a valid key is pressed
            document.addEventListener('keydown', function(event) {
                let key = event.key.toLowerCase();
                if (keyMap[key]) {
                    document.getElementById('color-answer').value = keyMap[key];
                    document.querySelector('form').submit(); // Submit the answer immediately
                }
            });

            updateCountdown(); // Start the countdown
        </script>
    </div>
@endsection
