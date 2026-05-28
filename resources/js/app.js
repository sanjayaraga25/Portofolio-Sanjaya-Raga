import './bootstrap';

import Alpine from 'alpinejs';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Lenis from 'lenis';

gsap.registerPlugin(ScrollTrigger);

window.Alpine = Alpine;
Alpine.start();

import initTyping from './modules/typing';
import initParticles from './modules/particles';
import initNavbar from './modules/navbar';
import initScroll from './modules/scroll';
import initTheme from './modules/theme';
import initToast from './modules/toast';
import initContact from './modules/contact';
import initCursor from './modules/cursor';
import initLoading from './modules/loading';
import initLazyLoad from './modules/lazyload';
import initProjectFilter from './modules/project-filter';
import initAnimations from './modules/animations';
import initMagnetic from './modules/magnetic';
import initGsapAnimations from './modules/gsap-animations';
import { showToast } from './modules/toast';
window.showToast = showToast;

function initLenis() {
    const lenis = new Lenis({
        duration: 1.4,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        orientation: 'vertical',
        gestureOrientation: 'vertical',
        smoothWheel: true,
        wheelMultiplier: 1,
        touchMultiplier: 1.5,
    });

    lenis.on('scroll', ScrollTrigger.update);

    gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
    });

    gsap.ticker.lagSmoothing(0);

    return lenis;
}

document.addEventListener('DOMContentLoaded', () => {
    const lenis = initLenis();

    initGsapAnimations();

    initTyping();
    initParticles();
    initNavbar();
    initScroll();
    initTheme();
    initToast();
    initContact();
    initCursor();
    initLoading();
    initLazyLoad();
    initProjectFilter();
    initAnimations();
    initMagnetic();

    const copyBtn = document.getElementById('copyEmailBtn');
    if (copyBtn) {
        copyBtn.addEventListener('click', () => {
            navigator.clipboard.writeText(copyBtn.dataset.email).then(() => {
                showToast('Email copied!', 'success');
            }).catch(() => {
                showToast('Failed to copy email', 'error');
            });
        });
    }
});
