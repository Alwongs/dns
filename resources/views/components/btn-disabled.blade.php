<button {{ $attributes->merge(['type' => 'button', 'style' => 'cursor:default;', 'class' => 'app-btn btn-disabled']) }}>
    {{ $slot }}
</button>
