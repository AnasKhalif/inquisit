@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg mt-8 lg:mt-12">
        <h2 class="text-xl font-bold mb-4 text-center">Masukkan Data Peserta</h2>

        <form action="{{ route('participants.store') }}" method="POST">
            @csrf
            <label class="block mb-2">Nama:</label>
            <input type="text" name="name" class="w-full border px-3 py-2 rounded mb-2 md:text-lg" required>

            <label class="block mb-2">Usia:</label>
            <input type="number" name="age" class="w-full border px-3 py-2 rounded mb-2 md:text-lg" required
                min="10">

            <label class="block mb-2">Jenis Kelamin:</label>
            <select name="gender" class="w-full border px-3 py-2 rounded mb-2 md:text-lg" required>
                <option value="male">Laki-laki</option>
                <option value="female">Perempuan</option>
            </select>

            <label class="block mb-2 text-black">Kategori Soal:</label>
            <div class="mb-4 text-black flex flex-wrap gap-2">
                @foreach ($categories as $category)
                    <div class="flex items-center space-x-2 min-w-[120px]">
                        <input type="checkbox" name="categories[]" value="{{ $category->id }}">
                        <label class="text-black">{{ $category->kategori }}</label>
                    </div>
                @endforeach
            </div>

            <button type="submit" class="bg-[#2E6638] text-white px-4 py-2 rounded w-full md:w-auto">Submit</button>
        </form>
    </div>
@endsection
