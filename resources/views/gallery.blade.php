@extends('layout')

@section('title', 'Gallery - Star Nails & Spa')

@section('content')
<section style="background-image: url('{{ asset('images/gallery/gallery-bg.webp') }}'); background-repeat: repeat;">
    <div class="photo-gallery" style="background-color: rgba(255,255,255,0);">
        <div class="container">
            <img src="{{ asset('images/gallery/gallery.webp') }}" class="img-fluid rounded mt-3"><br>
            <div class="row photos pt-3">
                @for ($x = 49; $x >= 1; $x--)
                <div class="col-sm-3 col-md-4 col-lg-3 text-center item"><a data-lightbox="photos" href="{{ asset('images/gallery/'.$x.'.webp') }}"><img class="img-fluid border rounded border-white shadow gallery_image" src="{{ asset('images/gallery/'.$x.'.webp') }}" data-aos="fade-up"></a></div>
                @endfor
            </div>
        </div>
    </div>
</section>
@endsection