@extends('layouts.index')


@section('title')
    {{ $service_area->header }}
@endsection

@section('meta')
    <meta name="title" content="{{ $service_area->header }}">
    <meta name="description" content="{{ str_replace('<p>', ' ', $service_area->description) }}">
    <meta name="keywords"
        content="Alphabet City carpet cleaning, Astoria carpet cleaning, Bath Beach carpet cleaning, Battery Park City carpet cleaning, Bay Ridge carpet cleaning, Bay Terrace carpet cleaning, Bayside carpet cleaning, Bedford-Stuyvesant carpet cleaning, Bensonhurst carpet cleaning, Boerum Hill carpet cleaning, Briarwood carpet cleaning, Brooklyn Heights carpet cleaning, Brownsville carpet cleaning, Bushwick carpet cleaning, Canarsie carpet cleaning, Carroll Gardens carpet cleaning, Chelsea carpet cleaning, Chinatown carpet cleaning, Clinton Hill carpet cleaning, Cobble Hill carpet cleaning, College Point carpet cleaning, Columbus Circle carpet cleaning, Coney Island carpet cleaning, Corona carpet cleaning, Crown Heights carpet cleaning, Cypress Hills carpet cleaning, Ditmars carpet cleaning, Ditmas Park carpet cleaning, Downtown Brooklyn carpet cleaning, DUMBO carpet cleaning, Dyker Heights carpet cleaning, East Elmhurst carpet cleaning, East Flatbush carpet cleaning, East Harlem carpet cleaning, East New York carpet cleaning, East Village carpet cleaning, Elmhurst carpet cleaning, Far Rockaway carpet cleaning, Farragut carpet cleaning, Financial District carpet cleaning, Fiske Terrace carpet cleaning, Flatbush carpet cleaning, Flatiron District carpet cleaning, Flatlands carpet cleaning, Floral Park carpet cleaning, Flushing,  carpet cleaning, Forest Hills carpet cleaning, Fort Greene carpet cleaning, Fresh Meadows carpet cleaning, Fresh Pond carpet cleaning, Glen Oaks carpet cleaning, Glendale carpet cleaning, Gowanus carpet cleaning, Gramercy Park carpet cleaning, Gravesend carpet cleaning, Greenpoint carpet cleaning, Greenwich Village carpet cleaning, Hamilton Beach carpet cleaning, Hamilton Heights carpet cleaning, Harlem carpet cleaning, Hell's Kitchen carpet cleaning, Highland Park carpet cleaning, Howard Beach carpet cleaning, Howard Park carpet cleaning, Hudson Yards carpet cleaning, Inwood carpet cleaning, Jackson Heights carpet cleaning, Jamaica Park carpet cleaning, Kensing, ton carpet cleaning, Kew Gardens carpet cleaning, Kips Bay carpet cleaning, Koreatown carpet cleaning, Laurelton carpet cleaning, Lincoln Square carpet cleaning, Little Italy carpet cleaning, Little Neck carpet cleaning, Long Island City carpet cleaning, Lower East Side carpet cleaning, Madison carpet cleaning, Manhattan Beach carpet cleaning, Mapleton carpet cleaning, Marine Park carpet cleaning, Maspeth carpet cleaning, Meatpacking,  District carpet cleaning, Middle Village carpet cleaning, Midtown carpet cleaning, Midtown East carpet cleaning, Midtown West carpet cleaning, Midwood carpet cleaning, Mill Basin carpet cleaning, Morning, side Heights carpet cleaning, Murray Hill carpet cleaning, New Lots carpet cleaning, New Utrecht carpet cleaning, NoHo carpet cleaning, Nolita carpet cleaning, NoMad carpet cleaning, Ocean Hill carpet cleaning, Ozone Park carpet cleaning, Park Slope carpet cleaning, Plum Beach carpet cleaning, Prospect Heights carpet cleaning, Prospect Lefferts Gardens carpet cleaning, Prospect Park South carpet cleaning, Rego Park carpet cleaning, Ridgewood carpet cleaning, Rockaway Beach carpet cleaning, Seagate carpet cleaning, Sheepshead Bay carpet cleaning, SoHo carpet cleaning, Spring, field Gardens carpet cleaning, Stuyvesant Heights carpet cleaning, Stuyvesant Town carpet cleaning, Sunnyside carpet cleaning, Sunset Park carpet cleaning, Times Square carpet cleaning, Tribeca carpet cleaning, Tudor Village carpet cleaning, Union Square carpet cleaning, Upper East Side carpet cleaning, Upper West Side carpet cleaning, Washing, ton Heights carpet cleaning, Weeksville carpet cleaning, West Village carpet cleaning, Whitestone carpet cleaning, Williamsburg carpet cleaning, Windsor Terrace carpet cleaning, Woodhaven carpet cleaning, Woodside carpet cleaning, Wyckoff Heights carpet cleaning">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:site_name" content="PristineGreen Upholstery and Carpet Cleaning">
    <meta property="og:title" content="{{ $service_area->title }}">
    <meta property="og:description" content="{{ str_replace('<p>', ' ', $service_area->description) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ Storage::disk('public')->url($service_area->link) }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="{{ $service_area->header }}">
    <meta name="twitter:description" content="{{ str_replace('<p>', ' ', $service_area->description) }}">
    <!--<meta name="twitter:domain" content="pristinegreencleaning.com">-->
    <meta name="twitter:image" content="{{ Storage::disk('public')->url($service_area->link) }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="{{ $service_area->header }}">
    <meta itemprop="url" content="{{ Storage::disk('public')->url($service_area->link) }}">
    <meta itemprop="thumbnailUrl" content="{{ Storage::disk('public')->url($service_area->link) }}">
    <meta itemprop="image" content="{{ Storage::disk('public')->url($service_area->link) }}">
    <link rel="image_src" href="{{ Storage::disk('public')->url($service_area->link) }}">

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
        <img class="img lazy lozad serivce-area-imgs"
            data-src="{{ Storage::disk('public')->url('service-locations/' . $service_area->link) }}" width="100%"
            height="590" />
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100">
            <div class="d-flex flex-col justify-content-end h-100 px-lg-5">
                <h1 class="text-green service-area-heading">
                    {{ $service_area->header }} <br />
                    <span class="text-skyblue">Carpet Cleaning</span>
                </h1>

                <div class="d-flex flex-column mx-auto mx-md-0 w-100 tex-white" id="bulletPoints">
                    <p class="p-0">{{ $service_area->name }} Carpet Cleaners</p>
                    <p class="p-0">Green and Non-Toxic Cleaning</p>
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
            <h3 class="text-center text-green fs-1 py-2">{{ $service_area->name }}</h3>
            {!! $service_area->description !!}
            <p class="fs-5">
                We also have other business locations serving the rest of NYC at these
                locations
            </p>
            <p>
                <a href="/service-areas/business-locations/gramercy-manhattan/">Gramercy, Manhattan</a><br />
                <a href="/service-areas/business-locations/ues-manhattan/">Upper East Side, Manhattan</a><br />
                <a href="/service-areas/business-locations/astoria-queens/">Astoria, Queens</a><br />
                <a href="/service-areas/business-locations/ridgewood-queens/">Ridgewood, Queens</a>
            </p>
        </div>
    </section>

    <!-- Callback-form section -->
    @include('app.static_components.callback_form_banner')
    @include('app.static_components.trusted_by')

    <!-- map address section -->
    <section>
        <div class="container-fuild flex flex-column-reverse flex-md-row">
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
