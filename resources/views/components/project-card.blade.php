<div {{ $attributes->merge(['class' => 'card group overflow-hidden p-0 animate-lift hover:-translate-y-3 glow-hover card-shimmer cursor-pointer']) }}>
    <div class="aspect-video bg-surface-light overflow-hidden relative">
        @if ($project->youtube_embed)
            <iframe src="{{ $project->youtube_embed }}" class="w-full h-full" frameborder="0" allowfullscreen loading="lazy"></iframe>
        @elseif ($project->thumbnail)
            <img src="{{ Storage::disk('cloudinary')->url($project->thumbnail) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700 ease-out" loading="lazy">
        @elseif ($project->video_url)
            <a href="{{ $project->video_url }}" target="_blank" rel="noopener" class="w-full h-full flex items-center justify-center text-secondary hover:text-primary transition-all" onclick="event.stopPropagation()">
                <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </a>
        @else
            <div class="w-full h-full flex items-center justify-center text-4xl text-secondary">
                <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </div>
        @endif

        <div class="absolute inset-0 bg-gradient-to-t from-neutral/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-4">
            <span class="text-sm text-primary font-medium">View Details</span>
        </div>
    </div>

    <div class="p-6">
        @if ($project->category)
            <span class="inline-block text-xs font-medium text-tertiary bg-tertiary/10 px-3 py-1 rounded-full mb-3">
                {{ $project->category }}
            </span>
        @endif
        <h3 class="text-xl font-display font-semibold mb-2 group-hover:text-tertiary transition-colors">
            {{ $project->title }}
        </h3>

        <p class="text-secondary text-sm leading-relaxed mb-4 line-clamp-3">
            {{ $project->description }}
        </p>

        <div class="flex flex-wrap gap-3">
            @if ($project->github_url)
                <a href="{{ $project->github_url }}" target="_blank" rel="noopener" class="text-sm text-secondary hover:text-primary transition-all flex items-center gap-1.5" onclick="event.stopPropagation()">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    Code
                </a>
            @endif

            @if ($project->demo_url)
                <a href="{{ $project->demo_url }}" target="_blank" rel="noopener" class="text-sm text-secondary hover:text-primary transition-all flex items-center gap-1.5" onclick="event.stopPropagation()">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    Demo
                </a>
            @endif

            @if ($project->video_url && !$project->youtube_embed)
                <a href="{{ $project->video_url }}" target="_blank" rel="noopener" class="text-sm text-secondary hover:text-primary transition-all flex items-center gap-1.5" onclick="event.stopPropagation()">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Video
                </a>
            @endif
        </div>
    </div>
</div>