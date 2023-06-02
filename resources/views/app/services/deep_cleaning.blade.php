@extends('layouts.index')
@section('title')
    Deep Cleaning | {{ env('APP_NAME') }}
@endsection


@section('schema')
    {{-- <script type="application/ld+json">
        {!! file_get_contents('pet-faqs.json') !!}
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
                srcset="{{ asset('assets/images/PristineGreen-House-Cleaning---UES-Branch-house-cleaning-services-10021-New-York-deep-cleaning-services-NY.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/PristineGreen-House-Cleaning---UES-Branch-house-cleaning-services-10021-New-York-deep-cleaning-services-NY.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/PristineGreen-House-Cleaning---UES-Branch-house-cleaning-services-10021-New-York-deep-cleaning-services-NY.jpg') }}"
                alt="Pet Stains and Odor cleaning">
        </picture>


        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Deep Cleaning </h1>
                <h3 class="tex-white text-center text-lg-start">
                    Top-rated deep cleaning service in NYC
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



            <h1 class="text-center text-green fs-1 py-5">Deep CleaningL</h1>

            <h2 class="fs-3">Pet Stain and Odor Removal Cleaning Services</h2>
            <p>Welcome to our Pet Stain and Odor Removal Cleaning Services page! We understand that pets are part of the
                family, and sometimes they leave behind little "gifts" in the form of stains and odors. Our team of
                professionals is equipped with the best pet stain remover and pet odor eliminator tools to help you maintain
                a clean and fresh-smelling home.</p>

            <h2 class="fs-3">Superior Pet Stain Removal</h2>
            <p>Accidents happen, and when they do, our pet stain carpet cleaner service is here to help. We utilize
                top-quality products such as the Bissell Stain Eraser and other leading brands like Nature's Miracle Stain
                and Odor Remover, along with the best pet stain remover techniques to ensure that no trace of the accident
                remains. Whether it's a small blot or a stubborn old stain, we've got you covered.</p>

            <h2 class="fs-3">Effective Pet Odor Removal</h2>
            <p>The smell of pet urine can linger and become quite unpleasant over time. With our pet odor remover service,
                we use high-quality products like the Angry Orange Pet Odor Eliminator and Nature's Miracle Skunk Odor
                Remover to ensure that your house smells fresh and clean, not like a litter box or dog kennel.</p>

            <h2 class="fs-3">Professional Enzyme Cleaning for Pet Urine</h2>
            <p>One of the most effective ways to deal with pet accidents is by using enzyme cleaners. Our enzyme cleaner for
                cat urine and dog urine works by breaking down the proteins in the urine, eliminating the source of the
                odor. We use the best enzyme cleaner for cat urine and dog urine, ensuring that those stubborn smells are
                thoroughly eradicated from your carpets.</p>

            <h2 class="fs-3">Dog Urine Cleaner Service</h2>
            <p>Dog urine can be particularly challenging to clean because of its strong odor and potential to stain. Our dog
                urine cleaner service utilizes the best dog urine remover in the market, coupled with professional cleaning
                techniques, to ensure that your carpet is free of stains and smells.</p>

            <h2 class="fs-3">Cat Urine Cleaning Specialist</h2>
            <p>Dealing with cat urine is a unique challenge because of its potent smell. With our cat urine cleaner service,
                we use the best cat urine remover products like the Nature's Miracle Urine Destroyer and Enzymatic Cleaner
                for Cat Urine to ensure your carpets are thoroughly cleaned and odor-free.</p>

            <h2 class="fs-3">Urine Stain Removal</h2>
            <p>Our urine stain remover service is designed to tackle the toughest stains left behind by pet accidents. From
                dog pee smell out of carpet to cat urine stains, we're here to help ensure your carpets are stain-free.</p>

            <h2 class="fs-3">Why Choose Us for Your Pet Stain and Odor Removal Needs</h2>
            <p>Our commitment to providing superior service, our use of the best pet odor eliminator and stain removal
                products, and our experienced team make us the top choice for your pet stain and odor removal needs. Trust
                us to help you maintain a clean, fresh-smelling home that you and your pets can enjoy.</p>

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
            <p class="fs-1 text-blue pt-4">Check out our Pet Stains and Odor cleaning work</p>
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
