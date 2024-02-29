<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{{env('APP_NAME','BioLab')}}</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> --}}

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    @yield('styles')

    @livewireStyles

    @vite('resources/css/app.css')

</head>

<body>
    
    <!-- Preloader -->
    @yield('preloader')
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    @yield('header')
    <!-- End Header Area -->

    <!-- Start Hero Area -->
    @yield('hero')
    <!--/ End Hero Area -->

    <!-- Start Clients Area -->
    @yield('clients')
    <!-- /End Clients Area -->

    <!-- Start Features Area -->
    @yield('features')
    <!-- /End Features Area -->

    <!-- Start Achivement Area -->
    @yield('achievement')
    <!-- End Achivement Area -->

    <!-- Start App Download Area -->
    @yield('download')
    <!-- End App Download Area -->

    <!-- Start Cta Area -->
    @yield('call_action')
    <!-- End Cta Area -->

    <!-- Start Pricing Table Area -->
    @yield('pricing')
    <!--/ End Pricing Table Area -->

    <!-- Start Footer Area -->
    @yield('footer')
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/count-up.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @yield('scripts')
    
    @livewireScripts
</body>

</html>

