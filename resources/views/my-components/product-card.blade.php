<li class="product-card">

    <div class="product-card__labels">
        @if($product->isNew())
            <span class="product-card__label label-success">Новинка</span>
        @endif
        @if($product->isRecommend())        
            <span class="product-card__label label-danger">Рекомендуем</span>
        @endif

        @if($product->isHit())        
            <span class="product-card__label label-warning">Хит продаж!</span>
        @endif
    </div>

    <div class="product-card__image">
        <img src="{{ Storage::url($product->image) }}" alt="">
    </div>

    <p class="product-card__price">
        {{ $product->price }} руб
    </p>

    <h2 class="product-card__title">
       {{ $product->name }} 
    </h2>
    <p class="product-card__description">
       {{ $product->description }} 
    </p>

    <form class="product-card__btn-group" action="{{ route('basket-add', $product) }}" method="POST">
        @if($product->isAvailable())
            <button type="submit" class="app-btn btn-blue">В корзину</button>
        @else
            <button type="button" class="app-btn btn-disabled">Не доступен</button>        
        @endif
        <a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}" class="app-btn btn-default">Подробнее</a>
        @csrf
    </form>

</li>