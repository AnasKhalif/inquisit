@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg mt-8 lg:mt-12 font-poppins">
        <h2 class="text-xl font-semibold mb-4 text-center">Masukkan Data Peserta</h2>

        <form action="{{ route('participants.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block mb-2">Nama</label>
                <input type="text" name="name" class="w-full border px-3 py-2 rounded md:text-lg" required>
            </div>

            <div class="mb-4">
                <label class="block mb-2">Usia</label>
                <input type="number" name="age" class="w-full border px-3 py-2 rounded md:text-lg" required
                    min="10">
            </div>

            <div class="mb-5">
                <label class="block mb-2">Jenis Kelamin</label>
                <select name="gender" class="w-full border px-3 py-2 rounded md:text-lg" required>
                    <option value="male">Laki-laki</option>
                    <option value="female">Perempuan</option>
                </select>
            </div>

            <div class="mb-5">
                <label class="block mb-5 text-black">Kategori Soal:</label>
                <div class="text-black flex flex-wrap gap-6">
                    @foreach ($categories as $category)
                        <div class="flex items-center space-x-3 min-w-[120px]">
                            <input type="checkbox" name="categories[]" value="{{ $category->id }}" class="w-5 h-5">
                            <label class="text-black">{{ $category->kategori }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-6 flex justify-center">
                <button type="submit"
                    class="bg-[#2E6638] text-white px-4 py-2 rounded rounded-full w-full md:w-auto">Submit</button>
            </div>
        </form>
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
