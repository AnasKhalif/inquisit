<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.partials.link')
</head>

<body>
    <div class="main-wrapper">
        @include('layouts.partials.navbar')
        <div class="page-content">
            <div class="container">
                <div class="content-head">
                    <h3 class="content-head-title">Recap Question</h3>
                    <button class="content-head-btn">Memulai</button>
                </div>
                <div class="content-tab">
                    <div class="content-tab-head">
                        <div class="tab-l">
                            <ul class="tab-btns">
                                <li class="tab-btn-item active">
                                    <button class="tab-btn-link" type="button">Overview</button>
                                </li>
                                <li class="tab-btn-item">
                                    <button class="tab-btn-link" type="button">Tasks</button>
                                </li>
                                <li class="tab-btn-item">
                                    <button class="tab-btn-link" type="button">Files</button>
                                </li>
                                <li class="tab-btn-item">
                                    <button class="tab-btn-link" type="button">Time</button>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-r">
                            <button class="tab-r-btn">
                                <img src="../assets/icons/maximize-icon.svg" class="tab-r-btn-icon" alt="">
                                <span class="tab-r-btn-text">Full screens</span>
                            </button>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>

</html>
