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
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Nano',
            'slug' => 'nano',
            'description' => 'Kostka łączy w sobie funkcjonalność, doskonałą jakość i piękno. Idealnie sprawdzi się w nowoczesnych aranżacjach, w których liczy się prostota.',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Kostka Sudecka',
            'slug' => 'kostka-sudecka',
            'description' => 'Walory dekoracyjne idą w parze z doskonałą jakością i funkcjonalnością, które sprawdzą się w nowoczesnych, prostych aranżacjach.',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Palazzo',
            'slug' => 'Palazzo',
            'description' => 'Prostota kształtu i gładkość faktury sprawiają, że idealnie sprawdzi się do tworzenia stylowych, eleganckich nawierzchni. ',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Piccolino',
            'slug' => 'piccolino',
            'description' => 'Zestaw pięciu trapezów, których zróżnicowany kształt pozwala uzyskać nawet najbardziej skomplikowane wzory.',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Visio Kombiformat',
            'slug' => 'visio-kombiformat',
            'description' => 'Zestaw trzech kostek w różnych formatach, który pozwala tworzyć proste ale nietypowe nawierzchnie.',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Imperio',
            'slug' => 'imperio',
            'description' => 'Eleganckie i niepowtarzalne płyty tarasowe z pewnością sprawdzą się w nowoczesnych aranżacjach!',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Druk Świdnicki',
            'slug' => 'druk-swidnicki',
            'description' => 'Nietuzinkowy, zaokrąglony kształt kostki sprawia, że kostka idealnie nadaje się do tworzenia wyjątkowych nawierzchni.',
            'subcategory_id' => $szlachetna->id,
        ]);
        Product::create([
            'name' => 'Eko-Krata',
            'slug' => 'eko-krata',
            'description' => 'Eko-krata jest doskonałą propozycją wszędzie tam, gdzie liczą się rozwiązania estetyczne i ekologiczne.',
            'subcategory_id' => $szlachetna->id,
        ]);



        Product::create([
            'name' => 'Basen "Portugal',
            'slug' => 'basen-portugal',
            'description' => '',
            'subcategory_id' => $baseny->id,
        ]);

    }
}
