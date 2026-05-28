export default function initTyping() {
    const el = document.getElementById('typingText');
    if (!el) return;

    const words = ['Web Applications', 'Modern UI', 'APIs', 'Digital Experiences'];
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let isPaused = false;

    function type() {
        if (isPaused) {
            setTimeout(type, 2000);
            isPaused = false;
            return;
        }

        const currentWord = words[wordIndex];

        if (isDeleting) {
            el.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
        } else {
            el.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
        }

        if (!isDeleting && charIndex === currentWord.length) {
            isPaused = true;
            isDeleting = true;
            setTimeout(type, 2000);
            return;
        }

        if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
        }

        setTimeout(type, isDeleting ? 50 : 100);
    }

    type();
}
