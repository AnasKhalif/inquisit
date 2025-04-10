@extends('layouts.app')

@section('content')
    <div class="w-full mx-auto bg-white p-6 mt-8 text-center font-poppins">
        @if ($category->id == 1)
            <h2 class="text-4xl font-bold mb-4">Instruksi - {{ $category->kategori }}</h2>

            <p class="text-lg leading-relaxed text-center mx-auto w-3/4">
                Dalam percobaan berikut, Anda akan melihat kata-kata yang ditampilkan dalam berbagai warna.
                Tugas Anda adalah menentukan warna di mana setiap kata ditampilkan, sambil mengabaikan arti dari kata
                tersebut.
            </p>

            <p class="text-lg font-semibold mt-6">Tentukan warna kata dengan menekan salah satu tombol di keyboard berikut:
            </p>

            <div class="flex justify-center mt-4 w-full">
                <div class="text-lg text-left w-1/3">
                    <ul class="space-y-2">
                        <li><strong class="text-red-500">D</strong> untuk kata yang berwarna <span
                                class="text-red-500 font-semibold">Merah</span></li>
                        <li><strong class="text-green">F</strong> untuk kata yang berwarna <span
                                class="text-green font-semibold">Hijau</span></li>
                    </ul>
                </div>
                <div class="text-lg text-left w-1/4">
                    <ul class="space-y-2">
                        <li><strong class="text-sky-500">J</strong> untuk kata yang berwarna <span
                                class="text-sky-500 font-semibold">Biru</span></li>
                        <li><strong class="text-black-900">K</strong> untuk kata yang berwarna <span
                                class="text-black-900 font-semibold">Hitam</span></li>
                    </ul>
                </div>
            </div>


            <p class="text-4xl font-semibold text-green mt-6">
                Merah
            </p>

            <p class="text-lg mt-6 text-center mx-auto w-3/4">
                <span class="font-semibold">Contoh:</span> Jika Anda melihat kata
                <span class="text-green font-semibold">MERAH</span> yang ditampilkan dengan warna
                <span class="text-green font-semibold">HIJAU</span>, tekan tombol
                <strong class="text-green-500">F</strong> untuk hijau, meskipun kata tersebut berarti "MERAH".
            </p>

            <div class="w-16 h-16 mx-auto bg-red-500 mt-2"></div>

            <p class="text-lg mt-6 text-center mx-auto w-3/4">
                <span class="font-semibold">Contoh:</span> Jika Anda melihat Kotak
                MERAH <span class="text-green font-semibold">HIJAU</span>, tekan tombol
                <strong class="text-green-500">D</strong> untuk merah.
            </p>

            <p class="text-lg mt-4">Waktu mulai dalam:</p>
            <div id="countdown" class="text-4xl font-bold text-red-500 mt-4"></div>
        @elseif ($category->id == 2)
            <h2 class="text-4xl font-bold mb-4">Instruksi - {{ $category->kategori }}</h2>

            <p class="text-lg leading-relaxed">
                Dalam percobaan ini, Anda akan mengerjakan serangkaian soal aritmatika.
                Setiap soal terdiri dari operasi penjumlahan atau pengurangan, diikuti oleh sebuah jawaban
                yang mungkin benar atau salah.
                Tugas Anda adalah menilai apakah jawaban yang diberikan benar atau tidak.
            </p>

            <p class="text-lg mt-4">
                Contoh pada gambar di bawah menunjukkan sebuah soal aritmatika, misalnya: <strong>45 - 7</strong>,
                yang diikuti oleh hasil perhitungan yang ditampilkan, misalnya: <strong>38</strong>.
                Anda diminta untuk menilai apakah hasil tersebut benar atau salah.
            </p>

            <div class="w-full flex justify-center mt-6">
                <img src="{{ asset('assets/images/aritmatika.jpeg') }}" alt="Contoh Soal" class="w-[150px]">
            </div>

            <p class="text-lg font-semibold mt-6">Tentukan apakah jawaban yang ditampilkan benar atau salah.</p>

            <ul class="text-lg text-center inline-block mt-4">
                <li>- Jika menurut Anda jawaban benar → Tekan tombol <strong>A</strong>.</li>
                <li>- Jika menurut Anda jawaban salah → Tekan tombol <strong>B</strong>.</li>
            </ul>

            <p class="text-lg font-semibold mt-6">Komputer akan memberikan umpan balik atas keputusan Anda:</p>

            <ul class="flex justify-center text-lg inline-block mt-4 gap-3">
                <li><strong>Salah</strong> : Jawaban Anda salah.</li>
                <li><strong>Benar</strong> : Jawaban Anda benar.</li>
            </ul>

            <p class="text-lg mt-4">Waktu mulai dalam:</p>
            <div id="countdown" class="text-4xl font-bold text-red-500 mt-4"></div>
        @elseif ($category->id == 3)
            <h2 class="text-4xl font-bold mb-6">Instruksi - Digit Span</h2>

            <p class="text-lg mt-4 leading-relaxed">
                Dalam tugas ini, Anda akan <strong>melihat rangkaian angka</strong> yang ditampilkan satu per satu di layar.
                Setelah seluruh angka selesai ditampilkan, Anda akan diminta untuk <strong>memasukkan kembali angka-angka
                    tersebut</strong>
                sesuai dengan tipe soal—apakah dalam <em>urutan asli</em> (Forward) atau <em>urutan terbalik</em>
                (Backward).
            </p>

            <div class="mt-6 text-left inline-block">
                <p class="text-lg font-semibold mb-2">Masukkan urutan angka sesuai dengan instruksi berikut:</p>
                <ul class="text-lg list-disc list-inside">
                    <li><strong>Forward Digit Span:</strong> Ketik urutan angka <strong>sesuai</strong> dengan yang
                        ditampilkan.</li>
                    <li><strong>Backward Digit Span:</strong> Ketik urutan angka <strong>berbalik arah</strong> dari yang
                        ditampilkan.</li>
                </ul>
            </div>

            <div class="mt-8">
                <p class="text-xl font-semibold mb-2">Contoh:</p>
                <p class="text-lg">Jika urutan angka yang muncul satu per satu adalah:</p>

                <div class="flex justify-center gap-4 mt-4 mb-4">
                    <span class="text-4xl font-bold">7</span>
                    <span class="text-4xl font-bold">4</span>
                    <span class="text-4xl font-bold">5</span>
                    <span class="text-4xl font-bold">1</span>
                </div>

                <p class="text-lg">
                    - Untuk <strong>Forward</strong>, ketik: <strong>7451</strong><br>
                    - Untuk <strong>Backward</strong>, ketik: <strong>1547</strong>
                </p>
            </div>

            <p class="text-lg mt-8">Waktu mulai dalam:</p>
            <div id="countdown" class="text-4xl font-bold text-red-500 mt-4"></div>
        @elseif ($category->id == 4)
            <!-- Mental Stress category -->
            <h2 class="text-4xl font-bold mb-6">Instruksi - Mental Stress</h2>

            <p class="text-lg mt-8 leading-relaxed">
                Pada kategori ini, Anda akan mengerjakan beberapa soal matematika yang berbeda tingkat kesulitannya.
                Tugas Anda adalah menjawab soal-soal ini sesuai dengan instruksi yang diberikan. Di setiap fase,
                Anda akan melihat foto berbeda yang berhubungan dengan soal yang akan dikerjakan. Setiap fase memiliki
                perbedaan dalam hal waktu dan jenis soal yang diberikan.
            </p>

            <!-- Fase Training -->
            <h3 class="text-2xl font-semibold mt-8">Fase Training</h3>
            <p class="text-lg mt-4">
                Pada fase <strong>Training</strong>, Anda tidak akan dibatasi oleh waktu. Tujuan dari fase ini adalah
                untuk mempersiapkan Anda dalam menjawab soal dengan berbagai tingkat kesulitan. Anda akan melihat soal
                matematika sederhana yang bertujuan untuk melatih kemampuan Anda dalam mengerjakan soal dengan benar.
            </p>
            <p class="text-lg mt-4">Foto untuk Fase Training:</p>
            <div class="flex justify-center mt-4">
                <img src="{{ asset('assets/images/trainingdancontrol.jpeg') }}" alt="Training Image" class="w-64">
            </div>
            <p class="text-lg mt-4">
                Pada fase ini, Anda hanya perlu fokus pada soal dan jawaban yang benar. Tidak ada waktu yang dihitung
                dalam fase ini.
            </p>

            <!-- Fase Eksperimental -->
            <h3 class="text-2xl font-semibold mt-8">Fase Eksperimental</h3>
            <p class="text-lg mt-4">
                Pada fase <strong>Eksperimental</strong>, soal yang diberikan akan lebih menantang dan Anda akan
                dibatasi
                oleh waktu. Fase ini bertujuan untuk menguji tingkat stres Anda saat mengerjakan soal matematika dalam
                waktu terbatas.
            </p>
            <p class="text-lg mt-4">Foto untuk Fase Eksperimental:</p>
            <div class="flex justify-center mt-4">
                <img src="{{ asset('assets/images/eksperimental.jpeg') }}" alt="Eksperimental Image" class="w-64">
            </div>
            <p class="text-lg mt-4">
                Di fase ini, waktu Anda akan dihitung, dan Anda perlu menyelesaikan soal dengan secepat mungkin.
                Waktu yang tersisa akan terus berkurang, dan ketika waktu habis, soal akan selesai otomatis.
            </p>

            <!-- Fase Control -->
            <h3 class="text-2xl font-semibold mt-8">Fase Control</h3>
            <p class="text-lg mt-4">
                Pada fase <strong>Control</strong>, soal yang diberikan akan serupa dengan fase Training, namun Anda
                juga
                akan melihat foto yang sama seperti pada fase Training. Fase ini digunakan untuk mengontrol level stres
                Anda
                dengan memberikan soal yang tidak memerlukan waktu, sehingga lebih fokus pada akurasi jawaban.
            </p>
            <p class="text-lg mt-4">Foto untuk Fase Control:</p>
            <div class="flex justify-center mt-4">
                <img src="{{ asset('assets/images/trainingdancontrol.jpeg') }}" alt="Training and Control Image"
                    class="w-64">
            </div>
            <p class="text-lg mt-4">
                Pada fase ini, tidak ada tekanan waktu. Anda akan diberikan kesempatan untuk menyelesaikan soal-soal
                dengan tenang dan hati-hati.
            </p>

            <p class="text-lg mt-8">Waktu mulai dalam:</p>
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
