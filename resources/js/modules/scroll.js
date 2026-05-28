export default function initScroll() {
    const progressBar = document.getElementById('scrollProgress');
    const backToTop = document.getElementById('backToTop');
    const ring = backToTop?.querySelector('svg circle:last-child');

    function updateScrollProgress() {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;

        if (progressBar) {
            progressBar.style.width = `${Math.min(progress, 100)}%`;
        }

        if (backToTop) {
            if (scrollTop > 400) {
                backToTop.classList.remove('opacity-0', 'invisible');
                backToTop.classList.add('opacity-100', 'visible');
            } else {
                backToTop.classList.add('opacity-0', 'invisible');
                backToTop.classList.remove('opacity-100', 'visible');
            }
        }

        if (ring) {
            const circumference = 2 * Math.PI * 20;
            ring.style.strokeDashoffset = `${circumference - (progress / 100) * circumference}`;
        }
    }

    window.addEventListener('scroll', updateScrollProgress, { passive: true });

    if (backToTop) {
        backToTop.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    updateScrollProgress();
}
