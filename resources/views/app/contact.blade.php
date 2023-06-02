@extends('layouts.index')
@section('title')
    Contact Us | {{env('APP_NAME')}}
@endsection

@section('meta')
@endsection

@section('css')
    <style type="text/css">
        .con a {
            color: unset;
        }

        #map, #map_2, #map_3, #map_4 {
            height: 200px;
            width: 200px;
        }
        .address-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <!-- Contact us banner section -->
    <section class="position-relative">
        <img class="w-100 lozad" height="130" data-src="{{ asset('assets/images/rug-cleaner-nyc-contact-us.webp') }}" />
        <div class="position-absolute w-100 h-100 top-0 d-flex justify-center align-items-center">
            <p class="fs-1 font-median text-green p-0 mb-1">Contact Us</p>
        </div>
    </section>
    <!-- Contact us page section -->
    <section>
        <div class="container flex flex-column flex-lg-row py-5">
            <!-- contact us form -->
            <div class="col-12 col-lg-7 col-xl-8 d-flex flex-column my-5 py-2 gap-3 pe-md-5">
                <h3 class="fs-3 font-median text-blue">Contact Us</h3>
                <p class="text-lightgray p-0">
                    Contact our sales team below! Our knowledgable representatives will
                    respond shortly and provide you with a free quote and answer any
                    questions you have.
                </p>
                <form action="{{ route('contact_us') }}" method="POST" class="d-flex flex-column gap-4 pe-lg-5">
                    @csrf
                    <input type="text" name="name" class="border border-1 rounded-2 p-2" placeholder="Name" />
                    <input type="text" name="email" class="border border-1 rounded-2 p-2"
                        placeholder="Email Address" />
                    <input type="text" name="phone" class="border border-1 rounded-2 p-2" placeholder="Phone" />
                    <textarea name="message_" id="" cols="30" rows="4" placeholder="Message"
                        class="border border-1 rounded-2 p-2"></textarea>
                    <button type="submit" class="btn-lightgreen tex-white col-4 col-sm-3 col-xl-2 py-2 px-2 rounded-1">
                        Contact Us
                    </button>
                </form>
            </div>
            <!-- social media link and map -->
            <div class="col p-5">
                <!-- visit us -->
                {{-- <div class="icon-list text-center p-4 d-flex flex-column gap-2 border-bottom">
                    <h3 class="fs-3 font-median text-blue">Visit Us</h3>
                    <div class="py-1 d-flex justify-center gap-2">
                        <a href="https://www.facebook.com/PristineGreen-Upholstery-and-Carpet-Cleaning-380402999024630/?__tn__=%2Cg/"
                            target="_blank">
                            <img rel="canonical" class="lozad lazy" alt="facebook" width="32px" height="32px"
                                data-src="{{ asset('assets/images/5365678_fb_facebook_facebook logo_icon.png') }}"
                                style />
                        </a>
                        <a href="https://twitter.com/PGCarpetClean" target="_blank">
                            <img rel="canonical" class="lazy lozad" alt="twitter" width="32px" height="32px"
                                data-src="{{ asset('assets/images/5296516_tweet_twitter_twitter logo_icon.svg') }}"
                                style />
                        </a>
                        <a href="https://www.instagram.com/pristinegreencleaning/" target="_blank">
                            <img rel="canonical" class="lozad lazy" alt="instagram" width="32px" height="32px"
                                data-src="{{ asset('assets/images/5296765_camera_instagram_instagram logo_icon.webp') }}"
                                style />

                        </a>
                    </div>
                </div> --}}
                <!-- Contact Info & Map -->
                <div class="text-center">
                    <div class="p-3 border-bottom con">
                        <h3 class="text-blue font-median py-2">Contact Info</h3>
                        <p class="mb-0">Contact</p>
                        <p>
                            <a target="_blank" href="tel:917-905-3058">917-905-3058</a><br />
                            <a target="_blank"
                                href="mailto:sales@metromaidscleaning.com">sales@metromaidscleaning.com</a>
                        </p>
                    </div>

                    <div class="address-info py-3">
                        <p><strong>Brooklyn</strong></p>
                        <div id="map"></div>
                        <p>
                            <a target="_blank"
                                href="https://www.google.com/maps/place/73+Sheridan+Ave,+Brooklyn,+NY+11208,+USA/@40.6809367,-73.8679283,19.42z/data=!4m6!3m5!1s0x89c25dc044641095:0x2959016608e1508a!8m2!3d40.6809396!4d-73.8674411!16s%2Fg%2F11c19s0g80?entry=ttu">
                                73 Sheridan Ave, 1st floor<br />
                                Brooklyn, NY 11208
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('app.static_components.callus_banner')
@endsection
@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBB_zev3AUlvTv9UGwZGPnUCSnM1aMsPLo"></script>
    <script type="text/javascript">
        function initMap() {
            // Specify the center location as an address, dynamically applicable
            var centerLocation_1 = "73 Sheridan Ave, 1st floor, Brooklyn, NY 11208";

            // Create a geocoder object
            var geocoder = new google.maps.Geocoder();

            // Convert the center location to coordinates
            geocoder.geocode({
                address: centerLocation_1
            }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    // Retrieve the first result's geometry (location)
                    var location = results[0].geometry.location;

                    // Create a map object
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: location,
                        zoom: 18,
                        mapTypeControl: false, // Remove satellite view control
                        streetViewControl: false, // Remove person (street view) control
                        zoomControl: false // Remove zoom controls
                    });

                    // Create a marker for the location
                    var locationMarker = new google.maps.Marker({
                        position: location,
                        map: map,
                        title: centerLocation_1
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