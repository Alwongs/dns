<button {{ $attributes->merge(['type' => 'submit', 'class' => 'app-btn btn-green']) }}>
    {{ $slot }}
</button>
