<button {{ $attributes->merge(['type' => 'button', 'class' => 'app-btn btn-default']) }}>
    {{ $slot }}
</button>
