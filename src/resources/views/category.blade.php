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

        <section class="container-col gen-padding width-100 paralax" style="background-image: url('images/baseny-bg.png'); height: 50vh;">
            <h1 class="h-semi font-white"> {{$category->name}} </h1>
        </section>

        <section class="container-col gen-padding width-100 al-items-start ">
            <div class="dp-grid grid-categories-page width-100 al-items-start">
                <div class="container-col al-items-start">

                    <h2 class="h-reg">Kategorie</h2>

                    @foreach($category->subcategories as $subcategory)
                        <h3 class="h-reg" style="padding-left: 24px;"> {{ $subcategory->name }} </h3>

                    @endforeach
                </div>
                <div class="container-col al-items-start width-100 gap-64" >
                    @foreach($category->subcategories as $subcategory)

                        @foreach($subcategory->products as $product)

                        <div class="container-row product-card width-100">
                            <div class="container-col product-card-image">
                                
                            </div>
                            <div class="container-col al-items-start">
                                <h2 class="h-reg product-card-name">{{ $product->name }}</h2>
                                <p class="product-card-description">{{ $product->description }}</p>
                                <button class="primary-button">Dodaj do zamówienia</button>
                            </div>
                        </div>

                        @endforeach

                    @endforeach
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