@extends('layouts.index')
@section('title')
    House Cleaning | {{ env('APP_NAME') }}
@endsection
@section('schema')
    {{-- <script type="application/ld+json">
        {!! file_get_contents('carpet-faqs.json') !!}
    </script> --}}
@endsection
@section('meta')
@endsection

@section('css')
@endsection
<style>
    @media screen and (max-width:878PX) {
        .ser-banner>img {
            background-size: 100% 100%;
        }
    }
</style>
@section('content')
    <!-- main section -->
    <main class="position-relative">
        <!-- bg-img -->
        <picture class="lozad ser-banner">
            <source media="(max-width: 878px)"
                srcset="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}"
                alt="carpet cleaning">
        </picture>
        <div class="p-4 p-lg-5 pb-120  position-absolute bottom-0 w-100 h-100">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">House Cleaning</h1>
                <h3 class="tex-white text-center text-lg-start">
                    Top House Cleaning Service Provider in NYC
                </h3>
                {{-- book now form --}}
                @include('app.static_components.booknow_form')
            </div>
        </div>
    </main>


    <!-- review banner section  -->
    {{-- @include('app.static_components.review_banner') --}}

    <!-- main content section  -->
    <section>
        <div class="container py-5 main-content-section text-lightgray">
            <h1 class="text-center text-green fs-1 py-5">HOUSE CLEANING</h1>

            <p><strong>
                    Keeping the house clean is of utmost importance for physical, mental, and social reasons. A clean house
                    facilitates clean living; No dust, dirt, and grime to flare up allergies and cause sickness. For mental
                    reasons, a clean home puts the mind at ease. You can focus on what is most important to you, not a dirty
                    kitchen or a smell bathroom. A clean home allows you to feel good in your own space. And finally, a
                    clean house gives a great impression to guests; It makes them feel safe and welcome, whereas a dirty one
                    may ruin that first impression and make them feel uncomfortable. Whatever is most improtant to you, our
                    house cleaning services will suite your needs!
                </strong></p>
            <p><a class="fs-3" href="/services/house-keep"><strong>House Cleaning Services</strong></a></p>
            <p>From the kitchen to the bathroom, we know how to professionally clean every nook and cranny so your space
                looks fresh and new again! We use professional tools, techniques, and only non-toxic but powerful chemicals
                to bring about an amzing clean in your house. Wheter you are looking for a deep lean or a light weekly
                clean, we have all the packages and options to fit your needs!</p>
            <p><a class="fs-3" href="/services/deep-cleaning-services"><strong>Deep Cleaning Services</strong></a></p>
            <p>Over time, dirt, grime, and dust build up in all the hard to reach palces in our homes. Often ovens, above
                cabinets, deep in our drawers, under beds and couches, and other hard to reach places begin to get grimey.
                Let PristineGreen take care of this issue for you! With our deep cleaning services part of our house
                cleaning packages, we get in all the tight spots to clean thoroughly. Our experienced cleaners will amaze
                you and how clean your space can become in a short period of time!</p>
            <p><a class="fs-3" href="/services/residential-cleaning-services"><strong>Residential Cleaning
                        Services</strong></a></p>
            <p>Our residential cleaning services as part of our house cleaning packages take care of cleaning of all your
                personal spaces from apartments, country homes, garages, and more! We have a variety of tools, techniques,
                and chemicals to tackle any type of job that you need done. From dirty garage floors, to stained toilets, to
                caked ovens, we can tackle any job with ease. </p>
            <p><a class="fs-3" href="/services/apartment-cleaning-services"><strong>Apartment Cleaning
                        Services</strong></a></p>
            <p>Our homes have become the center of our lives. From working, to spending time with the family. to
                entertaiing, our apartments are getting more use than ever before and it is shows. Regular cleaning is now
                needed to keep the spaces hygienic and clean. At PristineGreen we have a variety of apartment cleaning
                services to suit your needs from one-time deep cleanings to regular weekly cleanings, we have al the
                packages and options you want and need.</p>
            <p><a class="fs-3" href="/services/green-cleaning"><strong>Green Cleaning</strong></a></p>
            <p>All of our services offer green and non-toxic cleaning so you can be assured your apartment won't smell of
                synthetic and unpleasant fragrances after our work. All the products we use have been certified by the US
                EPA as part of their "Safer Choice" program! This means if you have e family, a pet, children, or are an
                sensitive individual, you need not worry if the chemicals will be harmful or unpleasant!</p>
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
            <p class="fs-1 text-blue pt-4">Check out our Carpet cleaning work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/carpet-cleaner-nyc-New-York-best-carpet-steam-cleaner-PristineGreen-Upholstery-and-Carpet-Cleaning-10010.webp') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/11105-carpet-cleaner-nyc-NY-rug-cleaner-nyc-PristineGreen-Upholstery-and-Carpet-Cleaning-Queens.webp') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Green and non-toxic carpet cleaning services" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/Area-Rug-Cleaning-PristineGreen-Upholstery-and-Carpet-Cleaning-11105-NY.webp') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Office carpet cleaning" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/Queens%20Carpet%20Cleaner%20Service%20PristineGreen%20Upholstery%20and%20Carpet%20Cleaning%2011105%20residential%20carpet%20cleaning.webp') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="Office carpet cleaning"
                                width="420" height="420"
                                data-src="{{ Storage::disk('public')->url('gallery/carpet-cleaner-service-rug-cleaning-NYC-10010-NY-PristineGreen-Upholstery-and-Carpet-Cleaning-New-York.webp') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/PristineGreen-Upholstery-and-Carpet-Cleaning-10010-NY.webp') }}"
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
