<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="keywords" content="online solution, it, tech, sass, technology, teaching, learning">
    <meta name="description"
          content="Techy is a it solutions HTML template for all kinds of it, technology, online tech website">
    <title>AI-SANA</title>
    <meta property="og:site_name" content="Techy">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Techy – IT Solution & Web Security HTML5 Template">
    <meta name='og:image' content='/assets/img/ogg.png'>
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#913BFF">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#913BFF">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#913BFF">

    <!-- <link rel="manifest" href="site.webmanifest" /> -->
    <link rel="icon" href="/assets/img/icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/assets/fonts/custom-font/assets/css/clash-display.css"/>
    <link rel="stylesheet" href="/assets/fonts/bootstrap-icons/font-css.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/slick.css"/>
    <link rel="stylesheet" href="/assets/css/all.min.css"/>
    <link rel="stylesheet" href="/assets/css/metisMenu.css"/>
    <link rel="stylesheet" href="/assets/css/aos.css"/>
    <link rel="stylesheet" href="/assets/css/spacing.css"/>
    <link rel="stylesheet" href="/assets/css/main.css"/>
</head>

<body>
<div class="main-page-wrapper">
    <!--[if lte IE 9]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a
        href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->
    <!-- offcanvas start  -->
    <div class="offcanvas offcanvas-top theme-bg" tabindex="-1" id="offcanvasTop">
        <div class="offcanvas-header">
            <a data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="fas fa-times search-close" id="search-close"></i>
            </a>
        </div>
        <div class="offcanvas-body">
            <!-- Fullscreen search -->
            <div class="search-wrap">
                <form method="get">
                    <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                </form>
            </div>
            <!-- end fullscreen search -->
        </div>
    </div>
    <!-- offcanvas end  -->

    @include('layouts.components.header')

    <!-- slide-bar start -->
    <aside class="slide-bar">
        <div class="close-mobile-menu">
            <a href="javascript:void(0);">
                <i class="fas fa-times"></i>
            </a>
        </div>
        @include('layouts.components.offsetSidebar')
        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu">
            <ul id="mobile-menu-active">
                <li>
                    <a href="/">Главная</a>
                </li>
                <li>
                    <a href="{{ route('projects.index') }}">Проекты</a>
                </li>
                <li>
                    <a href="{{ route('news.index') }}">Новости</a>
                </li>
            </ul>
        </nav>
        <!-- side-mobile-menu end -->
    </aside>
    <div class="body-overlay"></div>
    <!-- slide-bar end -->

    <main>
        @yield('content')
    </main>
    @include('layouts.components.footer')
</div>

<!-- JS here -->

<script src="/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="/assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="/assets/js/vendor/popper.min.js"></script>
<script src="/assets/js/vendor/bootstrap.min.js"></script>
<script src="/assets/js/slick.min.js"></script>
<script src="/assets/js/jquery.supermarquee.min.js"></script>
<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="/assets/js/isotope.pkgd.min.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/metisMenu.min.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/aos.js"></script>
<script src="/assets/js/jquery.counterup.min.js"></script>
<script src="/assets/js/jquery.waypoints.min.js"></script>
<script src="/assets/js/tilt.jquery.min.js"></script>
<script src="/assets/js/jquery.easypiechart.min.js"></script>
<script src="/assets/js/jquery-ui.js"></script>
<script src="/assets/js/jquery.scrollUp.min.js"></script>
<script src="/assets/js/plugins.js"></script>

<!--Custom JS here -->
<script src="/assets/js/main.js"></script>


</body>

</html>
