<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Category;

class ProductController extends Controller
{
    public function show($categorySlug, $subcategorySlug, $productSlug){
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        $subcategory = Subcategory::where('slug', $subcategorySlug)
            ->where('category_id', $category->id)
            ->firstOrFail();
        $product = Product::with('variants')
            ->where('slug', $productSlug)
            ->where('subcategory_id', $subcategory->id)
            ->firstOrFail();

        return view('product', compact('product', 'subcategory', 'category'));
    }
}
