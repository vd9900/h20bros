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
        <div class="d-flex justify-content-center">
            <!-- FAQs accordion -->
            <div class="services-section-accordion-container flex flex-col col-12 col-lg-10 col-xl-9">
                <div class="accordion flex flex-column gap-3" id="accordionExample">
                    @foreach($faqs as $index => $faq)
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button services-section-accordion-header {{$index != 0 ? 'collapsed' : ''}}"
                                type="button" 
                                data-bs-toggle="collapse" data-bs-target="#collapse-{{$index}}"
                                aria-expanded="{{$index == 0 ? 'true' : 'false'}}" 
                                aria-controls="collapse-{{$index}}">
                                {{$faq->name}}
                            </button>
                        </h2>
                        <div id="collapse-{{$index}}" class="accordion-collapse collapse {{$index == 0 ? 'show' : ''}}"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    {{$faq->acceptedAnswer->text}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>