<section id="hero" class="min-h-screen flex items-center relative overflow-hidden bg-grid-pattern" x-data>
    <div class="orb w-[500px] h-[500px] bg-tertiary/10 -top-48 -left-48 animate-float"></div>
    <div class="orb w-[600px] h-[600px] bg-accent/8 -bottom-48 -right-48 animate-float-delayed"></div>
    <div class="orb w-[300px] h-[300px] bg-tertiary/5 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 animate-float"></div>

    <div class="absolute inset-0 bg-gradient-to-br from-tertiary/10 via-transparent to-accent/10 animate-gradient"></div>

    <canvas id="particles" class="absolute inset-0"></canvas>

    <div class="absolute inset-0 pointer-events-none" id="heroParallax" style="z-index: 1;">
        <div class="absolute top-20 left-[15%] w-2 h-2 rounded-full bg-tertiary/30" data-speed="0.3"></div>
        <div class="absolute top-40 right-[20%] w-3 h-3 rounded-full bg-accent/20" data-speed="0.5"></div>
        <div class="absolute bottom-32 left-[25%] w-1.5 h-1.5 rounded-full bg-tertiary/25" data-speed="0.4"></div>
        <div class="absolute bottom-48 right-[15%] w-2.5 h-2.5 rounded-full bg-accent/15" data-speed="0.6"></div>
    </div>

    <div class="container-portfolio relative z-10 grid md:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
            <div class="reveal">
                <div class="flex items-center gap-4 mb-2">
                    <span class="badge-available">Available for work</span>
                </div>
                <p class="text-tertiary font-medium tracking-wider uppercase text-sm">Informatics Graduate</p>
            </div>

            <h1 class="text-5xl md:text-6xl lg:text-7xl font-display font-bold leading-tight reveal" style="transition-delay: 0.1s">
                Hi, I'm <span class="gradient-text">Sanjaya Raga Weninggalih</span>
            </h1>

            <p class="text-xl md:text-2xl text-secondary reveal" style="transition-delay: 0.2s">
                <span id="typingPrefix" class="text-primary font-medium"></span><span id="typingText" class="text-tertiary font-medium"></span>
                <span class="inline-block w-0.5 h-6 bg-tertiary ml-1 animate-pulse align-middle"></span>
            </p>

            <div class="flex flex-wrap gap-2 reveal" style="transition-delay: 0.25s">
                <span class="px-3 py-1 rounded-full text-xs font-medium bg-tertiary/10 text-tertiary border border-tertiary/20">Data Analyst Enthusiast</span>
                <span class="px-3 py-1 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">ML Enthusiast</span>
                <span class="px-3 py-1 rounded-full text-xs font-medium bg-white/5 text-secondary border border-white/10">IT Support</span>
                <span class="px-3 py-1 rounded-full text-xs font-medium bg-white/5 text-secondary border border-white/10">Multimedia Production</span>
            </div>

            <div class="flex flex-wrap gap-4 pt-4 reveal" style="transition-delay: 0.3s">
                <a href="#projects" class="btn-primary magnetic-btn">
                    View Projects
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </a>
                <a href="{{ asset('assets/cv/cv.pdf') }}" target="_blank" rel="noopener" class="btn-secondary magnetic-btn">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Download CV
                </a>
                <a href="#contact" class="btn-secondary magnetic-btn">
                    Contact Me
                </a>
            </div>

            <div class="flex gap-4 pt-4 reveal" style="transition-delay: 0.5s">
                <a href="https://github.com/sanjayaraga25" target="_blank" rel="noopener" class="w-10 h-10 rounded-full flex items-center justify-center border border-white/10 text-secondary hover:text-primary hover:border-tertiary hover:bg-tertiary/10 transition-all hover:scale-110">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                </a>
                <a href="https://www.linkedin.com/in/sanjayaraga25" target="_blank" rel="noopener" class="w-10 h-10 rounded-full flex items-center justify-center border border-white/10 text-secondary hover:text-primary hover:border-tertiary hover:bg-tertiary/10 transition-all hover:scale-110">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
            </div>
        </div>

        <div class="hidden md:flex justify-center reveal" style="transition-delay: 0.3s">
            <div class="relative" x-data="{ rotateX: 0, rotateY: 0 }" x-on:mousemove="rotateY = (event.offsetX / $el.offsetWidth - 0.5) * 10; rotateX = (event.offsetY / $el.offsetHeight - 0.5) * -10" x-on:mousleave="rotateX = 0; rotateY = 0">
                <div class="orb w-64 h-64 bg-tertiary/20 absolute -top-8 -right-8 blur-[100px]"></div>
                <div class="w-80 h-96 rounded-2xl glass p-3 relative" :style="`transform: perspective(800px) rotateX(${rotateX}deg) rotateY(${rotateY}deg); transition: transform 0.2s ease`">
                    <div class="w-full h-full rounded-xl bg-gradient-to-br from-tertiary/20 to-accent/20 flex flex-col items-center justify-center gap-5 p-6">
                        <img src="{{ asset('assets/images/profile.png') }}"
                             alt="Sanjaya Raga Weninggalih"
                             class="w-28 h-28 rounded-full object-cover ring-4 ring-tertiary/30 ring-offset-4 ring-offset-neutral/50 shadow-glow shrink-0">
                        <div class="text-center">
                            <p class="text-primary text-xl font-display font-bold leading-tight">Sanjaya Raga</p>
                            <p class="text-primary text-xl font-display font-bold leading-tight">Weninggalih</p>
                            <p class="text-tertiary text-sm font-medium mt-2">Informatics Graduate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
    </div>
</section>
