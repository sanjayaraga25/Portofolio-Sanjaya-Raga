import { showToast } from './toast';

export default function initContact() {
    const form = document.getElementById('contactForm');
    if (!form || form.dataset.alpineHandled) return;

    form.dataset.alpineHandled = 'true';

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;

        submitBtn.disabled = true;
        submitBtn.innerHTML = `
            <svg class="w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"/></svg>
            Sending...
        `;

        try {
            const resp = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                },
                body: JSON.stringify({
                    name: form.querySelector('[name="name"]').value,
                    email: form.querySelector('[name="email"]').value,
                    subject: form.querySelector('[name="subject"]').value,
                    message: form.querySelector('[name="message"]').value,
                }),
            });

            const data = await resp.json();

            if (resp.ok) {
                form.reset();
                showToast('Message sent successfully!', 'success');
            } else if (data.errors) {
                Object.values(data.errors).flat().forEach((msg) => {
                    showToast(msg, 'error');
                });
            } else {
                showToast(data.message || 'Something went wrong', 'error');
            }
        } catch (err) {
            showToast('Network error. Please try again.', 'error');
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
        }
    });
}
