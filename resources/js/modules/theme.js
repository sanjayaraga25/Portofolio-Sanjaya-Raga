export default function initTheme() {
    const toggle = document.getElementById('themeToggle');
    if (!toggle) return;

    const html = document.documentElement;
    const saved = localStorage.getItem('theme') || 'dark';

    function setTheme(theme) {
        html.classList.toggle('dark', theme === 'dark');
        html.classList.toggle('light', theme === 'light');
        localStorage.setItem('theme', theme);
    }

    setTheme(saved);

    toggle.addEventListener('click', () => {
        const current = html.classList.contains('dark') ? 'light' : 'dark';
        setTheme(current);
    });
}
