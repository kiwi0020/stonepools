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

        $zadaszenieEcoClassic = Product::where('slug', 'zadaszenie-eco-classic')->first();
        $zadaszenieEcoStandard = Product::where('slug', 'zadaszenie-eco-standard')->first();
        $zadaszeniePrestige = Product::where('slug', 'zadaszenie-prestige')->first();
        $zadaszeniePrestige90 = Product::where('slug', 'zadaszenie-prestige-90')->first();
        $zadaszeniePrestige90M = Product::where('slug', 'zadaszenie-prestige-90-m')->first();
        $zadaszeniePrestigePlus = Product::where('slug', 'zadaszenie-prestige-plus')->first();
        $zadaszeniePrestigeMax = Product::where('slug', 'zadaszenie-prestige-max')->first();
        $zadaszenieElegance = Product::where('slug', 'zadaszenie-elegance')->first();
        
        $zadaszenieBasenyTarasowe = Product::where('slug', 'zadaszenie-basenu-tarasowe')->first();
        $zadaszenieBasenuTarasoweMax = Product::where('slug', 'zadaszenie-basenu-tarasowe-max')->first();

        $basenWolnostojacyNightfall = Product::where('slug', 'basen-wolnostojacy-nightfall')->first();
        $basenWolnostojacySunrise = Product::where('slug', 'basen-wolnostojacy-sunrise')->first();

        $carharbour = Product::where('slug', 'carharbour')->first();
        $carharbourPlus = Product::where('slug', 'carharbour-plus')->first();
        $carPortMini = Product::where('slug', 'car-port-mini')->first();
        $carPortMiniPlus = Product::where('slug', 'car-port-mini-plus')->first();
        $carPortRear = Product::where('slug', 'car-port-rear')->first();
        $carPortRearPlus = Product::where('slug', 'car-port-rear-plus')->first();

        $dachTarasowy = Product::where('slug', 'dach-tarasowy')->first();

        
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
        

        // Zadaszenie "Eco Classic"
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => 'Srebro', 'type' => 'color', 'value' => 'Srebro', 'image_path' => 'images/produkty/srebro.png', ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => 'Antracyt - RAL 7016', 'type' => 'color', 'value' => 'Antracyt - RAL 7016', 'image_path' => 'images/produkty/antracyt-ral-7016.png', ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '5,4×3,2×1,0 m (3 moduły)', 'type' => 'size', 'value' => '5,4×3,2×1,0 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '5,4×3,4×1,05 m (3 moduły)', 'type' => 'size', 'value' => '5,4×3,4×1,05 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '6,6×3,9×1,20 m (3 moduły)', 'type' => 'size', 'value' => '6,6×3,9×1,20 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '6,4×3,2×1,0 m (3 moduły)', 'type' => 'size', 'value' => '6,4×3,2×1,0 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '6,6×3,2×1,0 m (3 moduły)', 'type' => 'size', 'value' => '6,6×3,2×1,0 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '6,4×3,4×1,05 m (3 moduły)', 'type' => 'size', 'value' => '6,4×3,4×1,05 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '6,6×3,4×1,05 m (3 moduły)', 'type' => 'size', 'value' => '6,6×3,4×1,05 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '6,4×3,9×1,20 m (3 moduły)', 'type' => 'size', 'value' => '6,4×3,9×1,20 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '7,4×3,4×1,10 m (4 moduły)', 'type' => 'size', 'value' => '7,4×3,4×1,10 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '7,9×3,7×1,20 m (4 moduły)', 'type' => 'size', 'value' => '7,9×3,7×1,20 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '8,4×3,4×1,10 m (4 moduły)', 'type' => 'size', 'value' => '8,4×3,4×1,10 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '8,4×3,7×1,20 m (4 moduły)', 'type' => 'size', 'value' => '8,4×3,7×1,20 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '8,4×3,9×1,25 m (4 moduły)', 'type' => 'size', 'value' => '8,4×3,9×1,25 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '8,8×3,9×1,25 m (4 moduły)', 'type' => 'size', 'value' => '8,8×3,9×1,25 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '9,4×3,4×1,15 m (5 moduły)', 'type' => 'size', 'value' => '9,4×3,4×1,15 m (5 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '10,9×3,9×1,30 m (5 moduły)', 'type' => 'size', 'value' => '10,9×3,9×1,30 m (5 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '10,4×3,2×1,10 m (5 moduły)', 'type' => 'size', 'value' => '10,4×3,2×1,10 m (5 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '10,4×3,4×1,15 m (5 moduły)', 'type' => 'size', 'value' => '10,4×3,4×1,15 m (5 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoClassic->id, 'name' => '10,5×3,9×1,30 m (5 moduły)', 'type' => 'size', 'value' => '10,5×3,9×1,30 m (5 moduły)', 'image_path' => null, ]);
        
        // Zadaszenie "Eco Standard"
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => 'Srebro', 'type' => 'color', 'value' => 'Srebro', 'image_path' => 'images/produkty/srebro.png', ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => 'Antracyt - RAL 7016', 'type' => 'color', 'value' => 'Antracyt - RAL 7016', 'image_path' => 'images/produkty/antracyt-ral-7016.png', ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => '5,4×3,5×0,868 m (3 moduły)', 'type' => 'size', 'value' => '5,4×3,5×0,868 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => '6,4×3,5×0,868 m (3 moduły)', 'type' => 'size', 'value' => '6,4×3,5×0,868 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => '6,6×3,5×0,868 m (3 moduły)', 'type' => 'size', 'value' => '6,6×3,5×0,868 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => '6,4×3,9×0,879 m (3 moduły)', 'type' => 'size', 'value' => '6,4×3,9×0,879 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => '6,6×3,9×0,879 m (3 moduły)', 'type' => 'size', 'value' => '6,6×3,9×0,879 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => '7,4×3,5×0,929 m (4 moduły)', 'type' => 'size', 'value' => '7,4×3,5×0,929 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => '8,8×3,9×0,940 m (4 moduły)', 'type' => 'size', 'value' => '8,8×3,9×0,940 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => '8,8×4,2×0,950 m (4 moduły)', 'type' => 'size', 'value' => '8,8×4,2×0,950 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => '8,4×3,5×0,929 m (4 moduły)', 'type' => 'size', 'value' => '8,4×3,5×0,929 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => '8,4×3,9×0,940 m (4 moduły)', 'type' => 'size', 'value' => '8,4×3,9×0,940 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => '9,4×3,5×0,900 m (5 moduły)', 'type' => 'size', 'value' => '9,4×3,5×0,900 m (5 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => '10,4×3,5×0,990 m (5 moduły)', 'type' => 'size', 'value' => '10,4×3,5×0,990 m (5 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => '10,5×3,9×1 m (5 moduły)', 'type' => 'size', 'value' => '10,5×3,9×1 m (5 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => '10,9×3,9×1,001 m (5 moduły)', 'type' => 'size', 'value' => '10,9×3,9×1,001 m (5 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => '10,9×4,2×1,01 m (5 moduły)', 'type' => 'size', 'value' => '10,9×4,2×1,01 m (5 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieEcoStandard->id, 'name' => '10,9×5,2×1,1 m (5 moduły)', 'type' => 'size', 'value' => '10,9×5,2×1,1 m (5 moduły)', 'image_path' => null, ]);

        // Zadaszenie "zadaszeniePrestige"
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige->id, 'name' => 'Srebro', 'type' => 'color', 'value' => 'Srebro', 'image_path' => 'images/produkty/srebro.png', ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige->id, 'name' => 'Antracyt - RAL 7016', 'type' => 'color', 'value' => 'Antracyt - RAL 7016', 'image_path' => 'images/produkty/antracyt-ral-7016.png', ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige->id, 'name' => '5,4×3,4×0,650 m (3 moduły)', 'type' => 'size', 'value' => '5,4×3,4×0,650 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige->id, 'name' => '6,4×3,4×0,650 m (3 moduły)', 'type' => 'size', 'value' => '6,4×3,4×0,650 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige->id, 'name' => '6,6×3,4×0,650 m (3 moduły)', 'type' => 'size', 'value' => '6,6×3,4×0,650 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige->id, 'name' => '6,4×4×0,700 m (3 moduły)', 'type' => 'size', 'value' => '6,4×4×0,700 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige->id, 'name' => '6,6×4×0,700 m (3 moduły)', 'type' => 'size', 'value' => '6,6×4×0,700 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige->id, 'name' => '7,4×3,4×0,735 m (4 moduły)', 'type' => 'size', 'value' => '7,4×3,4×0,735 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige->id, 'name' => '7,9×4×0,785 m (4 moduły)', 'type' => 'size', 'value' => '7,9×4×0,785 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige->id, 'name' => '8,8×4×0,785 m (4 moduły)', 'type' => 'size', 'value' => '8,8×4×0,785 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige->id, 'name' => '8,4×3,4×0,735 m (4 moduły)', 'type' => 'size', 'value' => '8,4×3,4×0,735 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige->id, 'name' => '8,4×4×0,785 m (4 moduły)', 'type' => 'size', 'value' => '8,4×4×0,785 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige->id, 'name' => '9,4×3,4×0,820 m (5 moduły)', 'type' => 'size', 'value' => '9,4×3,4×0,820 m (5 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige->id, 'name' => '10,4×3,4×0,820 m (5 moduły)', 'type' => 'size', 'value' => '10,4×3,4×0,820 m (5 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige->id, 'name' => '10,5×4×0,870 m (5 moduły)', 'type' => 'size', 'value' => '10,5×4×0,870 m (5 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige->id, 'name' => '10,9×4×0,870 m (5 moduły)', 'type' => 'size', 'value' => '10,9×4×0,870 m (5 moduły)', 'image_path' => null, ]);

        // Zadaszenie "Prestige 90"
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige90->id, 'name' => 'Srebro', 'type' => 'color', 'value' => 'Srebro', 'image_path' => 'images/produkty/srebro.png', ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige90->id, 'name' => 'Antracyt - RAL 7016', 'type' => 'color', 'value' => 'Antracyt - RAL 7016', 'image_path' => 'images/produkty/antracyt-ral-7016.png', ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige90->id, 'name' => '6,4×3,5×0,600 m (3 moduły)', 'type' => 'size', 'value' => '6,4×3,5×0,600 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige90->id, 'name' => '8,4×3,5×0,685 m (4 moduły)', 'type' => 'size', 'value' => '8,4×3,5×0,685 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige90->id, 'name' => '8,8×4,2×0,785 m (4 moduły)', 'type' => 'size', 'value' => '8,8×4,2×0,785 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige90->id, 'name' => '10,9×4,2×0,870 m (5 moduły)', 'type' => 'size', 'value' => '10,9×4,2×0,870 m (5 moduły)', 'image_path' => null, ]);

        // Zadaszenie "Prestige 90 M"
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige90M->id, 'name' => 'Srebro', 'type' => 'color', 'value' => 'Srebro', 'image_path' => 'images/produkty/srebro.png', ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige90M->id, 'name' => 'Antracyt - RAL 7016', 'type' => 'color', 'value' => 'Antracyt - RAL 7016', 'image_path' => 'images/produkty/antracyt-ral-7016.png', ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige90M->id, 'name' => '6×3,4×0,415 m (3 moduły)', 'type' => 'size', 'value' => '6×3,4×0,415 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige90M->id, 'name' => '6×4×0,425 m (3 moduły)', 'type' => 'size', 'value' => '6×4×0,425 m (3 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige90M->id, 'name' => '7,9×4×0,500 m (4 moduły)', 'type' => 'size', 'value' => '7,9×4×0,500 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige90M->id, 'name' => '7,9×4×0,510 m (4 moduły)', 'type' => 'size', 'value' => '7,9×4×0,510 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige90M->id, 'name' => '9,9×3,4×0,585 m (5 moduły)', 'type' => 'size', 'value' => '9,9×3,4×0,585 m (5 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige90M->id, 'name' => '9,9×4×0,595 m (5 moduły)', 'type' => 'size', 'value' => '9,9×4×0,595 m (5 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige90M->id, 'name' => '11,9×3,4×0,670 m (6 moduły)', 'type' => 'size', 'value' => '11,9×3,4×0,670 m (6 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestige90M->id, 'name' => '11,9×4×0,680 m (6 moduły)', 'type' => 'size', 'value' => '11,9×4×0,680 m (6 moduły)', 'image_path' => null, ]);

        // Zadaszenie "Prestige PLUS"
        ProductVariant::create([ 'product_id' => $zadaszeniePrestigePlus->id, 'name' => 'Srebro', 'type' => 'color', 'value' => 'Srebro', 'image_path' => 'images/produkty/srebro.png', ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestigePlus->id, 'name' => 'Antracyt - RAL 7016', 'type' => 'color', 'value' => 'Antracyt - RAL 7016', 'image_path' => 'images/produkty/antracyt-ral-7016.png', ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestigePlus->id, 'name' => '8,8×4×2,2/1,0 m (4 moduły)', 'type' => 'size', 'value' => '8,8×4×2,2/1,0 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestigePlus->id, 'name' => '11×4,5×2,4/1,0 m (5 modułów)', 'type' => 'size', 'value' => '11×4,5×2,4/1,0 m (5 modułów)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestigePlus->id, 'name' => '13×5,2×2,5/1,0 m (6 modułów)', 'type' => 'size', 'value' => '13×5,2×2,5/1,0 m (6 modułów)', 'image_path' => null, ]);

        // Zadaszenie "Prestige MAX"
        ProductVariant::create([ 'product_id' => $zadaszeniePrestigeMax->id, 'name' => 'Srebro', 'type' => 'color', 'value' => 'Srebro', 'image_path' => 'images/produkty/srebro.png', ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestigeMax->id, 'name' => 'Antracyt - RAL 7016', 'type' => 'color', 'value' => 'Antracyt - RAL 7016', 'image_path' => 'images/produkty/antracyt-ral-7016.png', ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestigeMax->id, 'name' => '8,8×5×2,33 m (4 moduły)', 'type' => 'size', 'value' => '8,8×5×2,33 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestigeMax->id, 'name' => '10,9×5×2,415 m (5 moduły)', 'type' => 'size', 'value' => '10,9×5×2,415 m (5 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszeniePrestigeMax->id, 'name' => '12,7×5×2,5 m (6 moduły)', 'type' => 'size', 'value' => '12,7×5×2,5 m (6 moduły)', 'image_path' => null, ]);

        // Zadaszenie "zadaszenieElegance"
        ProductVariant::create([ 'product_id' => $zadaszenieElegance->id, 'name' => 'Srebro', 'type' => 'color', 'value' => 'Srebro', 'image_path' => 'images/produkty/srebro.png', ]);
        ProductVariant::create([ 'product_id' => $zadaszenieElegance->id, 'name' => 'Antracyt - RAL 7016', 'type' => 'color', 'value' => 'Antracyt - RAL 7016', 'image_path' => 'images/produkty/antracyt-ral-7016.png', ]);
        ProductVariant::create([ 'product_id' => $zadaszenieElegance->id, 'name' => '8,8×5×2,2 m (4 moduły)', 'type' => 'size', 'value' => '8,8×5×2,2 m (4 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieElegance->id, 'name' => '10,9×5,2×2,2 m (5 moduły)', 'type' => 'size', 'value' => '10,9×5,2×2,2 m (5 moduły)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieElegance->id, 'name' => '12,7×5,2×2,3 m (5 moduły)', 'type' => 'size', 'value' => '12,7×5,2×2,3 m (5 moduły)', 'image_path' => null, ]);

        // 

        // Zadaszenie Basenu Tarasowe
        ProductVariant::create([ 'product_id' => $zadaszenieBasenyTarasowe->id, 'name' => '5,7×3,5 m', 'type' => 'size', 'value' => '5,7×3,5 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenyTarasowe->id, 'name' => '6,6×3,5 m', 'type' => 'size', 'value' => '6,6×3,5 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenyTarasowe->id, 'name' => '6,6×4,0 m', 'type' => 'size', 'value' => '6,6×4,0 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenyTarasowe->id, 'name' => '6,9×3,5 m', 'type' => 'size', 'value' => '6,9×3,5 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenyTarasowe->id, 'name' => '6,9×4,0 m', 'type' => 'size', 'value' => '6,9×4,0 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenyTarasowe->id, 'name' => '7,4×3,5 m', 'type' => 'size', 'value' => '7,4×3,5 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenyTarasowe->id, 'name' => '7,7×3,5 m', 'type' => 'size', 'value' => '7,7×3,5 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenyTarasowe->id, 'name' => '7,8×4,0 m', 'type' => 'size', 'value' => '7,8×4,0 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenyTarasowe->id, 'name' => '8,4×3,5 m', 'type' => 'size', 'value' => '8,4×3,5 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenyTarasowe->id, 'name' => '8,5×4,0 m', 'type' => 'size', 'value' => '8,5×4,0 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenyTarasowe->id, 'name' => '8,9×3,5 m', 'type' => 'size', 'value' => '8,9×3,5 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenyTarasowe->id, 'name' => '8,9×4,0 m', 'type' => 'size', 'value' => '8,9×4,0 m', 'image_path' => null, ]);

        // Zadaszenie Baseny Tarasowe Max
        ProductVariant::create([ 'product_id' => $zadaszenieBasenuTarasoweMax->id, 'name' => '3,5×5,5 m', 'type' => 'size', 'value' => '3,5×5,5 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenuTarasoweMax->id, 'name' => '3,5×6,5 m', 'type' => 'size', 'value' => '3,5×6,5 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenuTarasoweMax->id, 'name' => '3,5×7,5 m', 'type' => 'size', 'value' => '3,5×7,5 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenuTarasoweMax->id, 'name' => '3,5×8 m', 'type' => 'size', 'value' => '3,5×8 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenuTarasoweMax->id, 'name' => '4×5,5 m', 'type' => 'size', 'value' => '4×5,5 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenuTarasoweMax->id, 'name' => '4×6,5 m', 'type' => 'size', 'value' => '4×6,5 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenuTarasoweMax->id, 'name' => '4×7,5 m', 'type' => 'size', 'value' => '4×7,5 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $zadaszenieBasenuTarasoweMax->id, 'name' => '4×8 m', 'type' => 'size', 'value' => '4×8 m', 'image_path' => null, ]);
        
        // === Baseny wolnostojące - warianty ===

        // Basen Wolnostojący Nightfall
        ProductVariant::create([ 'product_id' => $basenWolnostojacyNightfall->id, 'name' => 'Niebieski - RAL 5012', 'type' => 'color', 'value' => 'Niebieski - RAL 5012', 'image_path' => 'images/produkty/niebieski-ral-5012.png', ]);
        ProductVariant::create([ 'product_id' => $basenWolnostojacyNightfall->id, 'name' => 'Biały - RAL 9010', 'type' => 'color', 'value' => 'Biały - RAL 9010', 'image_path' => 'images/produkty/bialy-ral-9010.png', ]);
        ProductVariant::create([ 'product_id' => $basenWolnostojacyNightfall->id, 'name' => 'Szary - RAL 7035', 'type' => 'color', 'value' => 'Szary - RAL 7035', 'image_path' => 'images/produkty/szary-ral-7035.png', ]);
        ProductVariant::create([ 'product_id' => $basenWolnostojacyNightfall->id, 'name' => 'Piaskowy - RAL 1015', 'type' => 'color', 'value' => 'Piaskowy - RAL 1015', 'image_path' => 'images/produkty/piaskowy-ral-1015.png', ]);
        ProductVariant::create([ 'product_id' => $basenWolnostojacyNightfall->id, 'name' => 'FN 627 - 7,02×2,75×1,63 m', 'type' => 'size', 'value' => 'FN 627 - 7,02×2,75×1,63 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $basenWolnostojacyNightfall->id, 'name' => 'FN 630 - 7,02×3,05×1,63 m', 'type' => 'size', 'value' => 'FN 630 - 7,02×3,05×1,63 m', 'image_path' => null, ]);
        
        // Basen Wolnostojący Sunrise
        ProductVariant::create([ 'product_id' => $basenWolnostojacySunrise->id, 'name' => 'Niebieski - RAL 5012', 'type' => 'color', 'value' => 'Niebieski - RAL 5012', 'image_path' => 'images/produkty/niebieski-ral-5012.png', ]);
        ProductVariant::create([ 'product_id' => $basenWolnostojacySunrise->id, 'name' => 'Biały - RAL 9010', 'type' => 'color', 'value' => 'Biały - RAL 9010', 'image_path' => 'images/produkty/bialy-ral-9010.png', ]);
        ProductVariant::create([ 'product_id' => $basenWolnostojacySunrise->id, 'name' => 'Szary - RAL 7035', 'type' => 'color', 'value' => 'Szary - RAL 7035', 'image_path' => 'images/produkty/szary-ral-7035.png', ]);
        ProductVariant::create([ 'product_id' => $basenWolnostojacySunrise->id, 'name' => 'Piaskowy - RAL 1015', 'type' => 'color', 'value' => 'Piaskowy - RAL 1015', 'image_path' => 'images/produkty/piaskowy-ral-1015.png', ]);
        ProductVariant::create([ 'product_id' => $basenWolnostojacySunrise->id, 'name' => 'FS 527 - 6,06×2,75×1,63 m', 'type' => 'size', 'value' => 'FS 527 - 6,06×2,75×1,63 m', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $basenWolnostojacySunrise->id, 'name' => 'FS 627 - 7,06×2,75×1,63 m', 'type' => 'size', 'value' => 'FS 627 - 7,06×2,75×1,63 m', 'image_path' => null, ]);
        
        // === Wiaty samochodowe - nie posiadają wariantów ===
        // === Dachy tarasowe - warianty ===
        
        // Dach tarasowy
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-330 (3×3×2,79 m)', 'type' => 'size', 'value' => 'WD-330 (3×3×2,79 m)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-430 (3×4×2,79 m)', 'type' => 'size', 'value' => 'WD-430 (3×4×2,79 m)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-530 (3×5×2,79 m)', 'type' => 'size', 'value' => 'WD-530 (3×5×2,79 m)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-630 (3×6×2,79 m)', 'type' => 'size', 'value' => 'WD-630 (3×6×2,79 m)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-730 (3×7×2,79 m)', 'type' => 'size', 'value' => 'WD-730 (3×7×2,79 m)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-830 (3×8×2,79 m)', 'type' => 'size', 'value' => 'WD-830 (3×8×2,79 m)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-335 (3,5×3×2,86 m)', 'type' => 'size', 'value' => 'WD-335 (3,5×3×2,86 m)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-435 (3,5×4×2,86 m)', 'type' => 'size', 'value' => 'WD-435 (3,5×4×2,86 m)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-535 (3,5×5×2,86 m)', 'type' => 'size', 'value' => 'WD-535 (3,5×5×2,86 m)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-635 (3,5×6×2,86 m)', 'type' => 'size', 'value' => 'WD-635 (3,5×6×2,86 m)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-735 (3,5×7×2,86 m)', 'type' => 'size', 'value' => 'WD-735 (3,5×7×2,86 m)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-835 (3,5×8×2,86 m)', 'type' => 'size', 'value' => 'WD-835 (3,5×8×2,86 m)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-340 (4×3×2,93 m)', 'type' => 'size', 'value' => 'WD-340 (4×3×2,93 m)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-440 (4×4×2,93 m)', 'type' => 'size', 'value' => 'WD-440 (4×4×2,93 m)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-540 (4×5×2,93 m)', 'type' => 'size', 'value' => 'WD-540 (4×5×2,93 m)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-640 (4×6×2,93 m)', 'type' => 'size', 'value' => 'WD-640 (4×6×2,93 m)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-740 (4×7×2,93 m)', 'type' => 'size', 'value' => 'WD-740 (4×7×2,93 m)', 'image_path' => null, ]);
        ProductVariant::create([ 'product_id' => $dachTarasowy->id, 'name' => 'WD-840 (4×8×2,93 m)', 'type' => 'size', 'value' => 'WD-840 (4×8×2,93 m)', 'image_path' => null, ]);

    }
}
