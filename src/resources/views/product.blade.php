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

        @if(session('success'))
            <div class="alert gen-padding" >
                <p>{{ session('success') }}</p>
                <div class="container-row gap-2 mt-2">
                    <a href="{{ url()->current() }}" class="secondary-button">Kontynuuj</a>
                    <a href="{{ route('zamowienie') }}" class="primary-button">Przejdź do zamówienia</a>
                </div>
            </div>
        @endif



        <section class="container-row" style="padding: 128px 0 64px 0;">
            <a href="{{ url('/') }}">Strona główna</a>
            <span>/</span>
            <a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a>
            <span>/</span>
            <a href="{{ route('subcategory.show', [$category->slug, $subcategory->slug]) }}">{{ $subcategory->name }}</a>
            <span>/</span>
            <span>{{ $product->name }}</span>

            <a href="{{ url()->previous() }}">Powrót</a>
        </section>

        <section class="container-row gen-padding width-100 flex-con-md-32 gap-32 wrap al-items-start">
            <div class="container-col al-items-start">
                <img class="width-100" src="" alt="Zdjęcie produktu">
            </div>
            <div class="container-col al-items-start gap-32 padding-32">
                <h2 class="h-semi">{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                

                <form class="container-col al-items-start" action="{{ route('dodaj.do.zamowienia') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="product_name" value="{{ $product->name }}">


                    @if ($product->variants->where('type', 'size')->isNotEmpty())
                        <h3 class="h-reg">Rozmiar</h3>
                        <div class="container-row">
                            @foreach ($product->variants->where('type', 'size') as $variant)
                                <div>
                                    <input type="radio" id="size_{{ $variant->id }}" name="size_variant_id" value="{{ $variant->id }}" required>
                                    <label for="size_{{ $variant->id }}"><p>{{ $variant->name }}</p></label>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <hr>

                    @if ($product->variants->where('type', 'color')->isNotEmpty())
                        <h3 class="h-reg">Kolor</h3>
                        <div class="container-row wrap jus-con-start">
                            @foreach ($product->variants->where('type', 'color') as $variant)
                                <div>
                                    <input type="radio" id="color_{{ $variant->id }}" name="color_variant_id" value="{{ $variant->id }}" required>
                                    <label for="color_{{ $variant->id }}"><p>{{ $variant->name }}</p></label>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    
                    <hr>

                    <button type="submit" class="primary-button">Dodaj do zamówienia</button>
                </form>
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