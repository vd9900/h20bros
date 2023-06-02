@extends('layouts.index')
@section('title')
    FAQ's | {{ env('APP_NAME') }}
@endsection

@section('meta')
@endsection

@section('content')
    <!-- get  Frequently Asked Questions section -->

    <section class="bg-lightgray">
        <div class="container py-5 p-md-5">
            <div class="text-center p-1">
                <h2 class="text-center text-blue font-median">
                    Frequently Asked Questions
                </h2>
                <p style="color: #565656">
                    These are the most frequently asked questions by customers. Call or
                    email us if you have others!
                </p>
            </div>
            {{-- <div class="d-flex justify-content-center">
                <!-- FAQs accordion -->
                <div class="services-section-accordion-container flex flex-col col-12 col-lg-10 col-xl-9">
                    <div class="accordion flex flex-column gap-3" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button services-section-accordion-header" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    How long will it take to perform the carpet/upholstery
                                    cleaning?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Length of job depends on the items cleaned but a regular
                                        size couch takes about 1 hour and a 9x12 rug, about 30
                                        minutes. This includes equipment setup.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button services-section-accordion-header collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Do you clean with slovents?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Our carpet cleaning methods use only non-toxic products
                                        and therefore we do not use solvents im our cleaning work.
                                        Solvents are made from petroleum products and release
                                        toxic odors. We do not clean furniture and rugs that have
                                        cleaning code "S," which stands for "Solvent."
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button services-section-accordion-header collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    What do you accept for payment?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        For payment we accept cash, credit, Venmo, Paypal, and
                                        Zelle. If you do choose to pay with credit there is a 3.5%
                                        surcharge and with Venmo as of (April 2021) there is a
                                        2.9% charge for business accounts. All other methods are
                                        free.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button services-section-accordion-header collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    What method do you use for cleaning?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        For our carpet cleaning service, we use a 5-step cleaning
                                        process, using only non-toxic and green carpet cleaning
                                        products. Our process includes a professional vacuum,
                                        pre-srpay, stain-remover, agitation, and a hot or cold
                                        extraction, dependingo n the fabric. We may repeat these
                                        steps on certain areas and various stains (like wine
                                        stains or pet stains) in order to remove all the
                                        discoloration, smells, and contaminants
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button services-section-accordion-header collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">
                                    Are there hidden fees?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        The price given in the quote includes all fees and will
                                        not change unless the items being cleaned are larger or
                                        smaller than was initially indicated. Changes rarely
                                        happen if accurate information is given initially.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button services-section-accordion-header collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive1"
                                    aria-expanded="false" aria-controls="collapseFive1">
                                    How do you stand behind your work?
                                </button>
                            </h2>
                            <div id="collapseFive1" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        We do our best to provide top-of-the-lime service to all
                                        our clients. If there is an issue with our cleaning,
                                        please contact us immediately and we will make it right.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button services-section-accordion-header collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                    aria-expanded="false" aria-controls="collapseSix">
                                    How many hours for my carpet/upholstery to dry?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Dry time depends on the fabric. Carpets and upholstery
                                        generally dry within 3-4 hours.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button services-section-accordion-header collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                    aria-expanded="false" aria-controls="collapseSeven">
                                    Do you have insurance?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes, we are fully insured.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

    @include('app.static_components.callus_banner')
@endsection
