@extends('layouts.index')

@section('title')
    Top House Cleaning Service in NYC |{{ env('APP_NAME') }}
@endsection

@section('meta')
@endsection



@section('preload')
    <!-- Preload the LCP image with a high fetchpriority so it starts loading with the stylesheet. -->
    <link rel="preload" fetchpriority="high" as="image"
        href="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-cleaning-lady-house-cleaning-services.jpg') }}"
        type="image/jpg">
@endsection


@section('css')
    <style type="text/css">
        /* IMAGE RANGE SLIDER STARTS HERE */
        .beforeAfterContainer {
            position: relative;
            width: 100%;
            height: 570px;
            border: 2px solid white;
        }

        .beforeAfterContainer .background-img {
            background-image: url("{{ asset('assets/images/house-cleaning-services-NY-10021-PristineGreen-House-Cleaning-UES-Branch-professional-cleaners-New-York.jpg') }}");
        }

        .beforeAfterContainer .img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: 900px 100%;
        }

        .beforeAfterContainer .foreground-img {
            background-image: url("{{ asset('assets/images/before-clean.jpg') }}");
            width: 50%;
        }



        .beforeAfterContainer .bslider:hover {
            background: rgba(242, 242, 242, 0.1);
        }

        .beforeAfterContainer .img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: 900px 100%;
        }

        .beforeAfterContainer .bslider {
            /* position: absolute; */
            /* -webkit-appearance: none; */
            /* appearance: none; */
            /* width: 100%; */
            /* height: 100%; */
            /* background: rgba(242, 242, 242, 0.3); */
            outline: none;
            margin: 0;
            transition: all 0.2s;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .beforeAfterContainer .bslider {
            position: absolute;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 100%;
            height: 100%;
            background: rgba(242, 242, 242, 0.3);
            outline: none;
            margin: 0;
            transition: all 0.2s;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .beforeAfterContainer .slider-button {
            pointer-events: none;
            position: absolute;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: white;
            left: calc(50% - 18px);
            top: calc(50% - 18px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .beforeAfterContainer .slider-button:before {
            content: "";
            padding: 3px;
            display: inline-block;
            border: solid #5d5d5d;
            border-width: 0 2px 2px 0;
            transform: rotate(135deg);
        }

        .beforeAfterContainer .slider-button:after {
            content: "";
            padding: 3px;
            display: inline-block;
            border: solid #5d5d5d;
            border-width: 0 2px 2px 0;
            transform: rotate(-45deg);
        }

        @media screen and (max-width:1332px) {
            .beforeAfterContainer {
                height: 450px;
            }
        }

        @media screen and (max-width:772px) {
            .beforeAfterContainer {
                height: 350px;
            }
        }




        /* for baby section */

        @media screen and (min-width: 765px) {
            .border-right-1 {
                border-right: 1px solid #4873b7 !important;
            }
        }

        @media screen and (max-width: 762px) {

            /* border for baby section */
            .border-sm-b-blue {
                border-bottom: 1px solid #4873b7 !important;
                border-right: none;
            }

            .border-sm-r-blue {
                border-right: 1px solid #4873b7 !important;
            }
        }

        .baby-ac-section {
            border: 1px solid rgb(72, 115, 183, 0.5) !important;
        }

        @media (max-width: 560px) {
            .border-right-1 {
                border-right: none !important;
            }
        }

        .baby-ac-section .nav-tabs .nav-link {
            border: none;
        }





        /* RANGE IMAGE SLIDER ENDS HERE */




        picture {
            position: absolute;
        }


        @media(max-width: 1474px) {
            picture img {
                width: 100%;
                height: 480px !important;
                object-fit: cover;
                object-position: bottom;
            }
        }


        @media(max-width: 1474px) {
            .feature-section-title p {
                font-size: 1.3rem;
            }
        }

        .z-sec {
            z-index: 1;
        }

        .background-img {
            border: none !important;
        }

        .border-blud-for-tabs {
            border: 1px solid #4873b7 !important;
        }
    </style>

    {{-- reivews --}}
    <style>
        #reviews .review .title {
            display: block;
            text-align: left;
            font-size: 98%;
        }

        #reviews .review .stars {
            color: #ffc122;
            display: block;
            text-shadow: 1px 1px 1px grey;
            text-align: left;
        }

        .stars>i {

            font-size: 14px;
        }

        #reviews .review .text {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 85%;
        }

        #reviews .review {
            margin-bottom: 32px;
        }



        .aspect-1-1 {
            flex-shrink: 0;
            min-width: 100%;
            min-height: 100%
        }

        .slide-content-wrapper {
            display: inline;
        }

        .tab-content.coupons-container#nav-tabContent {
            max-height: 330px;
        }

        .btn.btn-primary {
            color: white;
            background-color: #2baf38;
            border-color: unset;
        }


        @media(max-width: 490px) {
            .home-ban-h1 {
                font-size: 35px !important;
            }

            .home-ban-h3 {
                font-size: 20px !important;
            }
        }
    </style>
@endsection

@section('content')
    <!-- main section -->
    <main class="main-section item-center flex">
        <div class="col-12 col-md-8 col-xl-6 p-3 p-md-5 mt-5 mt-sm-0 z-sec">
            <!-- heading section -->
            <div class="text-center text-md-start">
                <h1 class=" text-blue home-ban-h1" style="font-family: latobold; font-size: 45px;">
                    Non-Toxic


                    <br>
                    House and Commercial
                    <br>
                    Cleaning Services
                </h1>
                <h3 class="heading-2 home-ban-h3" style="font-family: latobold; font-size: 30px;">Top House Keeping Service
                    in NYC</h3>
            </div>
            <!-- Book now seciton -->
            <form action="{{ route('callback_number') }}" method="POST" class="row gap-3 p-3 p-sm-0">
                @csrf
                <input type="text" id="phone-input" name="phone" class="py-3 rounded-2 col-12 col-md-8 ele1" />
                <button class="py-3 rounded-2  col-12 col-md-3 bg-lightgreen text-white">BOOK NOW</button>
            </form>
        </div>
    </main>




    <!-- featured banner section-->
    {{-- <section class="feature-section">
        <div class="feature-section-container">
            <div class="feature-section-1 flex item-center">
                <span></span>
                <div class="feature-section-title">
                    <p class="">Featured In</p>
                </div>
                <span></span>
            </div>
            <div class="feature-container-img">
                <img class="lozad" alt="Featured in The new your times" height="112" width="553"
                    data-src="{{ asset('assets/images/nytimes-black.png') }}" style />
            </div>
        </div>
    </section> --}}

    <!-- slider section -->

    <!-- Slider -->
    <section class="slider-section overflow-hidden pt-3 pt-lg-50">
        <!-- services section header -->
        <div class="services-section-header py-4">
            <p class="fs-1 text-blue">What We Do Best</p>
        </div>
        @include('app.sliders.service_slider')
    </section>

    <!-- Services section -->
    <section class="services-section">
        <div class="py-5 p-md-3 p-xl-5 flex flex-col justify-center item-center">
            <!-- services section header -->
            <div class="services-section-header">
                <p>METROMAIDS HOUSE CLEANING</p>
                <p>
                    Your Trusted Cleaning Services Company in NYC, Brooklyn, Queens, Bronx,
                    & Long Island
                </p>
                <p>Offering Residential & Commercial Cleaning Services</p>
            </div>
            <!-- section accordion & image -->
            <div class="container row justify-content-center align-items-center py-4 overflow-hidden gap-4">
                <!-- accordion -->
                <div class="services-section-accordion-container flex flex-col col-12 col-lg-5 col-xl-4">
                    <div class="accordion flex flex-column gap-3" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button services-section-accordion-header" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    What services do you provide?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        We provide a variety of commercial and residential cleaning services in NYC
                                        including house cleaning, post construction cleaning, deep cleaning services, move
                                        in cleaning services, move out cleaning services, maid cleaning services, and more.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button services-section-accordion-header collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Where do you service?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        We provide our cleaning services to Brooklyn and Queens.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button services-section-accordion-header collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    How is your cleaning different?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        What sets us apart from other NYC commercial and residential house cleaning
                                        companies is that we only use green and non-toxic products in our cleaning services.
                                        These products have been certified by the US EPA as part of their "Safer Choice"
                                        program. We also offer incredible service, hence our average 4.9/5 star rating at
                                        all of our locations!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button services-section-accordion-header collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Why choose us?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        If you are looking for a trusted and recommended house cleaning company that not
                                        only provides incredible service but also uses top=of-the-line green products that
                                        are safe for you, your family, and your pets, then we are the right choice! You
                                        can't get better than Metromaids!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- img -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="beforeAfterContainer border-0">
                        <div class="img background-img rounded-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- reivews section for small device starts here --}}
    {{-- <section class="mobile-rev d-md-none px-3" id="reviews">
        <div class="row my-4">
            <div class="col">
                <h3 class="text-blue fs-2 fs-md-5 lh-1-3 lh-md-auto">OUR REVIEWS!</h3>
            </div>
        </div>
        <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="swiper-wrapper" id="swiper-wrapper-a21f0f5315e17e7e" aria-live="polite"
                style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">

                <div class="swiper-slide" role="group" aria-label="1 / 3" style="width: 521px; margin-right: 30px;">
                    <div class="row">
                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/debra.png') }}" alt="debra"
                                class="person lozad " width="40px" height="40px"> <span class="title">Debra<span
                                    class="time">a month ago</span></span> <span class="stars"><i class="fa"
                                    aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i></span> <span class="text">Stuart is very
                                professional and
                                did a great job for us. He did a very thorough cleaning of our
                                sectional couch and rugs. They look better than new!</span></div>

                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/karen.png') }}" alt="debra"
                                class="person lozad " width="40px" height="40px"> <span class="title">Karen<span
                                    class="time">a month ago</span></span> <span class="stars"><i class="fa"
                                    aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i></span> <span class="text">Stuart was
                                extremely prompt and
                                very professional. The couch looks and smells brand new.
                                Highly recommend for all upholstery services!!</span></div>

                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/richard.png') }}" alt="debra"
                                class="person lozad " width="40px" height="40px"> <span class="title">Steffi<span
                                    class="time">a month ago</span></span> <span class="stars"><i class="fa"
                                    aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i></span> <span class="text">I highly recommend
                                PristineGreen
                                cleaning. After two cleaning attempts by another service, one on-site steam
                                cleaning and then another off-site 'industrial' dry cleaning, the sofa still had visible
                                stains. I was met with excuses and ...
                                long stories till I decided to call for another service. Stuart was very straight forward
                                and honest over the phone. He focused on all
                                the discolored dark spots, an issue the other service said it was impossible to remove
                                without damaging the fabric. In an industry where
                                the fee of service reflects the quality, this was the opposite case where Stuart's service
                                was the lowest fee with the highest results.</span></div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 3"
                    style="width: 521px; margin-right: 30px;">
                    <div class="row">
                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/taylor.png') }}" alt="debra"
                                class="person lozad " width="40px" height="40px"> <span class="title">Taylor<span
                                    class="time">a month ago</span></span> <span class="stars"><i class="fa"
                                    aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i></span> <span class="text">Stuart responded
                                quickly when I
                                reached out. Gave me all the details upfront. Service was quick and my couches look new
                                again and smell fresh.
                                Would definitely use again for both my couches and rugs!</span></div>

                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/nick.png') }}" alt="debra"
                                class="person lozad " width="40px" height="40px"> <span class="title">Nick<span
                                    class="time">a month ago</span></span> <span class="stars"><i class="fa"
                                    aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i></span> <span class="text">Stuart was beyond
                                excellent! Prompt, professional, respectful, courteous and paid incredible attention to
                                detail.
                                I will never use anyone else! If I could give more than 5 stars, I would. Highly
                                recommend!</span></div>

                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/shelby.webp') }}" alt="debra"
                                class="person lozad" width="40px" height="40px"> <span class="title">Shelby<span
                                    class="time">a month ago</span></span> <span class="stars"><i class="fa"
                                    aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i></span> <span class="text">A beer spilled on
                                my velvet sofa
                                and the grain of the velvet was entirely warped. I was able to book a cleaning in a couple
                                days
                                and they were in and out in under an hour. The sofa looks as good as new and there’s no
                                intense </span></div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-active" role="group" aria-label="3 / 3"
                    style="width: 521px; margin-right: 30px;">
                    <div class="row">
                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/debra.png') }}" alt="debra"
                                class="person lozad" width="40px" height="40px"> <span class="title">Ana
                                Maria <span class="time">a month ago</span></span> <span class="stars"><i
                                    class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i></span> <span class="text">I called for an
                                appointment late last week and received an appointment and detailed quote immediately.
                                He arrived on time and took less than an hour to do my couch. Needless to say the couch came
                                out great I highly recommend prestinegreen cleaning</span></div>

                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/richard.png') }}" alt="debra"
                                class="person lozad" width="40px" height="40px"> <span class="title">Richard<span
                                    class="time">a month ago</span></span> <span class="stars"><i class="fa"
                                    aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i></span> <span class="text">Excellent
                                experience with this
                                company. The owner was able to arrange a same-day appointment to clean our armchair, and was
                                courteous,
                                professional and efficient throughout. Highly recommended.</span></div>

                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/karen.png') }}" alt="debra"
                                class="person lozad" width="40px" height="40px"> <span class="title">Eric
                                Braunstein <span class="time">a month ago</span></span> <span class="stars"><i
                                    class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i></span> <span class="text">Had two carpets
                                and an ottoman cleaned at my apartment in UES of Manhattan. Was very prompt with reply re:
                                quote,
                                easy to schedule, and the cleaned items look great. Definitely would recommend for any
                                carpet or upholstery cleaning needs.</span></div>
                    </div>
                </div>
            </div>
            <div
                class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                <span class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0"
                    role="button" aria-label="Go to slide 2"></span><span
                    class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                    aria-label="Go to slide 3" aria-current="true"></span>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </section> --}}
    {{-- reivews section for small device starts here --}}

    {{-- reivews section for large device starts here --}}
    {{-- <section class="py-5 bg-lightgray-1 d-none d-md-block desktop-revl" id="reviews">
        <div class="container">
            <div class="row my-4">
                <div class="col">
                    <h3 class="text-blue fs-2 fs-md-5 lh-1-3 lh-md-auto">OUR REVIEWS!</h3>
                </div>
            </div>
            <div class="row text-lightgray">
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="{{ asset('assets/images/review_images/debra.png') }}" style="">
                    <span class="title">Debra<span class="time">a month ago</span></span> <span class="stars"><i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i></span> <span class="text">Stuart is very
                        professional and did a great job for us. He did a very thorough
                        cleaning of our
                        sectional couch and rugs. They look better than new!</span>
                </div>
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="{{ asset('assets/images/review_images/karen.png') }}" style="">
                    <span class="title">Karen<span class="time">a month ago</span></span> <span class="stars"><i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i></span> <span class="text">Stuart was extremely
                        prompt and very professional. The couch looks and smells brand
                        new.
                        Highly recommend for all upholstery services!!</span>
                </div>
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="{{ asset('assets/images/review_images/richard.png') }}" style="">
                    <span class="title">Steffi<span class="time">a month ago</span></span> <span class="stars"><i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i></span> <span class="text">I highly recommend
                        PristineGreen cleaning. After two cleaning attempts by another
                        service, one on-site steam
                        cleaning and then another off-site 'industrial' dry cleaning, the sofa still had visible stains. I
                        was met with excuses and ...
                        long stories till I decided to call for another service. Stuart was very straight forward and honest
                        over the phone. He focused on all
                        the discolored dark spots, an issue the other service said it was impossible to remove without
                        damaging the fabric. In an industry where
                        the fee of service reflects the quality, this was the opposite case where Stuart's service was the
                        lowest fee with the highest results.</span>
                </div>
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="{{ asset('assets/images/review_images/taylor.png') }}" style="">
                    <span class="title">Taylor<span class="time">a month ago</span></span> <span class="stars"><i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i></span> <span class="text">Stuart responded quickly
                        when I reached out. Gave me all the details upfront.
                        Service was quick and my couches look new again and smell fresh.
                        Would definitely use again for both my couches and rugs!</span>
                </div>
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="assets/images/review_images/nick.png" style="">
                    <span class="title">Nick<span class="time">a month ago</span></span> <span class="stars"><i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i></span> <span class="text">Stuart was beyond
                        excellent! Prompt, professional, respectful, courteous and paid
                        incredible attention to detail.
                        I will never use anyone else! If I could give more than 5 stars, I would. Highly recommend!</span>
                </div>
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="{{ asset('assets/images/review_images/shelby.webp') }}" style="">
                    <span class="title">Shelby<span class="time">a month ago</span></span> <span class="stars"><i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i></span> <span class="text">A beer spilled on my
                        velvet sofa and the grain of the velvet was entirely warped. I
                        was able to book a cleaning in a couple days
                        and they were in and out in under an hour. The sofa looks as good as new and there’s no intense
                    </span>
                </div>
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="{{ asset('assets/images/review_images/debra.png') }}" style="">
                    <span class="title">Ana Maria <span class="time">a month ago</span></span>
                    <span class="stars"><i class="fa" aria-hidden="true"></i> <i class="fa"
                            aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i class="fa"
                            aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i></span> <span
                        class="text">I called for an appointment late last week and received an appointment and detailed
                        quote immediately.
                        He arrived on time and took less than an hour to do my couch. Needless to say the couch came out
                        great I highly recommend prestinegreen cleaning</span>
                </div>
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="{{ asset('assets/images/review_images/richard.png') }}" style="">
                    <span class="title">Richard<span class="time">a month ago</span></span> <span class="stars"><i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i></span> <span class="text">Excellent experience with
                        this company. The owner was able to arrange a same-day
                        appointment to clean our armchair, and was courteous,
                        professional and efficient throughout. Highly recommended.</span>
                </div>
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="{{ asset('assets/images/review_images/karen.png') }}" style="">
                    <span class="title">Eric Braunstein <span class="time">a month
                            ago</span></span> <span class="stars"><i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i></span>
                    <span class="text">Had two carpets and an ottoman cleaned at my apartment in UES of Manhattan. Was
                        very prompt with reply re: quote,
                        easy to schedule, and the cleaned items look great. Definitely would recommend for any carpet or
                        upholstery cleaning needs.</span>
                </div>
            </div>




        </div>
    </section> --}}
    {{-- reivews section for large device  ends here --}}

    <!-- Callback-form section -->
    @include('app.static_components.callback_form_banner')


    {{-- Trusted by section starts here --}}




    {{-- Trusted by section  ends here --}}



    <!--  baby section -->
    <section
        data-background-image="{{ asset('assets/images/NY-house-cleaning-services-New-York-PristineGreen-House-Cleaning-UES-Branch-10021-professional-cleaners.jpg') }}"
        class="lozad baby-section d-flex align-items-center">
        <!-- tabs -->
        <div class="container-fluid d-flex flex-column py-5 p-md-5 justify-content-center h-100">
            <div style=" height: 512px !important;margin-left: auto !important;"
                class=" bg-lightgray h-auto mx-auto mx-md-0 col-12 col-sm-10 col-md-9 col-xl-7 p-3 p-md-5 rounded-4 baby-ac-section">
                <div style="width: fit-content !important"
                    class="border-blud-for-tabs nav nav-tabs border mb-3 w-auto rounded-3 overflow-hidden " id="nav-tab"
                    role="tablist">
                    <button
                        class="nav-link col-12 col-sm-6 col-md-auto rounded-0 active custom-border-none border-sm-b-blue border-sm-r-blue border-right-1"
                        id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"
                        aria-controls="nav-home" aria-selected="true">
                        House Cleaning
                    </button>
                    <button
                        class="nav-link rounded-0 col-12 col-sm-6 col-md-auto custom-border-none  border-sm-b-blue border-right-1"
                        id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
                        role="tab" aria-controls="nav-profile" aria-selected="false">
                        Green Cleaning
                    </button>
                    <button class="nav-link rounded-0  col-12 col-md-auto custom-border-none " id="nav-contact-tab"
                        data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab"
                        aria-controls="nav-contact" aria-selected="false">
                        Deep Cleaning
                    </button>
                </div>
                <div class="tab-content coupons-container" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <h3 class="text-blue">House Cleaning Services</h3>
                        <p>
                            Welcome to MetroMaids House Cleaning, your local home cleaning solution. We offer exceptional
                            house cleaning services near you, tailored to fit your unique needs. Our team of professional
                            house cleaners, conveniently located near you, are committed to providing top-quality
                            housekeeping services.


                        </p>
                        <p>At MetroMaids, we believe in excellence, ensuring that every corner of your home sparkles. Our
                            house cleaning service is not just about cleaning, it's about caring for your home and creating
                            a sanctuary for you and your loved ones. We are a cleaning company near you that specializes in
                            both regular housekeeping and deep cleaning services. Whether you need us regularly for house
                            keeping or for a one-time deep cleaning service, we are at your service.
                        </p>
                        <p>Our home cleaning services are comprehensive. We take pride in offering everything from routine
                            home cleaning, to maids near you for those times when life gets too busy, to move out cleaning
                            services. Looking for deep cleaning services near you? We’ve got you covered.</p>
                        <p>Your search for cleaning services near you ends here with MetroMaids House Cleaning. We are your
                            go-to house cleaning services near you, providing unmatched service quality and commitment. So,
                            if you're after a professional cleaning service that treats your home as their own, we're just a
                            call away. Choose MetroMaids, where cleanliness meets comfort.</p>

                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <h3 class="text-blue">Green Cleaning Services</h3>
                        <p>Living in the city can be difficult. Lots of noises, smells, stimulation, and yelling cab
                            drivers! When you get home, you want a safe space that is clean and healthy. We now this too,
                            which is why we use only certified non-toxic and green chemicals in our cleaning process so you
                            can feel relaxed and safe in your clean apartment or house.</p>
                        <p>All of our services offer green and non-toxic cleaning so you can be assured your apartment won't
                            smell of synthetic and unpleasant fragrances after our work. All the products we use have been
                            certified by the US EPA as part of their "Safer Choice" program! This means if you have e
                            family, a pet, children, or are an sensitive individual, you need not worry if the chemicals
                            will be harmful or unpleasant!</p>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <h3 class="text-blue">Deep Cleaning Services</h3>
                        <p>Everyone loves the feel and look of a beautiful rug. They had color and texture to any room’s
                            décor. For those that really want impress guests and have the highest level of luxury, they
                            purchase oriental rugs and Persian rugs. These rugs, either new or vintage, are made in many
                            places around the world, but mostly in the far east, in countries in Asia as Iran, Pakistan,
                            India, Russia, China, Nepal, Turkey, and Tibet. They are hand-knotted and made from a variety of
                            materials as goat wool, sheep wool, silk, and silk blends. These rugs can be very expensive, so
                            just like an expensive car, professional Persian rug cleaning, with the proper tools and
                            techniques, is essential.</p>
                        <p>All of our services offer green and non-toxic cleaning so you can be assured your apartment won't
                            smell of synthetic and unpleasant fragrances after our work. All the products we use have been
                            certified by the US EPA as part of their "Safer Choice" program! This means if you have e
                            family, a pet, children, or are an sensitive individual, you need not worry if the chemicals
                            will be harmful or unpleasant!</p>

                    </div>
                </div>
            </div>
        </div>
    </section>



    @include('app.static_components.we_offer')




    <!-- Company info section -->
    @include('app.static_components.companyinfo_banner')

    @include('app.static_components.callback_form_submit')

    <!-- call us section -->
    @include('app.static_components.callus_banner')
@endsection


@section('js')
    <script type="text/javascript">
        // window.onload = function() {
        //   var videoContainer = document.querySelector('.video-container');
        //   var video = videoContainer.querySelector('video');
        //   var errorEle = document.querySelector('#revbann');

        //    resizeVideo();

        //    window.addEventListener('resize', resizeVideo);

        //   function resizeVideo() {
        //     video.style.height = errorEle.offsetTop + 'px';
        //   }

        // //     doElsCollide = function(el1, el2) {
        // //         el1.offsetBottom = el1.offsetTop + el1.offsetHeight;
        // //         el1.offsetRight = el1.offsetLeft + el1.offsetWidth;
        // //         el2.offsetBottom = el2.offsetTop + el2.offsetHeight;
        // //         el2.offsetRight = el2.offsetLeft + el2.offsetWidth;

        // //         return !((el1.offsetBottom < el2.offsetTop) ||
        // //                  (el1.offsetTop > el2.offsetBottom) ||
        // //                  (el1.offsetRight < el2.offsetLeft) ||
        // //                  (el1.offsetLeft > el2.offsetRight))
        // //     };
        // }
    </script>
@endsection
