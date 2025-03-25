@extends('layouts.app')

@section('content')
    <div class="w-full mx-0 bg-white p-6 rounded-lg shadow-lg mt-8 text-center">
        @if ($category->id == 1)
            <h2 class="text-2xl font-bold mb-4">Instruksi - {{ $category->kategori }}</h2>
            <p class="text-lg">Bersiaplah untuk mengerjakan soal kategori <strong>{{ $category->kategori }}</strong>.</p>
            <p class="text-lg">Instruksi:</p>

            <p class="text-lg">
                Anda akan melihat kata-kata yang ditampilkan dengan warna yang berbeda. Tugas Anda adalah untuk
                mengindikasikan
                warna dari kata yang ditampilkan, bukan makna kata tersebut.
            </p>

            <p class="text-lg font-semibold mt-4">Tekan tombol berikut untuk memilih warna:</p>
            <ul class="list-disc text-lg mt-2">
                <li><strong>D</strong> untuk kata yang berwarna merah</li>
                <li><strong>F</strong> untuk kata yang berwarna hijau</li>
                <li><strong>J</strong> untuk kata yang berwarna biru</li>
                <li><strong>K</strong> untuk kata yang berwarna hitam</li>
            </ul>

            <p class="text-lg mt-4">
                Contoh: jika Anda melihat kata <strong>MERAH</strong> yang ditampilkan dengan warna <strong>HIJAU</strong>,
                tekan tombol <strong>F</strong> untuk hijau, meskipun kata tersebut berarti "MERAH".
            </p>

            <p class="text-lg mt-4">
                Cobalah untuk menjawab secepat dan seakurat mungkin karena tes ini memiliki batas waktu. Jika jawaban salah,
                sebuah tanda merah "X" akan muncul di layar.
            </p>

            <p class="text-lg mt-4">Waktu mulai dalam:</p>
            <div id="countdown" class="text-4xl font-bold text-red-500 mt-4"></div>
        @elseif ($category->id == 2)
            <h2 class="text-2xl font-bold mb-4">Instruksi - {{ $category->kategori }}</h2>
            <p class="text-lg">Bersiaplah untuk mengerjakan soal kategori <strong>{{ $category->kategori }}</strong>.</p>
            <p class="text-lg">Instruksi:</p>
            <p class="text-lg mt-4">Waktu mulai dalam:</p>
            <div id="countdown" class="text-4xl font-bold text-red-500 mt-4"></div>
        @elseif ($category->id == 3)
            <h2 class="text-2xl font-bold mb-4">Instruksi - {{ $category->kategori }}</h2>
            <p class="text-lg">Bersiaplah untuk mengerjakan soal kategori <strong>{{ $category->kategori }}</strong>.</p>
            <p class="text-lg">Instruksi:</p>
            <p class="text-lg mt-4">Waktu mulai dalam:</p>
            <div id="countdown" class="text-4xl font-bold text-red-500 mt-4"></div>
        @endif

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
                        "{{ route('test.questions', ['participantId' => $participant->id, 'categoryId' => $category->id]) }}";
                }
            }

            updateCountdown();
        </script>
    </div>
@endsection
