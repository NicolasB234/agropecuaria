const openLightboxButton = document.getElementById('openLightbox');
const closeLightboxButton = document.getElementById('closeLightbox');
const lightbox = document.getElementById('lightbox');
const video = document.querySelector('#lightbox video');

let isVideoPlaying = false;

openLightboxButton.addEventListener('click', () => {
    lightbox.style.display = 'flex';
    playVideo();
});

closeLightboxButton.addEventListener('click', () => {
    lightbox.style.display = 'none';
    pauseVideo();
});

// Configuración del Intersection Observer
const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                playVideo();
            } else {
                pauseVideo();
            }
        });
    },
    { threshold: 0.5 } // Puedes ajustar el umbral según tus necesidades
);

// Observar el lightbox
observer.observe(lightbox);

// Función para reproducir el video
function playVideo() {
    if (!isVideoPlaying) {
        video.play();
        isVideoPlaying = true;
    }
}

// Función para detener el video
function pauseVideo() {
    if (isVideoPlaying) {
        video.pause();
        isVideoPlaying = false;
    }
}
