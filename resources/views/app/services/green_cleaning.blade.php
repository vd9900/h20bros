@extends('layouts.index')
@section('title')
    Green Cleaning | {{ env('APP_NAME') }}
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
                <h1 class="text-green">Green Cleaning </h1>
                <h3 class="tex-white text-center text-lg-start">
                    Get green and non-toxic cleaning services in NYC
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



            <h1 class="text-center text-green fs-1 py-5">GREEN CLEANING</h1>

            <p><strong>
                    Living in the city can be difficult. Lots of noises, smells, stimulation, and yelling cab drivers! When
                    you get home, you want a safe space that is clean and healthy. We now this too, which is why we use only
                    certified non-toxic and green chemicals in our cleaning process so you can feel relaxed and safe in your
                    clean apartment or house.
                </strong></p>
            <p class="fs-3"><strong>Only Green and Non-Toxic Products</strong></p>
            <p>All of our services offer green and non-toxic cleaning so you can be assured your apartment won't smell of
                synthetic and unpleasant fragrances after our work. All the products we use have been certified by the US
                EPA as part of their "Safer Choice" program! This means if you have e family, a pet, children, or are an
                sensitive individual, you need not worry if the chemicals will be harmful or unpleasant!</p>
            <p class="fs-3"><strong>EPA Certified Chemicals</strong></p>
            <p>All the products we use are certified by the US EPA as part of their safer choice program. The program aims
                at certifiying products that are both very low toxicity but also very effective in their purpose. So when we
                use these products we can be assured that they will not bother the customer and the cleaning power will be
                very strong! We use these products for all our cleaning from bathroom cleaning, to oven cleaning, to even
                cleaning your hardwood floors! </p>
            <p class="fs-3"><strong>Strong Cleaning Power</strong></p>
            <p>Sometimes, people associate green with weak. This is not the clase with Safer Choice Products! These products
                have been chosen to fulfil both requirements that they are are low toxicity as well as very effective in
                their purpose. We use Safer Choice products in all aspects of cleaning, even in the toughest of jobs like
                oven cleaning. In addition, we thoroughly test each chemical to ensure that it works for our purposes and
                doesn't have any irritating smells. You will be impressed at the end of our cleaning how effective they are!
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
