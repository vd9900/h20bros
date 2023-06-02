@extends('layouts.index')
@section('title')
    Post Construction Cleaning | {{ env('APP_NAME') }}
@endsection

@section('schema')
    {{-- <script type="application/ld+json">
        {!! file_get_contents('orug-faqs.json') !!}
    </script> --}}
@endsection

@section('meta')
@endsection
@section('content')
    <!-- main section -->
    <main class="position-relative">
        <!-- bg-img -->


        <picture class="lozad">
            <source media="(max-width: 878px)"
                srcset="{{ asset('assets/images/NY-house-cleaning-services-New-York-PristineGreen-House-Cleaning-UES-Branch-10021-post-construction-cleaning.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/NY-house-cleaning-services-New-York-PristineGreen-House-Cleaning-UES-Branch-10021-post-construction-cleaning.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/NY-house-cleaning-services-New-York-PristineGreen-House-Cleaning-UES-Branch-10021-post-construction-cleaning.jpg') }}"
                alt="Pet Stains and Odor cleaning">
        </picture>
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Post Construction Cleaning</h1>
                <h3 class="tex-white text-center text-lg-start">
                    Professional and Trusted Post Construction Cleaning Service in NYC
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
            <h2 class="text-center text-green fs-1 py-5">POST CONSTRUCTION CLEANING</h2>


            <p><strong>
                    Construction can be very messy; dust flying everywhere, workers coming in and out of the job site, and a
                    variety of materials leaving dirt and debris everywhere. We understand that you need a thorough cleaning
                    so that the work can be properly presented to the client. At PristineGreen, we offer professional post
                    construction cleaning using professional tools and with exception results. Don't worry about all the
                    dust and dirt in all the hard to reach places. We have you covered!
                </strong></p>
            <p class="fs-3"><strong>Construction Cleanup Service</strong></p>
            <p>Our construction cleaning services cover all types of post construction work. From tile cutting from
                bathrooms remodels, to framing wood dust, to drywall setting, our construction and renovation cleaning
                services have the tools nad techniques to clean up any type of construction cleanup job. From baseboards to
                even carpet cleaning, we have the services you need</p>
            <p class="fs-3"><strong>Residential Post Construction Cleaning</strong></p>
            <p>We have the post construction cleanup services you need for your residential construction jobs. From kitchen
                remodels, to new room separators, to drywall repair, and more, we understand that construction can be messy
                so our team is properly trained to clean up all types of messes. There is a right way to clean up
                construction debris! Improper cleaning can lead to damaging of the property, including walls, floors, and
                polished surfaces. We have the skills and tools to clean up all debris correctly so your new finished
                project can shine! </p>
            <p class="fs-3"><strong>Commercial Post Construction Cleaning</strong></p>
            <p>Commerical construction can be the messiest of types of construction. Many workers are moving in and out of
                the job site and nany materials are being used. From welding splatter to wood, tile, and drywall dust, to
                even chemical spills, we have the professional tools and chemicals to clean up any construction site! </p>
        </div>

    </section>



    {{-- offer-serivces section --}}
    @include('app.static_components.we_offer')


    <!-- Callback section -->
    @include('app.static_components.callback_form_banner')



    {{-- <section class="slider-section overflow-hidden pt-3">
        <!-- services section header -->
        <div class="services-section-header py-4">
            <p class="fs-1 text-blue pt-4">Check out our Oriental Rug work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/oriental-rug-cleaning/11385-carpet-cleaner-brooklyn-NY-Queens-rug-cleaner-brooklyn-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/oriental-rug-cleaning/PristineGreen-Upholstery-and-Carpet-Cleaning-10010-NY.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Green and non-toxic carpet cleaning services" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/oriental-rug-cleaning/Queens-Carpet-Cleaner-Service-PristineGreen-Upholstery-and-Carpet-Cleaning-11105-residential-carpet-cleaning.jpg') }}"
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
    {{-- @include('app.static_components.faq-section') --}}
    @include('app.static_components.callus_banner')
@endsection
