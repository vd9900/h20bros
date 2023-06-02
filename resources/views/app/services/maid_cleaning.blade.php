@extends('layouts.index')
@section('title')
    Maid Cleaning | {{ env('APP_NAME') }}
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
                srcset="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-maid-cleaning-service-house-cleaning-services.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-maid-cleaning-service-house-cleaning-services.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-maid-cleaning-service-house-cleaning-services.jpg') }}"
                alt="cough cleaning">
        </picture>
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Maid Cleaning</h1>
                <h3 class="tex-white text-center text-lg-start">
                    Trusted and recommended maid cleaning service im NYC
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

            <h1 class="text-center text-green fs-1 py-5">Maid Cleaning</h1>


            <p><strong>
                    We all have busy lives in NYC and the last th8ing we want to do when we come home from a hard day's
                    work is clean! Cleaning can be time consuming and we have more important things on our minds. Hire
                    PristineGreen maid cleaning servides to take care of your housekeeping needs. From deep cleans to
                    periodic freshenings, we have all the options you are looking for!
                </strong></p>
            <p class="fs-3"><a href="{{ route('house_cleaning') }}"><strong>House Cleaning Services</strong></a></p>
            <p>In order to be productive, we need our surroundings clean and hygienic. Our house cleaning services
                provide your this service without you lifting a finger! We clean thoroughly all surfaces, from the
                kitchen to the bedroom to the bathroom so you can feel clean and refresehd in your new space. We also
                use only green and non-toxic products in our cleaning so no harsh fragrances that will bother you for
                hours after we leave.</p>
            <p class="fs-3"><a href="{{ route('apart_cleaning') }}"><strong>Apartment Cleaning Services</strong></a></p>
            <p>Our apartment is our life. We work in it, play it in, have movie nights in it, and more! Over time, it
                can get messy and do we want to spend our precious time cleaning it? Hire PristineGreen's maid services
                to perform apartment cleanign at your home! We do everything from deep cleanign to regular cleaning so
                whatever need you hae, we can accommodate you! </p>
            <p class="fs-3"><a href="{{ route('deep_cleaning') }}"><strong>Deep Cleaning Services</strong></a></p>
            <p>With all the people and pets going in and out of our apartments and houses, they can get pretty dirty.
                Grime, oil, dust, and more eventually builds up in all the nooks and crannies throughout your home. As
                part of our maid services, we offer deep cleaning where we inspect and clean all parts of your home.
                After our work, it will feel like you are walking into a completely new refreshing space! From caked
                dirty ovens, to stinky bathrooms, to damaged hardwood floors, we can clean it all! </p>
            <p class="fs-3"><a href="{{ route('res_cleaning') }}"><strong>Residential Cleaning Services</strong></a></p>
            <p>As part of our maid services, we offer a variety of residential cleaning services to th residents of NYC.
                Whether you live in an apartment, house, or townhouse, we have the cleaning services you need. OUr maid
                cleaning services offer residential cleaning so if you need just your kitchen cleaned, your garage, or
                your whole house, one of our proessional maids, using only non-toxic products will come and transform
                your space!</p>


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
