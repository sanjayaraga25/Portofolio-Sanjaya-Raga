<section id="projects" class="py-xxl" x-data="{ selectedProject: null, loading: true }">
    <div class="container-portfolio">
        <div class="text-center mb-16">
            <h2 class="section-title mb-4 reveal">
                Featured <span class="gradient-text">Projects</span>
            </h2>
            <p class="section-subtitle mx-auto reveal" style="transition-delay: 0.1s">
                A collection of projects I've worked on
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" x-init="setTimeout(() => loading = false, 300)">
            <template x-if="loading">
                <template x-for="i in 3" :key="i">
                    <div class="card overflow-hidden p-0">
                        <div class="aspect-video skeleton"></div>
                        <div class="p-6 space-y-3">
                            <div class="h-6 skeleton w-3/4"></div>
                            <div class="h-4 skeleton w-full"></div>
                            <div class="h-4 skeleton w-2/3"></div>
                        </div>
                    </div>
                </template>
            </template>

            @forelse ($projects as $project)
                <div class="reveal" style="transition-delay: {{ $loop->iteration * 120 }}ms" x-show="!loading" x-transition>
                    <x-project-card :project="$project" @click="selectedProject = {{ $project->id }}" />
                </div>
            @empty
                <div class="col-span-full text-center py-12 reveal" x-show="!loading">
                    <p class="text-secondary text-lg">No projects available yet.</p>
                </div>
            @endforelse
        </div>
    </div>

    {{-- Project Detail Modal --}}
    <template x-teleport="body">
        <div x-show="selectedProject !== null" class="fixed inset-0 z-[100] flex items-center justify-center p-4" x-cloak>
            <div class="absolute inset-0 bg-neutral/80 backdrop-blur-sm" @click="selectedProject = null"></div>
            <div class="relative glass rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto p-8" x-trap.noscroll="selectedProject !== null" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95 translate-y-4" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-95 translate-y-4">
                <button @click="selectedProject = null" class="absolute top-4 right-4 w-10 h-10 rounded-full flex items-center justify-center bg-white/5 hover:bg-white/10 transition-all text-secondary hover:text-primary">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>

                @foreach ($projects as $project)
                <div x-show="selectedProject === {{ $project->id }}" x-cloak>
                    <div class="aspect-video rounded-xl overflow-hidden mb-6 bg-surface-light">
                        @if ($project->thumbnail)
                            <img src="{{ $project->thumbnail }}" alt="{{ $project->title }}" class="w-full h-full object-cover" loading="lazy">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-4xl text-secondary">
                                <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </div>
                        @endif
                    </div>

                    <h3 class="text-2xl font-display font-bold mb-2">{{ $project->title }}</h3>
                    <p class="text-secondary leading-relaxed mb-6">{{ $project->description }}</p>

                    <div class="flex flex-wrap gap-3">
                        @if ($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" rel="noopener" class="btn-secondary text-sm">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                View Code
                            </a>
                        @endif
                        @if ($project->demo_url)
                            <a href="{{ $project->demo_url }}" target="_blank" rel="noopener" class="btn-primary text-sm">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                Live Demo
                            </a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </template>
</section>
