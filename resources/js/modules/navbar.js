export default function initNavbar() {
    const navbar = document.getElementById('navbar');
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    const navLinks = document.querySelectorAll('.nav-link');
    const indicator = document.getElementById('navIndicator');

    if (!navbar) return;

    let lastScroll = 0;

    function updateScrollState() {
        const current = window.scrollY;

        if (current > 80) {
            navbar.style.background = 'rgba(11,15,25,0.85)';
            navbar.style.backdropFilter = 'blur(20px)';
            navbar.style.borderBottomColor = 'rgba(255,255,255,0.1)';
        } else {
            navbar.style.background = 'rgba(11,15,25,0.65)';
            navbar.style.backdropFilter = 'blur(14px)';
            navbar.style.borderBottomColor = 'rgba(255,255,255,0.06)';
        }

        if (current > lastScroll && current > 200) {
            navbar.style.transform = 'translateY(-100%)';
        } else {
            navbar.style.transform = 'translateY(0)';
        }

        lastScroll = current;
    }

    function updateActiveLink() {
        if (!navLinks.length || !indicator) return;

        let currentSection = '';
        const scrollPos = window.scrollY + 150;

        document.querySelectorAll('section[id]').forEach((section) => {
            const top = section.offsetTop;
            const height = section.offsetHeight;
            if (scrollPos >= top && scrollPos < top + height) {
                currentSection = section.getAttribute('id');
            }
        });

        navLinks.forEach((link) => {
            link.classList.remove('text-primary');
            link.classList.add('text-secondary');
            if (link.getAttribute('href') === `#${currentSection}`) {
                link.classList.remove('text-secondary');
                link.classList.add('text-primary');
            }
        });

        const activeLink = document.querySelector(`.nav-link[href="#${currentSection}"]`);
        if (activeLink && indicator) {
            const parent = activeLink.parentElement.getBoundingClientRect();
            const el = activeLink.getBoundingClientRect();
            indicator.style.width = `${el.width}px`;
            indicator.style.left = `${el.left - parent.left}px`;
        }
    }

    let ticking = false;
    function onScroll() {
        if (!ticking) {
            requestAnimationFrame(() => {
                updateScrollState();
                updateActiveLink();
                ticking = false;
            });
            ticking = true;
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true });

    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.contains('flex');
            mobileMenu.classList.toggle('flex', !isOpen);
            mobileMenu.classList.toggle('hidden', isOpen);
            hamburger.classList.toggle('active');
            document.body.style.overflow = isOpen ? '' : 'hidden';
        });

        mobileMenu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
                hamburger.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }

    updateScrollState();
    setTimeout(updateActiveLink, 100);
}
