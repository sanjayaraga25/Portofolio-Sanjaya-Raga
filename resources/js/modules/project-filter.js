export default function initProjectFilter() {
    const filterButtons = document.querySelectorAll('.project-filter-btn');
    const projects = document.querySelectorAll('.project-item');

    if (!filterButtons.length || !projects.length) return;

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter || 'all';

            projects.forEach(project => {
                if (filter === 'all' || project.dataset.category === filter) {
                    project.style.display = '';
                } else {
                    project.style.display = 'none';
                }
            });
        });
    });
}
