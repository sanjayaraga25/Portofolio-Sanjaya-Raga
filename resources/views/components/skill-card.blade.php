<div class="card group relative overflow-hidden skill-card-glow reveal" style="transition-delay: {{ $delay ?? 0 }}ms">
    <div class="relative z-10">
        <div class="flex items-center gap-4 mb-4">
            <div class="w-12 h-12 rounded-xl bg-tertiary/10 flex items-center justify-center text-tertiary text-xl group-hover:bg-tertiary/20 group-hover:scale-110 transition-all duration-300">
                @if ($skill->icon)
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                @else
                    <span class="text-lg font-bold">#</span>
                @endif
            </div>

            <div>
                <h4 class="font-display font-semibold group-hover:text-tertiary transition-colors">{{ $skill->name }}</h4>
                <p class="text-xs text-secondary">{{ $skill->category }}</p>
            </div>
        </div>


    </div>

    <div class="absolute -inset-1 bg-gradient-to-r from-tertiary/0 via-tertiary/5 to-accent/0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-[23px] pointer-events-none"></div>
</div>
