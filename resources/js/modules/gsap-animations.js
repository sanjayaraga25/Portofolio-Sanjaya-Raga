import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export default function initGsapAnimations() {
    const sections = document.querySelectorAll('section[id]');
    sections.forEach((section) => {
        if (section.id === 'hero') return;

        const reveals = section.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');
        if (!reveals.length) return;

        const directionMap = {
            'reveal': { y: 50, x: 0, scale: 1 },
            'reveal-left': { y: 0, x: -50, scale: 1 },
            'reveal-right': { y: 0, x: 50, scale: 1 },
            'reveal-scale': { y: 0, x: 0, scale: 0.85 },
        };

        reveals.forEach((el, i) => {
            const cls = Array.from(el.classList).find((c) => directionMap[c]);
            const dir = directionMap[cls] || { y: 50, x: 0, scale: 1 };
            const delay = parseInt(el.style.transitionDelay) || 0;

            gsap.set(el, { opacity: 0, y: dir.y, x: dir.x, scale: dir.scale, filter: 'blur(4px)' });

            ScrollTrigger.create({
                trigger: el,
                start: 'top 88%',
                once: true,
                onEnter: () => {
                    gsap.to(el, {
                        opacity: 1,
                        y: 0,
                        x: 0,
                        scale: 1,
                        filter: 'blur(0px)',
                        duration: 1.1,
                        delay: delay / 1000,
                        ease: 'power3.out',
                    });
                },
            });
        });
    });


    const counters = document.querySelectorAll('.animate-counter');
    counters.forEach((counter) => {
        const target = parseInt(counter.dataset.target) || 0;

        ScrollTrigger.create({
            trigger: counter,
            start: 'top 85%',
            once: true,
            onEnter: () => {
                gsap.to(counter, {
                    innerText: target,
                    duration: 2,
                    ease: 'power2.out',
                    snap: { innerText: 1 },
                    onUpdate: () => {
                        const val = Math.round(parseFloat(counter.innerText) || 0);
                        counter.innerText = val;
                    },
                });
            },
        });
    });

    const skillCards = document.querySelectorAll('.skill-card-glow');
    skillCards.forEach((card) => {
        card.addEventListener('mouseenter', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            card.style.setProperty('--glow-x', `${x}px`);
            card.style.setProperty('--glow-y', `${y}px`);
        });
    });

    const heroContent = document.querySelector('#hero .container-portfolio');
    if (heroContent) {
        const heroItems = heroContent.querySelectorAll('.reveal');
        const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });

        tl.from(heroContent.querySelector('.badge-available')?.closest('.reveal') || heroItems[0], {
            opacity: 0,
            y: 40,
            duration: 0.8,
        })
            .from(heroItems[1], { opacity: 0, y: 40, duration: 0.8 }, '-=0.5')
            .from(heroItems[2], { opacity: 0, y: 40, duration: 0.8 }, '-=0.5')
            .from(heroItems[3], { opacity: 0, y: 40, duration: 0.8 }, '-=0.5')
            .from(heroItems[4], { opacity: 0, y: 40, duration: 0.8 }, '-=0.5')
            .from(heroItems[5], { opacity: 0, y: 40, duration: 0.8 }, '-=0.5');
    }
}
