<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tresso = Product::where('slug', 'tresso')->first();
        $nano = Product::where('slug', 'nano')->first();
        $kostkaSudecka = Product::where('slug', 'kostka-sudecka')->first();
        $palazzo = Product::where('slug', 'palazzo')->first();
        $piccolino = Product::where('slug', 'piccolino')->first();
        $visioKombiformat = Product::where('slug', 'visio-kombiformat')->first();
        $imperio = Product::where('slug', 'imperio')->first();
        $brukSwidnicki = Product::where('slug', 'bruk-swidnicki')->first();
        $ekoKrata = Product::where('slug', 'eko-krata')->first();

        $basenPortugal = Product::where('slug', 'basen-portugal')->first();
        $basenEclipse = Product::where('slug', 'basen-eclipse')->first();
        $basenItalien = Product::where('slug', 'basen-italien')->first();
        $basenNightfall = Product::where('slug', 'basen-nightfall')->first();
        $basenSpain = Product::where('slug', 'basen-spain')->first();
        $basenSunrise = Product::where('slug', 'basen-sunrise')->first();
        $basenTwilight = Product::where('slug', 'basen-twilight')->first();
        $basenAurora = Product::where('slug', 'basen-aurora')->first();
        $basenAustralia = Product::where('slug', 'basen-australia')->first();
        $basenCuba = Product::where('slug', 'basen-cuba')->first();
        $basenMidnight = Product::where('slug', 'basen-midnight')->first();
        $basenOrion = Product::where('slug', 'basen-orion')->first();
        $basenPhoebus = Product::where('slug', 'basen-phoebus')->first();

        // Tresso

        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => '18,00 x 27,0 cm',
            'type' => 'size',
            'value' => '18,00 x 27,0 cm',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => '18,0 x 36,0 cm',
            'type' => 'size',
            'value' => '18,0 x 36,0 cm',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => '18,0 x 45,0 cm',
            'type' => 'size',
            'value' => '18,0 x 45,0 cm',
        ]);

        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Biały/śrutowanie',
            'type' => 'color',
            'value' => 'Biały/śrutowanie',
            'image_path' => 'images/produkty/biel-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Szary/śrutowanie',
            'type' => 'color',
            'value' => 'Szary/śrutowanie',
            'image_path' => 'images/produkty/szary-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Antracyt/śrutowanie',
            'type' => 'color',
            'value' => 'Antracyt/śrutowanie',
            'image_path' => 'images/produkty/antracyt-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Zimny popiel/śrutowanie',
            'type' => 'color',
            'value' => 'Zimny popiel/śrutowanie',
            'image_path' => 'images/produkty/zimny-popiel-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Biały/monocolor',
            'type' => 'color',
            'value' => 'Biały/monocolor',
            'image_path' => 'images/produkty/biel-mono.webp',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Szary/monocolor',
            'type' => 'color',
            'value' => 'Szary/monocolor',
            'image_path' => 'images/produkty/szary-mono.webp',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Antracyt/monocolor',
            'type' => 'color',
            'value' => 'Antracyt/monocolor',
            'image_path' => 'images/produkty/monocolor-antracyt.webp',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Ciepły popiel/color-mix',
            'type' => 'color',
            'value' => 'Ciepły popiel/color-mix',
            'image_path' => 'images/produkty/color-mix-cieply-popiel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Szara umbra/color-mix',
            'type' => 'color',
            'value' => 'Szara umbra/color-mix',
            'image_path' => 'images/produkty/color-mix-szara-umbra.webp',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Zimny popiel/color-mix',
            'type' => 'color',
            'value' => 'Zimny popiel/color-mix',
            'image_path' => 'images/produkty/color-mix-zimny-popiel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Coffee mocha / color-mix / antic',
            'type' => 'color',
            'value' => 'Coffee mocha / color-mix / antic',
            'image_path' => 'images/produkty/color-mix-coffee-mocha.webp',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Tycjan/color mix',
            'type' => 'color',
            'value' => 'Tycjan/color mix',
            'image_path' => 'images/produkty/color-mix-tycjan.webp',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Labrador beż / color-mix',
            'type' => 'color',
            'value' => 'Labrador beż / color-mix',
            'image_path' => 'images/produkty/color-mix-labrador-bez.webp',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Słony karmel / color-mix',
            'type' => 'color',
            'value' => 'Słony karmel / color-mix',
            'image_path' => 'images/produkty/color-mix-slony-karmel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Zachód słońca / color-mix',
            'type' => 'color',
            'value' => 'Zachód słońca / color-mix',
            'image_path' => 'images/produkty/color-mix-zachod-slonca.webp',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Złota aleja / color-mix',
            'type' => 'color',
            'value' => 'Złota aleja / color-mix',
            'image_path' => 'images/produkty/color-mix-zlota-aleja.webp',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Ciepły popiel / śrutowanie',
            'type' => 'color',
            'value' => 'Ciepły popiel / śrutowanie',
            'image_path' => 'images/produkty/cieply-popiel-srutowanie.webp',
        ]);

        // ------------------------------

        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => '10,4 x 14 cm',
            'type' => 'size',
            'value' => '10,4 x 14 cm',
        ]);
        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => '13,9 x 14 cm',
            'type' => 'size',
            'value' => '13,9 x 14 cm',
        ]);
        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => '15,6 x 14 cm',
            'type' => 'size',
            'value' => '15,6 x 14 cm',
        ]);
        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => '17,4 x 14 cm',
            'type' => 'size',
            'value' => '17,4 x 14 cm',
        ]);
         ProductVariant::create([
            'product_id' => $nano->id,
            'name' => '19,1 x 14 cm',
            'type' => 'size',
            'value' => '19,1 x 14 cm',
        ]);
         ProductVariant::create([
            'product_id' => $nano->id,
            'name' => '20,9 x 14 cm',
            'type' => 'size',
            'value' => '20,9 x 14 cm',
        ]);
         ProductVariant::create([
            'product_id' => $nano->id,
            'name' => '21,6 x 14 cm',
            'type' => 'size',
            'value' => '21,6 x 14 cm',
        ]);

        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => 'Biały/śrutowanie',
            'type' => 'color',
            'value' => 'Biały/śrutowanie',
            'image_path' => 'images/produkty/biel-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => 'Szary/śrutowanie',
            'type' => 'color',
            'value' => 'Szary/śrutowanie',
            'image_path' => 'images/produkty/szary-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => 'Antracyt/śrutowanie',
            'type' => 'color',
            'value' => 'Antracyt/śrutowanie',
            'image_path' => 'images/produkty/antracyt-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => 'Biały/monocolor',
            'type' => 'color',
            'value' => 'Biały/monocolor',
            'image_path' => 'images/produkty/biel-mono.webp',
        ]);
        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => 'Szary/monocolor',
            'type' => 'color',
            'value' => 'Szary/monocolor',
            'image_path' => 'images/produkty/szary-mono.webp',
        ]);
        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => 'Antracyt/monocolor',
            'type' => 'color',
            'value' => 'Antracyt/monocolor',
            'image_path' => 'images/produkty/monocolor-antracyt.webp',
        ]);
        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => 'Ciepły popiel/color-mix',
            'type' => 'color',
            'value' => 'Ciepły popiel/color-mix',
            'image_path' => 'images/produkty/color-mix-cieply-popiel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => 'Szara umbra/color-mix',
            'type' => 'color',
            'value' => 'Szara umbra/color-mix',
            'image_path' => 'images/produkty/color-mix-szara-umbra.webp',
        ]);
        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => 'Zimny popiel/color-mix',
            'type' => 'color',
            'value' => 'Zimny popiel/color-mix',
            'image_path' => 'images/produkty/color-mix-zimny-popiel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => 'Coffee mocha / color-mix / antic',
            'type' => 'color',
            'value' => 'Coffee mocha / color-mix / antic',
            'image_path' => 'images/produkty/color-mix-coffee-mocha.webp',
        ]);
        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => 'Tycjan/color mix',
            'type' => 'color',
            'value' => 'Tycjan/color mix',
            'image_path' => 'images/produkty/color-mix-tycjan.webp',
        ]);
        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => 'Labrador beż / color-mix',
            'type' => 'color',
            'value' => 'Labrador beż / color-mix',
            'image_path' => 'images/produkty/color-mix-labrador-bez.webp',
        ]);
        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => 'Słony karmel / color-mix',
            'type' => 'color',
            'value' => 'Słony karmel / color-mix',
            'image_path' => 'images/produkty/color-mix-slony-karmel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => 'Zachód słońca / color-mix',
            'type' => 'color',
            'value' => 'Zachód słońca / color-mix',
            'image_path' => 'images/produkty/color-mix-zachod-slonca.webp',
        ]);
        ProductVariant::create([
            'product_id' => $nano->id,
            'name' => 'Złota aleja / color-mix',
            'type' => 'color',
            'value' => 'Złota aleja / color-mix',
            'image_path' => 'images/produkty/color-mix-zlota-aleja.webp',
        ]);

        // --------------------------------

        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => '10,5 x 14 cm',
            'type' => 'size',
            'value' => '10,5 x 14 cm',
        ]);
        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => '12,2 x 14 cm',
            'type' => 'size',
            'value' => '12,2 x 14 cm',
        ]);
        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => '14,0 x 14 cm',
            'type' => 'size',
            'value' => '14,0 x 14 cm',
        ]);
        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => '15,75 x 14 cm',
            'type' => 'size',
            'value' => '15,75 x 14 cm',
        ]);
         ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => '17,5 x 14 cm',
            'type' => 'size',
            'value' => '17,5 x 14 cm',
        ]);
         ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => '19,25 x 14 cm',
            'type' => 'size',
            'value' => '19,25 x 14 cm',
        ]);
         ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => '21,0 x 14 cm',
            'type' => 'size',
            'value' => '21,0 x 14 cm',
        ]);

        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => 'Biały/śrutowanie',
            'type' => 'color',
            'value' => 'Biały/śrutowanie',
            'image_path' => 'images/produkty/biel-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => 'Szary/śrutowanie',
            'type' => 'color',
            'value' => 'Szary/śrutowanie',
            'image_path' => 'images/produkty/szary-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => 'Antracyt/śrutowanie',
            'type' => 'color',
            'value' => 'Antracyt/śrutowanie',
            'image_path' => 'images/produkty/antracyt-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => 'Ciepły popiel / color-mix',
            'type' => 'color',
            'value' => 'Ciepły popiel / color-mix',
            'image_path' => 'images/produkty/color-mix-cieply-popiel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => 'Szara umbra/color-mix',
            'type' => 'color',
            'value' => 'Szara umbra/color-mix',
            'image_path' => 'images/produkty/color-mix-szara-umbra.webp',
        ]);
        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => 'Zimny popiel/color-mix',
            'type' => 'color',
            'value' => 'Zimny popiel/color-mix',
            'image_path' => 'images/produkty/color-mix-zimny-popiel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => 'Coffee mocha / color-mix / antic',
            'type' => 'color',
            'value' => 'Coffee mocha / color-mix / antic',
            'image_path' => 'images/produkty/color-mix-coffee-mocha.webp',
        ]);
        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => 'Tycjan/color mix',
            'type' => 'color',
            'value' => 'Tycjan/color mix',
            'image_path' => 'images/produkty/color-mix-tycjan.webp',
        ]);
        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => 'Labrador beż / color-mix',
            'type' => 'color',
            'value' => 'Labrador beż / color-mix',
            'image_path' => 'images/produkty/color-mix-labrador-bez.webp',
        ]);
        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => 'Słony karmel / color-mix',
            'type' => 'color',
            'value' => 'Słony karmel / color-mix',
            'image_path' => 'images/produkty/color-mix-slony-karmel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => 'Zachód słońca / color-mix',
            'type' => 'color',
            'value' => 'Zachód słońca / color-mix',
            'image_path' => 'images/produkty/color-mix-zachod-slonca.webp',
        ]);
        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => 'Złota aleja / color-mix',
            'type' => 'color',
            'value' => 'Złota aleja / color-mix',
            'image_path' => 'images/produkty/color-mix-zlota-aleja.webp',
        ]);
        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => 'Szary Classic',
            'type' => 'color',
            'value' => 'Szary Classic',
            'image_path' => 'images/produkty/szary-classic.webp',
        ]);
        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => 'Antracyt Classic',
            'type' => 'color',
            'value' => 'Antracyt Classic',
            'image_path' => 'images/produkty/antracyt-classic.webp',
        ]);
        ProductVariant::create([
            'product_id' => $kostkaSudecka->id,
            'name' => 'Czerwony Classic',
            'type' => 'color',
            'value' => 'Czerwony Classic',
            'image_path' => 'images/produkty/czerwony-classic.webp',
        ]);

        // ----------------------------------------

        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => '22,9 x 14,9 cm',
            'type' => 'size',
            'value' => '22,9 x 14,9 cm',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => '23,9 x 21,1 cm',
            'type' => 'size',
            'value' => '23,9 x 21,1 cm',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => '26,9 x 14,9 cm',
            'type' => 'size',
            'value' => '26,9 x 14,9 cm',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => '29,9 x 21,1 cm',
            'type' => 'size',
            'value' => '29,9 x 21,1 cm',
        ]);
         ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => '32,9 x 14,9 cm',
            'type' => 'size',
            'value' => '32,9 x 14,9 cm',
        ]);
         ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => '33,9 x 26,9 cm',
            'type' => 'size',
            'value' => '33,9 x 26,9 cm',
        ]);
         ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => '34,9 x 21,1 cm',
            'type' => 'size',
            'value' => '34,9 x 21,1 cm',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => '35,3 x 14,9 cm',
            'type' => 'size',
            'value' => '35,3 x 14,9 cm',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => '35,9 x 21,1 cm',
            'type' => 'size',
            'value' => '35,9 x 21,1 cm',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => '38,9 x 21,1 cm',
            'type' => 'size',
            'value' => '38,9 x 21,1 cm',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => '38,9 x 26,9 cm',
            'type' => 'size',
            'value' => '38,9 x 26,9 cm',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => '43,9 x 21,1 cm',
            'type' => 'size',
            'value' => '43,9 x 21,1 cm',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => '45,9 x 26,9 cm',
            'type' => 'size',
            'value' => '45,9 x 26,9 cm',
        ]);

        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => 'Biały / monocolor',
            'type' => 'color',
            'value' => 'Biały / monocolor',
            'image_path' => 'images/produkty/biel-mono.webp',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => 'Szary / monocolor',
            'type' => 'color',
            'value' => 'Szary / monocolor',
            'image_path' => 'images/produkty/szary-mono.webp',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => 'Antracyt / monocolor',
            'type' => 'color',
            'value' => 'Antracyt / monocolor',
            'image_path' => 'images/produkty/monocolor-antracyt.webp',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => 'Ciepły popiel / color-mix',
            'type' => 'color',
            'value' => 'Ciepły popiel / color-mix',
            'image_path' => 'images/produkty/color-mix-cieply-popiel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => 'Szara umbra/color-mix',
            'type' => 'color',
            'value' => 'Szara umbra/color-mix',
            'image_path' => 'images/produkty/color-mix-szara-umbra.webp',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => 'Zimny popiel/color-mix',
            'type' => 'color',
            'value' => 'Zimny popiel/color-mix',
            'image_path' => 'images/produkty/color-mix-zimny-popiel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => 'Coffee mocha / color-mix / antic',
            'type' => 'color',
            'value' => 'Coffee mocha / color-mix / antic',
            'image_path' => 'images/produkty/color-mix-coffee-mocha.webp',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => 'Tycjan/color mix',
            'type' => 'color',
            'value' => 'Tycjan/color mix',
            'image_path' => 'images/produkty/color-mix-tycjan.webp',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => 'Labrador beż / color-mix',
            'type' => 'color',
            'value' => 'Labrador beż / color-mix',
            'image_path' => 'images/produkty/color-mix-labrador-bez.webp',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => 'Słony karmel / color-mix',
            'type' => 'color',
            'value' => 'Słony karmel / color-mix',
            'image_path' => 'images/produkty/color-mix-slony-karmel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => 'Zachód słońca / color-mix',
            'type' => 'color',
            'value' => 'Zachód słońca / color-mix',
            'image_path' => 'images/produkty/color-mix-zachod-slonca.webp',
        ]);
        ProductVariant::create([
            'product_id' => $palazzo->id,
            'name' => 'Złota aleja / color-mix',
            'type' => 'color',
            'value' => 'Złota aleja / color-mix',
            'image_path' => 'images/produkty/color-mix-zlota-aleja.webp',
        ]);
    
        // ----------------------------------

        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => '10,3 x 8,3 x 9,1 cm',
            'type' => 'size',
            'value' => '10,3 x 8,3 x 9,1 cm',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => '11,3 x 9,3 x 9,1 cm',
            'type' => 'size',
            'value' => '11,3 x 9,3 x 9,1 cm',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => '7,3 x 5,3 x 9,1 cm',
            'type' => 'size',
            'value' => '7,3 x 5,3 x 9,1 cm',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => '8,3 x 6,3 x 9,1 cm',
            'type' => 'size',
            'value' => '8,3 x 6,3 x 9,1 cm',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => '9,3 x 7,3 x 9,1 cm',
            'type' => 'size',
            'value' => '9,3 x 7,3 x 9,1 cm',
        ]);

        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => 'Biały/śrutowanie',
            'type' => 'color',
            'value' => 'Biały/śrutowanie',
            'image_path' => 'images/produkty/biel-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => 'Szary/śrutowanie',
            'type' => 'color',
            'value' => 'Szary/śrutowanie',
            'image_path' => 'images/produkty/szary-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => 'Antracyt/śrutowanie',
            'type' => 'color',
            'value' => 'Antracyt/śrutowanie',
            'image_path' => 'images/produkty/antracyt-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => 'Biały/monocolor',
            'type' => 'color',
            'value' => 'Biały/monocolor',
            'image_path' => 'images/produkty/biel-mono.webp',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => 'Szary/monocolor',
            'type' => 'color',
            'value' => 'Szary/monocolor',
            'image_path' => 'images/produkty/szary-mono.webp',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => 'Antracyt/monocolor',
            'type' => 'color',
            'value' => 'Antracyt/monocolor',
            'image_path' => 'images/produkty/monocolor-antracyt.webp',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => 'Ciepły popiel/color-mix',
            'type' => 'color',
            'value' => 'Ciepły popiel/color-mix',
            'image_path' => 'images/produkty/color-mix-cieply-popiel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => 'Szara umbra/color-mix',
            'type' => 'color',
            'value' => 'Szara umbra/color-mix',
            'image_path' => 'images/produkty/color-mix-szara-umbra.webp',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => 'Zimny popiel/color-mix',
            'type' => 'color',
            'value' => 'Zimny popiel/color-mix',
            'image_path' => 'images/produkty/color-mix-zimny-popiel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => 'Coffee mocha / color-mix / antic',
            'type' => 'color',
            'value' => 'Coffee mocha / color-mix / antic',
            'image_path' => 'images/produkty/color-mix-coffee-mocha.webp',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => 'Tycjan/color mix',
            'type' => 'color',
            'value' => 'Tycjan/color mix',
            'image_path' => 'images/produkty/color-mix-tycjan.webp',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => 'Labrador beż / color-mix',
            'type' => 'color',
            'value' => 'Labrador beż / color-mix',
            'image_path' => 'images/produkty/color-mix-labrador-bez.webp',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => 'Słony karmel / color-mix',
            'type' => 'color',
            'value' => 'Słony karmel / color-mix',
            'image_path' => 'images/produkty/color-mix-slony-karmel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => 'Zachód słońca / color-mix',
            'type' => 'color',
            'value' => 'Zachód słońca / color-mix',
            'image_path' => 'images/produkty/color-mix-zachod-slonca.webp',
        ]);
        ProductVariant::create([
            'product_id' => $piccolino->id,
            'name' => 'Złota aleja / color-mix',
            'type' => 'color',
            'value' => 'Złota aleja / color-mix',
            'image_path' => 'images/produkty/color-mix-zlota-aleja.webp',
        ]);

        // ---------------------------------------

        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => '20,0 x 20,0 cm',
            'type' => 'size',
            'value' => '20,0 x 20,0 cm',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => '30,0 x 20,0 cm',
            'type' => 'size',
            'value' => '30,0 x 20,0 cm',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => '30,0 x 30,0 cm',
            'type' => 'size',
            'value' => '30,0 x 30,0 cm',
        ]);

        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Biały/śrutowanie',
            'type' => 'color',
            'value' => 'Biały/śrutowanie',
            'image_path' => 'images/produkty/biel-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Szary/śrutowanie',
            'type' => 'color',
            'value' => 'Szary/śrutowanie',
            'image_path' => 'images/produkty/szary-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Antracyt/śrutowanie',
            'type' => 'color',
            'value' => 'Antracyt/śrutowanie',
            'image_path' => 'images/produkty/antracyt-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Biały/monocolor',
            'type' => 'color',
            'value' => 'Biały/monocolor',
            'image_path' => 'images/produkty/biel-mono.webp',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Szary/monocolor',
            'type' => 'color',
            'value' => 'Szary/monocolor',
            'image_path' => 'images/produkty/szary-mono.webp',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Antracyt/monocolor',
            'type' => 'color',
            'value' => 'Antracyt/monocolor',
            'image_path' => 'images/produkty/monocolor-antracyt.webp',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Ciepły popiel/color-mix',
            'type' => 'color',
            'value' => 'Ciepły popiel/color-mix',
            'image_path' => 'images/produkty/color-mix-cieply-popiel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Szara umbra/color-mix',
            'type' => 'color',
            'value' => 'Szara umbra/color-mix',
            'image_path' => 'images/produkty/color-mix-szara-umbra.webp',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Zimny popiel/color-mix',
            'type' => 'color',
            'value' => 'Zimny popiel/color-mix',
            'image_path' => 'images/produkty/color-mix-zimny-popiel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Coffee mocha / color-mix / antic',
            'type' => 'color',
            'value' => 'Coffee mocha / color-mix / antic',
            'image_path' => 'images/produkty/color-mix-coffee-mocha.webp',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Tycjan/color mix',
            'type' => 'color',
            'value' => 'Tycjan/color mix',
            'image_path' => 'images/produkty/color-mix-tycjan.webp',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Labrador beż / color-mix',
            'type' => 'color',
            'value' => 'Labrador beż / color-mix',
            'image_path' => 'images/produkty/color-mix-labrador-bez.webp',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Słony karmel / color-mix',
            'type' => 'color',
            'value' => 'Słony karmel / color-mix',
            'image_path' => 'images/produkty/color-mix-slony-karmel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Zachód słońca / color-mix',
            'type' => 'color',
            'value' => 'Zachód słońca / color-mix',
            'image_path' => 'images/produkty/color-mix-zachod-slonca.webp',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Złota aleja / color-mix',
            'type' => 'color',
            'value' => 'Złota aleja / color-mix',
            'image_path' => 'images/produkty/color-mix-zlota-aleja.webp',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Szary Classic',
            'type' => 'color',
            'value' => 'Szary Classic',
            'image_path' => 'images/produkty/szary-classic.webp',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Antracyt Classic',
            'type' => 'color',
            'value' => 'Antracyt Classic',
            'image_path' => 'images/produkty/antracyt-classic.webp',
        ]);
        ProductVariant::create([
            'product_id' => $visioKombiformat->id,
            'name' => 'Czerwony Classic',
            'type' => 'color',
            'value' => 'Czerwony Classic',
            'image_path' => 'images/produkty/czerwony-classic.webp',
        ]);

        // --------------------------------------

        ProductVariant::create([
            'product_id' => $imperio->id,
            'name' => '20,0 x 20,0 cm',
            'type' => 'size',
            'value' => '20,0 x 20,0 cm',
        ]);
        ProductVariant::create([
            'product_id' => $imperio->id,
            'name' => '40,0 x 20,0 cm',
            'type' => 'size',
            'value' => '40,0 x 20,0 cm',
        ]);
        ProductVariant::create([
            'product_id' => $imperio->id,
            'name' => '40,0 x 40,0 cm',
            'type' => 'size',
            'value' => '40,0 x 40,0 cm',
        ]);
        ProductVariant::create([
            'product_id' => $imperio->id,
            'name' => '60,0 x 40,0 cm',
            'type' => 'size',
            'value' => '60,0 x 40,0 cm',
        ]);

        ProductVariant::create([
            'product_id' => $imperio->id,
            'name' => 'Biały/śrutowanie',
            'type' => 'color',
            'value' => 'Biały/śrutowanie',
            'image_path' => 'images/produkty/biel-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $imperio->id,
            'name' => 'Szary/śrutowanie',
            'type' => 'color',
            'value' => 'Szary/śrutowanie',
            'image_path' => 'images/produkty/szary-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $imperio->id,
            'name' => 'Antracyt/śrutowanie',
            'type' => 'color',
            'value' => 'Antracyt/śrutowanie',
            'image_path' => 'images/produkty/antracyt-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $imperio->id,
            'name' => 'Ciepły popiel/color-mix',
            'type' => 'color',
            'value' => 'Ciepły popiel/color-mix',
            'image_path' => 'images/produkty/color-mix-cieply-popiel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $imperio->id,
            'name' => 'Szara umbra/color-mix',
            'type' => 'color',
            'value' => 'Szara umbra/color-mix',
            'image_path' => 'images/produkty/color-mix-szara-umbra.webp',
        ]);
        ProductVariant::create([
            'product_id' => $imperio->id,
            'name' => 'Zimny popiel/color-mix',
            'type' => 'color',
            'value' => 'Zimny popiel/color-mix',
            'image_path' => 'images/produkty/color-mix-zimny-popiel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $imperio->id,
            'name' => 'Coffee mocha / color-mix / antic',
            'type' => 'color',
            'value' => 'Coffee mocha / color-mix / antic',
            'image_path' => 'images/produkty/color-mix-coffee-mocha.webp',
        ]);
        ProductVariant::create([
            'product_id' => $imperio->id,
            'name' => 'Tycjan/color mix',
            'type' => 'color',
            'value' => 'Tycjan/color mix',
            'image_path' => 'images/produkty/color-mix-tycjan.webp',
        ]);
        ProductVariant::create([
            'product_id' => $imperio->id,
            'name' => 'Labrador beż / color-mix',
            'type' => 'color',
            'value' => 'Labrador beż / color-mix',
            'image_path' => 'images/produkty/color-mix-labrador-bez.webp',
        ]);
        ProductVariant::create([
            'product_id' => $imperio->id,
            'name' => 'Słony karmel / color-mix',
            'type' => 'color',
            'value' => 'Słony karmel / color-mix',
            'image_path' => 'images/produkty/color-mix-slony-karmel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $imperio->id,
            'name' => 'Zachód słońca / color-mix',
            'type' => 'color',
            'value' => 'Zachód słońca / color-mix',
            'image_path' => 'images/produkty/color-mix-zachod-slonca.webp',
        ]);
        ProductVariant::create([
            'product_id' => $imperio->id,
            'name' => 'Złota aleja / color-mix',
            'type' => 'color',
            'value' => 'Złota aleja / color-mix',
            'image_path' => 'images/produkty/color-mix-zlota-aleja.webp',
        ]);
        
        // --------------------------------

        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => '12,0 x 12,0 cm',
            'type' => 'size',
            'value' => '12,0 x 12,0 cm',
        ]);
        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => '18,0 x 12,0 cm',
            'type' => 'size',
            'value' => '18,0 x 12,0 cm',
        ]);
        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => '9,0 x 12,0 cm',
            'type' => 'size',
            'value' => '9,0 x 12,0 cm',
        ]);

        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => 'Biały/śrutowanie',
            'type' => 'color',
            'value' => 'Biały/śrutowanie',
            'image_path' => 'images/produkty/biel-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => 'Szary/śrutowanie',
            'type' => 'color',
            'value' => 'Szary/śrutowanie',
            'image_path' => 'images/produkty/szary-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => 'Antracyt/śrutowanie',
            'type' => 'color',
            'value' => 'Antracyt/śrutowanie',
            'image_path' => 'images/produkty/antracyt-srutowanie.webp',
        ]);
        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => 'Ciepły popiel/color-mix',
            'type' => 'color',
            'value' => 'Ciepły popiel/color-mix',
            'image_path' => 'images/produkty/color-mix-cieply-popiel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => 'Szara umbra/color-mix',
            'type' => 'color',
            'value' => 'Szara umbra/color-mix',
            'image_path' => 'images/produkty/color-mix-szara-umbra.webp',
        ]);
        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => 'Zimny popiel/color-mix',
            'type' => 'color',
            'value' => 'Zimny popiel/color-mix',
            'image_path' => 'images/produkty/color-mix-zimny-popiel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => 'Coffee mocha / color-mix / antic',
            'type' => 'color',
            'value' => 'Coffee mocha / color-mix / antic',
            'image_path' => 'images/produkty/color-mix-coffee-mocha.webp',
        ]);
        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => 'Tycjan/color mix',
            'type' => 'color',
            'value' => 'Tycjan/color mix',
            'image_path' => 'images/produkty/color-mix-tycjan.webp',
        ]);
        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => 'Labrador beż / color-mix',
            'type' => 'color',
            'value' => 'Labrador beż / color-mix',
            'image_path' => 'images/produkty/color-mix-labrador-bez.webp',
        ]);
        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => 'Słony karmel / color-mix',
            'type' => 'color',
            'value' => 'Słony karmel / color-mix',
            'image_path' => 'images/produkty/color-mix-slony-karmel.webp',
        ]);
        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => 'Zachód słońca / color-mix',
            'type' => 'color',
            'value' => 'Zachód słońca / color-mix',
            'image_path' => 'images/produkty/color-mix-zachod-slonca.webp',
        ]);
        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => 'Złota aleja / color-mix',
            'type' => 'color',
            'value' => 'Złota aleja / color-mix',
            'image_path' => 'images/produkty/color-mix-zlota-aleja.webp',
        ]);
        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => 'Szary Classic',
            'type' => 'color',
            'value' => 'Szary Classic',
            'image_path' => 'images/produkty/szary-classic.webp',
        ]);
        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => 'Antracyt Classic',
            'type' => 'color',
            'value' => 'Antracyt Classic',
            'image_path' => 'images/produkty/antracyt-classic.webp',
        ]);
        ProductVariant::create([
            'product_id' => $brukSwidnicki->id,
            'name' => 'Czerwony Classic',
            'type' => 'color',
            'value' => 'Czerwony Classic',
            'image_path' => 'images/produkty/czerwony-classic.webp',
        ]);

        // --------------------------------


        ProductVariant::create([
            'product_id' => $ekoKrata->id,
            'name' => '19,8 x 19,8 cm',
            'type' => 'size',
            'value' => '19,8 x 19,8 cm',
        ]);
        ProductVariant::create([
            'product_id' => $ekoKrata->id,
            'name' => 'Szary Classic',
            'type' => 'color',
            'value' => 'Szary Classic',
            'image_path' => 'images/produkty/szary-classic.webp',
        ]);
        ProductVariant::create([
            'product_id' => $ekoKrata->id,
            'name' => 'Antracyt Classic',
            'type' => 'color',
            'value' => 'Antracyt Classic',
            'image_path' => 'images/produkty/antracyt-classic.webp',
        ]);
        ProductVariant::create([
            'product_id' => $ekoKrata->id,
            'name' => 'Czerwony Classic',
            'type' => 'color',
            'value' => 'Czerwony Classic',
            'image_path' => 'images/produkty/czerwony-classic.webp',
        ]);



        // Warianty dla basenu "Portugal"
        ProductVariant::create([
            'product_id' => $basenPortugal->id,
            'name' => '3D Niebieski',
            'type' => 'color',
            'value' => '3D Niebieski',
            'image_path' => 'images/produkty/3d-niebieski.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenPortugal->id,
            'name' => '3D Biały',
            'type' => 'color',
            'value' => '3D Biały',
            'image_path' => 'images/produkty/3d-bialy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenPortugal->id,
            'name' => '3D Jasnoszary',
            'type' => 'color',
            'value' => '3D Jasnoszary',
            'image_path' => 'images/produkty/3d-jasnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenPortugal->id,
            'name' => '3D Ciemnoszary',
            'type' => 'color',
            'value' => '3D Ciemnoszary',
            'image_path' => 'images/produkty/3d-ciemnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenPortugal->id,
            'name' => '3D Piaskowy',
            'type' => 'color',
            'value' => '3D Piaskowy',
            'image_path' => 'images/produkty/3d-piaskowy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenPortugal->id,
            'name' => 'Niebieski - RAL 5012',
            'type' => 'color',
            'value' => 'Niebieski - RAL 5012',
            'image_path' => 'images/produkty/niebieski-ral-5012.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenPortugal->id,
            'name' => 'Biały - RAL 9010',
            'type' => 'color',
            'value' => 'Biały - RAL 9010',
            'image_path' => 'images/produkty/bialy-ral-9010.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenPortugal->id,
            'name' => 'Szary - RAL 7035',
            'type' => 'color',
            'value' => 'Szary - RAL 7035',
            'image_path' => 'images/produkty/szary-ral-7035.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenPortugal->id,
            'name' => 'Piaskowy - RAL 1015',
            'type' => 'color',
            'value' => 'Piaskowy - RAL 1015',
            'image_path' => 'images/produkty/piaskowy-ral-1015.png',
        ]);

        // -----------------------------------------------------------

        // Warianty dla basenu "Eclipse"
        ProductVariant::create([
            'product_id' => $basenEclipse->id,
            'name' => '3D Niebieski',
            'type' => 'color',
            'value' => '3D Niebieski',
            'image_path' => 'images/produkty/3d-niebieski.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenEclipse->id,
            'name' => '3D Biały',
            'type' => 'color',
            'value' => '3D Biały',
            'image_path' => 'images/produkty/3d-bialy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenEclipse->id,
            'name' => '3D Jasnoszary',
            'type' => 'color',
            'value' => '3D Jasnoszary',
            'image_path' => 'images/produkty/3d-jasnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenEclipse->id,
            'name' => '3D Ciemnoszary',
            'type' => 'color',
            'value' => '3D Ciemnoszary',
            'image_path' => 'images/produkty/3d-ciemnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenEclipse->id,
            'name' => '3D Piaskowy',
            'type' => 'color',
            'value' => '3D Piaskowy',
            'image_path' => 'images/produkty/3d-piaskowy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenEclipse->id,
            'name' => 'Niebieski - RAL 5012',
            'type' => 'color',
            'value' => 'Niebieski - RAL 5012',
            'image_path' => 'images/produkty/niebieski-ral-5012.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenEclipse->id,
            'name' => 'Biały - RAL 9010',
            'type' => 'color',
            'value' => 'Biały - RAL 9010',
            'image_path' => 'images/produkty/bialy-ral-9010.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenEclipse->id,
            'name' => 'Szary - RAL 7035',
            'type' => 'color',
            'value' => 'Szary - RAL 7035',
            'image_path' => 'images/produkty/szary-ral-7035.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenEclipse->id,
            'name' => 'Piaskowy - RAL 1015',
            'type' => 'color',
            'value' => 'Piaskowy - RAL 1015',
            'image_path' => 'images/produkty/piaskowy-ral-1015.png',
        ]);

        // -----------------------------------------------------------

        // Warianty dla basenu "Italien"
        ProductVariant::create([
            'product_id' => $basenItalien->id,
            'name' => '3D Niebieski',
            'type' => 'color',
            'value' => '3D Niebieski',
            'image_path' => 'images/produkty/3d-niebieski.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenItalien->id,
            'name' => '3D Biały',
            'type' => 'color',
            'value' => '3D Biały',
            'image_path' => 'images/produkty/3d-bialy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenItalien->id,
            'name' => '3D Jasnoszary',
            'type' => 'color',
            'value' => '3D Jasnoszary',
            'image_path' => 'images/produkty/3d-jasnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenItalien->id,
            'name' => '3D Ciemnoszary',
            'type' => 'color',
            'value' => '3D Ciemnoszary',
            'image_path' => 'images/produkty/3d-ciemnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenItalien->id,
            'name' => '3D Piaskowy',
            'type' => 'color',
            'value' => '3D Piaskowy',
            'image_path' => 'images/produkty/3d-piaskowy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenItalien->id,
            'name' => 'Niebieski - RAL 5012',
            'type' => 'color',
            'value' => 'Niebieski - RAL 5012',
            'image_path' => 'images/produkty/niebieski-ral-5012.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenItalien->id,
            'name' => 'Biały - RAL 9010',
            'type' => 'color',
            'value' => 'Biały - RAL 9010',
            'image_path' => 'images/produkty/bialy-ral-9010.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenItalien->id,
            'name' => 'Szary - RAL 7035',
            'type' => 'color',
            'value' => 'Szary - RAL 7035',
            'image_path' => 'images/produkty/szary-ral-7035.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenItalien->id,
            'name' => 'Piaskowy - RAL 1015',
            'type' => 'color',
            'value' => 'Piaskowy - RAL 1015',
            'image_path' => 'images/produkty/piaskowy-ral-1015.png',
        ]);

        // -----------------------------------------------------------

        // Warianty dla basenu "Nightfall"
        ProductVariant::create([
            'product_id' => $basenNightfall->id,
            'name' => '3D Niebieski',
            'type' => 'color',
            'value' => '3D Niebieski',
            'image_path' => 'images/produkty/3d-niebieski.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenNightfall->id,
            'name' => '3D Biały',
            'type' => 'color',
            'value' => '3D Biały',
            'image_path' => 'images/produkty/3d-bialy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenNightfall->id,
            'name' => '3D Jasnoszary',
            'type' => 'color',
            'value' => '3D Jasnoszary',
            'image_path' => 'images/produkty/3d-jasnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenNightfall->id,
            'name' => '3D Ciemnoszary',
            'type' => 'color',
            'value' => '3D Ciemnoszary',
            'image_path' => 'images/produkty/3d-ciemnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenNightfall->id,
            'name' => '3D Piaskowy',
            'type' => 'color',
            'value' => '3D Piaskowy',
            'image_path' => 'images/produkty/3d-piaskowy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenNightfall->id,
            'name' => 'Niebieski - RAL 5012',
            'type' => 'color',
            'value' => 'Niebieski - RAL 5012',
            'image_path' => 'images/produkty/niebieski-ral-5012.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenNightfall->id,
            'name' => 'Biały - RAL 9010',
            'type' => 'color',
            'value' => 'Biały - RAL 9010',
            'image_path' => 'images/produkty/bialy-ral-9010.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenNightfall->id,
            'name' => 'Szary - RAL 7035',
            'type' => 'color',
            'value' => 'Szary - RAL 7035',
            'image_path' => 'images/produkty/szary-ral-7035.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenNightfall->id,
            'name' => 'Piaskowy - RAL 1015',
            'type' => 'color',
            'value' => 'Piaskowy - RAL 1015',
            'image_path' => 'images/produkty/piaskowy-ral-1015.png',
        ]);

        // -----------------------------------------------------------

        // Warianty dla basenu "Spain"
        ProductVariant::create([
            'product_id' => $basenSpain->id,
            'name' => '3D Niebieski',
            'type' => 'color',
            'value' => '3D Niebieski',
            'image_path' => 'images/produkty/3d-niebieski.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenSpain->id,
            'name' => '3D Biały',
            'type' => 'color',
            'value' => '3D Biały',
            'image_path' => 'images/produkty/3d-bialy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenSpain->id,
            'name' => '3D Jasnoszary',
            'type' => 'color',
            'value' => '3D Jasnoszary',
            'image_path' => 'images/produkty/3d-jasnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenSpain->id,
            'name' => '3D Ciemnoszary',
            'type' => 'color',
            'value' => '3D Ciemnoszary',
            'image_path' => 'images/produkty/3d-ciemnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenSpain->id,
            'name' => '3D Piaskowy',
            'type' => 'color',
            'value' => '3D Piaskowy',
            'image_path' => 'images/produkty/3d-piaskowy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenSpain->id,
            'name' => 'Niebieski - RAL 5012',
            'type' => 'color',
            'value' => 'Niebieski - RAL 5012',
            'image_path' => 'images/produkty/niebieski-ral-5012.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenSpain->id,
            'name' => 'Biały - RAL 9010',
            'type' => 'color',
            'value' => 'Biały - RAL 9010',
            'image_path' => 'images/produkty/bialy-ral-9010.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenSpain->id,
            'name' => 'Szary - RAL 7035',
            'type' => 'color',
            'value' => 'Szary - RAL 7035',
            'image_path' => 'images/produkty/szary-ral-7035.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenSpain->id,
            'name' => 'Piaskowy - RAL 1015',
            'type' => 'color',
            'value' => 'Piaskowy - RAL 1015',
            'image_path' => 'images/produkty/piaskowy-ral-1015.png',
        ]);

        // -----------------------------------------------------------

        // Warianty dla basenu "Sunrise"
        ProductVariant::create([
            'product_id' => $basenSunrise->id,
            'name' => '3D Niebieski',
            'type' => 'color',
            'value' => '3D Niebieski',
            'image_path' => 'images/produkty/3d-niebieski.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenSunrise->id,
            'name' => '3D Biały',
            'type' => 'color',
            'value' => '3D Biały',
            'image_path' => 'images/produkty/3d-bialy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenSunrise->id,
            'name' => '3D Jasnoszary',
            'type' => 'color',
            'value' => '3D Jasnoszary',
            'image_path' => 'images/produkty/3d-jasnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenSunrise->id,
            'name' => '3D Ciemnoszary',
            'type' => 'color',
            'value' => '3D Ciemnoszary',
            'image_path' => 'images/produkty/3d-ciemnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenSunrise->id,
            'name' => '3D Piaskowy',
            'type' => 'color',
            'value' => '3D Piaskowy',
            'image_path' => 'images/produkty/3d-piaskowy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenSunrise->id,
            'name' => 'Niebieski - RAL 5012',
            'type' => 'color',
            'value' => 'Niebieski - RAL 5012',
            'image_path' => 'images/produkty/niebieski-ral-5012.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenSunrise->id,
            'name' => 'Biały - RAL 9010',
            'type' => 'color',
            'value' => 'Biały - RAL 9010',
            'image_path' => 'images/produkty/bialy-ral-9010.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenSunrise->id,
            'name' => 'Szary - RAL 7035',
            'type' => 'color',
            'value' => 'Szary - RAL 7035',
            'image_path' => 'images/produkty/szary-ral-7035.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenSunrise->id,
            'name' => 'Piaskowy - RAL 1015',
            'type' => 'color',
            'value' => 'Piaskowy - RAL 1015',
            'image_path' => 'images/produkty/piaskowy-ral-1015.png',
        ]);

        // -----------------------------------------------------------

        // Warianty dla basenu "Twilight"
        ProductVariant::create([
            'product_id' => $basenTwilight->id,
            'name' => '3D Niebieski',
            'type' => 'color',
            'value' => '3D Niebieski',
            'image_path' => 'images/produkty/3d-niebieski.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenTwilight->id,
            'name' => '3D Biały',
            'type' => 'color',
            'value' => '3D Biały',
            'image_path' => 'images/produkty/3d-bialy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenTwilight->id,
            'name' => '3D Jasnoszary',
            'type' => 'color',
            'value' => '3D Jasnoszary',
            'image_path' => 'images/produkty/3d-jasnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenTwilight->id,
            'name' => '3D Ciemnoszary',
            'type' => 'color',
            'value' => '3D Ciemnoszary',
            'image_path' => 'images/produkty/3d-ciemnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenTwilight->id,
            'name' => '3D Piaskowy',
            'type' => 'color',
            'value' => '3D Piaskowy',
            'image_path' => 'images/produkty/3d-piaskowy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenTwilight->id,
            'name' => 'Niebieski - RAL 5012',
            'type' => 'color',
            'value' => 'Niebieski - RAL 5012',
            'image_path' => 'images/produkty/niebieski-ral-5012.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenTwilight->id,
            'name' => 'Biały - RAL 9010',
            'type' => 'color',
            'value' => 'Biały - RAL 9010',
            'image_path' => 'images/produkty/bialy-ral-9010.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenTwilight->id,
            'name' => 'Szary - RAL 7035',
            'type' => 'color',
            'value' => 'Szary - RAL 7035',
            'image_path' => 'images/produkty/szary-ral-7035.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenTwilight->id,
            'name' => 'Piaskowy - RAL 1015',
            'type' => 'color',
            'value' => 'Piaskowy - RAL 1015',
            'image_path' => 'images/produkty/piaskowy-ral-1015.png',
        ]);

        // -----------------------------------------------------------

        // Warianty dla basenu "Aurora"
        ProductVariant::create([
            'product_id' => $basenAurora->id,
            'name' => '3D Niebieski',
            'type' => 'color',
            'value' => '3D Niebieski',
            'image_path' => 'images/produkty/3d-niebieski.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenAurora->id,
            'name' => '3D Biały',
            'type' => 'color',
            'value' => '3D Biały',
            'image_path' => 'images/produkty/3d-bialy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenAurora->id,
            'name' => '3D Jasnoszary',
            'type' => 'color',
            'value' => '3D Jasnoszary',
            'image_path' => 'images/produkty/3d-jasnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenAurora->id,
            'name' => '3D Ciemnoszary',
            'type' => 'color',
            'value' => '3D Ciemnoszary',
            'image_path' => 'images/produkty/3d-ciemnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenAurora->id,
            'name' => '3D Piaskowy',
            'type' => 'color',
            'value' => '3D Piaskowy',
            'image_path' => 'images/produkty/3d-piaskowy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenAurora->id,
            'name' => 'Niebieski - RAL 5012',
            'type' => 'color',
            'value' => 'Niebieski - RAL 5012',
            'image_path' => 'images/produkty/niebieski-ral-5012.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenAurora->id,
            'name' => 'Biały - RAL 9010',
            'type' => 'color',
            'value' => 'Biały - RAL 9010',
            'image_path' => 'images/produkty/bialy-ral-9010.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenAurora->id,
            'name' => 'Szary - RAL 7035',
            'type' => 'color',
            'value' => 'Szary - RAL 7035',
            'image_path' => 'images/produkty/szary-ral-7035.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenAurora->id,
            'name' => 'Piaskowy - RAL 1015',
            'type' => 'color',
            'value' => 'Piaskowy - RAL 1015',
            'image_path' => 'images/produkty/piaskowy-ral-1015.png',
        ]);

        // -----------------------------------------------------------

        // Warianty dla basenu "Australia"
        ProductVariant::create([
            'product_id' => $basenAustralia->id,
            'name' => '3D Niebieski',
            'type' => 'color',
            'value' => '3D Niebieski',
            'image_path' => 'images/produkty/3d-niebieski.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenAustralia->id,
            'name' => '3D Biały',
            'type' => 'color',
            'value' => '3D Biały',
            'image_path' => 'images/produkty/3d-bialy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenAustralia->id,
            'name' => '3D Jasnoszary',
            'type' => 'color',
            'value' => '3D Jasnoszary',
            'image_path' => 'images/produkty/3d-jasnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenAustralia->id,
            'name' => '3D Ciemnoszary',
            'type' => 'color',
            'value' => '3D Ciemnoszary',
            'image_path' => 'images/produkty/3d-ciemnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenAustralia->id,
            'name' => '3D Piaskowy',
            'type' => 'color',
            'value' => '3D Piaskowy',
            'image_path' => 'images/produkty/3d-piaskowy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenAustralia->id,
            'name' => 'Niebieski - RAL 5012',
            'type' => 'color',
            'value' => 'Niebieski - RAL 5012',
            'image_path' => 'images/produkty/niebieski-ral-5012.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenAustralia->id,
            'name' => 'Biały - RAL 9010',
            'type' => 'color',
            'value' => 'Biały - RAL 9010',
            'image_path' => 'images/produkty/bialy-ral-9010.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenAustralia->id,
            'name' => 'Szary - RAL 7035',
            'type' => 'color',
            'value' => 'Szary - RAL 7035',
            'image_path' => 'images/produkty/szary-ral-7035.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenAustralia->id,
            'name' => 'Piaskowy - RAL 1015',
            'type' => 'color',
            'value' => 'Piaskowy - RAL 1015',
            'image_path' => 'images/produkty/piaskowy-ral-1015.png',
        ]);

        // -----------------------------------------------------------

        // Warianty dla basenu "Cuba"
        ProductVariant::create([
            'product_id' => $basenCuba->id,
            'name' => '3D Niebieski',
            'type' => 'color',
            'value' => '3D Niebieski',
            'image_path' => 'images/produkty/3d-niebieski.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenCuba->id,
            'name' => '3D Biały',
            'type' => 'color',
            'value' => '3D Biały',
            'image_path' => 'images/produkty/3d-bialy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenCuba->id,
            'name' => '3D Jasnoszary',
            'type' => 'color',
            'value' => '3D Jasnoszary',
            'image_path' => 'images/produkty/3d-jasnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenCuba->id,
            'name' => '3D Ciemnoszary',
            'type' => 'color',
            'value' => '3D Ciemnoszary',
            'image_path' => 'images/produkty/3d-ciemnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenCuba->id,
            'name' => '3D Piaskowy',
            'type' => 'color',
            'value' => '3D Piaskowy',
            'image_path' => 'images/produkty/3d-piaskowy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenCuba->id,
            'name' => 'Niebieski - RAL 5012',
            'type' => 'color',
            'value' => 'Niebieski - RAL 5012',
            'image_path' => 'images/produkty/niebieski-ral-5012.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenCuba->id,
            'name' => 'Biały - RAL 9010',
            'type' => 'color',
            'value' => 'Biały - RAL 9010',
            'image_path' => 'images/produkty/bialy-ral-9010.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenCuba->id,
            'name' => 'Szary - RAL 7035',
            'type' => 'color',
            'value' => 'Szary - RAL 7035',
            'image_path' => 'images/produkty/szary-ral-7035.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenCuba->id,
            'name' => 'Piaskowy - RAL 1015',
            'type' => 'color',
            'value' => 'Piaskowy - RAL 1015',
            'image_path' => 'images/produkty/piaskowy-ral-1015.png',
        ]);

        // -----------------------------------------------------------

        // Warianty dla basenu "Midnight"
        ProductVariant::create([
            'product_id' => $basenMidnight->id,
            'name' => '3D Niebieski',
            'type' => 'color',
            'value' => '3D Niebieski',
            'image_path' => 'images/produkty/3d-niebieski.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenMidnight->id,
            'name' => '3D Biały',
            'type' => 'color',
            'value' => '3D Biały',
            'image_path' => 'images/produkty/3d-bialy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenMidnight->id,
            'name' => '3D Jasnoszary',
            'type' => 'color',
            'value' => '3D Jasnoszary',
            'image_path' => 'images/produkty/3d-jasnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenMidnight->id,
            'name' => '3D Ciemnoszary',
            'type' => 'color',
            'value' => '3D Ciemnoszary',
            'image_path' => 'images/produkty/3d-ciemnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenMidnight->id,
            'name' => '3D Piaskowy',
            'type' => 'color',
            'value' => '3D Piaskowy',
            'image_path' => 'images/produkty/3d-piaskowy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenMidnight->id,
            'name' => 'Niebieski - RAL 5012',
            'type' => 'color',
            'value' => 'Niebieski - RAL 5012',
            'image_path' => 'images/produkty/niebieski-ral-5012.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenMidnight->id,
            'name' => 'Biały - RAL 9010',
            'type' => 'color',
            'value' => 'Biały - RAL 9010',
            'image_path' => 'images/produkty/bialy-ral-9010.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenMidnight->id,
            'name' => 'Szary - RAL 7035',
            'type' => 'color',
            'value' => 'Szary - RAL 7035',
            'image_path' => 'images/produkty/szary-ral-7035.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenMidnight->id,
            'name' => 'Piaskowy - RAL 1015',
            'type' => 'color',
            'value' => 'Piaskowy - RAL 1015',
            'image_path' => 'images/produkty/piaskowy-ral-1015.png',
        ]);

        // -----------------------------------------------------------

        // Warianty dla basenu "Orion"
        ProductVariant::create([
            'product_id' => $basenOrion->id,
            'name' => '3D Niebieski',
            'type' => 'color',
            'value' => '3D Niebieski',
            'image_path' => 'images/produkty/3d-niebieski.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenOrion->id,
            'name' => '3D Biały',
            'type' => 'color',
            'value' => '3D Biały',
            'image_path' => 'images/produkty/3d-bialy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenOrion->id,
            'name' => '3D Jasnoszary',
            'type' => 'color',
            'value' => '3D Jasnoszary',
            'image_path' => 'images/produkty/3d-jasnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenOrion->id,
            'name' => '3D Ciemnoszary',
            'type' => 'color',
            'value' => '3D Ciemnoszary',
            'image_path' => 'images/produkty/3d-ciemnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenOrion->id,
            'name' => '3D Piaskowy',
            'type' => 'color',
            'value' => '3D Piaskowy',
            'image_path' => 'images/produkty/3d-piaskowy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenOrion->id,
            'name' => 'Niebieski - RAL 5012',
            'type' => 'color',
            'value' => 'Niebieski - RAL 5012',
            'image_path' => 'images/produkty/niebieski-ral-5012.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenOrion->id,
            'name' => 'Biały - RAL 9010',
            'type' => 'color',
            'value' => 'Biały - RAL 9010',
            'image_path' => 'images/produkty/bialy-ral-9010.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenOrion->id,
            'name' => 'Szary - RAL 7035',
            'type' => 'color',
            'value' => 'Szary - RAL 7035',
            'image_path' => 'images/produkty/szary-ral-7035.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenOrion->id,
            'name' => 'Piaskowy - RAL 1015',
            'type' => 'color',
            'value' => 'Piaskowy - RAL 1015',
            'image_path' => 'images/produkty/piaskowy-ral-1015.png',
        ]);

        // -----------------------------------------------------------

        // Warianty dla basenu "Phoebus"
        ProductVariant::create([
            'product_id' => $basenPhoebus->id,
            'name' => '3D Niebieski',
            'type' => 'color',
            'value' => '3D Niebieski',
            'image_path' => 'images/produkty/3d-niebieski.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenPhoebus->id,
            'name' => '3D Biały',
            'type' => 'color',
            'value' => '3D Biały',
            'image_path' => 'images/produkty/3d-bialy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenPhoebus->id,
            'name' => '3D Jasnoszary',
            'type' => 'color',
            'value' => '3D Jasnoszary',
            'image_path' => 'images/produkty/3d-jasnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenPhoebus->id,
            'name' => '3D Ciemnoszary',
            'type' => 'color',
            'value' => '3D Ciemnoszary',
            'image_path' => 'images/produkty/3d-ciemnoszary.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenPhoebus->id,
            'name' => '3D Piaskowy',
            'type' => 'color',
            'value' => '3D Piaskowy',
            'image_path' => 'images/produkty/3d-piaskowy.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenPhoebus->id,
            'name' => 'Niebieski - RAL 5012',
            'type' => 'color',
            'value' => 'Niebieski - RAL 5012',
            'image_path' => 'images/produkty/niebieski-ral-5012.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenPhoebus->id,
            'name' => 'Biały - RAL 9010',
            'type' => 'color',
            'value' => 'Biały - RAL 9010',
            'image_path' => 'images/produkty/bialy-ral-9010.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenPhoebus->id,
            'name' => 'Szary - RAL 7035',
            'type' => 'color',
            'value' => 'Szary - RAL 7035',
            'image_path' => 'images/produkty/szary-ral-7035.png',
        ]);

        ProductVariant::create([
            'product_id' => $basenPhoebus->id,
            'name' => 'Piaskowy - RAL 1015',
            'type' => 'color',
            'value' => 'Piaskowy - RAL 1015',
            'image_path' => 'images/produkty/piaskowy-ral-1015.png',
        ]);
        
    }
}
