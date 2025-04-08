@extends('layouts.app')

@section('content')
    <div class="overflow-x-auto mt-6 font-poppins">
        <form method="GET" action="{{ route('overview.index') }}" class="mb-4">
            <div class="flex items-center">
                <input type="text" name="search" value="{{ request()->search }}"
                    class="px-4 py-2 border rounded-md w-full max-w-md" placeholder="Search by name...">
                <button type="submit" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md">Search</button>
            </div>
        </form>
        <table class="min-w-full bg-white shadow-md rounded-lg">
            <thead class="bg-[#f3f4f6]">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Nama</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Kategori Tes</th>
                    <th class="px-6 py-3 text-center text-sm font-medium text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($participants as $participant)
                    <tr class="border-b hover:bg-[#f9fafb] transition-all duration-300">
                        <td class="px-6 py-4 text-sm text-gray-800">{{ $participant->name }}</td>
                        <td class="px-6 py-4 text-sm">
                            @foreach ($participant->choices as $choice)
                                <a href="{{ route('overview.categoryDetails', ['categoryId' => $choice->category->id, 'participantId' => $participant->id]) }}"
                                    class="inline-block bg-[#e9ecf2] text-brown text-[13px] font-bold py-1 px-3 rounded-full mr-2 mb-2">
                                    {{ $choice->category->kategori }}
                                </a>
                            @endforeach
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('participants.show', $participant->id) }}"
                                class="text-blue-500 hover:text-blue-700">
                                <i class="fa fa-eye"></i>
                            </a>
                            <form action="{{ route('participants.destroy', $participant->id) }}" method="POST"
                                class="inline-block ml-3">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
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
