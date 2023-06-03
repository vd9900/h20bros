@extends('layouts.index')
@section('title')
    Hydro Jetting| {{ env('APP_NAME') }}
@endsection


@section('schema')
    {{-- <script type="application/ld+json">
        {!! file_get_contents('green-faqs.json') !!}
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
                srcset="{{ asset('assets/images/house-cleaning-services-New-York-green-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/house-cleaning-services-New-York-green-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/house-cleaning-services-New-York-green-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}"
                alt="cough cleaning">
        </picture>
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Hydro Jetting </h1>
                <h3 class="tex-white text-center text-lg-start">
                    Get Hydro Jetting services in NYC
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



            <h1 class="text-center text-green fs-1 py-5">Hydro Jetting</h1>

            <p><strong>
                    Don&#39;t let clogged drains and clogged pipes become a headache for you! it&#39;s
                    inevitable that hair, soap scum, and food particles will accumulate and cause
                    problems like clogged pipes and sewer backups. Luckily, there is a solution. Hydro
                    jetting, drain cleaning, and sewer cleaning can fix this issue By using high-pressure
                    water to blast away blockages, you can prevent these pesky issues and keep your
                    pipes flowing smoothly.
                </strong></p>
            <p class="fs-3"><strong>Clean Clogged Drain</strong></p>
            <p>In order to clean out your clogged drains, you might have searched the web for
                several solutions such as “unclog drain”, “unclog shower drain”, “unclog bathroom
                sink”. But are you gonna trust just a random search result online? Often, d-i-y
                solutions tend to make a minor problem worse. Let our experts handle the situation
                and give us a ring at H2OBros Plumbing.</p>
            <p class="fs-3"><strong>Drain Cleaning Services</strong></p>
            <p>Get rid of clogged pipes and clogged drains with hydro jetting
                Say goodbye to clogged drains and hello to clear pipes with hydro jetting! This
                powerful technique uses high-pressure water to blast away any debris or build-up,
                leaving your pipes cleaner than ever before. It’s one of the best ways to clear
                clogged drains, be it whatever you want, a clean sink drain or a clean shower drain.</p>
            <p class="fs-3"><strong>Hydro Jetting Cost</strong></p>
            <p>The cost of hydro jetting services can vary based on the type of service and the
                seriousness of the problem. Just the average drain clog remover works some days
                and other days we find ourselves snaking pipes. We offer services such as sewer
                drain cleaning, unblock shower drains, water pipe blockage removal, catch basin
                cleaning.
            </p>






        </div>
    </section>



    {{-- offer-serivces section --}}
    @include('app.static_components.we_offer')


    <!-- Callback section -->
    @include('app.static_components.callback_form_banner')



    <!-- Slider -->
    {{-- <section class="slider-section overflow-hidden pt-3">
        <!-- services section header -->
        <div class="services-section-header py-4">
            <p class="fs-1 text-blue pt-4">Check out our Green cleaning work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/green-cleaning/1608ae8f628353.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/green-cleaning/carpet cleaner for urine smell Queens best carpet cleaner for pet urine PristineGreen Upholstery and Carpet Cleaning NY 11385.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Green and non-toxic carpet cleaning services" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/green-cleaning/carpet cleaner nyc Queens NY 11385 green upholstery cleaning NYC PristineGreen Upholstery and Carpet Cleaning.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Office carpet cleaning" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/green-cleaning/mattress-cleaner-nyc-PristineGreen-Upholstery-and-Carpet-Cleaning-upholstery-cleaning-nyc-NY-Queens-11105.jpg') }}"
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
