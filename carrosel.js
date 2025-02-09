let currentSlide = 0;
const slides = document.querySelectorAll('.slider .slide');
const totalSlides = slides.length;

// Função para mover para o próximo slide
function nextSlide() {
    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + 1) % totalSlides; // Faz um loop no carrossel
    slides[currentSlide].classList.add('active');
}

// Função para mover para o slide anterior
function prevSlide() {
    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides; // Faz um loop no carrossel
    slides[currentSlide].classList.add('active');
}

// Configura o intervalo de mudança automática a cada 5 segundos
setInterval(nextSlide, 5000);

// Exemplo de controles de navegação
document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowRight') {
        nextSlide();
    } else if (e.key === 'ArrowLeft') {
        prevSlide();
    }
});