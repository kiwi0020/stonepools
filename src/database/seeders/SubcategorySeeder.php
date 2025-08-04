<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kostka = Category::where('slug', 'kostka-brukowa')->first();

        Subcategory::create([
            'name' => 'Kostka szlachetna',
            'slug' => 'szlachetna',
            'category_id' => $kostka->id,
        ]);

        Subcategory::create([
            'name' => 'Płyty wielkoformatowe',
            'slug' => 'plyty-wielkoformatowe',
            'category_id' => $kostka->id,
        ]);

        Subcategory::create([
            'name' => 'Pebek Ceramik',
            'slug' => 'pebek-ceramik',
            'category_id' => $kostka->id,
        ]);

        Subcategory::create([
            'name' => 'Ogrodzenia',
            'slug' => 'ogrodzenia',
            'category_id' => $kostka->id,
        ]);

        $baseny = Category::where('slug', 'baseny')->first();

        Subcategory::create([
            'name' => 'Baseny',
            'slug' => 'baseny',
            'category_id' => $baseny->id,
        ]);
        Subcategory::create([
            'name' => 'Zadaszenia basenów',
            'slug' => 'zadaszenia-basenow',
            'category_id' => $baseny->id,
        ]);
        Subcategory::create([
            'name' => 'Zadaszenia tarasów',
            'slug' => 'zadaszenia-tarasow',
            'category_id' => $baseny->id,
        ]);
        Subcategory::create([
            'name' => 'Baseny wolnostojące',
            'slug' => 'baseny-wolnostojace',
            'category_id' => $baseny->id,
        ]);
        Subcategory::create([
            'name' => 'Wiaty samochodowe',
            'slug' => 'wiaty-samochodowe',
            'category_id' => $baseny->id,
        ]);
        Subcategory::create([
            'name' => 'Dach tarasowy',
            'slug' => 'dach-tarasowy',
            'category_id' => $baseny->id,
        ]);
        Subcategory::create([
            'name' => 'Osprzęt',
            'slug' => 'osprzet',
            'category_id' => $baseny->id,
        ]);

    }
}
