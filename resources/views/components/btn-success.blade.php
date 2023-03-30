<button {{ $attributes->merge(['type' => 'submit', 'name' => 'submit', 'class' => 'app-btn btn-success']) }}>
    {{ $slot }}
</button>
