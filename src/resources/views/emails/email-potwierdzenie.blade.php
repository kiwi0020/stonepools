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

        <link rel="icon" href=" {{ asset('favicon.webp') }}" type="image/x-icon">
    
        <!-- Canonical / Alternate -->

        <link rel="canonical" href="">
        <link rel="alternate" hreflang="en" href="">

        <!-- Animate.css -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        
        <!-- JQuery -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    </head>
    <body>

        <section class="container-col width-100 gen-padding al-items-start gap-32">
            <div class="container-col al-items-start gap-32 width-100 padding-32 black-border-2 border-rds-32" >
                <h2 class="h-semi">Potwierdzenie zamówienia</h2>
                <div class="container-col gap-8 al-items-start">
                    <p><strong>Imię i nazwisko:</strong>  {{ $order->first_name }} {{ $order->last_name }}</p>
                    <p><strong>Telefon:</strong> {{ $order->phone }}</p>
                    <p><strong>Email:</strong> {{ $order->email }}</p>
                    <p><strong>Wiadomość: </strong>{{ $order->wiadomosc }}</p>
                </div>

                <h3 class="h-semi">Produkty:</h3>
                <ul>
                    @foreach($items as $item)
                        <li class="container-col al-items-start gap-24 black-border-2 padding-32 border-rds-16">
                            <h4 class="h-semi"><strong>{{ $item['product_name'] }}</strong></h4>
                            <div class="container-col gap-0 al-items-start" style="padding-left: 24px;">
                                <p><strong>Rozmiar:</strong>  {{ $item['size'] }}</p>
                                <p><strong>Kolor:</strong> {{ $item['color'] }}</p>
                                <p><strong>Opis:</strong>  {{ $item['description'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

        </section>

    </body>
</html>