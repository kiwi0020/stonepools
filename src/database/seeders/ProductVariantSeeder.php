<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tresso = Product::where('slug', 'tresso')->first();

        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Biały/śrutowanie',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Szary/śrutowanie',
        ]);
        ProductVariant::create([
            'product_id' => $tresso->id,
            'name' => 'Antracyt/śrutowanie',
        ]);
    }
}
