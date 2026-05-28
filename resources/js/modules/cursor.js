import { gsap } from 'gsap';

export default function initCursor() {
    const cursor = document.getElementById('cursorGlow');
    if (cursor) return;

    const div = document.createElement('div');
    div.id = 'cursorGlow';
    div.style.cssText = `
        position: fixed;
        pointer-events: none;
        z-index: 9998;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(139,92,246,0.12) 0%, rgba(56,189,248,0.06) 40%, transparent 70%);
        transform: translate(-50%, -50%);
        transition: opacity 0.3s ease;
        opacity: 0;
    `;
    document.body.appendChild(div);

    let mouseX = 0;
    let mouseY = 0;

    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        div.style.opacity = '1';

        gsap.to(div, {
            x: mouseX,
            y: mouseY,
            duration: 0.3,
            ease: 'power2.out',
        });
    });

    document.addEventListener('mouseleave', () => {
        div.style.opacity = '0';
    });

    const interactiveElements = document.querySelectorAll('a, button, .card, .tech-chip, .btn-primary, .btn-secondary');
    interactiveElements.forEach((el) => {
        el.addEventListener('mouseenter', () => {
            gsap.to(div, {
                scale: 1.5,
                duration: 0.3,
                ease: 'power2.out',
            });
        });
        el.addEventListener('mouseleave', () => {
            gsap.to(div, {
                scale: 1,
                duration: 0.3,
                ease: 'power2.out',
            });
        });
    });
}
