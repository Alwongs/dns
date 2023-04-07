

<p>Уважаемый {{ $name }}</p>

<p>Ваш заказ на сумму {{ $fullSum }} создан</p>

<table class="app-table">
    <tbody>
        @foreach ($order->products as $product)
            <tr>
                <td> {{ $product->name }} </td>
                <td> {{ $product->count }} </td>
                <td> {{ $product->price }} </td>
                <td> {{ $product->getPriceForCount() }} </td>
            </tr>
        @endforeach
    </tbody>
</table>