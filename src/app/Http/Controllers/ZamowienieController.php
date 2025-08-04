<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ZamowienieController extends Controller
{
    public function dodajDoZamowienia(Request $request){
        $item = [
            'product_id' => $request->input('product_id'),
            'color_variant_id' => $request->input('color_variant_id'),
            'size_variant_id' => $request->input('size_variant_id'),
            'notes' => $request->input('notes'),
        ];

        $zamowienie = session()->get('zamowienie', []);
        $zamowienie[] = $item;
        session()->put('zamowienie', $zamowienie);

        return redirect()->route('zamowienie')->with('success', 'Produkt dodany do zamówienia');

    }
}
