export default function initTyping() {
    const prefixEl = document.getElementById('typingPrefix');
    const wordEl = document.getElementById('typingText');
    if (!wordEl) return;

    const prefix = "An IT graduate who loves ";
    const words = ['Data Analysis', 'Machine Learning', 'Building Solutions', 'Creating Impact'];
    let state = prefixEl ? 'prefix' : 'words';
    let prefixIndex = 0;
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

        if (state === 'prefix' && prefixEl) {
            if (!isDeleting) {
                prefixEl.textContent = prefix.substring(0, prefixIndex + 1);
                prefixIndex++;
                if (prefixIndex === prefix.length) {
                    setTimeout(() => { state = 'words'; type(); }, 400);
                    return;
                }
                setTimeout(type, 60);
            }
            return;
        }

        const currentWord = words[wordIndex];

        if (isDeleting) {
            wordEl.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
        } else {
            wordEl.textContent = currentWord.substring(0, charIndex + 1);
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
