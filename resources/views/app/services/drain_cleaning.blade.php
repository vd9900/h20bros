@extends('layouts.index')
@section('title')
    Drain Cleaning| {{ env('APP_NAME') }}
@endsection


@section('schema')
    {{-- <script type="application/ld+json">
        {!! file_get_contents('comm-faqs.json') !!}
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
                srcset="{{ asset('assets/images/PristineGreen-House-Cleaning-UES-Branch-house-cleaning-services-10021-New-York-commercial-cleaning-services-NY.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/PristineGreen-House-Cleaning-UES-Branch-house-cleaning-services-10021-New-York-commercial-cleaning-services-NY.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/PristineGreen-House-Cleaning-UES-Branch-house-cleaning-services-10021-New-York-commercial-cleaning-services-NY.jpg') }}"
                alt="Pet Stains and Odor cleaning">
        </picture>
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Drain Cleaning</h1>
                <h3 class="tex-white text-center text-lg-start">
                    Trusted and recommended Drain Cleaning in NYC, specializing in drain Cleaning your commercial spaces
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

            <h1 class="text-center text-green fs-1 py-5">Drain Cleaning
            </h1>



            <p><strong>
                    Clogged drains can cause water to run back up, leading to flooding and water
                    damage. These clogged drains also attract pests and cause foul odors. To avoid the
                    hassle of clearing a clogged sink, clogged shower drain, or clogged bathtub, give the
                    experts at H2OBros Plumbing a ring and we’ll have you set up in no time.
                </strong></p>


            <p class="fs-3"><strong>Drain Cleaning Services</strong></p>

            <p>Clogged drains can cause water to run back up, leading to flooding and water
                damage. These clogged drains also attract pests and cause foul odors. You may go
                ahead and try a D-I-Y solution like snaking a drain or try the best drain cleaner out
                there. But if you wanna avoid risky solutions then contact us and our team of experts
                will use the best techniques to unclog a drain and get your drain free in no time. We
                also offer services for a clogged kitchen sink, clogged bathtub drain, etc.</p>



            <p class="fs-3"><strong>Sewer Cleaning</strong></p>
            <p>Water leaks can be anywhere. They can be as simple as a slab leak, leaking toilet,
                water leaking from a ceiling, ceiling leak, or simply a leaking pipe. Ignoring a water
                leak can cause structural damage, and mold growth, and pose a serious health risk.
                Look out for symptoms such as a sudden spike in water bill, ceiling sagging or
                warped floors, discolored ceiling, bumpy paint or bumpy wallpaper. If any of these
                symptoms pop up at your place, call us immediately and we could help you prevent a
                major plumbing issue such as overflooding.</p>


            <p class="fs-3"><strong>Sewer Repair</strong></p>
            <p>When a major problem pops up in your sewer line, just cleaning won’t solve the
                issue. You need to get repair services. H2OBros Plumbing offers you sewer line
                repair and drain repair services. Our team of experts can take care of anything right
                from drain field repair and drain pipe repair to sewer pipe repair and trechnless
                sewer line repair.</p>
        </div>
    </section>


    <!-- Callback section -->
    @include('app.static_components.callback_form_banner')

    {{-- offer-serivces section --}}
    @include('app.static_components.we_offer')



    <!-- Slider -->
    {{-- <section class="slider-section overflow-hidden pt-3">
        <!-- services section header -->
        <div class="services-section-header py-4">
            <p class="fs-1 text-blue pt-4">Check out our Commercial cleaning work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy service-slider-imgs lozad rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/commercial-cleaning/10010-NY-sofa-cleaning-NYC-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning-min.webp') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy service-slider-imgs lozad rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/commercial-cleaning/11105 best commercial steam cleaning PristineGreen Upholstery and Carpet Cleaning Queens NY commercial carpet cleaning service-min.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy service-slider-imgs lozad service-slider-imgs rounded-2"
                                alt="Green and non-toxic carpet cleaning services" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/commercial-cleaning/carpet-cleaner-nyc-New-York-best-carpet-steam-cleaner-PristineGreen-Upholstery-and-Carpet-Cleaning-10010.webp') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img
                                class=" lazy service-slider-imgs lozad service-slider-imgs rounded-2"
                                alt="Office carpet cleaning" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/commercial-cleaning/PristineGreen-Upholstery-and-Carpet-Cleaning-10010-NY.jpg') }}"
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
