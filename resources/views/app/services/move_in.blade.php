@extends('layouts.index')
@section('title')
    Move In Cleaning | {{ env('APP_NAME') }}
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
                <h1 class="text-green">Move In Cleaning Services</h1>
                <h3 class="tex-white text-center text-lg-start">
                    Trusted and recommended move in cleaning service provider in NYC
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
            <h1 class="text-center text-green fs-1 py-5">MOVE IN CLEANING SERVICES</h1>

            <p><strong>
                    When we move into our new space, we are looking for a fresh start, physically and mentally. The last
                    thing you want to do after boxing and moving all your possessions is worrying about cleaning your new
                    apartment. Let PristineGreen take care of your move in cleaning! From bedrooms, to bathrooms, to the
                    kitchen, we clean all surfaces with non-toxic and certified green products so you can feel immediately
                    at-home when you arrive in your new apartment!
                </strong></p>
            <p class="fs-3"><a href="/services/apartment-cleaning"><strong>Apartment Cleaning</strong></a></p>
            <p>When you move into your new apartment, you want it to be fresh. No dirty floors, no stains toilets, no greasy
                kitchen counters. Or, you want to ensure, on your own terms, that it is cleaned to your standards before you
                move in. That's why we offer apartment cleaning servides as part of our move in leaning services program.
                Using only green products, we clean your new apartment from top to bottom. No discovering hidden dust
                bunnies! You already rented the apartment so your landlord doesn't care as much about the apartment's
                cleanliness as you do now. Hire us to make it pristine!</p>
            <p class="fs-3"><a href="/services/commerical-cleaning"><strong>Commerical Cleaning</strong></a></p>
            <p>When you move into a new commerical space, its needs to be perfectly clean so your customers feel safe and
                welcome in your new shop. Commerical cleaning can be daunting, with stained walls, dirty carpets or tile, or
                even odor issues. Let our professional team do a deep clean on your commerical space to bring it excellent
                standards.</p>
            <p class="fs-3"><a href="/services/deep-cleaning"><strong>Deep Cleaning</strong></a></p>
            <p>AFter you sign the lease, its time to clean the apartment thoroughly. Previous tenants can leave your
                apartment looking pretty dirty. Greasy kitchens, moldy bathrooms, and dull hardwood floors. Let our cleaning
                crew work magic on your apartment and bring it to excellent standards! Our team knows how to professionally
                deep clean apartments and houses. No corner will be left untouched!

            <p class="fs-3"><a href="/services/green-cleaning"><strong>Green Cleaning</strong></a></p>
            <p>All of our services offer green and non-toxic cleaning so you can be assured your apartment won't smell of
                synthetic and unpleasant fragrances after our work. All the products we use have been certified by the US
                EPA as part of their "Safer Choice" program! This means if you have e family, a pet, children, or are an
                sensitive individual, you need not worry if the chemicals will be harmful or unpleasant!</p>
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
