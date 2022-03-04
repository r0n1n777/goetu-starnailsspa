@extends('layout')

@section('title', 'About - Star Nails & Spa')

@section('content')
<section style="background-image: url('{{ asset('images/about/about-bg.webp') }}'); background-size: 300px 300px; background-repeat: repeat;">
    <div class="container"><img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{ asset('images/about/about.webp') }}" data-aos="fade-up">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4"><span class="section-heading-lower" style="margin-bottom: -5px;">&nbsp;About US</span></h2>
                        <p data-aos="fade-up">It is our goal to ensure your utmost satisfaction through an attentive staff, professional environment, and outstanding sanitation. We believe in only providing you the best quality of nail care by staying up-to-date with the
                            hightest standards of Nail Care and provide you with excellent services while maintaining a clean, friendly, and relaxing atmosphere. For your health and safety, pedicure liners are changed out, disposed off and the tub
                            will be thoroughly cleaned after each use. All tools used for pedicure and manicure services will be disposed of once finished. Other tools will be properly cleaned with barbicide and placed in sterilizer.<br><br>We understand
                            that safety and sanitation are keys to your peace of mind. Our implements are medically sterilized and disinfected after each use. By implying only the top rated sanitary spa equipment along with vigorous staff. Straining
                            and services procedures you can rest assured that you are in good hands.<br><br>We truly value all of our customers feedback and want to listen to you inout. If you are unsatisfied with your service at our salon for any
                            reason, please speak to a team member at the front desk and we will help accommodate you to the best of our ability.</p>
                        <p data-aos="fade-up">At Star Nails & Spa, we aim to provide you with outstanding services that exceed the highest of standards. With the help of our dedicated team, professional and comfortable environment and exceptional sanitation practices, we hope you leave our salon with a rejuvenating experience. We're here for your every nail care need! Please contact us with any questions or concerns today.</p>
                        <img src="{{ asset('images/about/contact.webp') }}" class="img-fluid" data-aos="fade-up">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection