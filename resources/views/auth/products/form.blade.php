<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    @isset($product)
        <h1 class="app-page__title">Редактировать продукт: {{ $product->name }}</h1>
    @else
        <h1 class="app-page__title">Добавить продукт</h1>
    @endisset

    <div class="app-page__form-container">
        <form method="POST" class="app-form"
            @isset($product) 
                action="{{ route('product.update', $product)  }}"
            @else
                action="{{ route('product.store')  }}"
            @endisset
        >
            @isset($product) @method('PUT') @endisset  
            @csrf

            <div class="app-form__element">
                <label for="category_id">Категория</label>

                <div class="app-form__input-block">                
                    <select id="category_id" name="category_id"> 
                        @foreach ($categories as $category)                            
                            <option  value="{{ $category->id }}"
                                @isset($product)
                                    @if($category->id == $product->category_id)
                                        selected
                                    @endif
                                @endisset
                            >
                                {{ $category->name }}
                            </option>
                        @endforeach  
                    </select>
                </div>
            </div>            

            <x-my-input-element :label="'Название:'" :name="'name'" :value=" isset($product) ? $product->name : '' " /> 

            <x-my-input-element :label="'Код:'" :name="'code'" :value=" isset($product) ? $product->code : '' " />

            <x-my-input-element :label="'Цена:'" :name="'price'" :value=" isset($product) ? $product->price : '' " />            

            <x-my-textarea-element :label="'Описание:'" :name="'description'" :value=" isset($product) ? $product->description : '' " />

            <div class="app-form__btn-block">
                <button type="submit" class="app-btn btn-green">Сохранить</button>
            </div>
        </form> 
    </div>
</x-guest-layout>