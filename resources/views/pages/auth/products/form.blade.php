<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    @isset($product)
        <h1 class="app-page__title">Редактировать продукт: {{ $product->name }}</h1>
    @else
        <h1 class="app-page__title">Добавить продукт</h1>
    @endisset

    <div class="container container__width-70">
        <form method="POST" class="app-form" enctype="multipart/form-data"
            @isset($product) 
                action="{{ route('products.update', $product)  }}"
            @else
                action="{{ route('products.store')  }}"
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

            <x-my-textarea-element :label="'Описание:'" :name="'description'" :value=" isset($product) ? $product->description : '' " />

            <x-my-input-element :label="'Цена:'" :name="'price'" :value=" isset($product) ? $product->price : '' " />  

            <x-my-input-element :label="'Кол-во:'" :name="'count'" :value=" isset($product) ? $product->count : '' " />  

            <div class="app-form__element">
                <label for="image">Картинка:</label>
                <div class="app-form__file-block">                
                    <label for="image" class="app-btn btn-default">Загрузить</label>
                    <input type="file" name="image" id="image">
                </div>
            </div>    

            @foreach([
                'hit' => 'Хит',
                'new' => 'Новинка',
                'recommend' => 'Рекомендуемые'
            ] as $field => $title)
                <x-my-checkbox-element 
                    :label="$title . ':'" :name="$field" :value=" isset($product) ? $product->$field : '' " 
                    :checked=" isset($product) && $product->$field === 1 ? true : false "
                />   
            @endforeach  

            <div class="app-form__btn-block">
                {{-- <button type="submit" class="app-btn btn-green">Сохранить</button> --}}
                <x-btn-success> Сохранить </x-btn-success>            
            </div>
        </form> 
    </div>

</x-guest-layout>