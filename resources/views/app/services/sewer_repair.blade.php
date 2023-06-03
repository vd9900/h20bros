@extends('layouts.index')
@section('title')
    Sewer Repair| {{ env('APP_NAME') }}
@endsection

@section('schema')
    {{-- <script type="application/ld+json">
        {!! file_get_contents('couch-faqs.json') !!}
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
                srcset="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-housekeeping-services-house-cleaning-services.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-housekeeping-services-house-cleaning-services.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-housekeeping-services-house-cleaning-services.jpg') }}"
                alt="cough cleaning">
        </picture>
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Sewer Repair</h1>
                <h3 class="tex-white text-center text-lg-start">
                    Get your professionally Sewer Repair in NYC!
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

            <h1 class="text-center text-green fs-1 py-5">Sewer Repair</h1>



            <p><strong>
                    Sewers often tend to get clogged and stuck leading to the spreading of foul odors
                    and flooding. We need to clean sewer drains in order to avoid this issue. We at H2O
                    Bros Plumbing offer all kinds of services to clear your clogged sewer such as:
                </strong></p>
            <p class="fs-3"><strong>Sewer Line Inspection</strong></p>
            <p>A clogged sewer calls for a thorough sewer inspection by an expert. You can try
                clearing out the clogged sewer line yourself through d-i-y solutions such as sewer
                snaking. We will check out the problem and offer the most effective and affordable
                solution for your sewer line repair.</p>

            <p class="fs-3"><strong>Sewer Line Leak Detection</strong></p>
            <p>Attention all property owners! If you want to keep your home or business running
                smoothly, it&#39;s essential to invest in sewer line inspections and sewer line leak
                detection services. These services help prevent water waste and reduce utility bills,
                also, regular maintenance can increase the value of your property! To fix your sewer
                line problems we offer you services like sewer line replacement, sewer line cleanout
                and sewer pipe repair.</p>
            <p class="fs-3"><strong>Trenchless Sewer Line Repair</strong></p>
            <p>Traditional sewer line repair involves digging a trench to access the pipe, which can
                be disruptive to your yard and landscaping. trenchless plumbing services are much
                less invasive. These sewer lines as strong as they are may also need maintenance.
                For this, we offer trenchless sewer repair services. We offer trenchless sewer
                plumbing services like trenchless pipe replacement, trenchless sewer replacement,
                trenchless pipe relining, trenchless sewer line, trenchless piping, trenchless drain
                repair, trenchless sewer pipe replacement.
            </p>


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
            <p class="fs-1 text-blue pt-4">Check out our Couch cleaning work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/1608aedb622de4.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/10010-NY-sofa-cleaning-NYC-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning-min.webp') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Green and non-toxic carpet cleaning services" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/11105 couch cleaner nyc NY PristineGreen Upholstery and Carpet Cleaning Queens sofa cleaning nyc.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Office carpet cleaning" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/11105-couch-cleaner-nyc-deep-clean-microfiber-couch-Queens-NY-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="Office carpet cleaning"
                                width="420" height="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/11385 NY PristineGreen Upholstery and Carpet Cleaning Queens stanley steemer prices for couch cleaning sofa cleaning nyc.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/carpet cleaner NYC upholstery cleaning Brooklyn Queens NY 11385 PristineGreen Upholstery and Carpet Cleaning.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/carpet cleaning service PristineGreen Upholstery and Carpet Cleaning coronavirus steam cleaning prevention 10010 NY New York.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/Couch Cleaning Companies.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/sofa cleaning nyc Queens professional couch cleaning prices PristineGreen Upholstery and Carpet Cleaning 11105 NY.jpg') }}"
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
