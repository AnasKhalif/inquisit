<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.partials.link')
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <div class="page-content">
            <div class="container">
                <div class="content-head" id="content-head">
                    <h3 class="content-head-title">
                        @if (request()->routeIs('dashboard'))
                            Tasks
                        @elseif(request()->routeIs('overview.index'))
                            Overview
                        @elseif(request()->routeIs('participants.create'))
                            Peserta
                        @elseif(request()->routeIs('participants.show'))
                            Detail Peserta
                        @elseif(request()->routeIs('overview.categoryDetails'))
                            Jawaban Peserta
                        @elseif(request()->routeIs('categories.index'))
                            Waktu Kategori
                        @elseif(request()->routeIs('categories.edit'))
                            Edit Waktu Kategori
                        @endif
                    </h3>
                    <div class="flex gap-2  ">
                        <a href="{{ route('participants.create') }}"
                            class="content-head-btn bg-blue-500 text-white px-4 py-2 rounded">Memulai</a>
                        <button type="button" id="resetDataBtn"
                            class="content-head-btn bg-blue-500 text-white px-4 py-2 rounded">Reset Data</button>
                    </div>
                    <!-- Modal Konfirmasi Reset Data -->
                    <div id="resetDataModal"
                        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
                        <div class="bg-white p-6 rounded shadow-lg text-center">
                            <h2 class="text-lg font-bold mb-4">Konfirmasi Reset Data</h2>
                            <p class="mb-4">Apakah Anda yakin ingin menghapus semua data dan reset database? Tindakan
                                ini tidak dapat dibatalkan.</p>
                            <div class="flex justify-center gap-4">
                                <button id="confirmResetBtn" class="bg-red-500 text-white px-4 py-2 rounded">Ya,
                                    Reset</button>
                                <button id="cancelResetBtn" class="bg-gray-300 px-4 py-2 rounded">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-tab">
                <div class="content-tab-head" id="content-header">
                    <div class="tab-l">
                        <ul class="tab-btns">
                            <li class="tab-btn-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                                <a href="{{ route('dashboard') }}" class="tab-btn-link">Tasks</a>
                            </li>
                            <li class="tab-btn-item {{ request()->routeIs('overview.index') ? 'active' : '' }}">
                                <a href="{{ route('overview.index') }}" class="tab-btn-link">Overview</a>
                            </li>
                            <li class="tab-btn-item {{ request()->routeIs('categories.index') ? 'active' : '' }}">
                                <a class="tab-btn-link" href="{{ route('categories.index') }}">Time</a>
                            </li>
                            <li class="tab-btn-item">
                                <button class="tab-btn-link" type="button">Files</button>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-r">
                        <button class="tab-r-btn" id="fullscreen-btn">
                            <img src="{{ asset('/assets/icons/maximize-icon.svg') }}" class="tab-r-btn-icon"
                                alt="">
                            <span class="tab-r-btn-text">Full screens</span>
                        </button>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
    </div>

    <script>
        // Modal konfirmasi reset data
        const resetDataBtn = document.getElementById('resetDataBtn');
        const resetDataModal = document.getElementById('resetDataModal');
        const confirmResetBtn = document.getElementById('confirmResetBtn');
        const cancelResetBtn = document.getElementById('cancelResetBtn');

        resetDataBtn.addEventListener('click', () => {
            resetDataModal.classList.remove('hidden');
        });
        cancelResetBtn.addEventListener('click', () => {
            resetDataModal.classList.add('hidden');
        });
        confirmResetBtn.addEventListener('click', () => {
            window.location.href = "{{ route('reseeder') }}";
        });
        const fullscreenButton = document.getElementById('fullscreen-btn');

        const contentHeader = document.getElementById('content-header');
        const contentTabs = document.querySelector('.content-tab-head');
        const contentLeft = document.querySelector('.tab-l');
        const contentRight = document.querySelector('.tab-r');
        const contentHead = document.getElementById('content-head');

        if (sessionStorage.getItem('fullscreen') === 'true') {
            contentHeader.classList.add('hidden');
            contentTabs.classList.add('hidden');
            contentLeft.classList.add('hidden');
            contentRight.classList.add('hidden');
            contentHead.classList.add('hidden');
        }

        fullscreenButton.addEventListener('click', () => {
            contentHeader.classList.add('hidden');
            contentTabs.classList.add('hidden');
            contentLeft.classList.add('hidden');
            contentRight.classList.add('hidden');
            contentHead.classList.add('hidden');

            sessionStorage.setItem('fullscreen', 'true');

            document.addEventListener('keydown', function(event) {
                if (event.key === "Escape") {
                    contentHeader.classList.remove('hidden');
                    contentTabs.classList.remove('hidden');
                    contentLeft.classList.remove('hidden');
                    contentRight.classList.remove('hidden');
                    contentHead.classList.remove('hidden');
                    sessionStorage.setItem('fullscreen', 'false');
                }
            });
        });
    </script>
</body>

</html>
