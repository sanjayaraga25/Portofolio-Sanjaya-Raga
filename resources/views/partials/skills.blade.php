<section id="skills" class="py-xxl bg-surface/30 overflow-hidden" x-data="{ activeCategory: 'all' }">
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

        @php
            $skillIconMap = [
                'Python' => '<svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="currentColor" style="color:#3776AB"><path d="M14.25 3C14.25 3 12 7.5 12 12C12 16.5 14.25 21 14.25 21H9.75C9.75 21 12 16.5 12 12C12 7.5 9.75 3 9.75 3H14.25Z"/><path d="M3 12H21"/></svg>',
                'SQL' => '<svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="currentColor" style="color:#F29111"><path d="M12 0C8.5 0 5 1.5 5 4.5V7H2C1.5 7 1 7.5 1 8V20C1 20.5 1.5 21 2 21H18C18.5 21 19 20.5 19 20V8C19 7.5 18.5 7 18 7H8V5C8 3 9.5 2.5 11 2.5C13 2.5 14 3.5 14 5V6H16V5C16 2 14 0 12 0ZM5 10H7V12H5V10ZM13 10H15V12H13V10Z"/></svg>',
                'Data Analysis' => '<svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="currentColor" style="color:#34D399"><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/></svg>',
                'Machine Learning' => '<svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="currentColor" style="color:#A78BFA"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>',
                'Data Visualization' => '<svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="currentColor" style="color:#F472B6"><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/></svg>',
                'VS Code' => '<svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="currentColor" style="color:#3B82F6"><path d="M23.15 2.587L18.21.21a1.494 1.494 0 0 0-1.705.29L4.81 12.178l-3.425-2.744a1.02 1.02 0 0 0-1.26.032L0 12.05l.125.125-3.4 2.73a1.02 1.02 0 0 0 .134 1.67l3.357 2.174L16.504 23.5a1.494 1.494 0 0 0 1.705.29l4.942-2.377A1.5 1.5 0 0 0 24 20.06V3.939a1.5 1.5 0 0 0-.85-1.352zm-5.146 14.279l-6.773-4.866 6.773-4.866v9.732z"/></svg>',
                'PyCharm' => '<svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="currentColor" style="color:#22C55E"><path d="M7.066 6.934a2.607 2.607 0 0 1 2.655-2.791c1.32 0 2.487.645 2.734 2.125.276 1.657-.489 3.423-2.19 3.423-1.423 0-2.561-.717-3.114-2.423l-.085-.334zm3.467 4.679c1.773 0 3.446.907 4.086 2.807l.322.96-1.528.627-.309-.906c-.354-1.04-1.179-1.46-2.274-1.46-1.576 0-2.467.992-2.467 2.625v.652c0 3.718 5.732 2.62 5.732 7.509 0 3.223-2.679 5.173-5.807 5.173-4.186 0-5.289-2.989-5.289-2.989l1.62-.78s1.001 1.882 3.771 1.882c2.017 0 3.236-1.128 3.236-2.895 0-4.482-5.739-3.186-5.739-7.854 0-2.919 2.147-5.571 5.666-5.571zM0 0h24v24H0V0z"/></svg>',
                'Jupyter Notebook' => '<svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="currentColor" style="color:#F59E0B"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>',
                'Figma' => '<svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="currentColor" style="color:#A855F7"><path d="M21.5 0H2.5C1.12 0 0 1.12 0 2.5v19C0 22.88 1.12 24 2.5 24h19c1.38 0 2.5-1.12 2.5-2.5v-19C24 1.12 22.88 0 21.5 0zM12 19c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7z"/></svg>',
                'Microsoft Excel' => '<svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="currentColor" style="color:#22C55E"><path d="M6 2h12v2H6zM4 4h2v16H4zM18 4h2v16h-2zM6 6h2v2H6zM16 6h2v2h-2zM6 10h2v2H6zM16 10h2v2h-2zM6 14h2v2H6zM16 14h2v2h-2zM6 18h2v2H6zM16 18h2v2h-2z"/></svg>',
                'OBS Studio' => '<svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="currentColor" style="color:#F97316"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 14h-3v-4H8v4H5V8h3v4h1V8h3v4h2V8h3v8z"/></svg>',
                'UI/UX Design' => '<svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:#EC4899"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>',
                'System Analysis' => '<svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:#60A5FA"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>',
                'Problem Solving' => '<svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:#FBBF24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>',
                'Video Editing' => '<svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:#D946EF"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>',
            ];
        @endphp

        @foreach ($skillCategories as $category)
            @php
                $categorySkills = $skills->where('category', $category);
                $durations = ['25s', '30s', '20s', '35s'];
                $duration = $durations[$loop->index % count($durations)];
                $direction = $loop->index % 2 === 0 ? 'normal' : 'reverse';
            @endphp

            <div class="mb-14 reveal" style="transition-delay: {{ $loop->iteration * 100 }}ms"
                x-show="activeCategory === 'all' || activeCategory === '{{ $category }}'"
                x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0">

                <h3 class="text-xl font-display font-semibold mb-6 text-primary/80 flex items-center gap-3">
                    <span class="w-1.5 h-1.5 rounded-full bg-tertiary glow inline-block"></span>
                    {{ $category }}
                </h3>

                <div class="skills-marquee">
                    <div class="skills-marquee-inner" style="--marquee-duration: {{ $duration }}; animation-direction: {{ $direction }}">
                        @foreach ($categorySkills as $skill)
                            <span class="skill-chip">
                                {!! $skillIconMap[$skill->name] ?? '<svg class="w-5 h-5 shrink-0 text-secondary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>' !!}
                                <span>{{ $skill->name }}</span>
                            </span>
                        @endforeach
                        @foreach ($categorySkills as $skill)
                            <span class="skill-chip" aria-hidden="true">
                                {!! $skillIconMap[$skill->name] ?? '<svg class="w-5 h-5 shrink-0 text-secondary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>' !!}
                                <span>{{ $skill->name }}</span>
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
