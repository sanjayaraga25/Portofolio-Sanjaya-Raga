export default function initAnimations() {
    const skillBars = document.querySelectorAll('.skill-progress');
    const counters = document.querySelectorAll('.animate-counter');

    const barObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const bar = entry.target;
                const width = bar.dataset.width || bar.style.width;
                bar.style.width = '0%';
                requestAnimationFrame(() => {
                    bar.style.width = width;
                    bar.style.transition = 'width 1s cubic-bezier(0.16, 1, 0.3, 1)';
                });
                barObserver.unobserve(bar);
            }
        });
    }, { threshold: 0.3 });

    skillBars.forEach(bar => {
        bar.dataset.width = bar.style.width;
        bar.style.width = '0%';
        barObserver.observe(bar);
    });

    function animateCounter(counter) {
        const target = parseInt(counter.dataset.target) || 0;
        const duration = 2000;
        const step = Math.ceil(target / (duration / 16));
        let current = 0;

        function update() {
            current += step;
            if (current >= target) {
                counter.textContent = target + '+';
                return;
            }
            counter.textContent = current + '+';
            requestAnimationFrame(update);
        }

        update();
    }

    counters.forEach(counter => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        observer.observe(counter);
    });
}
