@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'alert__warning']) }}>
        {{ $status }}
    </div>
@endif
