<footer class="py-xl border-t border-border relative">
    <div class="container-portfolio">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            <p class="text-secondary text-sm">
                &copy; {{ date('Y') }} Sanjaya Raga Weninggalih. All rights reserved.
            </p>

            <div class="flex gap-3">
                <a href="https://github.com" target="_blank" rel="noopener" class="w-10 h-10 rounded-full flex items-center justify-center border border-white/10 text-secondary hover:text-primary hover:border-tertiary hover:bg-tertiary/10 hover:scale-110 transition-all">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                </a>
                <a href="https://linkedin.com" target="_blank" rel="noopener" class="w-10 h-10 rounded-full flex items-center justify-center border border-white/10 text-secondary hover:text-primary hover:border-tertiary hover:bg-tertiary/10 hover:scale-110 transition-all">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
                <a href="https://instagram.com" target="_blank" rel="noopener" class="w-10 h-10 rounded-full flex items-center justify-center border border-white/10 text-secondary hover:text-primary hover:border-tertiary hover:bg-tertiary/10 hover:scale-110 transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                </a>
                <button id="shareBtn" class="w-10 h-10 rounded-full flex items-center justify-center border border-white/10 text-secondary hover:text-primary hover:border-tertiary hover:bg-tertiary/10 hover:scale-110 transition-all" aria-label="Share portfolio" onclick="if (navigator.share) { navigator.share({title: 'Portfolio', url: window.location.href}); } else { showToast('Share not supported', 'warning'); }">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
                </button>
            </div>
        </div>

        <div class="text-center mt-8">
            <p class="text-xs text-border">Built with Laravel + TailwindCSS + Alpine.js + GSAP</p>
        </div>
    </div>
</footer>

<a href="#hero" id="backToTop" class="back-to-top-ring fixed bottom-8 right-8 w-14 h-14 rounded-full glass flex items-center justify-center text-primary hover:text-tertiary hover:border-tertiary transition-all opacity-0 invisible z-40" aria-label="Back to top">
    <svg class="w-5 h-5 absolute z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
    <svg class="w-14 h-14 absolute -rotate-90" viewBox="0 0 48 48" fill="none">
        <defs>
            <linearGradient id="progressGrad" x1="0" y1="0" x2="1" y2="1">
                <stop stop-color="#8B5CF6"/>
                <stop offset="1" stop-color="#38BDF8"/>
            </linearGradient>
        </defs>
        <circle cx="24" cy="24" r="20" stroke="rgba(255,255,255,0.08)" stroke-width="2"/>
        <circle cx="24" cy="24" r="20" stroke="url(#progressGrad)" stroke-width="2" stroke-linecap="round" stroke-dasharray="125.6" stroke-dashoffset="125.6" style="transition: stroke-dashoffset 0.35s ease"/>
    </svg>
</a>
