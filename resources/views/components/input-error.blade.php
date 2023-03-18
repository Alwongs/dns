@props(['messages'])

@if ($messages)
    <ol {{ $attributes->merge(['class' => '']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ol>
@endif
