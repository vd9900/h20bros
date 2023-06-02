@extends('layouts.index')
@section('title')
    Blogs | {{ env('APP_NAME') }}
@endsection

@section('meta')
    <meta name="title" content="Blogs | Carpet Cleaners NYC, Brooklyn, and Queens">
    <meta name="description"
        content="PristineGreen Cleaning is your trusted carpet cleaner in NYC, Queens, Brooklyn, Bronx, Long Island, and Staten Island">
    <meta name="keywords"
        content="rug cleaning ny, oriental rug cleaner, sofa cleaning nyc, area rug cleaning nyc, carpet cleaner service, ny carpet cleaning, carpet cleaner nyc, couch cleaner nyc, rug cleaner nyc, upholstery cleaning brooklyn, furniture cleaning nyc, carpet cleaner companies near me, sofa cleaning brooklyn, mattress cleaner nyc, upholstery cleaning nyc, rug clean service, couch cleaning services, rug cleaner brooklyn, couch cleaner brooklyn, mattress cleaning brooklyn, area rugs cleaning, carpet cleaner brooklyn, furniture cleaning brooklyn, rug cleaner, clean area rug near me, upholstery cleaning queens, carpet cleaning professional, the best carpet cleaning, rug cleaner queens, best upholstery cleaning, carpet cleaner queens, upholstery steam cleaning, best carpet steam cleaner, carpet cleaner, carpet cleaning commercial, carpet shampoo cleaning, carpet shampoo near me, couch cleaner, couch steam cleaning, furniture cleaning, furniture steam cleaning, mattress cleaner, rug shampoo near me, sofa cleaning, steam cleaner near me, upholstery cleaning, couch cleaner queens, furniture cleaning queens, mattress cleaner brooklyn, mattress cleaner queens, sofa cleaner queens, sofa cleaning queens">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="PristineGreen Upholstery and Carpet Cleaning">
    <meta property="og:title" content="Blogs | Carpet Cleaners NYC, Brooklyn, and Queens">
    <meta property="og:description"
        content="PristineGreen Cleaning is your trusted carpet cleaner in NYC, Queens, Brooklyn, Bronx, Long Island, and Staten Island">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="{{ asset('assets/images/sofa-cleaning-NYC-10010-NY-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Carpet Cleaners NYC, Brooklyn, and Queens | PristineGreen Cleaning ">
    <meta name="twitter:description"
        content="PristineGreen Cleaning is your trusted carpet cleaner in NYC, Queens, Brooklyn, Bronx, Long Island, and Staten Island">
    <!--<meta name="twitter:domain" content="pristinegreencleaning.com">-->
    <meta name="twitter:image"
        content="{{ asset('assets/images/sofa-cleaning-NYC-10010-NY-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="Blogs | Carpet Cleaners NYC, Brooklyn, and Queens">
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

@section('content')
    <!-- blog section -->
    <section>
        <div class="container p-md-5">
            <div class="py-4 text-center fs-1 text-blue">
                <h1 id="st" class="font-median">Blog</h1>
            </div>
            <!-- blogs -->
            <div class="row py-5 row-gap-5 mx-md-0" id="blogs">
                @include('app.pagination.blogs.index')
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var containerH = $('#blogs').height();
                $.ajax({
                    url: $(this).attr('href'),
                    method: 'GET',
                    dataType: 'html',
                    beforeSend: function() {
                        // showLoader();
                        $('#blogs').height(containerH)
                    },
                    success: function(response) {

                        $('#blogs').html(response);
                    },
                    complete: function() {
                        // hideLoader();
                        var target = $("#st");
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        // Reload Lozad
                        const observer = lozad('.lozad', {
                            loaded: function(el) {
                                el.classList.add('fade-in');
                            }
                        });
                        observer.observe();

                        // Reload AOS
                        AOS.refresh();
                    }
                });
            });
        })
    </script>
@endsection
