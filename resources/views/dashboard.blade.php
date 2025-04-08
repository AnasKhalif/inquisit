@extends('layouts.app')

@section('content')
    <div class="mt-5 font-poppins">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($participants as $participant)
                <div class="bg-white p-4 border border-black/5 mb-5 transition-all">
                    <div class="item-top flex justify-between mb-6">
                        <div class="item-top-title flex items-center">
                            <p class="font-semibold text-gray-800">{{ $participant->name }}</p>
                        </div>
                        <button class="item-top-btn hover:bg-sky-50 hover:shadow-lg transition-all bg-white">
                            <img src="../assets/icons/dots-icon.svg" alt="">
                        </button>
                    </div>
                    <div class="item-body my-1">
                        <p class="item-body-text py-3 mb-2 leading-[1.4] font-medium text-black/70 text-[15px]">
                            Kategori tes yang dipilih:
                            @foreach ($participant->choices as $choice)
                                <span class="text-gray-600">{{ $choice->category->kategori }}</span>
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </p>
                        <div class="badge-group flex flex-wrap">
                            @foreach ($participant->choices as $choice)
                                <span
                                    class="badge-brown bg-[#e9ecf2] text-brown text-[13px] font-bold py-1 inline-block rounded-md mr-[6px] mb-[6px] px-3">
                                    {{ $choice->category->kategori }}
                                </span>
                            @endforeach
                        </div>
                        <div class="item-progress flex mt-6">
                            <div class="progress-bar-item flex items-center">
                                <div
                                    class="progress-bar h-2 bg-[#e9ecf2] w-[80px] rounded-lg overflow-hidden flex items-stretch">
                                    <div class="progress-fill bg-[#00796b]" style="width: {{ $participant->progress }}%">
                                    </div>
                                </div>
                                <span
                                    class="progress-val text-gray-500 text-xs font-bold ml-3">{{ $participant->progress }}%</span>
                            </div>
                            <span class="badge-flash-white ml-4 text-sm">{{ $participant->choices->count() }} Kategori
                                tes</span>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
<script>
    window.onload = function() {
        sessionStorage.clear();
    };
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
