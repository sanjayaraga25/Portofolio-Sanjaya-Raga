import Alpine from 'alpinejs';

document.addEventListener('alpine:init', () => {
    Alpine.store('toasts', {
        items: [],

        add(message, type = 'info', duration = 4000) {
            this.items.push({ message, type, duration });
        },

        remove(index) {
            this.items.splice(index, 1);
        },
    });
});

export function showToast(message, type = 'info', duration = 4000) {
    if (Alpine.store('toasts')) {
        Alpine.store('toasts').add(message, type, duration);
    }
}

export default function initToast() {
}
