<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\ZamowieniePotwierdzenieMail;

class OrderController extends Controller
{
    public function dodajDoZamowienia(Request $request){
        $productId = $request->product_id;
        $productName = $request->product_name;
        $sizeVariant = ProductVariant::find($request->size_variant_id);
        $colorVariant = ProductVariant::find($request->color_variant_id);

        $order = Session::get('order', []);

        $order[] = [
            'product_id' => $productId,
            'product_name' => $productName ?? 'Brak nazwy',
            'size' => $sizeVariant ? $sizeVariant->name : 'Brak rozmiaru',
            'color' => $colorVariant ? $colorVariant->name : 'Brak koloru',
            'description' => $request->description ?? '',
        ];

        Session::put('order', $order);

        return redirect()->back()->with('success', 'Produkt został dodany do zamówienia.');
    }

    public function pokazFormularz(){
        $order = session('order', []);
        return view('zamowienie', compact('order'));
    }

    public function usunProdukt($index){
        $order = session('order', []);

        if(isset($order[$index])) {
            unset($order[$index]);
            $order = array_values($order);
            session(['order' => $order]);
        }

        return redirect()->back()->with('success', 'Produkt został usunięty z zamówienia');
    }

    public function finalizuj(Request $request){
        $orderData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
        ]);

        // Tworzymy zamówienie (dane klienta)
        $order = Order::create($orderData);

        // Pobieramy produkty z sesji
        $items = session('order', []);

        // Zapisujemy każdy produkt jako element zamówienia
        foreach ($items as $item){
            
            $order->items()->create([
                'product_id' => $item['product_id'],
                'product_name' => $item['product_name'] ?? 'Brak nazwy',
                'size' => $item['size'] ?? 'Brak rozmiaru',
                'color' => $item['color'] ?? 'Brak koloru',
                'description' => $item['description'] ?? '',
            ]);
        }

        // Czyścimy koszyk z sesji
        session()->forget('order');

        Mail::to($order->email)->send(new ZamowieniePotwierdzenieMail($order, $items));

        Mail::to('michalwedzina@gmail.com')->send(new ZamowieniePotwierdzenieMail($order, $items));

        return redirect()->route('zamowienie.potwierdzenie')->with('success', 'Zamówienie zostało złożone.');
    }
}
