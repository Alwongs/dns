<button {{ $attributes->merge(['type' => 'submit', 'class' => 'app-btn btn-default']) }}>
    {{ $slot }}
</button>
