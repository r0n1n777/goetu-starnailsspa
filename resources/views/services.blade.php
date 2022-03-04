@extends('layout')

@section('title', 'Services - Star Nails & Spa')

@section('content')
<section style="background-image: url('{{ asset('images/services/services-bg.webp') }}'); background-size: contain; background-repeat: repeat;">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto shadow bg-white">
                <div class="bg-white py-3 text-center rounded">
                    <h2 class="section-heading mb-5"><span class="section-heading-lower font-weight-bold">Services</span></h2>
                    <img src="{{ asset('images/services/manicure.webp') }}" class="img-fluid" data-aos="fade-up"><br><br>
                    <img src="{{ asset('images/services/pedicure.webp') }}" class="img-fluid" data-aos="fade-up"><br><br>
                    <img src="{{ asset('images/services/waxing.webp') }}" class="img-fluid" data-aos="fade-up">

                </div>
            </div>
        </div>
    </div>
</section>
@endsection