@extends('layouts.index')

@section('title')
    Gallery |{{ env('APP_NAME') }}
@endsection

@section('meta')
    <meta name="title" content="Gallery | PristineGreen Upholstery and Carpet Cleaning">
    <meta name="description"
        content="View our gallery of carpet cleaning and upholstery cleaning images that were taken from our jobs sites across NYC, including those in Brooklyn, Queens and Manhattan!">
    <meta name="keywords"
        content="rug cleaning ny, oriental rug cleaner, sofa cleaning nyc, area rug cleaning nyc, carpet cleaner service, ny carpet cleaning, carpet cleaner nyc, couch cleaner nyc, rug cleaner nyc, upholstery cleaning brooklyn, furniture cleaning nyc, carpet cleaner companies near me, sofa cleaning brooklyn, mattress cleaner nyc, upholstery cleaning nyc, rug clean service, couch cleaning services, rug cleaner brooklyn, couch cleaner brooklyn, mattress cleaning brooklyn, area rugs cleaning, carpet cleaner brooklyn, furniture cleaning brooklyn, rug cleaner, clean area rug near me, upholstery cleaning queens, carpet cleaning professional, the best carpet cleaning, rug cleaner queens, best upholstery cleaning, carpet cleaner queens, upholstery steam cleaning, best carpet steam cleaner, carpet cleaner, carpet cleaning commercial, carpet shampoo cleaning, carpet shampoo near me, couch cleaner, couch steam cleaning, furniture cleaning, furniture steam cleaning, mattress cleaner, rug shampoo near me, sofa cleaning, steam cleaner near me, upholstery cleaning, couch cleaner queens, furniture cleaning queens, mattress cleaner brooklyn, mattress cleaner queens, sofa cleaner queens, sofa cleaning queens">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="PristineGreen Upholstery and Carpet Cleaning">
    <meta property="og:title" content="Gallery | PristineGreen Upholstery and Carpet Cleaning">
    <meta property="og:description"
        content="View our gallery of carpet cleaning and upholstery cleaning images that were taken from our jobs sites across NYC, including those in Brooklyn, Queens and Manhattan!">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="{{ asset('assets/images/sofa-cleaning-NYC-10010-NY-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Carpet Cleaners NYC, Brooklyn, and Queens | PristineGreen Cleaning ">
    <meta name="twitter:description"
        content="View our gallery of carpet cleaning and upholstery cleaning images that were tkane from our jobs sites across NYC, including those in Brooklyn, Queens and Manhattan!">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lightgallery.min.css">
    <style>
        #light_gallery {
            row-gap: 1.4rem;
            max-width: 100%;
            margin: 0 auto;
            justify-content: center;
        }

        .lg-backdrop.in {
            opacity: .8 !important;
        }

        .gallery-set {
            position: relative;
            display: grid;
            place-items: center;
            cursor: pointer;
        }


        .gallery-set:after {
            content: "\f00e";
            font-family: fontawesome !important;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            position: absolute;
            top: calc(50% - 30px);
            font-size: 26px;
            color: #fff;
            opacity: 0;
            transition: .35s all ease-in-out;
        }

        .gallery-set:hover::after {
            opacity: 1 !important;
        }

        .moeed {
            object-fit: cover;
            width: 295px;
            height: 295px;
            aspect-ratio: 1/1;
        }

        @media (max-width: 768px) {
            #top-banner.short-header .banner-content .heading-text h1 {
                margin-top: -24px !important;
            }
        }
    </style>
@endsection


@section('content')
    <!-- About us banner section -->
    <section class="position-relative">
        <img class="w-100 lozad" height="100"
            data-src="{{ asset('assets/images/carpet-cleaner-service-NYC-gallery.webp') }}">
        <div class="position-absolute w-100 h-100 top-0 d-flex justify-center align-items-center">
            <h2 class="fs-1 font-median text-green-1 p-0 mb-1">Gallery</h2>
        </div>
    </section>
    <section id="main-content-cleaning" class="py-5 overflow-hidden">
        <div class="container px-0 py-2 py-lg-5 ">
            <div class="  row " id="light_gallery">
                @include('app.pagination.gallery.index')
            </div>
            <div class="auto-load text-center aligncenter" style="display: none;">

                <svg version="1.1" id="L9" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink"
                    x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0"
                    xml:space="preserve">
                    <path fill="#000"
                        d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                        <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                            from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                    </path>

                </svg>
            </div>
        </div>
    </section>
    @include('app.static_components.callus_banner')
@endsection



@section('js')
    <script type="module" defer>
    import lightGallery from "https://cdn.skypack.dev/lightgallery@2.0.0-beta.3";
    import lgZoom from "https://cdn.skypack.dev/lightgallery@2.0.0-beta.3/plugins/zoom";
    window.lgallery = initFGallery();
    document.addEventListener('touchstart',function(e){
      const tag = e.target.tagName
      const hasCls = e.target.classList.contains('lg-img-wrap');
      if(tag === 'PICTURE' && hasCls){
        window.lgallery.closeGallery()
      }
    })


    function initFGallery() {
        
        return lightGallery(document.getElementById("light_gallery"), {
            speed: 500,
            plugins: [lgZoom],
            dynamic: true,
            dynamicEl: {!! json_encode($newLG) !!},
            mobileSettings:{
                controls: true,
                showCloseIcon: true,
            }
        });
    }



    $(document).on("click", "#light_gallery img", async function() {
        var targetItem = this;
        var itemSet = document.querySelectorAll("#light_gallery img");
        
        window.lgallery = destroyGallery();
        window.lgallery = initFGallery();

        document.addEventListener('touchstart',function(e) {
          const tag = e.target.tagName
          const hasCls = e.target.classList.contains('lg-img-wrap');
          if(tag === 'PICTURE' && hasCls){
            window.lgallery.closeGallery()
          }
        })

        // console.log()
        return window.lgallery.openGallery(Number(this.getAttribute("index")));
        
        
    })




    async function destroyGallery() {
        return lightGallery(document.getElementById("light_gallery")).destroy(true);
    }

    $(document).ready(function() {
        var ENDPOINT = "{{ route('gallery') }}";
        var page = 1;



      /*------------------------------------------

      --------------------------------------------

      Call on Scroll Mobile

      --------------------------------------------

      --------------------------------------------*/

      // $(window).bind('touchmove', function() {
          
      //     if ($(window).scrollTop() + $(window).height() >= ($(document).height() - 20)) {
      //         $('#console').append('touching')
      //         page++;

      //         infinteLoadMore(page);

      //     }
      // }); // for mobile




        /*------------------------------------------

        --------------------------------------------

        Call on Scroll

        --------------------------------------------

        --------------------------------------------*/

        var observer = new IntersectionObserver(function(entries) {
            // isIntersecting is true when element and viewport are overlapping
            // isIntersecting is false when element and viewport don't overlap
            if(entries[0].isIntersecting === true)
                

                infinteLoadMore(page);
                page++;
                console.log(page)
        }, { threshold: [1] });
        observer.observe(document.querySelector("#neededH"));

        window.addEventListener("scroll", function () {
            
            // if ($("#neededH")[0].getBoundingClientRect.top >= 0 && $("#neededH")[0].getBoundingClientRect.bottom <= window.innerHeight) {
              
                

            // }

        });



            /*------------------------------------------

        --------------------------------------------

        call infinteLoadMore()

        --------------------------------------------

        --------------------------------------------*/

        function infinteLoadMore(page) {

            $.ajax({

                    url: ENDPOINT + "?page=" + page,

                    datatype: "html",

                    type: "get",

                    beforeSend: async function () {

                        $('.auto-load').show();

                        


                    },
                    complete: function() {

                        const observer = lozad('.lozad', {
                            loaded: function(el) {
                                el.classList.add('fade-in');
                            }
                        });
                        observer.observe();

                        // Reload AOS
                        AOS.refresh();
                        
                        
                    }

                })

                .done(async function (response) {

                    if (response.html == '') {

                        $('.auto-load').css("padding-top", "20px")
                        $('.auto-load').html("No more images found");

                        return;

                    }




                    

                    $('.auto-load').hide();

                    $("#light_gallery").append(response.html);

                    
                    
                    
                    
                    

                })

                .fail(function (jqXHR, ajaxOptions, thrownError) {

                    console.log('Server error occured');

                });

        }
    })
</script>
@endsection
