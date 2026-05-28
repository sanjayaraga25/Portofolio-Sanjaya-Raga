<section id="services" class="py-xxl">
    <div class="container-portfolio">
        <div class="text-center mb-16">
            <h2 class="section-title mb-4 reveal">
                What <span class="gradient-text">I Do</span>
            </h2>
            <p class="section-subtitle mx-auto reveal" style="transition-delay: 0.1s">
                Services I offer to help bring your ideas to life
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @forelse ($services as $service)
                <div class="card text-center group animate-lift hover:-translate-y-3 reveal" style="transition-delay: {{ $loop->iteration * 100 }}ms">
                    <div class="w-14 h-14 mx-auto mb-6 rounded-full bg-tertiary/10 flex items-center justify-center text-tertiary text-2xl group-hover:bg-tertiary/20 group-hover:scale-110 group-hover:rotate-[8deg] transition-all duration-300">
                        @switch($service->icon)
                            @case('code')
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                @break
                            @case('camera')
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                                @break
                            @case('video')
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"/></svg>
                                @break
                            @case('palette')
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
                                @break
                            @default
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        @endswitch
                    </div>

                    <h3 class="text-xl font-display font-semibold mb-3 group-hover:text-tertiary transition-colors">{{ $service->title }}</h3>
                    <p class="text-secondary leading-relaxed">{{ $service->description }}</p>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-secondary text-lg">No services listed yet.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
