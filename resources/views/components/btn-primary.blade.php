<button {{ $attributes->merge(['type' => 'submit', 'class' => 'app-btn btn-primary']) }}>
    {{ $slot }}
</button>
