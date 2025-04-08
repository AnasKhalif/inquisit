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
                        @endif
                    </h3>
                    <a href="{{ route('participants.create') }}"
                        class="content-head-btn bg-blue-500 text-white px-4 py-2 rounded">Memulai</a>
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
                                <li class="tab-btn-item">
                                    <button class="tab-btn-link" type="button">Time</button>
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
