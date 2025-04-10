@extends('layouts.app')

@section('content')
    <div class="overflow-x-auto mt-6 font-poppins">
        <h2 class="text-xl font-semibold mb-4 text-center">Jawaban Peserta untuk Kategori: {{ $category->kategori }}</h2>
        <a href="{{ route('overview.export', ['categoryId' => $category->id, 'participantId' => $participant->id]) }}"
            class="px-4 py-2 bg-blue text-white rounded-md mb-4 inline-block">
            Export Excel
        </a>

        <a href="{{ route('overview.exportPdf', ['categoryId' => $category->id, 'participantId' => $participant->id]) }}"
            class="px-4 py-2 bg-green text-white rounded-md mb-4 inline-block" target="_blank">
            Export PDF
        </a>

        <table class="min-w-full bg-white shadow-md rounded-lg">
            <thead class="bg-[#f3f4f6]">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Nama Peserta</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Pertanyaan</th>
                    @if ($category->kategori == 'Mental Stress')
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Level</th>
                    @endif
                    @if ($category->kategori == 'Mental Stress')
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Phase</th>
                    @endif
                    @if ($category->kategori !== 'Digit Span' && $category->kategori !== 'Mental Stress')
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Kategori Soal</th>
                    @endif
                    @if (
                        $category->kategori !== 'Color Word' &&
                            $category->kategori !== 'Aritmatika' &&
                            $category->kategori !== 'Mental Stress')
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Tipe Soal</th>
                    @endif
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Jawaban</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Waktu Respon (detik)</th>
                    <!-- Add this column -->
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Benar/Salah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($answers as $answer)
                    <tr class="border-b hover:bg-[#f9fafb] transition-all duration-300">
                        <td class="px-6 py-4 text-sm text-gray-800">{{ $participant->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800">
                            {{ $category->kategori === 'Color Word' && empty($answer->question->pertanyaan) ? 'BLOCK' : $answer->question->pertanyaan }}
                        </td>
                        @if ($category->kategori == 'Mental Stress')
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $answer->question->level }}</td>
                        @endif
                        @if ($category->kategori == 'Mental Stress')
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">{{ $answer->question->phase }}
                            </th>
                        @endif
                        @if ($category->kategori !== 'Digit Span' && $category->kategori !== 'Mental Stress')
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $answer->question->kategori_soal }}</td>
                        @endif
                        @if (
                            $category->kategori !== 'Color Word' &&
                                $category->kategori !== 'Aritmatika' &&
                                $category->kategori !== 'Mental Stress')
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $answer->question->type }}</td>
                        @endif
                        <td class="px-6 py-4 text-sm text-gray-800">{{ $answer->jawaban }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800">
                            @if (isset($answer->timeDifference))
                                {{ $answer->timeDifference < 0 ? 0 : $answer->timeDifference }}
                            @else
                                N/A
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-800">{{ $answer->benar_salah }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <script>
        document.addEventListener('keydown', function(event) {
            if (event.key === "Escape") {
                // Show the content again when pressing Esc
                contentHeader.classList.remove('hidden');
                contentTabs.classList.remove('hidden');
                contentLeft.classList.remove('hidden');
                contentRight.classList.remove('hidden');
                contentHead.classList.remove('hidden');

                // Update sessionStorage to false
                sessionStorage.setItem('fullscreen', 'false');
            }
        });
    </script>
@endsection
