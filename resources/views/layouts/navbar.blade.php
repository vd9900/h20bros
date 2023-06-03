<nav class="custom-nav navbar px-1 py-2 sticky-top shadow-lg">
    <div class="container custom-col">
        <div class="row logo-res w-100">
            <div class="col-md-4 col-lg-6 d-flex justify-content-between logo-col">
                <div class="navbar-logo">
                    <a class="" href="/" style="z-index: 1;">
                        <img class="main-logo lozad" alt="PrisineGreen" height="60" width="270"
                            data-src="{{ asset('assets/images/logo/PristineGreen-House-Cleaning-Logo-NYC.png') }}"
                            style="max-width:100%;">
                    </a>
                </div>
            </div>
            <div
                class="col-md-8
                            col-lg-6 d-lg-flex justify-content-center justify-content-md-end d-none">
                <div class="top-phone" style="padding-bottom: 12px; padding-top: 3px;">
                    <div class="myphone ">
                        <h3 class="mb-0 fw-bold" style="color:#fff">

                            <a class="myphone" href="tel:917-905-3058"><img width="35" height="35" alt="call-us"
                                    class="lozad" data-src="{{ asset('assets/icons/call.png') }}">
                                917-905-3058</a>
                        </h3>
                    </div>

                </div>
            </div>
        </div>
        <div class="row w-100">
            <div class="custom-col position-relative">
                <div class="justify-content-end">
                    <ul class="navbar-menu">
                        <li class="dropdown">
                            <a class="custom-nav-link nav-link  nav-link-ltr" href="/services">Cleaning Services <ic
                                    class="down-icon"></ic></a>
                            <div class="project hide-mob">
                                <div class="container-fluid mobb">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="drop-item"><a href="{{ route('hour_24_plumbers') }}">24 Hours
                                                    Plumber Services</a>
                                            </div>
                                            <div class="drop-item"><a
                                                    href="{{ route('commercial_plumbing_repair') }}">Commercial Plumbing
                                                    Repair</a></div>
                                            <div class="drop-item"><a href="{{ route('drain_cleaning') }}">Drain
                                                    Cleaning</a></div>
                                            <div class="drop-item"><a href="{{ route('bathroom_plumbing') }}">Bathroom
                                                    Plumbing</a></div>
                                            <div class="drop-item"><a href="{{ route('hydro_jetting') }}">Hydro
                                                    Jetting</a></div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="drop-item"><a href="{{ route('water_heaters') }}">Water
                                                    Heaters</a></div>
                                            <div class="drop-item"><a href="{{ route('sewer_repair') }}">Sewer
                                                    Repair</a></div>
                                            <div class="drop-item"><a href="{{ route('leak_detection') }}">Leak
                                                    Detection</a></div>
                                            <div class="drop-item"><a href="{{ route('sump_pump') }}">Sump Pump
                                                    Services </a></div>
                                            <div class="drop-item" style="border-bottom:unset !important;"><a
                                                    href="{{ route('water_main') }}">Water Main Services</a>
                                            </div>

                                            {{-- <div class="col-md-4 av-yelp-g">
                                            <img class="lozad"
                                                data-src="https://pristinegreencleaning.com/assets/icons/Carpet-Upholstery-Cleaning-Google-Yelp-Rating.png"
                                                alt="Carpet Upholstery Cleaning Google Yelp Rating">
                                        </div> --}}
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class="me-lg-0"><a class="nav-link custom-nav-link  nav-link-ltr"
                                href="{{ route('free-quote') }}">Request
                                a
                                Quote</a>
                        </li>
                        <li class="ms-lg-0"><a class="nav-link custom-nav-link  nav-link-ltr"
                                href="{{ route('contact-us') }}">Contact
                                Us</a></li>
                        <li class="ms-lg-0"><a class="nav-link custom-nav-link  nav-link-ltr"
                                href="{{ route('about-us') }}">About
                                Us</a></li>
                        {{-- <li class="dropdown-mega position-static no-border social-mobile">
                            <p style="padding-bottom: 0px!important;">Our socials</p>
                            <div class="our-socials">
                                <a href="https://www.facebook.com/PristineGreen-Upholstery-and-Carpet-Cleaning-380402999024630/?__tn__=%2Cg/"
                                    target="_blank" rel="noreferrer">
                                    <img rel="canonical" class="lozad" alt="facebook" width="32px" height="32px"
                                        data-src="{{ asset('assets/images/5365678_fb_facebook_facebook logo_icon.png') }}">
                                </a>
                                <a href="https://twitter.com/PGCarpetClean" target="_blank" rel="noreferrer">
                                    <img rel="canonical" class="lozad" alt="twitter" width="32px" height="32px"
                                        data-src="{{ asset('assets/images/5296516_tweet_twitter_twitter logo_icon.svg') }}"></a>
                                <a href="https://www.instagram.com/pristinegreencleaning/" target="_blank"
                                    rel="noreferrer">
                                    <img rel="canonical" class="lozad" alt="instagram" width="32px" height="32px"
                                        data-src="{{ asset('assets/images/5296765_camera_instagram_instagram logo_icon.webp') }}"></a>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="navbar-toggle">
      <span class="toggle__icon"></span>
      <span class="toggle__icon"></span>
      <span class="toggle__icon"></span>
    </div> -->
    <div class="d-flex">
        <div class="main-nav-item--phone"> <a class="main-nav-link" href="tel:347-871-6530"><img width="35"
                    height="35" alt="call-us" class="lozad"
                    data-src="https://pristinegreencleaning.com/assets/icons/call.png"></a>
        </div>
        <button class="hamburger__toggle">
            <span class="hamburger__icon"></span>
        </button>
    </div>

</nav>
<!-- NAVBAR END -->
