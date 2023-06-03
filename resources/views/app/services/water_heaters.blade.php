@extends('layouts.index')
@section('title')
    Water Heaters| {{ env('APP_NAME') }}
@endsection
@section('schema')
    {{-- <script type="application/ld+json">
        {!! file_get_contents('carpet-faqs.json') !!}
    </script> --}}
@endsection
@section('meta')
@endsection

@section('css')
@endsection
<style>
    @media screen and (max-width:878PX) {
        .ser-banner>img {
            background-size: 100% 100%;
        }
    }
</style>
@section('content')
    <!-- main section -->
    <main class="position-relative">
        <!-- bg-img -->
        <picture class="lozad ser-banner">
            <source media="(max-width: 878px)"
                srcset="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}"
                alt="carpet cleaning">
        </picture>
        <div class="p-4 p-lg-5 pb-120  position-absolute bottom-0 w-100 h-100">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Water Heaters</h1>
                <h3 class="tex-white text-center text-lg-start">
                    Top Water Heaters Service Provider in NYC
                </h3>
                {{-- book now form --}}
                @include('app.static_components.booknow_form')
            </div>
        </div>
    </main>


    <!-- review banner section  -->
    {{-- @include('app.static_components.review_banner') --}}

    <!-- main content section  -->
    <section>
        <div class="container py-5 main-content-section text-lightgray">
            <h1 class="text-center text-green fs-1 py-5">Water Heaters</h1>

            <p><strong>
                    Water heaters are an essential part of our everyday lives. Providing us with the
                    comfort and convenience of hot water whenever we need it. A faulty and
                    malfunctioning one can need you to call plumbing services for either water heater
                    repair or water heater replacement. We at H2OBros Plumbing provide all kinds of
                    plumbing repair and installation services regardless of whether you have a tankless
                    water heater, hot water heater, electric water heater, solar water heater, or gas water
                    heater.
                </strong></p>
            <p class="fs-3"><strong>Water Heater Installation</strong></p>
            <p>Just moved into your new home? You must be all over the web, searching for
                plumbing services by typing in phrases such as, “plumbers near me”. But are you
                just gonna trust a random local plumber online with your new home? No, right? Let
                experts do the heavy lifting. Be it a tankless water heating or a roof fitted solar water
                heater, we’ll install it for you in no time.</p>

            <p class="fs-3"><strong>Hot Water Heater Repair</strong></p>
            <p>When it comes to water heater repair there is no one who does it better than us. We
                take care of all the plumbing end-to-end reducing all hassle at your end. Our team
                will reach you, inspect and get done with the repair in no time at an affordable cost.
                The cost of repairs could vary based on what needs to be fixed, for e.g. We offer
                repair services for : gas water heater repair, hot water repair, tankless water heater
                repair, solar water heater repair.</p>
            <p class="fs-3"><strong>Water Heater Installation Cost</strong></p>
            <p>The cost of a water heater installation varies depending on several factors. The cost
                can vary depending on the type of water heater. Water heaters are of several types
                such as hot water heater, tankless water heater, electric water heater, solar water
                heater, or gas water heater. Also factors like the size and quality of the water heater
                affect the cost.
            </p>
        </div>

    </section>



    <!-- Callback section -->
    @include('app.static_components.callback_form_banner')

    {{-- offer-serivces section --}}
    @include('app.static_components.we_offer')

    {{-- <!-- Slider -->
    <section class="slider-section overflow-hidden pt-3">
        <!-- services section header -->
        <div class="services-section-header py-4">
            <p class="fs-1 text-blue pt-4">Check out our Carpet cleaning work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/carpet-cleaner-nyc-New-York-best-carpet-steam-cleaner-PristineGreen-Upholstery-and-Carpet-Cleaning-10010.webp') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/11105-carpet-cleaner-nyc-NY-rug-cleaner-nyc-PristineGreen-Upholstery-and-Carpet-Cleaning-Queens.webp') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Green and non-toxic carpet cleaning services" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/Area-Rug-Cleaning-PristineGreen-Upholstery-and-Carpet-Cleaning-11105-NY.webp') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Office carpet cleaning" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/Queens%20Carpet%20Cleaner%20Service%20PristineGreen%20Upholstery%20and%20Carpet%20Cleaning%2011105%20residential%20carpet%20cleaning.webp') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="Office carpet cleaning"
                                width="420" height="420"
                                data-src="{{ Storage::disk('public')->url('gallery/carpet-cleaner-service-rug-cleaning-NYC-10010-NY-PristineGreen-Upholstery-and-Carpet-Cleaning-New-York.webp') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/PristineGreen-Upholstery-and-Carpet-Cleaning-10010-NY.webp') }}"
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

    </section> --}}


    <!-- what serivces you need section -->
    @include('app.static_components.callback_form_submit')
    {{-- @include('app.static_components.faq-section') --}}
    @include('app.static_components.callus_banner')
@endsection
