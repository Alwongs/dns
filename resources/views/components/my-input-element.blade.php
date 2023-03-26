@props([
    'label',
    'name',
    'type' => 'text',
    'value' => '',
    'autocomplete' => '',
    'autofocus' => false,
    'required' => false,
    'messages' => '',
    'checked' => false
])

<div class="app-form__element">
    <label for="{{ $name }}">{{ $label }}</label>
    <div class="app-form__input-block">  
           
        <input 
            id="{{ $name }}" 
            type="{{ $type }}" 
            name="{{ $name }}" 
            value="{{ $value }}" 
            @if ($checked) 
                checked 
            @endif
            {{ $autofocus ? 'autofocus' : '' }} 
            {{ $required ? 'required' : '' }} 
            autocomplete="{{ $autocomplete}}"
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