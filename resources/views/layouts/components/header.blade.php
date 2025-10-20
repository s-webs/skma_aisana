<!-- header-area start -->
<header class="theme-main-menu py-lg-4">
    <div class="main-header-area">
        <div class="container custom-container-nav">
            <div class="row gx-4 gx-xxl-5 align-items-center">
                <div class="col-xxl-3 col-xl-2 col-lg-2 col-6 text-start">
                    <div class="logo-area">
                        <a href="/"><img src="/assets/img/logo/header-logo-1.png" alt="Header-logo"></a>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 d-none d-lg-block">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mb-2 mb-lg-0 ps-1">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/">Главная</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('projects.index') }}">Проекты</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('news.index') }}">Новости</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-6 text-end">
                    <ul class="right-nav mb-0 d-flex align-items-center justify-content-end">
                        {{--                        <li>--}}
                        {{--                            <div class="d-none d-xxl-inline-block right-language pr-40">--}}
                        {{--                                <div class="dropdown">--}}
                        {{--                                    <a class="language-btn dropdown-toggle" href="#" role="button"--}}
                        {{--                                       id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">--}}
                        {{--                                        RU--}}
                        {{--                                        <i class="fal fa-chevron-down"></i>--}}
                        {{--                                    </a>--}}
                        {{--                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
                        {{--                                        <li>--}}
                        {{--                                            <a class="dropdown-item" href="#">KZ</a>--}}
                        {{--                                        </li>--}}
                        {{--                                        <li>--}}
                        {{--                                            <a class="dropdown-item" href="#">EN</a>--}}
                        {{--                                        </li>--}}
                        {{--                                    </ul>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </li>--}}
                        <li class="custom-hidden-xl">
                            <div class="hamburger-menu">
                                <a class="round-menu" href="javascript:void(0);">
                                    <i class="bi bi-list"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.theme-main-menu -->
</header>
<!-- header-area end -->
