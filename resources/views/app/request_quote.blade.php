@extends('layouts.index')
@section('title')
    Free Quote Now | {{ env('APP_NAME') }}
@endsection

@section('meta')
@endsection

@section('content')
    <!-- get a qutoe section -->
    <section class="position-relative">
        <!-- bg-img -->
        <img class="img lazy lozad"
            data-src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-residential-cleaning-services-house-cleaning-services.jpg') }}"
            width="100%" height="590"
            style="height: 560px !important;
                    background-size: cover;
                    display: flex;
                    max-width: 100%;
                    border-radius: 10px;
                    object-fit: cover;" />
        <div class="py-4 px-3 p-md-4 px-lg-5 position-absolute bottom-0 w-100 h-100 d-flex item-center justify-center">
            <div class="d-flex flex-col gap-4 rounded-3 h-100 py-4 bg-black col-12 col-sm-10 col-md-8"
                style="--bs-bg-opacity: 0.4">
                <div class="mx-auto">
                    <p class="text-center text-white fs-1 p-0">Get a Quote!</p>
                    <p class="tex-white px-1 py-0 fs-6 text-center">
                        NYC's most trusted and recommended house cleaning service!
                    </p>
                    <form action="{{ route('free-quote') }}" method="POST"
                        class="d-flex flex-column gap-4 gap-md-3 px-4 row">
                        @csrf
                        <input class="col-12 p-2 outline-none rounded-1" type="text" name="name" id=""
                            style="outline: none !important" placeholder="Name" />
                        <input class="col-12 p-2 p-2 outline-none rounded-1" type="email" name="email" id=""
                            style="outline: none !important" placeholder="Email" />
                        <input class="col-12 p-2 p-2 outline-none rounded-1" type="text" name="phone" id=""
                            style="outline: none !important" placeholder="Phone Number" />
                        <input class="col-12 p-2 p-2 outline-none rounded-1" type="text" name="zip" id=""
                            style="outline: none !important" placeholder="Zipcode" />
                        <input class="col-12 p-2 p-2 outline-none rounded-1" type="text" name="describe" id=""
                            style="outline: none !important" placeholder="What do you need cleaned?" />
                        <button class="my-2 col-sm-8 col-xl-5 tex-white mx-auto py-2 btn-lightgreen fs-5 rounded-1">
                            Free Quote Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
