@extends('layouts.app')

@section('content')
    <div class="w-full mx-0 bg-white p-6 rounded-lg mt-8 text-center font-poppins">
        <h2 class="text-4xl font-bold text-gray-800 mb-6 text-center">Edit Waktu Kategori - {{ $category->kategori }}</h2>

        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="waktu" class="block text-lg font-medium">Waktu (detik)</label>
                <input type="number" id="waktu" name="waktu" value="{{ old('waktu', $category->waktu) }}"
                    class="mt-2 p-2 border rounded" min="60" required>
            </div>

            <button type="submit" class="bg-[#2E6638] text-white px-6 py-2 rounded-lg">Simpan</button>
        </form>
    </div>
@endsection
