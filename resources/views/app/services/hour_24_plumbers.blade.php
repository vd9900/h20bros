@extends('layouts.index')
@section('title')
    24 Hour Plumbers | {{ env('APP_NAME') }}
@endsection

@section('schema')
    {{-- <script type="application/ld+json">
        {!! file_get_contents('matt-faqs.json') !!}
    </script> --}}
@endsection

@section('meta')
@endsection

@section('css')
    <style type="text/css">
        @media(max-width: 767px) {
            .text-center.text-green.fs-1.py-5 {
                font-size: 37px !important;
                color: #2baf38 !important;
            }
        }
    </style>
@endsection

@section('content')
    <!-- main section -->
    <main class="position-relative">
        <!-- bg-img -->
        <picture class="lozad">
            <source media="(max-width: 878px)"
                srcset="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-apartment-cleaning-services-house-cleaning-services.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-apartment-cleaning-services-house-cleaning-services.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-apartment-cleaning-services-house-cleaning-services.jpg') }}"
                alt="Pet Stains and Odor cleaning">
        </picture>
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">24 Hour Plumber Services </h1>
                <h3 class="text-white text-center text-lg-start">
                    Get 24 Hour Plumber services in NYC
                </h3>
                {{-- book now form --}}
                @include('app.static_components.booknow_form')
            </div>
        </div>
    </main>


    <!-- review banner section  -->
    {{-- @include('app.static_components.review_banner') --}}

    <!-- main content section  -->
    <section id="main-content-cleaning" class="py-7 main-content-cleaning-service">
        <div class="container py-5 main-content-section text-lightgray">



            <h1 class="text-center text-green fs-1 py-5">24 Hour Plumber Services</h1>


            <p><strong>
                    Usually, plumbing problems don’t pop their heads up when it&#39;s convenient. They
                    don’t adhere to business hours or working days. A plumbing problem may pop up
                    anytime, any day. For urgent problems like this, you need an emergency plumber
                    who offers an instant fix.
                </strong></p>


            <p class="fs-3"><strong>24 Hour Plumber Service</strong></p>
            <p>To tackle this, we at H2OBros Plumbing are available to you - 24/7 - 365 days a
                year.</p>
            <p>Don’t just rely on an “emergency plumber” or “24 hour plumber near me” search. Call
                H2OBros Plumbing instead. We’ll have a plumber reach your place in an instant.
                He’ll get to you quickly, inspect the problem, and solve it ASAP. Whether it be frozen
                pipes, drain cleaning, sewer cleaning, water heater leaking, etc.</p>

            <p>Tip: If there’s a major leak, turn the main water supply off before you give us a ring. This
                might be located in your basement, garage, or utility area. This will save you from major
                damage!</p>

            <p class="fs-3"><strong>24 Hour Plumbing Installations</strong></p>
            <p>Looking for a plumber for snaking a drain, fixing frozen pipes, new pipes, or even an
                entirely new sewer line? Don’t trust the first result that pops up in your search for
                “plumbers near me” or “24 hour plumber near me”. Let our experts from H2OBros
                Plumbing take care of the job. We’ll ensure your home runs problem-free for years to
                come! We are the best licensed plumbers in your area.</p>


            <p class="fs-3"><strong>Sump Pump Installation</strong></p>
            <p>Living in a low-lying area? Facing regular flooding in your basement? Its time to
                install a sump pump. Let our experts have a look and find the best suitable spot for
                sump pump installation. They’ll provide you with options and guide you in choosing
                the one best for your situation. Once ordered, you don’t have to worry about a thing.
                Our plumbers will install it according to the manufacturer’s guidelines. Our sump
                pump services include Sump pump replacement, Sump pump maintenance, Sump

                pump battery backup, Battery powered sump pump, Basement sump pumps ,
                Sewage sump pump installation. </p>
            <p class="fs-3"><strong>Our Plumbing Services</strong></p>
            <p>Our plumbers are the best in the industry and handle any kind of plumbing services
                such as plunging a toilet, sewer cleaning, snaking a drain, clog removal, drain
                cleaning, installing a tankless water heater as well as an electric water heater. You
                name it, we do it. </p>



        </div>

    </section>



    {{-- offer-serivces section --}}
    @include('app.static_components.we_offer')


    <!-- Callback section -->
    @include('app.static_components.callback_form_banner')


    {{-- <!-- Slider -->
    <section class="slider-section overflow-hidden pt-3">
        <!-- services section header -->
        <div class="services-section-header py-4">
            <p class="fs-1 text-blue pt-4">Check out our Mattress cleaning work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad rounded-2 service-slider-imgs" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/mattress-cleaning/mattress-cleaner-nyc-PristineGreen-Upholstery-and-Carpet-Cleaning-upholstery-cleaning-nyc-NY-Queens-11105.jpg') }}"
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
