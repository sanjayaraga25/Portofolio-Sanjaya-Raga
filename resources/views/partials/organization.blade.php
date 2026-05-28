<section id="organization" class="py-xxl">
    <div class="container-portfolio">
        <div class="text-center mb-16">
            <h2 class="section-title mb-4 reveal">
                Organization <span class="gradient-text">Experience</span>
            </h2>
            <p class="section-subtitle mx-auto reveal" style="transition-delay: 0.1s">
                My involvement in organizational activities and leadership roles
            </p>
        </div>

        <div class="max-w-3xl mx-auto space-y-6">
            @forelse ($organizations as $org)
                <div class="card reveal" style="transition-delay: {{ $loop->iteration * 150 }}ms">
                    <div class="flex items-start gap-5">
                        <div class="w-14 h-14 rounded-xl bg-accent/10 flex items-center justify-center text-accent shrink-0 mt-1 group-hover:bg-accent/20 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3 mb-1">
                                <h3 class="text-xl font-display font-semibold">{{ $org->title }}</h3>
                                <span class="px-3 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">{{ $org->company }}</span>
                            </div>
                            <p class="text-secondary text-sm">
                                {{ $org->start_date->format('Y') }} — {{ $org->end_date ? $org->end_date->format('Y') : 'Present' }}
                            </p>
                            @if ($org->description)
                                <p class="text-secondary mt-3 leading-relaxed">{{ $org->description }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center py-12">
                    <p class="text-secondary text-lg">No organization experience listed yet.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
