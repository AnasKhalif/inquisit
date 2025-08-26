@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg mt-8 text-center">
        <h2 class="text-2xl font-bold mb-4">Seberapa banyak Anda perlu berpikir atau berkonsentrasi untuk menyelesaikan
            kategori ini?</h2>
        <p class="text-lg mb-6">Pilih rentang dari 0 (rendah) sampai 10 (tinggi).</p>

        <form action="{{ route('test.storeEffort', ['participantId' => $participantId, 'categoryId' => $categoryId]) }}"
            method="POST">
            @csrf
            <div class="flex justify-between items-center w-full px-4">
                <span>0<br><small>Rendah</small></span>
                @for ($i = 0; $i <= 10; $i++)
                    <label class="flex flex-col items-center">
                        <input type="radio" name="effort" value="{{ $i }}" required>
                        <span>{{ $i }}</span>
                    </label>
                @endfor
                <span>10<br><small>Tinggi</small></span>
            </div>

            <button type="submit" class="bg-[#2E6638] text-white px-6 py-2 mt-6 rounded-lg">Lanjutkan</button>
        </form>
    </div>
@endsection
