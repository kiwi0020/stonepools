<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function showKostka(){
        $category = Category::where('slug', 'kostka-brukowa')
            ->with('subcategories.products.variants')
            ->firstOrFail();

        return view('category', ['category' => $category]);
    }

    public function showBaseny(){
        $category = Category::where('slug', 'baseny')
            ->with('subcategories.products.variants')
            ->FirstOrFail();

            return view('category', ['category' => $category]);
    }
}
