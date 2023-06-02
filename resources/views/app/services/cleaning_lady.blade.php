@extends('layouts.index')
@section('title')
    CLEANING LADY | {{ env('APP_NAME') }}
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
                srcset="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-cleaning-lady-house-cleaning-services.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-cleaning-lady-house-cleaning-services.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-cleaning-lady-house-cleaning-services.jpg') }}"
                alt="Pet Stains and Odor cleaning">
        </picture>
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Cleaning Lady</h1>
                <h3 class="tex-white text-center text-lg-start">
                    Get cleaning lady services for your apartment or house in NYC
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

            <h1 class="text-center text-green fs-1 py-5">CLEANING LADY </h1>


            <p><strong>
                    Keeping the home clean can take a lot of work and time. In NYC, we are all busy and finding the time
                    every week to make sure the house is spotless is not always easy or possible. Let us help you keep your
                    home pristine with our cleaning lady services!
                </strong></p>


            <p><a class="fs-3" href="{{ route('house_cleaning') }}"><strong>House Cleaning Services</strong></a></p>
            <p>Our comprehensive house cleaning services will leave you amazed and how thorough and professional our
                house cleaning and cleaning lady services are. From the bathroom to the kitchen to the bedroom, we have
                you covered! Spills, food, dust, grime, mold, and any other unpleasant circumstances in your home are no
                match for our powerful cleaning team!</p>
            <p><a class="fs-3" href="{{ route('deep_cleaning') }}"><strong>Deep Cleaning Services</strong></a></p>
            <p>Sometimes cleaning our house or apartment gets out of hand and dirt, grime, and other foreign substances
                begin to build up. Not to worry! Our Deep cleaning servcies for our cleaing lady services have the
                solutions you need. Don't worry if there is mold in the bathroom. We can clean it. Black oven? We can
                clean it. Hardwood floors that need extra attention? We can clean it. We also use only non-toxic and
                green products in our cleaning so you will feel assured knowing our cleaning is safe for you and your
                family.
            </p>
            <p><a class="fs-3" href="{{ route('res_cleaning') }}"><strong>Residential Cleaning Services</strong></a></p>
            <p>From apartments, to houses, to townhouses, we have all the residential cleaning services you need.
                Whether you are looking for a deep cleaning of the bathrooms and kitchen or just a periodic general
                cleaning of the whole house, we have a variety of options that will suit your needs. Our cleaning
                technicians are highly trained and use top of the line cleaning products and equiptment so you can be
                sure that our cleaning is done professionally, safely, and quickly saving you time and money! </p>
            <p><a class="fs-3" href="{{ route('move_out') }}"><strong>Move Out Cleaning Services</strong></a></p>
            <p>The last thing we want to think about after we have spent days, sweat, and tears moving out all the
                furniture in our old apartment and transferring it to our new one is to clean the apartment. Dirt,
                grime, and dust have collected in all the corners and a proper cleaning is in order. Hire our cleaning
                lady services to perform move out cleaning services! You will be so relieved to have your old apartment
                cleaned completely so you won't have to incur any fees from your landlord and can peacefully move to
                your next home stress free!</p>




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
