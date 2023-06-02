@extends('layouts.index')
@section('title')
    Upper East Side, Manhattan Business Location | PristineGreen Upholstery and Carpet Cleaning
@endsection

@section('meta')
    <meta name="title"
        content="Upper East Side, Manhattan Business Location | PristineGreen Upholstery and Carpet Cleaning">
    <meta name="description"
        content="Our business location is located near Gramercy Park im Manhattan, NYC serving all surrounding areas including East Village, West Village, Soho, Noho, Tribeca, and the rest of Manhattan for their upholstery and carpet cleaning service needs!">
    <meta name="keywords"
        content="rug cleaning ny, oriental rug cleaner, sofa cleaning nyc, area rug cleaning nyc, carpet cleaner service, ny carpet cleaning, carpet cleaner nyc, couch cleaner nyc, rug cleaner nyc, upholstery cleaning brooklyn, furniture cleaning nyc, carpet cleaner companies near me, sofa cleaning brooklyn">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="PristineGreen Upholstery and Carpet Cleaning">
    <meta property="og:title"
        content="Upper East Side, Manhattan Business Location | PristineGreen Upholstery and Carpet Cleaning">
    <meta property="og:description"
        content="Our business location is located near Gramercy Park im Manhattan, NYC serving all surrounding areas including East Village, West Village, Soho, Noho, Tribeca, and the rest of Manhattan for their upholstery and carpet cleaning service needs!">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="{{ asset('assets/images/sofa-cleaning-NYC-10010-NY-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title"
        content="Upper East Side, Manhattan Business Location | PristineGreen Upholstery and Carpet Cleaning">
    <meta name="twitter:description"
        content="Our business location is located near Gramercy Park im Manhattan, NYC serving all surrounding areas including East Village, West Village, Soho, Noho, Tribeca, and the rest of Manhattan for their upholstery and carpet cleaning service needs!">
    <meta name="twitter:image"
        content="{{ asset('assets/images/sofa-cleaning-NYC-10010-NY-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="PristineGreen Upholstery and Carpet Cleaning">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl"
        content="{{ asset('assets/images/sofa-cleaning-NYC-10010-NY-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}">
    <meta itemprop="image"
        content="{{ asset('assets/images/sofa-cleaning-NYC-10010-NY-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}">
    <link rel="image_src"
        href="{{ asset('assets/images/sofa-cleaning-NYC-10010-NY-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}">

    <link rel="shortcut" type="image/png" href="{{ asset('assets/icons/site_icon_128x128.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/icons/site_icon_128x128.png') }}">
    <meta name="abstract" content="PristineGreen Upholstery and Carpet Cleaning in NYC">
    <meta name="author" content="admin">
    <meta name="classification" content="Blog">
    <meta name="copyright" content="PristineGreen Upholstery and Carpet Cleaning - All rights Reserved.">
    <meta name="distribution" content="Global">
    <meta name="language" content="en-GB">
    <meta name="publisher" content="PristineGreen Cleaning">
    <meta name="rating" content="General">
    <meta name="resource-type" content="Document">
    <meta name="revisit-after" content="3">
    <meta name="subject" content="Blog">
@endsection

@section('css')
    <style>
        /* CSS styling for the map container */
        #map {
            height: 450px;
            width: 100%;
        }
    </style>
@endsection

@section('content')
    <!-- main section -->

    <main class="position-relative">
        <!-- bg-img -->
        <img class="img lozad img-fulid serivce-area-imgs" width="100%"
            data-src="{{ asset('assets/images/carpet-cleaning-service-NYC-New-York-rug-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning-NY-10010.jpg') }}"
            height="590" />
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100">
            <div class="d-flex flex-col justify-content-end h-100 px-lg-5">
                <h1 class="text-green  white-text-shadow service-area-heading">
                    Upper East Side, Manhattan NYC <br />
                    <span class="text-skyblue">Carpet
                        Cleaning
                    </span>
                </h1>

                <div class="d-flex flex-column mx-auto mx-md-0 w-100 tex-white" id="bulletPoints">
                    <p class="p-0">Local Manhattan Carpet Cleaners</p>
                    <p class="p-0">Green and Non-Toxic Cleaning </p>
                    <p class="p-0">Only 5 Star Reviews</p>
                    <p class="p-0">Same Day Service</p>
                </div>
                <!-- Book now seciton -->
                <form action="{{ route('callback_number') }}" method="POST"
                    class="row gap-3 p-3 p-sm-0 col-md-8 col-xl-6 my-2 ">
                    @csrf
                    <input type="text" id="phone-input" name="phone" class="py-3 rounded-2 col-12 col-md-8 ele1" />
                    <button class="py-3 rounded-2  col-12 col-md-3 bg-lightgreen text-white">BOOK NOW</button>
                </form>
            </div>
        </div>
    </main>
    <!-- main content section  -->
    @include('app.static_components.review_banner')
    <section>
        <div class="container py-5 main-content-section-container text-lightgray">
            <h3 class="text-center text-green-1 fs-1 py-2">
                OUR CARPET CLEANING BUSINESS LOCATION ON THE UPPER EAST SIDE, MANHATTAN NYC

            </h3>
            <p>
                PristineGreen Upholstery and Carpet Cleaning is the best carpet and
                upholstery cleaners in Manhattan. With our variety of upholstery and
                carpet cleaning services, you will never have to worry about a dirty
                home again. We clean a variety of items including carpets, couches,
                mattresses, area rugs, auto interiors, and more!
            </p>
            <p>
                For years, PristineGreen has been serving Manhattan residents with their carpet cleaning needs. With a
                location situated right near Upper East Side, that has received only 5-star reviews, you can trust us to
                take care of your home furnishings. Our experience with a range of rugs and textiles gives us the knowledge
                to handle any problems. We also use only green and non-toxic materials when performing our services which
                keeps our clients and their families and pets safe.
            </p>

            <p>
                In Manhattan, we provide carpet cleaning services to both residential and commercial properties. We often
                see wall-to-wall carpet in bedrooms and large couches that seat over 4 people in living rooms. We use
                state-of-the-art machines to clean a variety of fabrics so whatever your furniture item or rug, we can clean
                it for you.


            </p>

            <p>
                With our three different package deals, you can choose the one that suits your needs. The deep cleaning
                option offers a more thorough cleaning, while the other options provide a layer of disinfection and
                essential oils for extra protection from germs. We provide traditional cleaning methods for your upholstery
                and rugs, but we also offer a range of other services including disinfection. Those who are sensitive to
                chemicals often choose this addon service for their upholstery and rug cleaning which helps eliminate dust
                mites which can exacerbate allergies. Many people also opt for this this package just to have peace of mind
                that their rugs and upholstery are thoroughly cleaned, even on a germ level.
            </p>

            <p>
                We always use a step-by-step cleaning process that takes into consideration the fabric of the item. We
                assess stains and choose the appropriate chemical and method to use to get them out. Our stain removers are
                non-toxic and safe to use on a wide range of stains, from pet stains, odor removal, food stains, and wine
                spills.
            </p>
            <p>
                If you're looking for a deep cleaning of your rugs and upholstery in Manhattan, give us a call and we'll
                give you a free instant quote on your furnishings. We are an honest company and the price we offer you is
                the price you pay (unless the items stated were smaller or larger than in reality). Speak with one of our
                representatives today to book an appointment so you too can enjoy the PristineGreen experience!


            </p>
            <p class="fs-5">
                We also have other business locations serving the rest of NYC at these
                locations
            </p>
            <p>
                <a class="text-blue" href="/service-areas/business-locations/astoria-queens">Astoria, Queens</a><br />
                <a class="text-blue" href="/service-areas/business-locations/gramercy-manhattan">Gramercy,
                    Manhattan</a><br />
                <a class="text-blue" href="/service-areas/business-locations/ridgewood-queens">Ridgewood, Queens</a>
            </p>
        </div>
    </section>

    <!-- map address section -->
    <section>
        <div class="container-fuild flex flex-column-reverse flex-md-row overflow-hidden">
            <div
                class="bg-lightgray-1 col-md-5 col-xl-4 p-4 p-lg--5 d-flex flex-col item-center text-center justify-center">
                <h4 class="text-lightgray">
                    PristineGreen Upholstery and Carpet Cleaning
                </h4>
                <p class="text-lightgray">
                    115 E 23rd St 3rd floor<br />
                    New York, NY 10010<br />
                    <a class="text-lightgray" href="tel:%28347%29%20871-6530">(347) 871-6530</a><br />
                    <a class="text-lightgray"
                        href="mailto:sales@pristinegreencleaning.com">sales@pristinegreencleaning.com</a>
                </p>
            </div>
            <div class="col">
                {{-- <img class="lazy img-fluid lozad" alt="Google Map" width="1260" height="450" style="height: 450px"
                    data-src="https://pristinegreencleaning.com/assets/images/map/map-gramercy.webp" /> --}}
                <div id="map"></div>
            </div>
        </div>
    </section>

    <!-- offering services section -->

    <!-- Company info section -->
    @include('app.static_components.companyinfo_banner')

    <!-- call us section -->
    @include('app.static_components.callus_banner')
@endsection
@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBB_zev3AUlvTv9UGwZGPnUCSnM1aMsPLo"></script>
    <script type="text/javascript">
        function initMap() {
            // Specify the center location as an address, dynamically applicable
            var centerLocation = "115 E 23rd St 3rd floor, New York, NY 10010";

            // Create a geocoder object
            var geocoder = new google.maps.Geocoder();

            // Convert the center location to coordinates
            geocoder.geocode({
                address: centerLocation
            }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    // Retrieve the first result's geometry (location)
                    var location = results[0].geometry.location;

                    // Create a map object
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: location,
                        zoom: 18
                    });

                    // Create a marker for the location
                    var locationMarker = new google.maps.Marker({
                        position: location,
                        map: map,
                        title: centerLocation
                    });
                    // Create an info window
                    var infoWindow = new google.maps.InfoWindow({
                        content: "Pristinegreen Cleaning"
                    });

                    // Add click event listener to open the info window
                    locationMarker.addListener('click', function() {
                        infoWindow.open(map, locationMarker);
                    });
                } else {
                    // Geocoding was not successful
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });
        }

        // Load the map after the Google Maps API is loaded
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
@endsection
