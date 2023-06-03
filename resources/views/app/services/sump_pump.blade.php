@extends('layouts.index')
@section('title')
    Sump Pump Services | {{ env('APP_NAME') }}
@endsection

@section('meta')
@endsection

@section('schema')
    {{-- <script type="application/ld+json">
        {!! file_get_contents('uph-faqs.json') !!}
    </script> --}}
@endsection

@section('content')
    <!-- main section -->
    <!-- main section -->
    <main class="position-relative">
        <!-- bg-img -->
        <picture class="lozad">
            <source media="(max-width: 878px)"
                srcset="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-move-in-cleaning-house-cleaning-services.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images//NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-move-in-cleaning-house-cleaning-services.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-move-in-cleaning-house-cleaning-services.jpg') }}"
                alt="upholstery cleaning">
        </picture>


        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Sump Pump Services</h1>
                <h3 class="tex-white text-center text-lg-start">
                    Trusted and recommended Sump Pump services provider in NYC
                </h3>
                {{-- book now form --}}
                @include('app.static_components.booknow_form')
            </div>
        </div>
    </main>

    <!-- review banner section  -->
    {{-- @include('app.static_components.review_banner') --}}

    <!-- main content section  -->
    <section class="">
        <div class="container py-5 main-content-section text-lightgray">
            <h1 class="text-center text-green fs-1 py-5">Sump Pump Services</h1>

            <p><strong>
                    Water heaters are an essential part of our everyday lives. Providing us with the
                    comfort and convenience of hot water whenever we need it. A faulty and
                    malfunctioning one can need you to call plumbing services for either water heater
                    repair or water heater replacement. We at H2OBros Plumbing provide all kinds of
                    plumbing repair and installation services regardless of whether you have a tankless
                    water heater, hot water heater, electric water heater, solar water heater, or gas water
                    heater.
                </strong></p>
            <p class="fs-3"><strong>Sump Pump Installation</strong></p>
            <p>Now you could just search the web for “sump pump installation near me” or
                “sump pump maintenance near me”. But are you gonna trust a random local plumber
                with such an important task? When it comes to sump pump plumbing, you need an
                expert. We at H2O Bros Plumbing have a team of widely experienced plumbers in
                sewage ejector pumps, basement sump pumps, and even the entire basement
                sump pump system.</p>

            <p class="fs-3"><strong>Sump Pump Repair</strong></p>
            <p>Sump pumps are an entire system consisting of several pieces of equipment, tools,
                and pipes that function together to prevent flooding. It needs timely upkeep to fix
                leaking pipes or battery backups. We offer sump pump services such as sump pump
                replacement, sump pump maintenance, sump pump float replacement, sump pump
                battery replacement, sump pump switch replacement.</p>
            <p class="fs-3"><strong>Sump Pump Cost</strong></p>
            <p>The cost to install sump pump and french drain can vary based on the type of sump
                pump you choose to install. There are several types such as ejector pumps,
                submersible pumps, and pedestal pumps. Our team of experts have experience in
                installing each of those.
            </p>
        </div>

    </section>
    {{-- offer-serivces section --}}
    @include('app.static_components.we_offer')
    <!-- Callback section -->
    @include('app.static_components.callback_form_banner')


    {{-- 
    <!-- Slider -->
    <section class="slider-section overflow-hidden pt-3">
        <!-- services section header -->
        <div class="services-section-header py-4">
            <p class="fs-1 text-blue py-4">Check out our Upholstery cleaning work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/upholstery-cleaning/thumbs/10010-NY-sofa-cleaning-NYC-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning-min.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/upholstery-cleaning/thumbs/11105-Best-carpet-cleaner-for-allergies-carpet-cleaner-service-NY-PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-min.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Green and non-toxic carpet cleaning services" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/upholstery-cleaning/thumbs/11105-cleaner-for-couch-fabric-PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-NY-sofa-cleaning-nyc-min.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Office carpet cleaning" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/upholstery-cleaning/thumbs/11105-couch-cleaner-nyc-NY-PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-sofa-cleaning-nyc-min.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="Office carpet cleaning"
                                width="420" height="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/upholstery-cleaning/thumbs/11105-PristineGreen-Upholstery-and-Carpet-Cleaning-NY-sofa-cleaning-NYC-Queens-min.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/upholstery-cleaning/thumbs/11105-leather-furniture-cleaning-services-NY-PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-upholstery-cleaning-services.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/upholstery-cleaning/thumbs/mattress-cleaner-nyc-PristineGreen-Upholstery-and-Carpet-Cleaning-upholstery-cleaning-nyc-NY-Queens-11105-min.webp') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/upholstery-cleaning/thumbs/sofa-cleaning-NYC-10010-NY-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning-min.webp') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/upholstery-cleaning/thumbs/New York Carpet Cleaner Service PristineGreen Upholstery and Carpet Cleaning 10010 carpet upholstery cleaning.webp') }}"
                                style>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
            <div class="w-100 h-100 position-absolute top-0 d-flex justify-content-between px-2 px-sm-4 align-items-center">
                <div id="swiper-button-prev" class="swiper-button-prev trusted-swiper-btn-prev"></div>
                <div id="swiper-button-next" class="swiper-button-next trusted-swiper-btn-prev"></div>
            </div>
        </div>

    </section>

 --}}


    <!-- what serivces you need section -->
    @include('app.static_components.callback_form_submit')
    @include('app.static_components.faq-section')
    @include('app.static_components.callus_banner')
@endsection
