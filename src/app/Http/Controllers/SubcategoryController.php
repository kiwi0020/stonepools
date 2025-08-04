<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    public function show($categorySlug, $subcategorySlug){
        $category = Category::where('slug', $categorySlug)->firstOrFail();

        $subcategory = Subcategory::where('slug', $subcategorySlug)
            ->where('category_id', $category->id)
            ->firstOrFail();

        $products = $subcategory->products()->get();

        $subcategories = $category->subcategories;

        return view('subcategory', compact('category', 'subcategory', 'products', 'subcategories'));
    }
}
