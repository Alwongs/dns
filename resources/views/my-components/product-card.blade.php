<li class="product-card">

    <div class="product-card__image">
        <img src="{{ Storage::url($product->image) }}" alt="">
    </div>

    <h2 class="product-card__title">
       {{ $product->name }} 
    </h2>

    <p class="product-card__price">
        {{ $product->price }} руб
    </p>

    <div class="product-card__btn-group">
        <form action="{{ route('basket-add', $product) }}" method="POST">
            <button type="submit" href="{{ route('basket') }}" class="app-btn btn-blue">В корзину</button>
            <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="app-btn btn-default">Подробнее</a>
            @csrf
        </form>
    </div>

</li>