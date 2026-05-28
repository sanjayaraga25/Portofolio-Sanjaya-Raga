<section id="experience" class="py-xxl bg-surface/30">
    <div class="container-portfolio">
        <div class="text-center mb-16">
            <h2 class="section-title mb-4 reveal">
                Work <span class="gradient-text">Experience</span>
            </h2>
            <p class="section-subtitle mx-auto reveal" style="transition-delay: 0.1s">
                My professional journey and career highlights
            </p>
        </div>

        <div class="max-w-3xl mx-auto relative">
            <div class="absolute left-4 md:left-1/2 top-0 bottom-0 w-px bg-border -translate-x-1/2 overflow-hidden">
                <div class="w-full h-0 bg-gradient-to-b from-tertiary to-accent timeline-line-fill"></div>
            </div>

            <div class="space-y-12">
                @forelse ($experiences as $experience)
                    <div class="reveal" style="transition-delay: {{ $loop->iteration * 150 }}ms">
                        <x-timeline-item :experience="$experience" :even="$loop->even" />
                    </div>
                @empty
                    <div class="text-center py-12">
                        <p class="text-secondary text-lg">No experience listed yet.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>
