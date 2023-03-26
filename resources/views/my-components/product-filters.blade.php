<form method="GET" class="product-filtes" action="{{ route('products') }}">

    <div class="product-filtes__element">
        <label for="price_from">Цена от</label>
        <input type="text" name="price_from" id="price_from" size="6" value="{{ request()->price_from }}">
        <label for="price_to">до</label>
        <input type="text" name="price_to" id="price_to" size="6" value="{{ request()->price_to }}">
    </div>

    <div class="product-filtes__element">
        <label for="hit">Хит</label>
        <input type="checkbox" name="hit" id="hit" @if(request()->has('hit')) checked @endif>
    </div>

    <div class="product-filtes__element">
        <label for="new">Новинка</label>
        <input type="checkbox" name="new" id="new" @if(request()->has('new')) checked @endif>
    </div>

    <div class="product-filtes__element">
        <label for="recommend">Рекомендуем</label>
        <input type="checkbox" name="recommend" id="recommend" @if(request()->has('recommend')) checked @endif>
    </div>

    <div class="product-filtes__btn-group btn-group">
        <input type="submit" class="app-btn btn-blue" value="Фильтр">
        <a href="{{ route('products') }}" class="app-btn btn-warn">Сброс</a>
    </div>
 
</form>