@extends('layouts.index')
@section('title')
    H20bros Services | {{ env('APP_NAME') }}
@endsection

@section('css')
    <style>
        .services-items .col-12 {
            padding-bottom: 38px !important;
        }
    </style>
@endsection


@section('meta')
@endsection
@section('content')
    <!-- main section starts here -->
    <main class="main-carpet-services-section d-flex align-items-end py-5">
        <div class="col-12 col-md-8 col-xl-6  p-5 pb-120">
            <!-- heading section -->
            <div class="">
                <h1 class=" text-green">
                    Services
                </h1>
                <h3 class="heading-2 text-center text-lg-start">Top Carpet Cleaner Service in NYC</h3>
            </div>
            <!-- Book now seciton -->
            <form action="{{ route('callback_number') }}" method="POST" class="row gap-3">
                @csrf
                <input type="text" id="phone-input" class="py-3 rounded-2 col-md-8 col-12" />
                <button type="submit" class="py-3 rounded-2 bg-lightgreen text-white col-md-3 col-12">BOOK NOW</button>
            </form>
        </div>
    </main>
    <!-- main section starts here -->

    {{-- reviews banner section --}}
    {{-- @include('app.static_components.review_banner') --}}


    {{-- services section starts here --}}
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-4">
                        <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 py-3 text-green-1 text-uppercase">
                            Services
                        </h2>
                    </div>
                    <div class="services-items col-md-12 row row-gap-4 row-gap-lg-5 justify-content-center">
                        <div class="col-12 col-sm-6 col-md-4 item text-center">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('hour_24_plumbers') }}"
                                class="d-flex flex-column gap-3">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img alt="post" class="img img-fluid lazy rounded-3 lozad" width="295"
                                            height="295"
                                            data-src="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="text-green-1 fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto" text-lightgray>
                                    24 Hours Plumber Services
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    We use our homes for everything which is why its important to keep it clean from top to
                                    bottom. Our comprehensive house cleaning services will suite all your needs!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center"
                                href="{{ route('commercial_plumbing_repair') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/images/NY-house-cleaning-services-New-York-PristineGreen-House-Cleaning-UES-Branch-10021-post-construction-cleaning.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Commercial Plumbing Repair
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Construction work is always messy: dirt, dust, and grime everywhere! Our trained team
                                    knows
                                    how to quickly and effectively clean every nook and cranny of your new project!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('drain_cleaning') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-move-in-cleaning-house-cleaning-services.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Drain Cleaning
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    When we move to a new place, the last thing we want to think about it cleaniung it after
                                    we
                                    have just had the hassle of moving. Hire us to do a complete top to bottom clean of your
                                    new
                                    house or apartment!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('bathroom_plumbing') }}">
                                <div class="top-holder">
                                    <div class="img-holder lozad">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/images/house-cleaning-services-New-York-move-out-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Bathroom Plumbing
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    After we have packed up all our boxes, we are often too tired to clean the whole
                                    apartment
                                    before we move. That's why you should call us to do a complete and thorough clean of
                                    your
                                    old home to ensure no bills come in the mail from the landlord!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('hydro_jetting') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-apartment-cleaning-services-house-cleaning-services.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Hydro Jetting
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Our apartments are the center of our lives, but sometimes life is too busy for us to
                                    spend
                                    time cleaning it! Our services do the heavy lifting for you so you can keep on living
                                    life
                                    without worrying about cleaning!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('water_heaters') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            alt="green carpet cleaner service"
                                            data-src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-maid-cleaning-service-house-cleaning-services.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Water Heaters
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Our furry friends sometimes make accidents on our clean upholstery and carpet.
                                    Our pet odor
                                    removal and pet stain cleaning services in NYC remove those stains and smells
                                    safetly and
                                    effectively!
                                </p>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('sewer_repair') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/images/PristineGreen-House-Cleaning-UES-Branch-house-cleaning-services-10021-New-York-commercial-cleaning-services-NY.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Sewer Repair
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Our furry friends sometimes make accidents on our clean upholstery and carpet.
                                    Our pet odor
                                    removal and pet stain cleaning services in NYC remove those stains and smells
                                    safetly and
                                    effectively!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('leak_detection') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-maid-cleaning-service-house-cleaning-services.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Leak Detection
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Our furry friends sometimes make accidents on our clean upholstery and carpet.
                                    Our pet odor
                                    removal and pet stain cleaning services in NYC remove those stains and smells
                                    safetly and
                                    effectively!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('sump_pump') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-residential-cleaning-services-house-cleaning-services.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Sump Pump Services
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Car owners can spend hours every day in their vehicles, and
                                    slowly the car’s interior being its seats, trunk, carpets,
                                    mats, and even headliner gather dirt, odors, bacteria, and
                                    stains. Getting your car cleaned by an interior auto
                                    detailer will make your driving experience more hygienic,
                                    and guests will not feel uncomfortable with the dirty
                                    upholstery!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('water_main') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-cleaning-lady-house-cleaning-services.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Water Main Services
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Keeping the office clean and hygienic is essential for a productive work
                                    environment. Having
                                    a professional upholstery steam cleaner and rug shampooer regularly maintain
                                    your office’s
                                    fabric and leather furniture and carpets will ensure a safe and clean work
                                    environment with
                                    happy employees!
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- services section ends here --}}







    <!-- Callback-form section -->
    @include('app.static_components.callback_form_banner')



    @include('app.static_components.callback_form_submit')

    @include('app.static_components.callus_banner')
@endsection
