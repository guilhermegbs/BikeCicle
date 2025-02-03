.carousel {
    position: relative;
    max-width: 800px;
    margin: 30px auto;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.carousel-container {
    display: flex;
    transition: transform 0.5s ease-in-out;
    width: 500%; /* Ajustado para o número de imagens */
}

.carousel-slide {
    min-width: 100%;
}

.carousel-slide img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    font-size: 20px;
    border-radius: 50%;
}

.prev { left: 10px; }
.next { right: 10px; }

.prev:hover, .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}
