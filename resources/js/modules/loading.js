import { gsap } from 'gsap';

export default function initLoading() {
    const screen = document.getElementById('loadingScreen');
    if (!screen) return;

    const tl = gsap.timeline({
        onComplete: () => {
            screen.style.display = 'none';
        },
    });

    tl.to(screen.querySelector('.spinner'), {
        scale: 0.8,
        opacity: 0,
        duration: 0.3,
        ease: 'power2.in',
    })
        .to(screen, {
            opacity: 0,
            duration: 0.6,
            ease: 'power2.out',
        }, '-=0.2')
        .to(screen, {
            visibility: 'hidden',
            duration: 0,
        }, '+=0.1');
}
