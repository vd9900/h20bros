@extends('layouts.index')
@section('title')
    Residential Cleaning | {{ env('APP_NAME') }}
@endsection

@section('schema')
    {{-- <script type="application/ld+json">
        {!! file_get_contents('auto-faqs.json') !!}
    </script> --}}
@endsection

@section('meta')
@endsection
@section('content')
    <!-- main section -->
    <main class="position-relative ">
        <!-- bg-img -->
        <picture class="lozad">
            <source media="(max-width: 878px)"
                srcset="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-residential-cleaning-services-house-cleaning-services.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-residential-cleaning-services-house-cleaning-services.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-residential-cleaning-services-house-cleaning-services.jpg') }}"
                alt="Pet Stains and Odor cleaning">
        </picture>


        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Residential Cleaning</h1>
                <h3 class="tex-white text-center text-lg-start">
                    Top-rated and trusted residential cleaning service in NYC
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
            <h1 class="text-center text-green fs-1 py-5">Residential Cleaning
            </h1>


            <p><strong>
                    The home is a sacred place. Its a place where we eat, sleep, and play with our friends and family.
                    In order for us to really enjoy our home, it needs to be clean. At PristineGreen, we understand how
                    important it is to have your apartment or house clean which is why our technicians are hihgly
                    trained and use the best cleaning equipment and non-toxic to bring you the best possible result!
                </strong></p>
            <p>
                <a class="fs-3" href="{{ route('apart_cleaning') }}"><strong>Apartment Cleaning</strong></a>
            </p>
            <p>In NYC, our apartments may be small but we put our whole lives in them! From our office supplies, to
                kitchen appliances, to hygenic and cosmetic wares, we own a lot of possessions which over time can
                gather dust and grime. Our highly trained team at PristineGreen knows how to safetly and effectiely
                clean all your possessions and spaces from bedrooms, to the kitchen, to the bathrooms. You can count of
                us for thorough, non-toxic apartment cleaning!</p>
            <p><a class="fs-3" href="{{ route('deep_cleaning') }}"><strong>Deep Cleaning</strong></a></p>
            <p>Over time, our residential space becomes deeply dirty. All those nooks and crannies we neglected for so
                long have built up a a layer of unwanted dust and dirt. Our team knows how to get into all the hard to
                reach places to restore your space to its original and freshingly clean state. We use only non-toxic
                products so you can be assured that although our cleaning is deep and effective, it is also safe for you
                and your family. </p>
            <p><a class="fs-3" href="{{ route('maid_cleaning') }}"><strong>Maid Cleaning Service</strong></a></p>
            <p>Our lives can be very busy in NYC. From work to play, its almost like every minute is booked, and finding
                time to do our monotnous cleaning chores is the last thing we need. Hire our maid cleaning services at
                PristineGreen to periodically clean your space so you can focus on what is importnat in your life! OUr
                services can be one-time, weekly, bi-monthly, or on any schedule that works for you! </p>
            <p><a class="fs-3" href="{{ route('green_cleaning') }}"><strong>Only Green and Non-Toxic Products</strong></a>
            </p>
            <p>All of our services offer green and non-toxic cleaning so you can be assured your apartment won't smell
                of synthetic and unpleasant fragrances after our work. All the products we use have been certified by
                the US EPA as part of their "Safer Choice" program! This means if you have e family, a pet, children, or
                are an sensitive individual, you need not worry if the chemicals will be harmful or unpleasant!</p>


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
            <p class="fs-1 text-blue pt-4">Check out our Auto Interior cleaning work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/auto-interior-cleaning/11385-car-detailing-seat-shampoo-PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-internal-car-wash-NY.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/auto-interior-cleaning/auto-interior-cleaning-interior-car-seat-cleaning-near-me-Queens-NY-11105-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Green and non-toxic carpet cleaning services" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/auto-interior-cleaning/auto-interior-cleaning-Queens-interior-detailing-services-PristineGreen-Upholstery-and-Carpet-Cleaning-11105-NY.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Office carpet cleaning" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/auto-interior-cleaning/auto-interior-cleaning-Queens-NY-11385-interior-car-detailing-near-me-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="Office carpet cleaning"
                                width="420" height="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/auto-interior-cleaning/PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-11385-auto-interior-cleaning-NY-full-car-interior-detail-near-me.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/auto-interior-cleaning/PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-NY-deep-car-interior-cleaning-near-me-11385-auto-interior-cleaning.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/auto-interior-cleaning/Queens 11385 NY PristineGreen Upholstery and Carpet Cleaning auto interior cleaning auto carpet cleaner near me.jpg') }}"
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


    <!-- what services you need section -->
    @include('app.static_components.callback_form_submit')
    {{-- @include('app.static_components.faq-section') --}}
    @include('app.static_components.callus_banner')
@endsection
