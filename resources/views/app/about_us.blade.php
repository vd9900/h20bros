@extends('layouts.index')


@section('title')
    About Us | {{ env('APP_NAME') }}
@endsection

@section('meta')
@endsection

@section('content')
    <!-- About us banner section -->
    <section class="position-relative">
        <img class="w-100 lozad" height="112"
            data-src="{{ asset('assets/images/carpet-cleaning-services--Queens-11105-PristineGreen-Upholstery-and-Carpet-Cleaning-rug-cleaner--NY.webp') }}" />
        <div class="position-absolute w-100 h-100 top-0 d-flex justify-center align-items-center">
            <h2 class="fs-1 font-median text-green-1 p-0 mb-1">About Us</h2>
        </div>
    </section>
    <!-- About us page section -->
    <section>
        <div class="container py-5 text-lightgray">
            <h2 class="text-blue text-center py-5">
                Experts in House Cleaning Services
            </h2>
            <p>
                At MetroMaids House Cleaning, we're passionate about delivering exceptional house cleaning services, right
                in the heart of your community. Born from a desire to bring professionalism and a high standard of
                cleanliness to homes near you, we’ve grown into a trusted house cleaning service.
            </p>
            <p>
                Our team of dedicated house cleaners near you take pride in their work. Every sweep, scrub, and polish is
                done with precision and a genuine love for housekeeping. From routine home cleaning services to detailed
                deep cleaning services, our team does it all. We're not just a cleaning company near you; we're a team of
                professionals that feel like family.
            </p>
            <p>
                Perhaps you’re searching for maids near you, or a move-out cleaning service? MetroMaids House Cleaning is
                committed to providing a diverse range of services to suit every need. If it's housekeeping services near
                you that you’re after, we are available and at your service.
            </p>
            <p>
                We don’t just offer house cleaning services near you; we bring peace of mind and a cleaner, healthier living
                environment right to your doorstep. At MetroMaids, we offer more than just a service. We deliver a promise
                of exceptional quality, deep cleaning services near you, and most importantly, your satisfaction.
            </p>
            <p>
                Come home to a cleaner house. Come home to MetroMaids House Cleaning.
            </p>
        </div>
    </section>

    @include('app.static_components.callus_banner')
@endsection
