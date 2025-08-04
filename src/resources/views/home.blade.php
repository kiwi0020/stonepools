<!DOCTYPE html>
<html lang="pl">
    <head>        
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title></title>    <!-- Tytuł strony -->
        <meta name="description" content="" />    <!-- Opis strony -->
        
    
        <link rel="stylesheet" href=" {{ asset('css/harescape.css' ) }} " type="text/css">
        <!-- <link rel="stylesheet" href="https://uebhfraamh.cfolks.pl/style/harescape.css" type="text/css"> -->

        <link rel="icon" href="" type="image/x-icon">
    
        <!-- Canonical / Alternate -->

        <link rel="canonical" href="">
        <link rel="alternate" hreflang="en" href="">

        <!-- Animate.css -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        
        <!-- JQuery -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    </head>
<body>

   <!-- Navbar  -->

   @include('komponenty.sekcje.navbar')

    <!-- ------- -->

    <!-- Notifications -->

    @include('komponenty.form-notification')

    <!-- ------------- -->

    <!-- Main -->

    <main id="home-page">

        <section class="container-col width-100 pos-rel hero">

            <video class="width-100 bg-video" autoplay muted loop>
                <source src=" {{ asset('videos/hero-video-dark.mp4') }}" type="video/mp4">
                Twoja przeglądarka nie obsługuje tagu wideo.
            </video>

            <div class="container-col gen-padding gap-32">
                <img width="400" src="{{ asset('images/hero-logo.webp') }}" alt="Logotyp Stonepools" loading="lazy">
                <h1 class="h-semi font-white txt-center">StonePools centrum kostki brukowej oraz basenów</h1>
                <h4 class="h-reg font-white txt-center"><i>Kostka brukowa - Baseny - Zadaszenia basenów</i></h4>
            </div>
        </section>

        <section class="dp-grid width-100 grid-about-us-container bg-third" style="padding: 128px 32px;">
            <div class="container-col al-items-start gap-48">
                <h4 class="h-semi font-primary">O nas</h4>
                <h1 class="h-reg">Stonepools centrum kostki brukowej oraz basenów</h1>
            </div>
            <div class="container-col">
                <p><strong>StonePools</strong> to firma z 7-letnim doświadczeniem, specjalizująca się w sprzedaży kostki brukowej oraz kompleksowych pracach brukarskich. Oferujemy również profesjonalny montaż basenów ogrodowych. Łączymy solidne wykonanie z estetyką wykończenia, dbając o każdy detal przestrzeni wokół domu.</p>
            </div>
            <div class="container-col">
                <p class=" font-gray">Współpracujemy z jednostkami samorządowymi, inwestorami prywatnymi oraz znanymi markami. Naszym celem jest dostarczanie trwałych rozwiązań, które są zarówno funkcjonalne, jak i estetyczne.</p>
            </div>
            <div class="dp-grid">
                <div class="container-col al-items-start gap-32">
                    <div class="line-max-custom bg-black10"></div>
                    <img height="100" src="{{ asset('images/icon-1-about-us.webp')}}" alt="">
                    <div class="container-col gap-8 al-items-start">
                        <h4 class="h-semi">Kompleksowe podejście</h4>
                        <p>Od projektu do realizacji - kostka brukowa, baseny, zadaszenia basenów.</p>
                    </div>
                </div>
                <div class="container-col al-items-start gap-32">
                    <div class="line-max-custom bg-black10"></div>
                    <img height="100" src="{{ asset('images/icon-2-about-us.webp')}}" alt="">
                    <div class="container-col gap-8 al-items-start">
                        <h4 class="h-semi">Realizacje w całym kraju</h4>
                        <p>Pracujemy z gminami, powiatami i firmami, dostosowując się do potrzeb lokalnych.</p>
                    </div>
                </div>
                <div class="container-col al-items-start gap-32">
                    <div class="line-max-custom bg-black10"></div>
                    <img height="100" src="{{ asset('images/icon-3-about-us.webp')}}" alt="">
                    <div class="container-col gap-8 al-items-start">
                        <h4 class="h-semi">Technika i estetyka</h4>
                        <p>Łączymy twarde materiały z wizją wypoczynku - od brukowych podjazdów po baseny ogrodowe.</p>
                    </div>
                </div>
            </div>
            
        </section>

        <section class="container-col gen-padding width-100 gap-64" style="background-color: #fff;">
            <div class="container-col gap-16">
                <h4 class="h-semi font-primary">Usługi</h4>
                <h1 class="h-reg">Zakres usług</h1>
            </div>
            <div class="container-row width-100 flex-con-xs-24 gap-24 wrap">
                <div class="container-col gap-32">
                    <img height="100" src="{{ asset('images/kostka-brukowa-ikona.webp')}}" alt="">
                    <h4 class="h-semi txt-center">Sprzedaż kostki brukowej</h4>
                </div>
                <div class="container-col gap-32">
                    <img height="100" src="{{ asset('images/baseny-ikona.webp') }}" alt="">
                    <h4 class="h-semi txt-center">Sprzedaż basenów</h4>
                </div>
                <div class="container-col gap-32">
                    <img height="100" src="{{ asset('images/prace-brukarskie-ikona.webp')}}" alt="">
                    <h4 class="h-semi txt-center">Prace brukarskie</h4>
                </div>
                <div class="container-col gap-32">
                    <img height="100" src="{{ asset('images/montaz-basenow-ikona.webp')}}" alt="">
                    <h4 class="h-semi txt-center">Montaż basenów</h4>
                </div>
            </div>
        </section>

        <section class="container-col gen-padding bg-third gap-64 width-100 realisation">
            <div class="container-col gap-16 al-items-start width-100">
                <h4 class="h-semi font-primary">Projekty</h4>
                <h1 class="h-reg">Nasze realizacje</h1>
            </div>
            <div class="container-row gap-16 al-items-start width-100 jus-con-start">
                <div class="realisation-card pure-shadow"></div>
                <div class="realisation-card pure-shadow"></div>
                <div class="realisation-card pure-shadow"></div>
            </div>

            <div class="container-row width-100">
                <div class="container-row gap-24 jus-con-end width-100">
                    <div class="realisation-prev">
                        <img height="20" src="{{ asset('images/arrow-left.svg')}}" alt="">
                    </div>
                    <div class="realisation-next">
                        <img height="20" src="{{ asset('images/arrow-right.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="container-col gen-padding width-100 paralax gap-128" style="background-image: url(images/wspolpraca-tlo.png);">
            <div class=" dp-grid grid-wspolpraca-container width-100">
                <div class="container-col al-items-start">
                    <h4 class="h-semi font-primary">Współpracujemy</h4>
                    <h1 class="h-reg font-white">Zbudowaliśmy silne partnerstwa, które napędzają jakość i zaufanie</h1>
                </div>
                <div class="container-col al-items-start gap-32">
                    <div class="container-col al-items-start gap-32">
                        <div class="container-col al-items-start gap-8">
                            <p class="h-reg font-white" style="font-size: 4rem; line-height:4.2rem;">245+</p>
                            <p class="font-gray">Zrealizowanych inwestycji w Polsce.</p>
                        </div>
                        <div class="line-max-custom bg-white25"></div>
                    </div>
                    <div class="container-col al-items-start gap-32">
                        <div class="container-col al-items-start gap-8">
                            <p class="h-reg font-white" style="font-size: 4rem; line-height:4.2rem;">30+</p>
                            <p class="font-gray">Obsługiwanych gmin, miast i inwestorów publicznych</p>
                        </div>
                        <div class="line-max-custom bg-white25"></div>
                    </div>
                    <div class="container-col al-items-start gap-32">
                        <div class="container-col al-items-start gap-8">
                            <p class="h-reg font-white" style="font-size: 4rem; line-height:4.2rem;">7 lat</p>
                            <p class=" font-gray">Doświadczenia w branży brukarskiej.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-row gap-0 flex-con-xs-0 wrap width-100">
                <div style="height: 300px;" class="container-col white50-border padding-32">
                    <img class="width-100" src="{{ asset('images/pebek-logo.webp') }}" alt="Logo Pebek" loading="lazy">
                </div>
                <div style="height: 300px;" class="container-col white50-border padding-32">
                    <img class="width-100" src="{{ asset('images/constant-logo.webp') }}" alt="Logo Pebek" loading="lazy">
                </div>
                <div style="height: 300px;" class="container-col white50-border padding-32">
                    <img class="width-100" src="{{ asset('images/pebek-logo.webp') }}" alt="Logo Pebek" loading="lazy">
                </div>
                <div style="height: 300px;" class="container-col white50-border padding-32">
                    <img class="width-100" src="{{ asset('images/constant-logo.webp') }}" alt="Logo Pebek" loading="lazy">
                </div>
            </div>
        </section>

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
                <div class="testimonial-card container-col gap-16">
                    <div class="testimonial-stars container-row gap-0">
                        <img height="30" src="{{ asset('images/star-icon.svg') }}" alt="">
                        <img height="30" src="{{ asset('images/star-icon.svg') }}" alt="">
                        <img height="30" src="{{ asset('images/star-icon.svg') }}" alt="">
                        <img height="30" src="{{ asset('images/star-icon.svg') }}" alt="">
                        <img height="30" src="{{ asset('images/star-icon.svg') }}" alt="">
                    </div>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non pellentesque est. Cras vehicula non mi nec tristique.”</p>
                    <h4 class="h-semi">Adam N.</h4>
                </div>
            </div>
        </section>

    </main>

    <!-- ---- -->

    <!-- Footer -->

    @include('komponenty.sekcje.footer')

    <!-- ------ -->

    <!-- JavaScript -->

    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>

</body>
</html>