{{-- for small device --}}
<section class="position-relative overflow-hidden d-md-none">
    <!-- services section header -->
    <div class="text-center py-4">
        <p class="fs-2 text-blue">Trusted By</p>
    </div>
    @include('app.sliders.trusted_slider')
</section>

{{-- for small device --}}
<section class="position-relative overflow-hidden d-none d-md-block">
    <!-- services section header -->
    <div class="text-center py-4">
        <p class="fs-2 text-blue pt-2">Trusted By</p>
    </div>
    <div class="pb-5 pt-3 d-flex flex-column gap-5 px-1">
        <div class="row  trusted-banner-imgs justify-content-center">
            <div class="col-3 "> <img class="lazy lozad" alt="MSocial" height="104" width="450"
                    data-src="{{ asset('assets/images/Msocial.png') }}" style></div>
            <div class="col-3 "> <img class="lazy lozad" alt="Skin Laundry California" height="104"
                    width="450" data-src="{{ asset('assets/images/Skin-Laundry-Carpet-Cleaning-NYC.png') }}"
                    style></div>
            <div class="col-3"> <img class="lazy lozad" alt="Park Slope Parents" height="104" width="450"
                    data-src="{{ asset('assets/images/Park-Slope-Parents-Residential-Upholstery-Cleaning-NYC.png') }}"
                    style></div>
            <div class="col-3"> <img class="lazy lozad" alt="Four Seasons" height="104" width="450"
                    data-src="{{ asset('assets/images/Four-Seasons.png') }}" style></div>
        </div>
        <div class="row  trusted-banner-imgs justify-content-center pt-2">
            <div class="col-3"> <img class="lazy lozad" alt="Redfin Carpet Cleaning Service NYC" height="104"
                    width="450" data-src="{{ asset('assets/images/Redfin-Carpet-Cleaning-Service-NYC.webp') }}"
                    style></div>
            <div class="col-3"> <img class="lazy lozad" alt="SF Commerical Carpet Cleaning NYC" height="104"
                    width="450" data-src="{{ asset('assets/images/SF-Commerical-Carpet-Cleaning-NYC.png') }}"
                    style></div>
            <div class="col-3"> <img class="lazy lozad" alt="Belleclaire Hotel" height="104" width="450"
                    data-src="{{ asset('assets/images/Hotel-Belleclaire.png') }}" style></div>
            <div class="col-3"> <img class="lazy lozad" alt="Eataly" height="104" width="450"
                    data-src="{{ asset('assets/images/eatalylogo.svg') }}" style></div>
        </div>
        <div class="row  trusted-banner-imgs justify-content-center pt-2">
            <div class="col-3 ">
                <div class="w-fit">
                    <img class="lazy lozad" alt="Stay America" height="104" width="450"
                        data-src="{{ asset('assets/images/Extended_Stay_America_logo.png') }}" style>
                </div>
            </div>
        </div>
    </div>
    {{-- @include('app.sliders.trusted_slider') --}}
</section>