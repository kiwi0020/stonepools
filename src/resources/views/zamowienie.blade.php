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

    <main id="home-page" style="padding-top: 100px;">

        @if(session('success'))
            <div class="alert gen-padding container-col gap-32 bg-black5">
                <p><strong>{{ session('success') }}</strong></p>
            </div>
        @endif

        <section class="container-col gen-padding width-100 al-items-start">
            <h2 class="h-reg">Zapytanie produktowe</h2>

            <form action="{{ route('zamowienie.finalizuj') }}" method="POST" class="container-row al-items-start width-100 zapytanie-produktowe gap-64 flex-con-md-64 wrap">

                @csrf
                <div class="container-col gap-24 al-items-start">
                    <div class="container-col al-items-start gap-8 width-100">
                        <label for="imie">Imię</label>
                        <input type="text" name="first_name" id="imie" placeholder="Imię" require>
                    </div>
                    <div class="container-col al-items-start gap-8 width-100">
                        <label for="nazwisko">Nazwisko</label>
                        <input type="text" name="last_name" id="nazwisko" placeholder="Nazwisko" require>
                    </div>
                    <div class="container-col al-items-start gap-8 width-100">
                        <label for="email">Adres e-mail</label>
                        <input type="email" name="email" id="email" placeholder="Adres e-mail" require>
                    </div>
                    <div class="container-col al-items-start gap-8 width-100">
                        <label for="tel">Telefon</label>
                        <input type="tel" name="phone" id="tel" placeholder="nr.tel" require>
                    </div>
                    <div class="container-col al-items-start gap-8 width-100">
                        <label for="wiadomosc">Wiadomość</label>
                        <textarea name="wiadomosc" id="wiadomosc"></textarea>
                    </div>
                </div>

                 <div class="container-col al-items-start gap-64">
                    @if(count($order))
                        @foreach($order as $index => $item)
                            <div class="container-row width-100 gap-32 jus-con-start">
                                <div>
                                    <img src="{{ $item['image_path'] }}" alt="">
                                </div>
                                <div class="container-col al-items-start">
                                    <h3 class="h-reg">{{ $item['product_name'] }}</h3>
                                    <p>Rozmiar: {{ $item['size'] ?? brak }} </p>
                                    <p>Kolor: {{ $item['color'] ?? brak }}</p>

                                    <input type="hidden" name="products[{{ $index }}][product_id]" value="{{ $item['product_id'] }}">
                                    <input type="hidden" name="products[{{ $index }}][product_name]" value="{{ $item['product_name'] }}">
                                    <input type="hidden" name="products[{{ $index }}][size]" value="{{ $item['size'] }}">
                                    <input type="hidden" name="products[{{ $index }}][color]" value="{{ $item['color'] }}">
                                    <input type="hidden" name="products[{{ $index }}][description]" value="{{ $item['description'] ?? '' }}">
                                </div>
                                <div>
                                    <a href=" {{ route('zamowienie.usun', $index) }} " >
                                        <img width="25" src=" {{ asset('images/trash.svg') }} " alt="">
                                    </a>
                                </div>
                            </div>

                        @endforeach
                    @else
                        <p>Brak produktów w zamówieniu.</p>
                    @endif


                    <div class="container-row">
                        <button class="primary-button" type="submit">Zapytaj o produkty</button>
                        <button class="secondary-button">Kompletuj dalej</button>
                    </div>
                 </div>

            </form>

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