export default function initLazyLoad() {
    if (!('IntersectionObserver' in window)) return;

    const images = document.querySelectorAll('img[loading="lazy"]');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src || img.src;
                img.classList.add('opacity-100');
                observer.unobserve(img);
            }
        });
    }, { rootMargin: '200px' });

    images.forEach(img => observer.observe(img));
}
