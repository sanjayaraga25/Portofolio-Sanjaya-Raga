<a {{ $attributes->merge(['class' => 'w-10 h-10 rounded-full flex items-center justify-center border border-white/10 text-secondary hover:text-primary hover:border-tertiary transition-all']) }} target="_blank" rel="noopener">
    {{ $slot }}
</a>
