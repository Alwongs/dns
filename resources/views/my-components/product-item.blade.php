<tr class="app-table__item">

    <td class="app-table__name">
        <a href="{{ route('product', [$product->category->code, $product->code]) }}">
            <img height="38px" src="{{ Storage::url($product->image) }}">
            {{ $product->name }}
        </a>
    </td>

    <td class="app-table__actions">
        <div class="app-table__btn-group btn-group">
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

    <td class="app-table__price">{{ $product->price }} руб.</td>

    <td class="app-table__price">{{ $product->getPriceForCount() }} руб.</td>

</tr>