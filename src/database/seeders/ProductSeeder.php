<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subcategory;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $szlachetna = Subcategory::where('slug', 'szlachetna')->first();
        $plytyWielkoformatowe = Subcategory::where('slug', 'plyty-wielkoformatowe')->first();
        $pebekCeramik = Subcategory::where('slug', 'pebek-ceramik')->first();
        $ogrodzenia = Subcategory::where('slug', 'ogrodzenia')->first();

        $baseny = Subcategory::where('slug', 'baseny')->first();
        $zadaszeniaBasenow = Subcategory::where('slug', 'zadaszenia-basenow')->first();
        $zadaszeniaTarasu = Subcategory::where('slug', 'zadaszenia-tarasow')->first();
        $basenyWolnostojace = Subcategory::where('slug', 'baseny-wolnostojace')->first();
        $wiatySamochodowe = Subcategory::where('slug', 'wiaty-samochodowe')->first();
        $dachTarasowy = Subcategory::where('slug', 'dach-tarasowy')->first();
        $osprzet = Subcategory::where('slug', 'osprzet')->first();


        Product::create([
            'name' => 'Tresso',
            'slug' => 'tresso',
            'description' => 'Prosta i ponadczasowa płyta doskonale nadaje się do tworzenia nietuzinkowych nawierzchni.',
            'image_path' => 'images/produkty/tresso.webp',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Nano',
            'slug' => 'nano',
            'description' => 'Kostka łączy w sobie funkcjonalność, doskonałą jakość i piękno. Idealnie sprawdzi się w nowoczesnych aranżacjach, w których liczy się prostota.',
            'image_path' => 'images/produkty/nano.webp',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Kostka Sudecka',
            'slug' => 'kostka-sudecka',
            'description' => 'Walory dekoracyjne idą w parze z doskonałą jakością i funkcjonalnością, które sprawdzą się w nowoczesnych, prostych aranżacjach.',
            'image_path' => 'images/produkty/kostka-sudecka.webp',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Palazzo',
            'slug' => 'Palazzo',
            'description' => 'Prostota kształtu i gładkość faktury sprawiają, że idealnie sprawdzi się do tworzenia stylowych, eleganckich nawierzchni. ',
            'image_path' => 'images/produkty/palazzo.webp',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Piccolino',
            'slug' => 'piccolino',
            'description' => 'Zestaw pięciu trapezów, których zróżnicowany kształt pozwala uzyskać nawet najbardziej skomplikowane wzory.',
            'image_path' => 'images/produkty/piccolino.webp',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Visio Kombiformat',
            'slug' => 'visio-kombiformat',
            'description' => 'Zestaw trzech kostek w różnych formatach, który pozwala tworzyć proste ale nietypowe nawierzchnie.',
            'image_path' => 'images/produkty/visio-kombiformat.webp',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Imperio',
            'slug' => 'imperio',
            'description' => 'Eleganckie i niepowtarzalne płyty tarasowe z pewnością sprawdzą się w nowoczesnych aranżacjach!',
            'image_path' => 'images/produkty/imperio.webp',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Bruk Świdnicki',
            'slug' => 'bruk-swidnicki',
            'description' => 'Nietuzinkowy, zaokrąglony kształt kostki sprawia, że kostka idealnie nadaje się do tworzenia wyjątkowych nawierzchni.',
            'image_path' => 'images/produkty/bruk-swidnicki.webp',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Eko-Krata',
            'slug' => 'eko-krata',
            'description' => 'Eko-krata jest doskonałą propozycją wszędzie tam, gdzie liczą się rozwiązania estetyczne i ekologiczne.',
            'image_path' => 'images/produkty/eko-krata.webp',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Kostka Favo',
            'slug' => 'kostka-favo',
            'description' => 'Niezwykły kształt sprawia, że jest kostka jest niezwykle popularna zarówno w aranżacjach przestrzeni publicznej jak i domowej!',
            'image_path' => 'images/produkty/kostka-favo.webp',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Kostka Trylinka',
            'slug' => 'kostka-trylinka',
            'description' => 'Doskonała dla osób szukających trwałych, prostych rozwiązań, które doskonale sprawdzą się przez wiele lat!',
            'image_path' => 'images/produkty/kostka-trylinka.webp',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Kostka Wodoprzepuszczalna',
            'slug' => 'kostka-wodoprzepuszczalna',
            'description' => 'Produkt dla osób, które chcą działać proekologicznie, ale szukają produktów, które pozwolą osiągnąć klasyczny wygląd przestrzeni.',
            'image_path' => 'images/produkty/kostka-wodoprzepuszczalna.webp',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Tetris 10x10',
            'slug' => 'tetris-10x10',
            'description' => 'Charakteryzuje ją prosty, klasyczny kształt i bogata kolorystyka, dzięki czemu doskonale wpasuje się w różne gusta.',
            'image_path' => 'images/produkty/tetris-10x10.webp',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Tetris 10x20',
            'slug' => 'tetris-10x20',
            'description' => 'Charakteryzuje ją prosty, klasyczny kształt i bogata kolorystyka, dzięki czemu doskonale wpasuje się w różne gusta.',
            'image_path' => 'images/produkty/tetris-10x20.webp',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Tetris 20x20',
            'slug' => 'tetris-20x20',
            'description' => 'Doskonała dla klientów, którzy chcą połączyć klasyczną formę z nietypową nawierzchnią i kolorystyką!',
            'image_path' => 'images/produkty/tetris-20x20.webp',
            'subcategory_id' => $szlachetna->id,
        ]);



        Product::create([
            'name' => 'Płyta 100x33',
            'slug' => 'plyta-100x33',
            'description' => 'Idealne rozwiązanie dla osób ceniących sobie prostotę i nowoczesny wygląd.',
            'image_path' => 'images/produkty/plyta-100x33.webp',
            'subcategory_id' => $plytyWielkoformatowe->id,
        ]);
        Product::create([
            'name' => 'Płyta 120x60',
            'slug' => 'plyta-120x60',
            'description' => 'Duży format i efektowne wykończenie sprawiają, że to idealne rozwiązanie do dużych, efektownych przestrzeni!',
            'image_path' => 'images/produkty/plyta-120x60.webp',
            'subcategory_id' => $plytyWielkoformatowe->id,
        ]);
        Product::create([
            'name' => 'Płyta 35x35',
            'slug' => 'plyta-35x35',
            'description' => 'Łączy w sobie prostotę i funkcjonalność co sprawia, że idealnie nadaje się do aranżacji domowych przestrzeni!',
            'image_path' => 'images/produkty/plyta-35x35.webp',
            'subcategory_id' => $plytyWielkoformatowe->id,
        ]);
        Product::create([
            'name' => 'Płyta 50x50',
            'slug' => 'plyta-50x50',
            'description' => 'Doskonała do tworzenia przestrzeni nawierzchni, które mają być proste i pozbawione dodatkowych ozdobników.',
            'image_path' => 'images/produkty/plyta-50x50.webp',
            'subcategory_id' => $plytyWielkoformatowe->id,
        ]);
        Product::create([
            'name' => 'Płyta 60x60',
            'slug' => 'plyta-60x60',
            'description' => 'Doskonałe rozwiązanie dla osób szukających trwałych, prostych ale niebanalnych rozwiązań!',
            'image_path' => 'images/produkty/plyta-60x60.webp',
            'subcategory_id' => $plytyWielkoformatowe->id,
        ]);
        Product::create([
            'name' => 'Płyta 67x33',
            'slug' => 'plyta-67x33',
            'description' => 'Doskonałe rozwiązanie przy tworzeniu prostych, surowych aranżacji.',
            'image_path' => 'images/produkty/plyta-67x33.webp',
            'subcategory_id' => $plytyWielkoformatowe->id,
        ]);
        Product::create([
            'name' => 'Płyta 80x80',
            'slug' => 'plyta-80x80',
            'description' => 'Doskonała do tworzenia przestrzeni, które mają cechować się prostotą i funkcjonalnością bez dodatkowych ozdób.',
            'image_path' => 'images/produkty/plyta-80x80.webp',
            'subcategory_id' => $plytyWielkoformatowe->id,
        ]);
        Product::create([
            'name' => 'Płyta Tetris 80x20',
            'slug' => 'plyta-tetris-80x20',
            'description' => 'Klasyczny kształt i nietypowy format idealnie wpisują się w modernistyczne trendy.',
            'image_path' => 'images/produkty/plyta-tetris-80x20.webp',
            'subcategory_id' => $plytyWielkoformatowe->id,
        ]);
        Product::create([
            'name' => 'Rubio',
            'slug' => 'rubio',
            'description' => 'Nietypowy kształt i klasyczne wykończenie sprawiają, że jest to produkt bardzo uniwersalny!',
            'image_path' => 'images/produkty/rubio.webp',
            'subcategory_id' => $plytyWielkoformatowe->id,
        ]);
        



        Product::create([
            'name' => 'Płyta ceramiczna 40x120',
            'slug' => 'plyta-ceramiczna-40x120',
            'description' => 'Elegancka i niepowtarzalna płyta, która idealnie dopełni stylowy i nowoczesny projekt',
            'image_path' => 'images/produkty/plyta-ceramiczna-40x120.webp',
            'subcategory_id' => $pebekCeramik->id,
        ]);
        Product::create([
            'name' => 'Płyta ceramiczna 45x90',
            'slug' => 'plyta-ceramiczna-45x90',
            'description' => 'Łączy w sobie prostotę i funkcjonalność co sprawia, że idealnie nadaje się do aranżacji domowych przestrzeni!',
            'image_path' => 'images/produkty/plyta-ceramiczna-45x90.webp',
            'subcategory_id' => $pebekCeramik->id,
        ]);
        Product::create([
            'name' => 'Płyta ceramiczna 50x100',
            'slug' => 'plyta-ceramiczna-50x100',
            'description' => 'Duży format to idealne rozwiązanie do dużych, efektownych przestrzeni!',
            'image_path' => 'images/produkty/plyta-ceramiczna-50x100.webp',
            'subcategory_id' => $pebekCeramik->id,
        ]);
        Product::create([
            'name' => 'Płyta ceramiczna 60x120',
            'slug' => 'plyta-ceramiczna-60x120',
            'description' => 'Elegancka i niepowtarzalna. Nietypowe zestawienia kolorystyczne sprawiają, że płyta idealnie dopełni stylowy i nowoczesny projekt!',
            'image_path' => 'images/produkty/plyta-ceramiczna-60x120.webp',
            'subcategory_id' => $pebekCeramik->id,
        ]);
        Product::create([
            'name' => 'Płyta ceramiczna 60x60',
            'slug' => 'plyta-ceramiczna-60x60',
            'description' => 'Łączy w sobie prostotę i funkcjonalność co sprawia, że idealnie nadaje się do aranżacji domowych przestrzeni!',
            'image_path' => 'images/produkty/plyta-ceramiczna-60x60.webp',
            'subcategory_id' => $pebekCeramik->id,
        ]);
        Product::create([
            'name' => 'Płyta ceramiczna 80x80',
            'slug' => 'plyta-ceramiczna-80x80',
            'description' => 'Duży format idealnie sprawdzi się na nawierzchnie miejskich placów, chodników czy przy nowoczesnych budynkach!',
            'image_path' => 'images/produkty/plyta-ceramiczna-80x80.webp',
            'subcategory_id' => $pebekCeramik->id,
        ]);



        Product::create([
            'name' => 'Murek Valla',
            'slug' => 'murek-valla',
            'description' => 'Doskonale sprawdzi się jako funkcjonalny i elegancki element ogrodów oraz miejskich przestrzeni.',
            'image_path' => 'images/produkty/murek-valla.webp',
            'subcategory_id' => $ogrodzenia->id,
        ]);
        Product::create([
            'name' => 'Ścianka Ażurowa',
            'slug' => 'scianka-azurowa',
            'description' => 'Unikalny kształt oraz forma pozwalają na tworzenie eleganckich przesłon zarówno wewnątrz jak i zewnątrz budynku.',
            'image_path' => 'images/produkty/scianka-azurowa.webp',
            'subcategory_id' => $ogrodzenia->id,
        ]);
        Product::create([
            'name' => 'Ścianka Palisadowa GRC 100x40x8',
            'slug' => 'scianka-palisadowa-grc-100x40x8',
            'description' => 'Doskonale sprawdzi się przy tworzeniu donic, kształtowaniu linii brzegowych schodów, ścieżek i tarasów.',
            'image_path' => 'images/produkty/scianka-palisadowa-grc-100x40x8.webp',
            'subcategory_id' => $ogrodzenia->id,
        ]);
        Product::create([
            'name' => 'Ścianka Palisadowa GRC 60x40x8',
            'slug' => 'scianka-palisadowa-grc-60x40x8',
            'description' => 'Doskonale sprawdzi się przy tworzeniu donic, kształtowaniu linii brzegowych schodów, ścieżek i tarasów.',
            'image_path' => 'images/produkty/scianka-palisadowa-grc-60x40x8.webp',
            'subcategory_id' => $ogrodzenia->id,
        ]);



        Product::create([
            'name' => 'Basen "Portugal',
            'slug' => 'basen-portugal',
            'description' => '',
            'image_path' => 'images/produkty/basen-portugal.png',
            'subcategory_id' => $baseny->id,
        ]);
        Product::create([
            'name' => 'Basen "Eclipse',
            'slug' => 'basen-eclipse',
            'description' => '',
            'image_path' => 'images/produkty/basen-eclipse.png',
            'subcategory_id' => $baseny->id,
        ]);
        Product::create([
            'name' => 'Basen "Italien',
            'slug' => 'basen-italien',
            'description' => '',
            'image_path' => 'images/produkty/basen-italien.png',
            'subcategory_id' => $baseny->id,
        ]);
        Product::create([
            'name' => 'Basen "Nightfall',
            'slug' => 'basen-nightfall',
            'description' => '',
            'image_path' => 'images/produkty/basen-nightfall.png',
            'subcategory_id' => $baseny->id,
        ]);
        Product::create([
            'name' => 'Basen "Spain',
            'slug' => 'basen-spain',
            'description' => '',
            'image_path' => 'images/produkty/basen-spain.png',
            'subcategory_id' => $baseny->id,
        ]);
        Product::create([
            'name' => 'Basen "Sunrise',
            'slug' => 'basen-sunrise',
            'description' => '',
            'image_path' => 'images/produkty/basen-sunrise.png',
            'subcategory_id' => $baseny->id,
        ]);
        Product::create([
            'name' => 'Basen "Twilight',
            'slug' => 'basen-twilight',
            'description' => '',
            'image_path' => 'images/produkty/basen-twilight.png',
            'subcategory_id' => $baseny->id,
        ]);
        Product::create([
            'name' => 'Basen "Aurora',
            'slug' => 'basen-aurora',
            'description' => '',
            'image_path' => 'images/produkty/basen-aurora.png',
            'subcategory_id' => $baseny->id,
        ]);
        Product::create([
            'name' => 'Basen "Australia',
            'slug' => 'basen-australia',
            'description' => '',
            'image_path' => 'images/produkty/basen-australia.png',
            'subcategory_id' => $baseny->id,
        ]);
        Product::create([
            'name' => 'Basen "Cuba',
            'slug' => 'basen-cuba',
            'description' => '',
            'image_path' => 'images/produkty/basen-cuba.png',
            'subcategory_id' => $baseny->id,
        ]);
        Product::create([
            'name' => 'Basen "Midnight',
            'slug' => 'basen-midnight',
            'description' => '',
            'image_path' => 'images/produkty/basen-midnight.png',
            'subcategory_id' => $baseny->id,
        ]);
        Product::create([
            'name' => 'Basen "Orion',
            'slug' => 'basen-orion',
            'description' => '',
            'image_path' => 'images/produkty/basen-orion.png',
            'subcategory_id' => $baseny->id,
        ]);
        Product::create([
            'name' => 'Basen "Phoebus',
            'slug' => 'basen-phoebus',
            'description' => '',
            'image_path' => 'images/produkty/basen-phoebus.png',
            'subcategory_id' => $baseny->id,
        ]);

        

        // === Tworzenie produktów ===

        Product::create([
            'name' => 'Zadaszenie "Eco Classic"',
            'slug' => 'zadaszenie-eco-classic',
            'description' => 'Klasyczne zadaszenie basenowe z wariantami wielkościowymi.',
            'subcategory_id' => $zadaszeniaBasenow->id,
            'image_path' => 'images/produkty/zadaszenie-eco-classic.jpg',
        ]);

        Product::create([
            'name' => 'Zadaszenie "Eco Standard"',
            'slug' => 'zadaszenie-eco-standard',
            'description' => 'Zadaszenie basenowe o standardowej wysokości, z wariantami wielkościowymi.',
            'subcategory_id' => $zadaszeniaBasenow->id,
            'image_path' => 'images/produkty/zadaszenie-eco-standard.png',
        ]);

        Product::create([
            'name' => 'Zadaszenie "Prestige"',
            'slug' => 'zadaszenie-prestige',
            'description' => 'Niskie zadaszenie basenowe o eleganckim wyglądzie.',
            'subcategory_id' => $zadaszeniaBasenow->id,
            'image_path' => 'images/produkty/zadaszenie-prestige.jpg',
        ]);

         Product::create([
            'name' => 'Zadaszenie "Prestige 90"',
            'slug' => 'zadaszenie-prestige-90',
            'description' => 'Zadaszenie o kącie 90 stopni, oferujące większą przestrzeń nad basenem.',
            'subcategory_id' => $zadaszeniaBasenow->id,
            'image_path' => 'images/produkty/zadaszenie-prestige-90.png',
        ]);

        Product::create([
            'name' => 'Zadaszenie "Prestige 90 M"',
            'slug' => 'zadaszenie-prestige-90-m',
            'description' => 'Minimalistyczne zadaszenie o kącie 90 stopni, idealne do małych przestrzeni.',
            'subcategory_id' => $zadaszeniaBasenow->id,
            'image_path' => 'images/produkty/zadaszenie-prestige-90-m.jpg',
        ]);

        Product::create([
            'name' => 'Zadaszenie "Prestige PLUS"',
            'slug' => 'zadaszenie-prestige-plus',
            'description' => 'Wysokie zadaszenie basenowe, które umożliwia swobodne poruszanie się.',
            'subcategory_id' => $zadaszeniaBasenow->id,
            'image_path' => 'images/produkty/zadaszenie-prestige-plus.png',
        ]);

        Product::create([
            'name' => 'Zadaszenie "Prestige MAX"',
            'slug' => 'zadaszenie-prestige-max',
            'description' => 'Największe zadaszenie basenowe z serii Prestige.',
            'subcategory_id' => $zadaszeniaBasenow->id,
            'image_path' => 'images/produkty/zadaszenie-prestige-max.jpg',
        ]);

        Product::create([
            'name' => 'Zadaszenie "Elegance"',
            'slug' => 'zadaszenie-elegance',
            'description' => 'Zadaszenie o eleganckim, nowoczesnym wyglądzie.',
            'subcategory_id' => $zadaszeniaBasenow->id,
            'image_path' => 'images/produkty/zadaszenie-elegance.png',
        ]);

        Product::create([
            'name' => 'Zadaszenie Basenu Tarasowe',
            'slug' => 'zadaszenie-basenu-tarasowe',
            'description' => 'Zadaszenie zaprojektowane specjalnie dla tarasów, oferujące ochronę i styl.',
            'subcategory_id' => $zadaszeniaTarasu->id,
            'image_path' => 'images/produkty/zadaszenie-basenu-tarasowe.webp',
        ]);

        Product::create([
            'name' => 'Zadaszenie Baseny Tarasowe Max',
            'slug' => 'zadaszenie-basenu-tarasowe-max',
            'description' => 'Większy model zadaszenia tarasowego, oferujący maksymalną przestrzeń.',
            'subcategory_id' => $zadaszeniaTarasu->id,
            'image_path' => 'images/produkty/zadaszenie-basenu-tarasowe-max.webp',
        ]);

        Product::create([
            'name' => 'Basen Wolnostojący Nightfall',
            'slug' => 'basen-wolnostojacy-nightfall',
            'description' => 'Nowoczesny basen wolnostojący o eleganckim designie.',
            'subcategory_id' => $basenyWolnostojace->id,
            'image_path' => 'images/produkty/basen-wolnostojacy-nightfall.webp',
        ]);

        Product::create([
            'name' => 'Basen Wolnostojący Sunrise',
            'slug' => 'basen-wolnostojacy-sunrise',
            'description' => 'Basen wolnostojący zaprojektowany z myślą o relaksie i wygodzie.',
            'subcategory_id' => $basenyWolnostojace->id,
            'image_path' => 'images/produkty/basen-wolnostojacy-sunrise.webp',
        ]);

        Product::create([
            'name' => 'Carharbour',
            'slug' => 'carharbour',
            'description' => 'Elegancka wiata samochodowa o nowoczesnym designie.',
            'subcategory_id' => $wiatySamochodowe->id,
            'image_path' => 'images/produkty/carharbour.png',
        ]);

        Product::create([
            'name' => 'Carharbour Plus',
            'slug' => 'carharbour-plus',
            'description' => 'Powiększony model wiaty Carharbour, oferujący więcej miejsca.',
            'subcategory_id' => $wiatySamochodowe->id,
            'image_path' => 'images/produkty/carharbour-plus.png',
        ]);

        Product::create([
            'name' => 'CarPort Mini',
            'slug' => 'carport-mini',
            'description' => 'Kompaktowa wiata samochodowa, idealna do małych przestrzeni.',
            'subcategory_id' => $wiatySamochodowe->id,
            'image_path' => 'images/produkty/carport-mini.jpg',
        ]);

        Product::create([
            'name' => 'CarPort Mini Plus',
            'slug' => 'carport-mini-plus',
            'description' => 'Większy wariant wiaty CarPort Mini.',
            'subcategory_id' => $wiatySamochodowe->id,
            'image_path' => 'images/produkty/carport-mini-plus.jpg',
        ]);

        Product::create([
            'name' => 'CarPort Rear',
            'slug' => 'carport-rear',
            'description' => 'Wiata samochodowa przeznaczona do montażu z tyłu posesji.',
            'subcategory_id' => $wiatySamochodowe->id,
            'image_path' => 'images/produkty/carport-rear.png',
        ]);

        Product::create([
            'name' => 'CarPort Rear Plus',
            'slug' => 'carport-rear-plus',
            'description' => 'Powiększony model wiaty CarPort Rear.',
            'subcategory_id' => $wiatySamochodowe->id,
            'image_path' => 'images/produkty/carport-rear-plus.png',
        ]);
        
        Product::create([
            'name' => 'Dach tarasowy',
            'slug' => 'dach-tarasowy',
            'description' => 'Elegancki dach tarasowy, chroniący przed słońcem i deszczem.',
            'subcategory_id' => $dachTarasowy->id,
            'image_path' => 'images/produkty/dach-tarasowy.webp',
        ]);

    }
}
