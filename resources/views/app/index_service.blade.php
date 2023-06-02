@extends('layouts.index')

@section('title')
    Service Areas | {{ env('APP_NAME') }}
@endsection

@section('meta')
    <meta name="title" content="Service Areas | PristineGreen Upholstery and Carpet Cleaning">
    <meta name="description"
        content="Learn about the location of our business locations in NYC and also the neighborhoods that we service!">
    <meta name="keywords"
        content="Alphabet City carpet cleaning, Astoria carpet cleaning, Bath Beach carpet cleaning, Battery Park City carpet cleaning, Bay Ridge carpet cleaning, Bay Terrace carpet cleaning, Bayside carpet cleaning, Bedford-Stuyvesant carpet cleaning, Bensonhurst carpet cleaning, Boerum Hill carpet cleaning, Briarwood carpet cleaning, Brooklyn Heights carpet cleaning, Brownsville carpet cleaning, Bushwick carpet cleaning, Canarsie carpet cleaning, Carroll Gardens carpet cleaning, Chelsea carpet cleaning, Chinatown carpet cleaning, Clinton Hill carpet cleaning, Cobble Hill carpet cleaning, College Point carpet cleaning, Columbus Circle carpet cleaning, Coney Island carpet cleaning, Corona carpet cleaning, Crown Heights carpet cleaning, Cypress Hills carpet cleaning, Ditmars carpet cleaning, Ditmas Park carpet cleaning, Downtown Brooklyn carpet cleaning, DUMBO carpet cleaning, Dyker Heights carpet cleaning, East Elmhurst carpet cleaning, East Flatbush carpet cleaning, East Harlem carpet cleaning, East New York carpet cleaning, East Village carpet cleaning, Elmhurst carpet cleaning, Far Rockaway carpet cleaning, Farragut carpet cleaning, Financial District carpet cleaning, Fiske Terrace carpet cleaning, Flatbush carpet cleaning, Flatiron District carpet cleaning, Flatlands carpet cleaning, Floral Park carpet cleaning, Flushing,  carpet cleaning, Forest Hills carpet cleaning, Fort Greene carpet cleaning, Fresh Meadows carpet cleaning, Fresh Pond carpet cleaning, Glen Oaks carpet cleaning, Glendale carpet cleaning, Gowanus carpet cleaning, Gramercy Park carpet cleaning, Gravesend carpet cleaning, Greenpoint carpet cleaning, Greenwich Village carpet cleaning, Hamilton Beach carpet cleaning, Hamilton Heights carpet cleaning, Harlem carpet cleaning, Hell's Kitchen carpet cleaning, Highland Park carpet cleaning, Howard Beach carpet cleaning, Howard Park carpet cleaning, Hudson Yards carpet cleaning, Inwood carpet cleaning, Jackson Heights carpet cleaning, Jamaica Park carpet cleaning, Kensing, ton carpet cleaning, Kew Gardens carpet cleaning, Kips Bay carpet cleaning, Koreatown carpet cleaning, Laurelton carpet cleaning, Lincoln Square carpet cleaning, Little Italy carpet cleaning, Little Neck carpet cleaning, Long Island City carpet cleaning, Lower East Side carpet cleaning, Madison carpet cleaning, Manhattan Beach carpet cleaning, Mapleton carpet cleaning, Marine Park carpet cleaning, Maspeth carpet cleaning, Meatpacking,  District carpet cleaning, Middle Village carpet cleaning, Midtown carpet cleaning, Midtown East carpet cleaning, Midtown West carpet cleaning, Midwood carpet cleaning, Mill Basin carpet cleaning, Morning, side Heights carpet cleaning, Murray Hill carpet cleaning, New Lots carpet cleaning, New Utrecht carpet cleaning, NoHo carpet cleaning, Nolita carpet cleaning, NoMad carpet cleaning, Ocean Hill carpet cleaning, Ozone Park carpet cleaning, Park Slope carpet cleaning, Plum Beach carpet cleaning, Prospect Heights carpet cleaning, Prospect Lefferts Gardens carpet cleaning, Prospect Park South carpet cleaning, Rego Park carpet cleaning, Ridgewood carpet cleaning, Rockaway Beach carpet cleaning, Seagate carpet cleaning, Sheepshead Bay carpet cleaning, SoHo carpet cleaning, Spring, field Gardens carpet cleaning, Stuyvesant Heights carpet cleaning, Stuyvesant Town carpet cleaning, Sunnyside carpet cleaning, Sunset Park carpet cleaning, Times Square carpet cleaning, Tribeca carpet cleaning, Tudor Village carpet cleaning, Union Square carpet cleaning, Upper East Side carpet cleaning, Upper West Side carpet cleaning, Washing, ton Heights carpet cleaning, Weeksville carpet cleaning, West Village carpet cleaning, Whitestone carpet cleaning, Williamsburg carpet cleaning, Windsor Terrace carpet cleaning, Woodhaven carpet cleaning, Woodside carpet cleaning, Wyckoff Heights carpet cleaning">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="PristineGreen Upholstery and Carpet Cleaning">
    <meta property="og:title" content="Service Areas | PristineGreen Upholstery and Carpet Cleaning">
    <meta property="og:description"
        content="Learn about the location of our business locations in NYC and also the neighborhoods that we service!">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="{{ asset('assets/images/sofa-cleaning-NYC-10010-NY-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Carpet Cleaners NYC, Brooklyn, and Queens | PristineGreen Cleaning ">
    <meta name="twitter:description"
        content="Learn about the location of our business locations in NYC and also the neighborhoods that we service!">
    <meta name="twitter:image"
        content="{{ asset('assets/images/sofa-cleaning-NYC-10010-NY-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="PristineGreen Upholstery and Carpet Cleaning">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl"
        content="{{ asset('/images/sofa-cleaning-NYC-10010-NY-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}">
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
        input:focus {
            outline: none;

        }

        @media screen and (max-width:765px) {
            .fs-max-md-6 {
                font-size: 16px !important;
            }
        }
    </style>
@endsection

@section('content')
    <!-- offer service section -->
    <section class="bg-lightgray">
        <div class="container py-5">
            <div>
                <p class="text-green-1 fs-2 text-center">
                    View Where We Serve Our Clients!
                </p>
            </div>
            <div class="d-flex flex-col gap-5">
                <div class="rounded-4 border-lightgreen overflow-hidden">
                    <div
                        class="bg-lightgreen tex-white px-3 px-md-5 py-2 fs-5 fs-max-md-6 font-median d-flex align-items-center justify-content-between">
                        <span>Our Branches</span>
                    </div>
                    <div class="row p-4 p-md-4 gap-3 gap-lg-0 service-area-links">
                        <div class="col-12 col-md-5 col-lg-3">
                            <a href="{{ route('gramercy_manhattan') }}"> Gramercy, Manhattan NYC</a>
                        </div>
                        <div class="col-12 col-md-5 col-lg-3">
                            <a href="{{ route('astoria_queens') }}"> Astoria Queens NYC</a>
                        </div>
                        <div class="col-12 col-md-5 col-lg-3">
                            <a href="{{ route('ues_manhattan') }}"> Upper East Side, Manhattan</a>
                        </div>
                        <div class="col-12 col-md-5 col-lg-3">
                            <a href="{{ route('ridgewood_queens') }}"> Ridgewood Queens NYC</a>
                        </div>
                    </div>
                </div>

                <div class="rounded-4 border-lightgreen overflow-hidden">
                    <div
                        class="bg-lightgreen tex-white px-3 px-md-5 py-2 fs-5 fs-max-md-6 font-median d-flex align-items-center justify-content-between">
                        <span>Service Areas in NYC</span>
                        <input id="search_area" type="text" placeholder="Search Areas..."
                            class="border bg-lightgray-1 px-2 col-7 col-md-6 col-lg-4 py-1 rounded-2 text-lightgray">
                    </div>
                    <div class="row p-4 p-md-4 gap-3 gap-lg-0 service-area-links" id="tar_ele">

                        @foreach ($data as $location)
                            <div class="col-12 col-md-5 col-lg-3">
                                <a title="{{ $location->title }}" href="{{ $location->href }}">
                                    {{ $location->content }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




@section('js')
    <script type="text/javascript">
        function searchAndHide(searchText) {
            const elements = Array.from(document.querySelectorAll(
                '#tar_ele a')); // Assuming the list items are <a> elements

            for (let i = 0; i < elements.length; i++) {
                const element = elements[i];
                const innerText = element.innerText.trim().toLowerCase();

                if (innerText.includes(searchText.toLowerCase())) {
                    // Match found, show the element
                    element.style.display = 'block';
                } else {
                    // No match found, hide the element
                    element.style.display = 'none';
                }
            }
        }

        $(document).ready(function() {
            $("#search_area").on("keyup", function() {
                const searchText = this.value.trim();
                searchAndHide(searchText);
            })
        })
    </script>
@endsection
