<div class="relative flex flex-col md:flex-row gap-6 md:gap-12 pl-10 md:pl-0 group">
    <div class="md:w-1/2 md:text-right {{ $even ?? false ? 'md:order-2' : '' }}">
        <div class="md:pr-8">
            <h3 class="text-xl font-display font-semibold group-hover:text-tertiary transition-colors">{{ $experience->title }}</h3>
            <p class="text-tertiary font-medium mt-1">{{ $experience->company }}</p>
            <p class="text-secondary text-sm mt-1">
                {{ $experience->start_date->format('M Y') }} —
                {{ $experience->end_date ? $experience->end_date->format('M Y') : 'Present' }}
            </p>
            @if ($experience->description)
                <p class="text-secondary mt-3 leading-relaxed">{{ $experience->description }}</p>
            @endif
        </div>
    </div>

    <div class="absolute left-2 md:left-1/2 md:-translate-x-1/2 w-5 h-5 rounded-full border-[3px] border-tertiary bg-neutral z-10 group-hover:shadow-glow group-hover:scale-125 transition-all duration-300" style="top: 6px;">
        <div class="w-2 h-2 rounded-full bg-tertiary absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 animate-pulse"></div>
    </div>

    <div class="md:w-1/2 {{ $even ?? false ? 'md:order-1' : '' }}">
    </div>
</div>
