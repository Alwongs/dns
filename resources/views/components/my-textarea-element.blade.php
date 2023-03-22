@props([
    'label',
    'name',
    'value',
    'type' => 'text',
])

<div class="app-form__element">
    <label for="description">{{ $label }}</label>
    <div class="app-form__input-block">
        <textarea id="{{ $name }}" type="{{ $type }}" name="{{ $name }}">{{ $value }}</textarea>  
        @error($name)
            <ol>
                <li>{{ $message }}</li>
            </ol>
        @enderror                         
    </div>
</div>