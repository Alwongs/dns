<button {{ $attributes->merge(['type' => 'submit', 'class' => 'app-btn btn-danger']) }}>
    {{ $slot }}
</button>
