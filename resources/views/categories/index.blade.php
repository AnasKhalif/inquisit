@extends('layouts.app')

@section('content')
    <div class="overflow-x-auto mt-6 font-poppins">
        <h2 class="text-4xl font-bold text-gray-800 mb-6 text-center">Daftar Waktu Kategori</h2>

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full bg-white shadow-md rounded-lg">
            <thead class="bg-[#f3f4f6]">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Kategori</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Waktu (detik)</th>
                    <th class="px-6 py-3 text-center text-sm font-medium text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="border-b hover:bg-[#f9fafb] transition-all duration-300">
                        <td class="px-6 py-4 text-sm text-gray-800">{{ $category->kategori }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800">{{ $category->waktu }}</td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('categories.edit', $category->id) }}"
                                class="text-blue-500 hover:text-blue-700">
                                Edit Waktu
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
