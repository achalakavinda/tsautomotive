<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ThemeServices">
    <!-- Favicon Icon -->
    <link rel="icon" href="assets/img/favicon.png">
    <!-- Site Title -->
    <title>Welcome | TS Automotive - Malaga</title>


    @production
        {{-- production only --}}
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-T5PB7HMYZF"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-T5PB7HMYZF');
        </script>
    @endproduction



    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/style.css">
    @yield('css')
</head>

<body>
    <!-- Start Preloader -->
    <div class="cs_center cs_heading_bg" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <img src="assets/img/preloader_logo.svg" alt="img">
                <img src="assets/img/icons/wheel.svg" alt="img" class="wheel">
            </div>
            {{-- <div class="loading-text">
          <img src="assets/img/logo.svg" alt="img">
        </div> --}}
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Start Header Section -->
    @include('components.header')
    <!-- End Header Section -->


    @yield('content')


    <!-- Start Footer -->
    @include('components.footer')
    <!-- End Footer -->


    <!-- Start Scroll Top Button -->
    <div class="cs_scroll_top_btn cs_accent_bg cs_white_color cs_center cs_radius_50">
        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 32 32">
            <path fill="currentColor" d="M16 4L6 14l1.41 1.41L15 7.83V28h2V7.83l7.59 7.58L26 14z" />
        </svg>
    </div>
    <!-- End Scroll Top Button -->


    <x-sweet-alert />
    <!-- Script -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.slick.min.js"></script>
    <script src="assets/js/ripples.min.js"></script>
    <script src="assets/js/odometer.js"></script>
    <script src="assets/js/main.js"></script>
    @yield('js')

</body>

</html>