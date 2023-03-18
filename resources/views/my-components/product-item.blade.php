<tr class="basket-table__item">

    <td class="basket-table__name">
        <a href="{{ route('product', [$product->category->code, $product->code]) }}">
            <img height="38px" src="{{ Vite::asset('resources/images/cap1.jpg') }}">
            {{ $product->name }}
        </a>
    </td>

    <td class="basket-table__actions">
        <div class="basket-table__btn-group btn-group">
            <span>{{ $product->pivot->count }}</span>
            <form action="{{ route('basket-remove', $product) }}" method="POST">
                <button type="submit" class="app-btn btn-red">-</button>
                @csrf
            </form>
            <form action="{{ route('basket-add', $product) }}" method="POST">
                <button type="submit" class="app-btn btn-green">+</button>
                @csrf
            </form>
        </div>
    </td>

    <td class="basket-table__price">{{ $product->price }} руб.</td>

    <td class="basket-table__price">{{ $product->getPriceForCount() }} руб.</td>

</tr>