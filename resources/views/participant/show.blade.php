@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto mt-6 p-6 bg-white rounded-lg shadow-lg font-poppins">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Detail Peserta: {{ $participant->name }}</h2>

        <div class="mb-4">
            <p class="text-lg font-semibold text-gray-700"><strong>Nama:</strong> {{ $participant->name }}</p>
            <p class="text-lg font-semibold text-gray-700"><strong>Usia:</strong> {{ $participant->age }} tahun</p>
            <p class="text-lg font-semibold text-gray-700"><strong>Jenis Kelamin:</strong>
                {{ ucfirst($participant->gender) }}</p>
            <p class="text-lg font-semibold text-gray-700"><strong>Waktu Pendaftaran:</strong>
                {{ $participant->created_at->format('d-m-Y H:i:s') }}</p>
        </div>

        <div class="mb-6">
            <p class="text-lg font-semibold text-gray-700"><strong>Kategori Tes:</strong></p>
            <ul class="list-disc pl-6 space-y-2">
                @foreach ($participant->choices as $choice)
                    <li class="text-gray-700">{{ $choice->category->kategori }}</li>
                @endforeach
            </ul>
        </div>

        <div class="text-center">
            <a href="{{ route('overview.index') }}"
                class="px-4 py-2 bg-blue text-white rounded-md hover:bg-blue-600 transition duration-300">
                Kembali ke Overview
            </a>
        </div>
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
