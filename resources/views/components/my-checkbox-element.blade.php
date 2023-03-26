@props([
    'label',
    'name',
    'messages' => '',
    'checked' => false
])

<div class="app-form__element">
    <label for="{{ $name }}">{{ $label }}</label>
    <div class="app-form__input-block">  
           
        <input  
            type="checkbox" 
            id="{{ $name }}"
            name="{{ $name }}"
            @if ($checked) 
                checked 
            @endif
        />
        @error($name)
            <ol>
                <li>{{ $message }}</li>
            </ol>
        @enderror

        @if ($messages)
            <ol {{ $attributes->merge(['class' => '']) }}>
                @foreach ((array) $messages as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ol>
        @endif        
        {{-- <x-input-error :messages="{{ $messages }}" class="mt-2" />  --}}
      
    </div>
</div>