let current = 0;
const slides = document.querySelectorAll('.slide');

function moveSlide(step) {
    slides[current].classList.remove('active');
    current = (current + step + slides.length) % slides.length;
    slides[current].classList.add('active');
}

// Auto-advance
setInterval(() => moveSlide(1), 6000);