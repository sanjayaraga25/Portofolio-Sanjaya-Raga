<nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-350" style="background: rgba(11,15,25,0.65); backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px); border-bottom: 1px solid rgba(255,255,255,0.06); height: 80px;">
    <div class="container-portfolio h-full flex items-center justify-between">
        <a href="#hero" class="text-2xl font-display font-bold gradient-text">
            Portfolio
        </a>

        <div class="hidden md:flex items-center gap-1 relative">
            <a href="#about" class="nav-link px-4 py-2 text-sm text-secondary hover:text-primary transition-all duration-200">About</a>
            <a href="#skills" class="nav-link px-4 py-2 text-sm text-secondary hover:text-primary transition-all duration-200">Skills</a>
            <a href="#projects" class="nav-link px-4 py-2 text-sm text-secondary hover:text-primary transition-all duration-200">Projects</a>
            <a href="#experience" class="nav-link px-4 py-2 text-sm text-secondary hover:text-primary transition-all duration-200">Experience</a>
            <a href="#services" class="nav-link px-4 py-2 text-sm text-secondary hover:text-primary transition-all duration-200">Services</a>
            <a href="#organization" class="nav-link px-4 py-2 text-sm text-secondary hover:text-primary transition-all duration-200">Organization</a>
            <a href="#contact" class="nav-link px-4 py-2 text-sm text-secondary hover:text-primary transition-all duration-200">Contact</a>
            <div class="nav-indicator" id="navIndicator"></div>
        </div>

        <div class="flex items-center gap-3">
            <button id="themeToggle" class="w-10 h-10 rounded-full flex items-center justify-center border border-white/10 text-secondary hover:text-primary hover:border-tertiary transition-all" aria-label="Toggle theme">
                <svg class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                <svg class="w-5 h-5 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
            </button>

            <button id="hamburger" class="md:hidden flex flex-col gap-1.5 p-2 relative z-50" aria-label="Toggle menu" x-data="{ open: false }" @click="open = !open; $el.classList.toggle('active')">
                <span class="w-6 h-0.5 bg-primary transition-all duration-200" :class="open ? 'rotate-45 translate-y-[7px]' : ''"></span>
                <span class="w-6 h-0.5 bg-primary transition-all duration-200" :class="open ? 'opacity-0' : ''"></span>
                <span class="w-6 h-0.5 bg-primary transition-all duration-200" :class="open ? '-rotate-45 -translate-y-[7px]' : ''"></span>
            </button>
        </div>
    </div>
</nav>

<div id="mobileMenu" class="fixed inset-0 z-40 hidden flex-col items-center justify-center gap-8 bg-neutral/95 backdrop-blur-xl" style="top: 80px;" x-data="{ open: false }" x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4">
    <a href="#about" class="text-2xl text-secondary hover:text-primary transition-all" @click="open = false">About</a>
    <a href="#skills" class="text-2xl text-secondary hover:text-primary transition-all" @click="open = false">Skills</a>
    <a href="#projects" class="text-2xl text-secondary hover:text-primary transition-all" @click="open = false">Projects</a>
    <a href="#experience" class="text-2xl text-secondary hover:text-primary transition-all" @click="open = false">Experience</a>
    <a href="#services" class="text-2xl text-secondary hover:text-primary transition-all" @click="open = false">Services</a>
    <a href="#organization" class="text-2xl text-secondary hover:text-primary transition-all" @click="open = false">Organization</a>
    <a href="#contact" class="text-2xl text-secondary hover:text-primary transition-all" @click="open = false">Contact</a>
</div>
