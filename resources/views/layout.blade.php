<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="At Star Nails & Spa, we're here to pamper you. With our expert manicurists, you'll walk out of here looking and feeling better than ever. Stop by today and treat yourself to some TLC!">
    <meta name="keywords" content="Nails, Manicure, Pedicure, Las Vegas, Star Nails and Spa, Waxing, Nevada">
    <meta name="themeColor" content="rgb(230,167,86)">
    <meta property="og:title" content="Star Nails & Spa" />
    <meta property="og:url" content="https://www.starnailandspar.us" />
    <meta property="og:image" content="{{ asset('images/about/contact.webp') }}" />
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akronim">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+SC">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aleo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alex+Brush">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alice">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike+Angular">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allan">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/4-Col-Small-Slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Basic-fancyBox-Gallery.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/Lightbox-Gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Team-Clean.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>

<body style="background: linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('{{ asset('assets/img/bg.jpg') }}'); background-image: url('{{ asset('images/bg.webp') }}'); background-size: contain; background-repeat: no-repeat;">
    <h1 class="text-center text-white d-none d-lg-block site-heading" style="margin-top: 0px;margin-bottom: 0px;padding-top: 80px;padding-bottom: 80px;">
        <div class="d-flex justify-content-center align-items-center">
            <div class="rounded-circle p-5 shadow" style="background-image: url('{{ asset('images/white-transparent-bg.webp') }}'); background-repeat: repeat;">
                <img src="{{ asset('logo-no-bg.webp') }}" width="150px">
            </div>
            <div>
                <span class="site-heading-lower ml-3" style="font-family: Raleway, sans-serif; color: rgb(230,167,86);"><b>Star</b> Nails & Spa</span><br>
                <x-feathericon-map-pin class="text-dark"/> <span style="font-family: Lora, sans-serif; font-size: 20px;" class="text-dark font-weight-bold">6530 S Decatur Suite #115 Las Vegas, NV 89118</span><br>
                <x-feathericon-phone class="text-dark"/> <span style="font-family: Lora, sans-serif; font-size: 20px;" class="text-dark font-weight-bold">(702) 640-0919</span>
            </div>
        </div>
    </h1>
    <nav class="navbar navbar-light navbar-expand-lg bg-dark py-lg-4" id="mainNav" style="background-color: rgb(242,244,245);">
        <div class="container">
            <a class="navbar-brand text-uppercase d-lg-none text-expanded" href="#">
                <img src="{{ asset('logo-no-bg.webp') }}" width="50px">
                <b>Star</b> Nails & Spa
            </a>
            <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler border-light" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background-color: rgb(230,167,86);">
                <span class="navbar-toggler-icon" style="color: #ffffff;filter: brightness(200%) contrast(0%);"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link @if (request()->is('/') || request()->is('home')) text-primary border-bottom border-primary @endif" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link @if (request()->is('services')) text-primary border-bottom border-primary @endif" href="{{ route('services') }}">Services</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link @if (request()->is('gallery')) text-primary border-bottom border-primary @endif" href="{{ route('gallery') }}">Gallery</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link @if (request()->is('about')) text-primary border-bottom border-primary @endif" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="tel:7026400919"><x-feathericon-phone/> Call Now</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    @yield('content')

    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-primary text-center mb-3" data-aos="fade-up">
                    <span class="text-white">Rate us on:</span><br>
                    <a href="https://www.yelp.com/biz/star-nails-and-spa-las-vegas-3" target="_blank">
                        <img src="{{ asset('images/icons/yelp.webp') }}" width="20px">Yelp Reviews
                    </a><br>
                    <a href="https://www.google.com/search?q=Star+Nails+%26+Spa&stick=H4sIAAAAAAAAAONgU1I1qLAwSLZINk8yMzaysEw1TzS2MqiwNLcwTTE0MLU0MTeyTExOWcQqEFySWKTgl5iZU6ygphBckAgABicHVTwAAAA&hl=en&mat=CS78NYG2t0zwEmQBT5f1BqV8bYf40_uu3oX2ISUV-2bxkR4yQOjsP8qqV-SkHdJpS_M_1mh3846rMgv2hWisoJa0y21hMBixtAC4VprEqKCpSCNK7W7Zpu9PRPTtkU2a7FDcdRuvso1s79Ba1LHt&authuser=0#lrd=0x80c8c7b63289e7a3:0x9785d10594729acd,1" target="_blank">
                        <img src="{{ asset('images/icons/google.webp') }}" width="20px" class="mr-1">Google Reviews
                    </a><br><br>
                    
                    <span class="text-white">Follow us on Social Media:</span><br>
                    <a href="https://www.facebook.com/starnailssandspa/" target="_blank">
                        <x-feathericon-facebook/> @starnailssandspa
                    </a><br>
                    <a href="https://www.instagram.com/starnailssandspa/" target="_blank">
                        <x-feathericon-instagram/> @starnailssandspa
                    </a>
                </div>
                <div class="col-md-5 col-lg-4 text-primary text-center mb-3" data-aos="fade-up" data-aos-delay="100">
                    <span class="text-white">Business Information:</span><br>
                    <x-feathericon-map-pin/> 6530 S Decatur Suite #115 <br>Las Vegas, NV 89118<br>
                    <x-feathericon-phone/> (702) 640-0919
                </div>
                <div class="col-md-3 text-primary text-center" data-aos="fade-up" data-aos-delay="200">
                    <span class="text-white">Business Hours:</span><br>
                    <x-feathericon-clock/> Mon - Sat: <br>9:30AM - 8:00PM<br>
                    <x-feathericon-clock/> Sunday: <br>11:00AM - 6:00PM
                </div>
            </div>
            {{-- <p class="m-0 small">Copyright&nbsp;©&nbsp;Star Nails & Spa 2022</p> --}}
        </div>
    </footer>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script src="{{ asset('assets/js/Basic-fancyBox-Gallery.js') }}"></script>
    <script src="{{ asset('assets/js/4-Col-Small-Slider.js') }}"></script>
    <script src="{{ asset('assets/js/current-day.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>