/* =====================================================================
   assets/js/main.js  ·  One Page (Light Mode)
   1) Smooth scroll para los enlaces internos (compensa la navbar sticky).
   2) Acordeón de preguntas frecuentes (FAQ): un solo panel abierto.
   3) Animación de aparición (fade-up) con IntersectionObserver.
   ===================================================================== */

document.addEventListener('DOMContentLoaded', () => {

    /* ---------------------------------------------------------------
       1. DESPLAZAMIENTO SUAVE (compensa la navbar sticky)
       --------------------------------------------------------------- */
    const navbar = document.querySelector('.navbar');

    document.querySelectorAll('a[href^="#"]').forEach((enlace) => {
        enlace.addEventListener('click', (evento) => {
            const objetivoId = enlace.getAttribute('href');

            if (!objetivoId || objetivoId === '#') return;

            const destino = document.querySelector(objetivoId);
            if (!destino) return;

            evento.preventDefault();

            const altoNavbar = navbar ? navbar.offsetHeight : 0;
            const y = destino.getBoundingClientRect().top + window.scrollY - altoNavbar - 8;

            window.scrollTo({ top: y, behavior: 'smooth' });
        });
    });

    /* ---------------------------------------------------------------
       2. ACORDEÓN DE PREGUNTAS FRECUENTES
       --------------------------------------------------------------- */
    const items = document.querySelectorAll('.faq__item');

    items.forEach((item) => {
        const boton = item.querySelector('.faq__q');
        if (!boton) return;

        boton.addEventListener('click', () => {
            const abierto = item.classList.contains('is-open');

            // Cerramos los demás para mantener un solo panel abierto.
            items.forEach((otro) => {
                otro.classList.remove('is-open');
                const btn = otro.querySelector('.faq__q');
                if (btn) btn.setAttribute('aria-expanded', 'false');
            });

            // Abrimos el pulsado (si no estaba ya abierto).
            if (!abierto) {
                item.classList.add('is-open');
                boton.setAttribute('aria-expanded', 'true');
            }
        });
    });

    /* ---------------------------------------------------------------
       3. ANIMACIÓN DE APARICIÓN AL HACER SCROLL (fade-up)
       --------------------------------------------------------------- */
    const elementos = document.querySelectorAll('.reveal');

    if (!('IntersectionObserver' in window)) {
        elementos.forEach((el) => el.classList.add('is-visible'));
        return;
    }

    const observador = new IntersectionObserver((entradas) => {
        entradas.forEach((entrada) => {
            if (entrada.isIntersecting) {
                entrada.target.classList.add('is-visible');
                observador.unobserve(entrada.target); // Se anima una sola vez.
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: '0px 0px -60px 0px'
    });

    elementos.forEach((el) => observador.observe(el));

});
