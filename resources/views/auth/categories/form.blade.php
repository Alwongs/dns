<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    @isset($category)
        <h1 class="app-page__title">Редактировать категорию: {{ $category->name }}</h1>
    @else
        <h1 class="app-page__title">Добавить категорию</h1>
    @endisset

    <div class="app-page__form-container">
        <form method="POST" class="app-form" enctype="multipart/form-data"
            @isset($category) 
                action="{{ route('categories.update', $category)  }}"
            @else
                action="{{ route('categories.store')  }}"
            @endisset
        >
            @isset($category) @method('PUT') @endisset  

            @csrf


            <x-my-input-element :label="'Название:'" :name="'name'" :value=" old('name', isset($category) ? $category->name : null) " /> 

            <x-my-input-element :label="'Код:'" :name="'code'" :value=" old('code', isset($category) ? $category->code : null) " />           

            <x-my-textarea-element :label="'Описание:'" :name="'description'" :value=" old('description', isset($category) ? $category->description : null) " />

            <div class="app-form__element">
                <label for="image">Картинка:</label>
                <div class="app-form__file-block">                
                    <label class="app-btn btn-default">
                        Загрузить <input type="file" name="image" id="image" >
                    </label>
                </div>
            </div>            


            <div class="app-form__btn-block">
                {{-- <button type="submit" class="app-btn btn-success">Сохранить</button> --}}
                <x-btn-success> Сохранить </x-btn-success>
            </div>
        </form> 
    </div>
</x-guest-layout>