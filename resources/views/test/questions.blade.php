@extends('layouts.app')

@section('content')
    <div class="w-full mx-0 bg-white p-6 rounded-lg mt-8 text-center font-poppins">
        @if ($category->id == 1)
            <h2 class="text-4xl font-bold text-gray-800 mb-6 text-center">Soal - {{ $category->kategori }}</h2>

            <div class="flex justify-center gap-6 mb-6">
                <p class="text-xl text-gray-400">D = Merah</p>
                <p class="text-xl text-gray-400">F = Hijau</p>
                <p class="text-xl text-gray-400">J = Biru</p>
                <p class="text-xl text-gray-400">K = Hitam</p>
            </div>

            <form
                action="{{ route('test.storeAnswer', ['participantId' => $participant->id, 'categoryId' => $category->id, 'questionId' => $currentQuestion->id]) }}"
                method="POST" id="answer-form">
                @csrf
                <div class="mt-4 p-4 text-center">
                    @if ($currentQuestion->kategori_soal == 'Control')
                        <div class="w-16 h-16 mx-auto {{ $currentQuestion->warna_display }}"></div>
                        <div id="feedback" class="text-lg font-bold mt-4"></div>
                    @else
                        <p id="question-text" class="text-4xl font-semibold {{ $currentQuestion->warna_display }}">
                            {{ $currentQuestion->pertanyaan }}
                        </p>
                        <div id="feedback" class="text-lg font-bold mt-4"></div>
                    @endif

                </div>

                <input type="hidden" name="answer" id="color-answer" value="">

                <input type="hidden" name="time_left" id="time_left" value="{{ $timeLeft }}">
                <button type="submit" class="bg-[#2E6638] text-white px-6 py-2 mt-4 rounded-lg" style="display:none;">Kirim
                    Jawaban</button>
            </form>

            <div class="text-xl font-semibold text-red-500 mt-6">Sisa Waktu: <span id="countdown"></span></div>

            <script>
                // let timeLeft = sessionStorage.getItem('remainingTime') ? parseInt(sessionStorage.getItem('remainingTime')) : 240;
                let timeLeft = sessionStorage.getItem('remainingTime') ? parseInt(sessionStorage.getItem('remainingTime')) :
                    {{ $timeLeft }};
                const countdownEl = document.getElementById('countdown');
                const timeLeftInput = document.getElementById('time_left');

                const keyMap = {
                    'd': 'merah',
                    'f': 'hijau',
                    'j': 'biru',
                    'k': 'hitam',
                };

                function updateCountdown() {
                    let minutes = Math.floor(timeLeft / 60);
                    let seconds = timeLeft % 60;
                    countdownEl.innerText = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

                    if (timeLeft > 0) {
                        timeLeft--;
                        timeLeftInput.value = timeLeft;
                        sessionStorage.setItem('remainingTime', timeLeft);
                        setTimeout(updateCountdown, 1000);
                    } else {
                        document.querySelector("form").submit();
                    }
                }
                document.addEventListener('keydown', function(event) {
                    let key = event.key.toLowerCase();
                    if (keyMap[key]) {
                        document.getElementById('color-answer').value = keyMap[key];
                        document.querySelector('form').submit();
                    }
                });
                document.addEventListener('keydown', function(event) {
                    let key = event.key.toLowerCase();
                    if (keyMap[key]) {
                        let answer = keyMap[key];
                        document.getElementById('color-answer').value = answer;

                        let correctAnswer = "{{ $currentQuestion->warna_teks }}";
                        let feedbackEl = document.getElementById('feedback');

                        if (answer === correctAnswer) {
                            feedbackEl.innerHTML = '<span class="text-green-500">Benar!</span>';
                        } else {
                            feedbackEl.innerHTML = '<span class="text-red-500">Salah!</span>';
                        }

                        setTimeout(() => {
                            document.querySelector('form').submit();
                        }, 1000);
                    }
                });

                updateCountdown();
            </script>
        @elseif($category->id == 2)
            <h2 class="text-4xl font-bold text-gray-800 mb-6 text-center">Soal - {{ $category->kategori }}</h2>
            <div class="flex justify-center gap-4">
                <p class="text-lg text-gray-400">A = benar</p>
                <p class="text-lg text-gray-400">B = salah</p>
            </div>

            <form
                action="{{ route('test.storeAnswer', ['participantId' => $participant->id, 'categoryId' => $category->id, 'questionId' => $currentQuestion->id]) }}"
                method="POST" id="answer-form">
                @csrf
                <div class="mt-4 p-4 text-center">
                    <p id="question-text" class="text-4xl font-semibold">{{ $currentQuestion->pertanyaan }}</p>
                    <div id="feedback" class="text-lg font-bold mt-4"></div>
                </div>

                <input type="hidden" name="answer" id="true-false-answer" value="">
                <input type="hidden" name="time_left" id="time_left" value="{{ $timeLeft }}">
                <button type="submit" class="bg-[#2E6638] text-white px-6 py-2 mt-4 rounded-lg" style="display:none;">Kirim
                    Jawaban</button>
            </form>

            <div class="text-lg font-bold text-red-500 mt-6">Sisa Waktu: <span id="countdown"></span></div>

            <script>
                // let timeLeft = sessionStorage.getItem('remainingTime') ? parseInt(sessionStorage.getItem('remainingTime')) : 240;
                let timeLeft = sessionStorage.getItem('remainingTime') ? parseInt(sessionStorage.getItem('remainingTime')) :
                    {{ $timeLeft }};
                const countdownEl = document.getElementById('countdown');
                const timeLeftInput = document.getElementById('time_left');

                const keyMap = {
                    'a': 'benar',
                    'b': 'salah',
                };

                function updateCountdown() {
                    let minutes = Math.floor(timeLeft / 60);
                    let seconds = timeLeft % 60;
                    countdownEl.innerText = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

                    if (timeLeft > 0) {
                        timeLeft--;
                        timeLeftInput.value = timeLeft;
                        sessionStorage.setItem('remainingTime', timeLeft);
                        setTimeout(updateCountdown, 1000);
                    } else {
                        document.querySelector("form").submit();
                    }
                }

                document.addEventListener('keydown', function(event) {
                    let key = event.key.toLowerCase();
                    if (keyMap[key]) {
                        document.getElementById('true-false-answer').value = keyMap[key];
                        document.querySelector('form').submit();
                    }
                });
                document.addEventListener('keydown', function(event) {
                    let key = event.key.toLowerCase();
                    if (keyMap[key]) {
                        let answer = keyMap[key];
                        document.getElementById('true-false-answer').value = answer;

                        let correctAnswer = "{{ $currentQuestion->jawaban_benar }}";
                        let feedbackEl = document.getElementById('feedback');

                        if (answer === correctAnswer) {
                            feedbackEl.innerHTML = '<span class="text-green-500">Benar!</span>';
                        } else {
                            feedbackEl.innerHTML = '<span class="text-red-500">Salah!</span>';
                        }

                        setTimeout(() => {
                            document.querySelector('form').submit();
                        }, 1000);
                    }
                });

                updateCountdown();
            </script>
        @elseif($category->id == 3)
            <h2 class="text-2xl font-bold mb-4">Soal - {{ $category->kategori }} {{ $currentQuestion->type }}</h2>

            @if ($currentQuestion->type == 'forward')
                <small>Tugas Anda adalah
                    memasukkan
                    urutan angka tersebut dengan mengikuti urutan yang benar.</small>
            @elseif ($currentQuestion->type == 'backward')
                <small>Tugas Anda adalah
                    memasukkan
                    urutan angka tersebut dengan urutan yang terbalik.</small>
            @endif

            <div class="text-4xl font-semibold">
                @foreach ($digits as $digit)
                    <p id="digit-{{ $loop->index }}" style="display:none;" class="digit text-9xl">{{ $digit }}
                    </p>
                @endforeach
            </div>

            <form
                action="{{ route('test.storeAnswer', ['participantId' => $participant->id, 'categoryId' => $category->id, 'questionId' => $currentQuestion->id]) }}"
                method="POST" id="answer-form" style="display:none;">
                @csrf
                <div class="mt-4 p-4 text-center">

                    <div id="display-answer" class="mt-4 text-6xl font-bold text-center">
                    </div>

                    <div id="calculator"
                        class="grid grid-cols-5 gap-4 mt-4 justify-center items-center max-w-[500px] mx-auto">
                        @for ($i = 0; $i <= 9; $i++)
                            <button type="button"
                                class="calc-button bg-black text-white border border-gray-700 p-4 text-2xl rounded-lg hover:bg-gray-800 active:bg-gray-900 transition duration-200 ease-in-out"
                                data-value="{{ $i }}">{{ $i }}</button>
                        @endfor
                        <button type="button" id="delete-button"
                            class="bg-red-600 text-white border border-gray-700 p-4 text-2xl rounded-lg hover:bg-gray-800 active:bg-gray-900 transition duration-200 ease-in-out">
                            Del
                        </button>
                    </div>

                    <input type="hidden" name="answer" id="digit-answer" />
                </div>

                <input type="hidden" name="time_left" id="time_left" value="{{ $timeLeft }}">
                <button type="submit" class="bg-[#2E6638] text-white px-6 py-2 mt-4 rounded-lg">Kirim Jawaban</button>
            </form>

            <div class="text-lg font-bold text-red-500 mt-6">Sisa Waktu: <span id="countdown"></span></div>

            <script>
                // let timeLeft = sessionStorage.getItem('remainingTime') ? parseInt(sessionStorage.getItem('remainingTime')) : 240;
                let timeLeft = sessionStorage.getItem('remainingTime') ? parseInt(sessionStorage.getItem('remainingTime')) :
                    {{ $timeLeft }};
                const countdownEl = document.getElementById('countdown');
                const timeLeftInput = document.getElementById('time_left');
                let digitIndex = 0;
                let countdownInterval;
                let answer = '';

                function updateCountdown() {
                    let minutes = Math.floor(timeLeft / 60);
                    let seconds = timeLeft % 60;
                    countdownEl.innerText = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

                    if (timeLeft > 0) {
                        timeLeft--;
                        timeLeftInput.value = timeLeft;
                        sessionStorage.setItem('remainingTime', timeLeft);
                        countdownInterval = setTimeout(updateCountdown, 1000);
                    } else {
                        document.querySelector("form").submit();
                    }
                }

                function showDigit() {
                    if (digitIndex < {{ count($digits) }}) {
                        document.getElementById('digit-' + digitIndex).style.display = 'block';
                        setTimeout(function() {
                            document.getElementById('digit-' + digitIndex).style.display = 'none';
                            digitIndex++;
                            if (digitIndex < {{ count($digits) }}) {
                                showDigit();
                            } else {
                                document.querySelector('form').style.display = 'block';
                                updateCountdown();
                            }
                        }, 1000);
                    }
                }

                document.querySelectorAll('.calc-button').forEach(button => {
                    button.addEventListener('click', function() {
                        answer += this.getAttribute('data-value');
                        document.getElementById('display-answer').innerText = answer;
                        document.getElementById('digit-answer').value =
                            answer;
                    });
                });

                document.getElementById('delete-button').addEventListener('click', function() {
                    answer = answer.slice(0, -1);
                    document.getElementById('display-answer').innerText = answer;
                    document.getElementById('digit-answer').value = answer;
                });

                showDigit();
            </script>
        @elseif($category->id == 4)
            <h2 class="text-4xl font-bold text-gray-800 mb-6 text-center">
                Soal - {{ $category->kategori }} - Phase: {{ ucfirst($currentQuestion->phase) }}
            </h2>

            <div class="mt-4 p-4 text-center">
                <p id="question-text" class="text-4xl font-semibold">{{ $currentQuestion->pertanyaan }}</p>
                <div id="feedback" class="text-lg font-bold mt-4"></div>
            </div>

            <form
                action="{{ route('test.storeAnswer', ['participantId' => $participant->id, 'categoryId' => $category->id, 'questionId' => $currentQuestion->id]) }}"
                method="POST" id="answer-form">
                @csrf
                <div class="text-center">
                    <div id="display-answer" class="text-6xl font-bold text-center">
                        <!-- Digits input will be displayed here -->
                    </div>

                    <!-- Calculator buttons -->
                    <div id="calculator"
                        class="grid grid-cols-5 gap-4 mt-6 justify-center items-center max-w-[500px] mx-auto">
                        @for ($i = 0; $i <= 9; $i++)
                            <button type="button"
                                class="calc-button bg-black text-white border border-gray-700 p-4 text-2xl rounded-lg hover:bg-gray-800 active:bg-gray-900 transition duration-200 ease-in-out"
                                data-value="{{ $i }}">{{ $i }}</button>
                        @endfor
                        <button type="button" id="delete-button"
                            class="bg-red-600 text-white border border-gray-700 p-4 text-2xl rounded-lg hover:bg-gray-800 active:bg-gray-900 transition duration-200 ease-in-out">
                            Del
                        </button>
                    </div>

                    <!-- Hidden input for storing the user's answer -->
                    <input type="hidden" name="answer" id="digit-answer" />
                </div>

                <!-- Hidden time_left input -->
                <input type="hidden" name="time_left" id="time_left" value="{{ $timeLeft }}">

                <!-- Submit button -->
                <button type="submit" class="bg-[#2E6638] text-white px-6 py-2 mt-4 rounded-lg">Kirim Jawaban</button>
            </form>

            <!-- Display countdown if timeLeft exists (only for phase 'experimental') -->
            @if ($timeLeft)
                <div class="text-xl font-semibold text-red-500 mt-6">Sisa Waktu: <span id="countdown"></span></div>
            @endif

            <script>
                let answer = '';
                let timeLeft = sessionStorage.getItem('remainingTime') ? parseInt(sessionStorage.getItem('remainingTime')) :
                    {{ $timeLeft }};
                const countdownEl = document.getElementById('countdown');
                const timeLeftInput = document.getElementById('time_left');

                // Function to update the countdown timer
                function updateCountdown() {
                    let minutes = Math.floor(timeLeft / 60);
                    let seconds = timeLeft % 60;
                    countdownEl.innerText = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

                    if (timeLeft > 0) {
                        timeLeft--;
                        timeLeftInput.value = timeLeft;
                        sessionStorage.setItem('remainingTime', timeLeft);
                        setTimeout(updateCountdown, 1000);
                    } else {
                        document.querySelector("form").submit();
                    }
                }

                // Handling digit input for the calculator
                document.querySelectorAll('.calc-button').forEach(button => {
                    button.addEventListener('click', function() {
                        answer += this.getAttribute('data-value');
                        document.getElementById('display-answer').innerText = answer;
                        document.getElementById('digit-answer').value = answer;
                    });
                });

                // Handling delete button
                document.getElementById('delete-button').addEventListener('click', function() {
                    answer = answer.slice(0, -1);
                    document.getElementById('display-answer').innerText = answer;
                    document.getElementById('digit-answer').value = answer;
                });

                // Start countdown if timeLeft is available
                @if ($timeLeft)
                    updateCountdown();
                @endif
            </script>
        @endif
    </div>
    <button onclick="confirmExit()" class="text-red-600 text-6xl">
        X
    </button>

    <!-- Hidden confirmation popup -->
    <div id="confirmation-popup"
        style="display:none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
        <p class="text-lg font-semibold">Yakin ingin keluar ke dashboard?</p>
        <button onclick="exitToDashboard()" class="bg-red-600 text-white px-6 py-2 mt-4 rounded-lg">Ya, Keluar</button>
        <button onclick="closePopup()" class="bg-gray-300 text-black px-6 py-2 mt-4 rounded-lg">Batal</button>
    </div>

    <script>
        // Function to show the confirmation popup
        function confirmExit() {
            document.getElementById('confirmation-popup').style.display = 'block';
        }

        // Function to hide the confirmation popup
        function closePopup() {
            document.getElementById('confirmation-popup').style.display = 'none';
        }

        // Function to perform the redirection to the dashboard
        function exitToDashboard() {
            window.location.href = "{{ route('dashboard') }}"; // Replace with the correct route for your dashboard
        }
    </script>


@endsection
