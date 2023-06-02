@extends('layouts.index')
@section('title')
    Move Out Cleaning | {{ env('APP_NAME') }}
@endsection

@section('meta')
@endsection
@section('content')
    <!-- main section -->

    <main class="position-relative">
        <!-- bg-img -->
        <picture class="lozad">
            <source media="(max-width: 878px)"
                srcset="{{ asset('assets/images/house-cleaning-services-New-York-move-out-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/house-cleaning-services-New-York-move-out-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/house-cleaning-services-New-York-move-out-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}"
                alt="Area Rug cleaning">
        </picture>


        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Move Out Cleaning</h1>
                <h3 class="tex-white text-center text-lg-start">
                    Restore your commercial or residential space with professional move out cleaning services in NYC
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

            <h1 class="text-center text-green fs-1 py-5">MOVE OUT CLEANING SERVICES</h1>



            <p><strong>
                    Living in NYC, we are always busy. Whether its putting in the hours at work, going to the gym, taking
                    care of the kids, grocery shopping or more, cleaning the apartment often falls lower in the priority
                    list. That's ok! PristineGreen House Cleaning is here to offer you apartment cleaning services! From the
                    kitchen to the bathroom, we have all your cleaning needs handled!
                </strong></p>
            <p><a class="fs-3" href="{{ route('green_cleaning') }}"><strong>Only Green and Non-Toxic Products</strong></a>
            </p>
            <p>All of our services offer green and non-toxic cleaning so you can be assured your apartment won't smell of
                synthetic and unpleasant fragrances after our work. All the products we use have been certified by the US
                EPA as part of their "Safer
                Choice" program! This means if you have e family, a pet, children, or are an sensitive individual, you
                need not worry if the chemicals will be harmful or unpleasant!</p>
            <p><a class="fs-3" href="{{ route('move_in') }}"><strong>Move In Cleaning
                        Services</strong></a></p>
            <p>When you move into a new apartment, you are looking for a fresh start. Sometimes the previous tenant
                or
                landlord didn't have the same care as you do. That's why you need move in cleaning services for your
                apartment. We will clean, scrub and polish every nook and cranny so you can be assured that the
                space you
                will be living in is totally clean!</p>
            <p><a class="fs-3" href="{{ route('move_out') }}"><strong>Move Out Cleaning
                        Services</strong></a></p>
            <p>Oftentime, in our leases, it is required that you leave the apartment as clean as when you moved into
                it.
                Moving out can be stressful and cleaning the apartment may just be one last thing you don't want to
                do. Let
                us take care of your move out cleaning services. From deep cleaning the kitchen to steam cleaning
                the
                carpets to washing the floors and baseboards, we have it all covered for you! </p>
            <p><a class="fs-3" href="{{ route('deep_cleaning') }}"><strong>Deep Cleaning Services</strong></a>
            </p>
            <p>Our lives are busy and we can forget, week after week, to do a deep cleaning. That's why its
                important to
                hire us for your deep cleaning services which will scrub and clean all the nooks and crannies in
                your
                apartment bringing it to a refreshingly clean state. We do everything from mopping thte floors,
                cleaning the
                oven and cabinets, washing the windows, scrubbing the tub, and more! You will feel clean and at home
                again
                in your apartment after we help!</p>
            <p><a class="fs-3" href="{{ route('maid_cleaning') }}"><strong>Maid Services</strong></a></p>
            <p>We often have busy lives and hiring a regular maid service to periodically clean our apartment is a great
                investment. Not only do you save time every week or month by hiring a maid service, but you can rest assured
                that your apartment will be cleaned in a professional manner. Nothing will be forgotten or undone! You can
                focus on what is important to you and we can make sure your evironment stays clean and refreshing!</p>



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
            <p class="fs-1 text-blue pt-4">Check out our Area Rug cleaning work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/area-rug-cleaning/11385-carpet-cleaner-brooklyn-NY-Queens-rug-cleaner-brooklyn-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/area-rug-cleaning/Area-Rug-Cleaning-PristineGreen-Upholstery-and-Carpet-Cleaning-11105-NY.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Green and non-toxic carpet cleaning services" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/area-rug-cleaning/carpet-cleaner-nyc-NY-PristineGreen-Upholstery-and-Carpet-Cleaning-10010-New-York-professional-house-cleaning-services-New-York-move-out-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Office carpet cleaning" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/area-rug-cleaning/carpet-cleaner-service-rug-cleaning-NYC-10010-NY-PristineGreen-Upholstery-and-Carpet-Cleaning-New-York.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="Office carpet cleaning"
                                width="420" height="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/area-rug-cleaning/carpet-cleaning-NYC-Queens-NY-11385-carpet-cleaner-service-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}"
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
