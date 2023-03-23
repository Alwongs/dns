<tr class="app-table__item">

    <td class="app-table__name">
        <a href="{{ route('product', $product) }}">
            <img height="38px" src="{{ Storage::url($product->image) }}">
            {{ $product->name }}
        </a>
    </td>

    <td class="app-table__count">{{ $product->pivot->count }}</td>

    <td class="app-table__price">{{ $product->price }}</td>

    <td class="app-table__price-for-count">{{ $product->getPriceForCount() }}</td>

</tr>