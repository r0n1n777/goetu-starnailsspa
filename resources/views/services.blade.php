@extends('layout')

@section('title', 'Services - Star Nails & Spa')

@section('content')
<section style="background-image: url('{{ asset('images/services/services-bg.webp') }}'); background-size: contain; background-repeat: repeat;">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto shadow py-3">
                <div class="text-center">
                    <img src="{{ asset('images/services/services.webp') }}" class="img-fluid rounded-top" data-aos="fade-up"><br>
                    <img src="{{ asset('images/services/manicure.webp') }}" class="img-fluid" data-aos="fade-up"><br><br>
                    <img src="{{ asset('images/services/pedicure.webp') }}" class="img-fluid" data-aos="fade-up"><br><br>
                    <img src="{{ asset('images/services/waxing.webp') }}" class="img-fluid" data-aos="fade-up">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection