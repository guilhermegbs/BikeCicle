document.addEventListener("DOMContentLoaded", function () {
    let slideIndex = 0;
    const slides = document.querySelectorAll(".carousel-slide");
    const totalSlides = slides.length;
    const container = document.querySelector(".carousel-container");

    function showSlide(index) {
        if (index >= totalSlides) { slideIndex = 0; }
        if (index < 0) { slideIndex = totalSlides - 1; }
        
        container.style.transform = `translateX(${-slideIndex * 100}%)`;
    }

    function moveSlide(step) {
        slideIndex += step;
        showSlide(slideIndex);
    }

    // Botões de navegação
    document.querySelector(".prev").addEventListener("click", () => moveSlide(-1));
    document.querySelector(".next").addEventListener("click", () => moveSlide(1));

    // Passagem automática das imagens a cada 5 segundos
    setInterval(() => {
        moveSlide(1);
    }, 5000);

    // Garante que o primeiro slide seja mostrado corretamente ao carregar a página
    showSlide(slideIndex);
});
