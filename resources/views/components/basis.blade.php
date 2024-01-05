<!DOCTYPE html>
    <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Sampah Kita</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <div class="hero_area">
        <!-- header section strats -->
        @auth
        @include('layouts.navbar2') <!-- Tampilkan navbar untuk pengguna yang sudah login -->
    @else
        @include('layouts.navbar') <!-- Tampilkan navbar untuk pengguna yang belum login -->
    @endauth
        <!-- end header section -->
        <section class="slider_section">
        {{$slot}}
        </section>
        <!-- footer section -->
        @include('layouts.footer')
        <!-- footer section -->
        </div>

    </body>
    


</html>