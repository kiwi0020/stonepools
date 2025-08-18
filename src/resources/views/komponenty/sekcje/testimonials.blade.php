<section class="container-row gen-padding width-100 flex-con-md-64 gap-64 wrap testimonial">
            <div class="container-col al-items-start gap-64">
                <div class="container-col al-items-start gap-24">
                    <h4 class="h-semi font-primary">Opinie</h4>
                    <h1 class="h-semi">Co o nas mówią inni?</h1>
                </div>
                <div class="container-row width-100 jus-con-btwn">
                    <a href="add-opinion.php">
                        <button class="primary-button">Dodaj opinię</button>
                    </a>
                    <div class="container-row gap-24">
                        <div class="testimonial-prev">
                            <img height="20" src="{{ asset('images/arrow-left.svg') }}" alt="">
                        </div>
                        <div class="testimonial-next">
                            <img height="20" src="{{ asset('images/arrow-right.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-row jus-con-start al-items-start testimonial-slider width-100">
                @foreach($testimonials as $testimonial)
                    <div class="testimonial-card container-col gap-16">
                        <div class="testimonial-stars container-row gap-0">
                            <img height="30" src="{{ asset('images/star-icon.svg') }}" alt="">
                            <img height="30" src="{{ asset('images/star-icon.svg') }}" alt="">
                            <img height="30" src="{{ asset('images/star-icon.svg') }}" alt="">
                            <img height="30" src="{{ asset('images/star-icon.svg') }}" alt="">
                            <img height="30" src="{{ asset('images/star-icon.svg') }}" alt="">
                        </div>
                        <p>{{ $testimonial->content }}</p>
                        <h4 class="h-semi">{{ $testimonial->author }}</h4>
                    </div>
                @endforeach
            </div>
        </section>