<section id="skills" class="py-xxl bg-surface/30" x-data="{ activeCategory: 'all' }">
    <div class="container-portfolio">
        <div class="text-center mb-16">
            <h2 class="section-title mb-4 reveal">
                My <span class="gradient-text">Skills</span>
            </h2>
            <p class="section-subtitle mx-auto reveal" style="transition-delay: 0.1s">
                Technologies and tools I work with on a daily basis
            </p>

            @if (count($skillCategories) > 1)
            <div class="flex flex-wrap justify-center gap-3 mt-10 reveal" style="transition-delay: 0.2s">
                <button @click="activeCategory = 'all'"
                    class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-300"
                    :class="activeCategory === 'all' ? 'bg-tertiary text-primary shadow-glow' : 'bg-white/5 text-secondary hover:text-primary border border-white/10'">
                    All
                </button>
                @foreach ($skillCategories as $category)
                <button @click="activeCategory = '{{ $category }}'"
                    class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-300"
                    :class="activeCategory === '{{ $category }}' ? 'bg-tertiary text-primary shadow-glow' : 'bg-white/5 text-secondary hover:text-primary border border-white/10'">
                    {{ $category }}
                </button>
                @endforeach
            </div>
            @endif
        </div>

        @foreach ($skillCategories as $category)
            <div class="mb-12 reveal" style="transition-delay: {{ $loop->iteration * 100 }}ms" x-show="activeCategory === 'all' || activeCategory === '{{ $category }}'" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                <h3 class="text-2xl font-display font-semibold mb-2">{{ $category }}</h3>
                <div class="w-16 h-1 bg-tertiary rounded-full mb-8"></div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($skills->where('category', $category) as $skill)
                        <x-skill-card :skill="$skill" :delay="($loop->parent->iteration * 100) + ($loop->iteration * 80)" />
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>
