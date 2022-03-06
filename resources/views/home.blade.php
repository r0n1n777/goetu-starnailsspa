@extends('layout')

@section('title', 'Home - Star Nail & Spa')

@section('content')
<section class="page-section clearfix" data-aos="fade-up">
    <div class="container">
        <div class="intro"><img class="img-fluid intro-img mb-3 mb-lg-0 rounded" src="{{ asset('images/home/about.webp') }}">
            <div class="intro-text left-0 text-centerfaded p-5 rounded bg-faded text-center">
                <h2 class="section-heading mb-4"></h2>
                <img src="{{ asset('images/home/about-icon.webp') }}">
                <p class="mb-3">At Star Nails & Spa, we're here to pamper you. With our expert manicurists, you'll walk out of here looking and feeling better than ever. Stop by today and treat yourself to some TLC!</p>
                <div class="mx-auto intro-button">
                    <a class="btn btn-primary d-inline-block mx-auto btn-xl" role="button" href="https://salons.go3reservation.com/star-nails-and-spa-6530-s-decatur-suite-115-las-vegas-nevada" target="_blank" style="font-size: 17px;font-family: Raleway, sans-serif;">
                        <x-feathericon-calendar/> Book Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<img src="{{ asset('images/promotions/banner.webp') }}" style="width: 100vw;">

<div class="team-clean">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="color: rgb(88,90,92);font-family: Raleway, sans-serif;">Services We Offer</h2>
        </div>
        <div class="row people">
            <div class="col-md-6 col-lg-4 item"><img class="rounded-circle shadow" src="{{ asset('images/home/service1.webp') }}" data-aos="fade-up">
                <h3 class="name">Manicure</h3>
                <p class="description">Spa quality and begins with warm butter soak using the products in your treatment-of-choice.</p>
            </div>
            <div class="col-md-6 col-lg-4 item"><img class="rounded-circle shadow" src="{{ asset('images/home/service2.webp') }}" data-aos="fade-up" data-aos-delay="100">
                <h3 class="name">Pedicure</h3>
                <p class="description">One of the best ways to take care of your feet and toenails. A pedicure is a procedure involving a variety of treatments for your toenails. </p>
            </div>
            <div class="col-md-6 col-lg-4 item"><img class="rounded-circle shadow" src="{{ asset('images/home/service3.webp') }}" data-aos="fade-up" data-aos-delay="200">
                <h3 class="name">Waxing</h3>
                <p class="description">We use 100% organic wax for the removal of unwanted hair, followed by a cooling gel. </p>
            </div>
        </div>
        <div class="row">
            <div class="col text-center p-2">
                <a class="btn btn-primary d-inline-block mx-auto btn-xl" role="button" style="font-size: 17px;font-family: Raleway, sans-serif;" href="{{ route('services') }}" data-aos="fade-up">
                    <x-feathericon-grid/> Show Menu of Services
                </a>
            </div>
        </div>
    </div>
</div>
<div class="py-5 mt-5" style="background-image: url('{{ asset('images/home/featured.webp') }}'); background-size: contain; background-repeat: repeat;">
    <div class="intro">
        <h2 class="text-center font-weight-bold" style="color: rgb(88,90,92);font-family: Raleway, sans-serif;">Featured Works</h2>
    </div>
    <div class="row people">
        <div class="col-md-6 col-lg-4 item text-center p-2">
            <img src="{{ asset('images/gallery/5.webp') }}" class="gallery_image img-thumbnail shadow" data-aos="fade-up">
        </div>
        <div class="col-md-6 col-lg-4 item text-center p-2">
            <img src="{{ asset('images/gallery/7.webp') }}" class="gallery_image img-thumbnail shadow" data-aos="fade-up" data-aos-delay="100">
        </div>
        <div class="col-md-6 col-lg-4 item text-center p-2">
            <img src="{{ asset('images/gallery/18.webp') }}" class="gallery_image img-thumbnail shadow" data-aos="fade-up" data-aos-delay="100">
        </div>
        <div class="col-md-6 col-lg-4 item text-center p-2">
            <img src="{{ asset('images/gallery/9.webp') }}" class="gallery_image img-thumbnail shadow" data-aos="fade-up" data-aos-delay="200">
        </div>
        <div class="col-md-6 col-lg-4 item text-center p-2">
            <img src="{{ asset('images/gallery/22.webp') }}" class="gallery_image img-thumbnail shadow" data-aos="fade-up" data-aos-delay="300">
        </div>
        <div class="col-md-6 col-lg-4 item text-center p-2">
            <img src="{{ asset('images/gallery/46.webp') }}" class="gallery_image img-thumbnail shadow" data-aos="fade-up" data-aos-delay="400">
        </div>
    </div>
    
    <div class="row">
        <div class="col text-center p-2">
            <a class="btn btn-primary d-inline-block mx-auto btn-xl" role="button" style="font-size: 17px;font-family: Raleway, sans-serif;" href="{{ route('gallery') }}" data-aos="fade-up">
                <x-feathericon-grid/> More Photos
            </a>
        </div>
    </div>
</div>

<div>
    <div class="mapouter"><div class="gmap_canvas"><iframe style="width: 100vw;" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=6530%20S%20Decatur%20Blvd,%20Las%20Vegas,%20NV%2089118,%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100vw;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100vw;}</style></div></div>
</div>
@endsection