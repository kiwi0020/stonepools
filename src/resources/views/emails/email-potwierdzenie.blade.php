<h2>Potwierdzenie zamówienia</h2>
<p><strong>Imię i nazwisko:</strong> {{ $order->first_name }} {{ $order->last_name }}</p>
<p><strong>Telefon:</strong> {{ $order->phone }}</p>
<p><strong>Email:</strong> {{ $order->email }}</p>

<h3>Produkty:</h3>
<ul>
    @foreach($items as $item)
        <li>
            <strong>{{ $item['product_name'] }}</strong><br>
            Rozmiar: {{ $item['size'] }}<br>
            Kolor: {{ $item['color'] }}<br>
            Opis: {{ $item['description'] }}
        </li>
    @endforeach
</ul>
