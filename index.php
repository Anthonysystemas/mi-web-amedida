<?php
/**
 * index.php  ·  Landing de una sola página (minimalista · moderno)
 * ---------------------------------------------------------------------
 * Edita únicamente el bloque "CONFIGURACIÓN". El resto es estructura.
 * Todos los CTA abren WhatsApp con el mensaje codificado.
 */

// =====================================================================
//  CONFIGURACIÓN
// =====================================================================
$nombre_marca     = 'nexo';
$whatsapp_numero  = '34600000000';                       // Internacional, sin "+" ni espacios.
$whatsapp_mensaje = 'Hola, quiero mi página web.';       // Mensaje predeterminado.
$precio_servicio  = '$290';                              // Precio mostrado.
$correo_contacto  = 'hola@nexo.com';
$instagram_url    = 'https://instagram.com/nexo';

// --- Valores derivados (no tocar) -------------------------------------
$wa   = 'https://wa.me/' . $whatsapp_numero . '?text=' . rawurlencode($whatsapp_mensaje);
$anio = date('Y');

/** Escapa la salida para evitar XSS. */
function e($texto): string
{
    return htmlspecialchars((string) $texto, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= e($nombre_marca) ?> · Tu negocio, claro y completo en una sola página</title>
    <meta name="description" content="Diseñamos, escribimos y publicamos tu sitio web de una sola página. Precio único, sin mensualidades y en línea en 7 días.">

    <!-- Favicon SVG embebido (solo la "x" bicolor del logo) -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2064%2064'%3E%3Cg%20fill='none'%20stroke-width='9'%20stroke-linecap='round'%20stroke-linejoin='round'%3E%3Cpath%20stroke='%232a37f5'%20d='M12%208L52%2056'/%3E%3Cpath%20stroke='%23ff6b4a'%20d='M52%208L12%2056'/%3E%3C/g%3E%3C/svg%3E">

    <!-- Tipografías: Bricolage Grotesque (títulos) + DM Sans (cuerpo) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400..800&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- ========================= 1. NAVBAR ========================= -->
    <header class="navbar">
        <div class="container navbar__inner">
            <a href="#" class="logo" aria-label="<?= e($nombre_marca) ?>">
                <svg class="brand-logo" xmlns="http://www.w3.org/2000/svg" viewBox="-20 -20 348 112" role="img" aria-label="<?= e($nombre_marca) ?>">
                    <g fill="none" stroke-width="16" stroke-linecap="round" stroke-linejoin="round">
                        <g stroke="#0f131a">
                            <path d="M8 8V64"/>
                            <path d="M8 30A22 22 0 0 1 52 30V64"/>
                        </g>
                        <path stroke="#0f131a" d="M80 36H136A28 28 0 1 0 127.8 55.8"/>
                        <path stroke="#2a37f5" d="M164 8L216 64"/>
                        <path stroke="#ff6b4a" d="M216 8L164 64"/>
                        <circle stroke="#0f131a" cx="272" cy="36" r="28"/>
                    </g>
                </svg>
            </a>

            <div class="navbar__right">
                <nav class="nav" aria-label="Navegación principal">
                    <a href="#proceso">Proceso</a>
                    <a href="#trabajos">Trabajos</a>
                    <a href="#precio">Precio</a>
                    <a href="#preguntas">Preguntas</a>
                </nav>

                <a class="btn btn--solid navbar__cta" href="<?= e($wa) ?>" target="_blank" rel="noopener">Empezar</a>
            </div>
        </div>
    </header>

    <main>

        <!-- ========================== 2. HERO ========================== -->
        <section class="hero">
            <div class="container hero__inner">

                <div class="hero__copy reveal">
                    <span class="pill">Cupos abiertos para diciembre</span>

                    <h1 class="display">Tu negocio, claro y completo en una sola página.</h1>

                    <p class="lead">
                        Diseñamos, escribimos y publicamos tu sitio web a medida. Tú solo
                        nos cuentas qué haces; en 4 días está en línea.
                    </p>

                    <div class="hero__actions">
                        <a class="btn btn--solid" href="<?= e($wa) ?>" target="_blank" rel="noopener">Pedir mi página</a>
                        <a class="btn btn--ghost" href="#trabajos">Ver trabajos</a>
                    </div>

                    <div class="hero-stats">
                        <div><strong>4 días</strong><span>de entrega garantizada</span></div>
                        <div><strong>100%</strong><span>adaptada a celular</span></div>
                        <div><strong>1 pago</strong><span>sin mensualidades ocultas</span></div>
                    </div>
                </div>

                <div class="hero__visual" aria-hidden="true">
                    <div class="browser">
                        <div class="browser__bar">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="browser__url">tunegocio.com</span>
                        </div>

                        <div class="browser__body">

                            <!-- Mini-navbar -->
                            <div class="mini-nav">
                                <span class="mini-nav__brand">Tu marca</span>
                                <span class="mini-nav__links">
                                    <span class="mini-nav__link"></span>
                                    <span class="mini-nav__link"></span>
                                    <span class="mini-nav__link"></span>
                                </span>
                            </div>

                            <!-- Mini-hero -->
                            <div class="mini-hero">
                                <p class="mini-hero__title">Hacemos fácil<br>lo que haces mejor</p>
                                <p class="mini-hero__sub">Un mensaje claro, tus servicios y un botón para que te contacten.</p>
                                <span class="mini-hero__btn">Escríbenos</span>
                            </div>

                            <!-- Imagen con degradado -->
                            <div class="mini-gradient"></div>

                            <!-- Tres tarjetas -->
                            <div class="mini-grid">
                                <span class="mini-card"></span>
                                <span class="mini-card"></span>
                                <span class="mini-card"></span>
                            </div>

                        </div>
                    </div>

                    <span class="badge badge--top">
                        <span class="badge__icon">
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M8 12.3l2.6 2.6L16 9.4"/></svg>
                        </span>
                        Ideal para celular
                    </span>
                    <span class="badge badge--bottom">
                        <span class="badge__icon">
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M8 12.3l2.6 2.6L16 9.4"/></svg>
                        </span>
                        Lista en 4 días
                    </span>
                </div>

            </div>
        </section>

        <!-- ======== 3. PROCESO ======== -->
        <section id="proceso" class="section section--alt">
            <div class="container">
                <div class="section__head reveal">
                    <span class="eyebrow">Proceso</span>
                    <h2 class="section__title">De la idea a tu página en tres pasos.</h2>
                </div>

                <div class="grid grid--3">
                    <article class="card reveal">
                        <span class="circle circle--blue">1</span>
                        <h3>Nos cuentas de tu negocio</h3>
                        <p>Hablamos por WhatsApp sobre qué haces, elegimos el nombre de tu dominio y definimos el objetivo de tu página.</p>
                        <span class="tag">Día 1</span>
                    </article>
                    <article class="card reveal">
                        <span class="circle circle--coral">2</span>
                        <h3>Revisas tu borrador en vivo</h3>
                        <p>Te enviamos un enlace privado con tu página funcionando para que la pruebes en tu celular y nos pidas los ajustes que necesites.</p>
                        <span class="tag">Día 2</span>
                    </article>
                    <article class="card reveal">
                        <span class="circle circle--mint">3</span>
                        <h3>La publicamos por ti</h3>
                        <p>Conectamos tu dominio propio, revisamos los últimos detalles juntos y la dejamos en línea lista para recibir clientes.</p>
                        <span class="tag">Día 4</span>
                    </article>
                </div>
            </div>
        </section>

        <!-- ======== 4. TRABAJOS (fondo oscuro) ======== -->
        <section id="trabajos" class="section section--dark">
            <div class="container">
                <div class="section__head reveal">
                    <span class="eyebrow eyebrow--dark">Proyectos y demos</span>
                    <h2 class="section__title">Así se verá tu negocio en internet.</h2>
                </div>

                <div class="grid grid--3">
                    <a class="work reveal"
                       href="https://cotizador.maskelperu.com/"
                       target="_blank" rel="noopener noreferrer">
                        <div class="work__media">
                            <img src="assets/img/proyectos/maskel.png" alt="Vista previa web Maskel Perú" loading="lazy">
                        </div>
                        <div class="work__foot">
                            <h3>Maskel Perú</h3>
                            <p>Cotizador web y catálogo · En desarrollo (Lima)</p>
                        </div>
                    </a>

                    <a class="work reveal"
                       href="demos/clinica-sonrie.html"
                       target="_blank" rel="noopener noreferrer">
                        <div class="work__media">
                            <img src="assets/img/proyectos/demo-clinica.png" alt="Demo web Clínica Dental Sonríe" loading="lazy">
                        </div>
                        <div class="work__foot">
                            <h3>Clínica Dental Sonríe</h3>
                            <p>Modelo demostración · Salud</p>
                        </div>
                    </a>

                    <a class="work reveal"
                       href="demos/estudio-norte.html"
                       target="_blank" rel="noopener noreferrer">
                        <div class="work__media">
                            <img src="assets/img/proyectos/demo-estudio.png" alt="Demo web Estudio Contable Norte" loading="lazy">
                        </div>
                        <div class="work__foot">
                            <h3>Estudio Contable Norte</h3>
                            <p>Modelo demostración · Servicios</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- ======== 5. QUÉ INCLUYE (fondo lavanda) ======== -->
        <section id="que-incluye" class="section section--alt">
            <div class="container">
                <div class="section__head reveal">
                    <span class="eyebrow">Qué incluye</span>
                    <h2 class="section__title">Todo lo que una página profesional necesita.</h2>
                </div>

                <div class="grid grid--3">
                    <article class="feature reveal">
                        <span class="icon-box icon-box--1">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                        </span>
                        <h3>Diseño a medida</h3>
                        <p>Una página pensada para tu marca, no una plantilla genérica.</p>
                    </article>
                    <article class="feature reveal">
                        <span class="icon-box icon-box--2">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                        </span>
                        <h3>Textos redactados</h3>
                        <p>Escribimos los textos contigo para que conecten con tus clientes.</p>
                    </article>
                    <article class="feature reveal">
                        <span class="icon-box icon-box--3">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                        </span>
                        <h3>Pensada para celular</h3>
                        <p>Se ve perfecta en el móvil, donde te visita la mayoría.</p>
                    </article>
                    <article class="feature reveal">
                        <span class="icon-box icon-box--4">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                        </span>
                        <h3>Contacto directo</h3>
                        <p>Botones de WhatsApp y correo para que te escriban al instante.</p>
                    </article>
                    <article class="feature reveal">
                        <span class="icon-box icon-box--5">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                        </span>
                        <h3>Aparece en Google</h3>
                        <p>Estructura y velocidad optimizadas para que te encuentren.</p>
                    </article>
                    <article class="feature reveal">
                        <span class="icon-box icon-box--6">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                        </span>
                        <h3>Dominio y alojamiento</h3>
                        <p>Lo dejamos funcionando en tu propio dominio, sin que te preocupes.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- ======== 6. TESTIMONIO ======== -->
        <section class="section">
            <div class="container">
                <figure class="testimonial reveal">
                    <span class="testimonial__avatar" aria-hidden="true">M</span>
                    <blockquote class="testimonial__quote">
                        «En una semana pasamos de no tener nada a recibir clientes por WhatsApp.
                        El proceso fue clarísimo y sin tecnicismos.»
                    </blockquote>
                    <figcaption class="testimonial__name">Marta Rueda — Floristería Lirio</figcaption>
                </figure>
            </div>
        </section>

        <!-- ======== 7. PRECIO (fondo lavanda) ======== -->
        <section id="precio" class="section section--alt">
            <div class="container price">
                <div class="price__copy reveal">
                    <span class="eyebrow">Precio</span>
                    <h2 class="section__title">Un precio claro, sin mensualidades.</h2>
                    <p class="lead">
                        Pagas una vez y tu página es tuya. Sin cuotas escondidas ni costes
                        sorpresa: te decimos exactamente qué incluye antes de empezar.
                    </p>
                </div>

                <aside class="price-card reveal">
                    <span class="price-card__tag">Página completa</span>
                    <p class="price-card__amount"><?= e($precio_servicio) ?> <span>pago único</span></p>

                    <ul class="check-list">
                        <li>Diseño y textos incluidos</li>
                        <li>Dominio por 1 año</li>
                        <li>Una ronda de cambios</li>
                        <li>Entrega en 7 días</li>
                    </ul>

                    <a class="btn btn--solid btn--block" href="<?= e($wa) ?>" target="_blank" rel="noopener">Pedir mi página</a>
                </aside>
            </div>
        </section>

        <!-- ======== 8. PREGUNTAS ======== -->
        <section id="preguntas" class="section">
            <div class="container">
                <div class="section__head reveal">
                    <span class="eyebrow">Preguntas</span>
                    <h2 class="section__title">Lo que suelen preguntarnos.</h2>
                </div>

                <div class="faq reveal">
                    <div class="faq__item">
                        <button class="faq__q" type="button" aria-expanded="false">
                            ¿Cuánto tarda tener mi página lista?
                            <span class="faq__icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq__a"><div>
                            <p>La mayoría de páginas quedan publicadas en unos 7 días desde que tenemos claros los textos y las imágenes.</p>
                        </div></div>
                    </div>

                    <div class="faq__item">
                        <button class="faq__q" type="button" aria-expanded="false">
                            ¿Tengo que pagar mensualidades?
                            <span class="faq__icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq__a"><div>
                            <p>No. Es un pago único por el diseño y la publicación. Solo pagarías aparte el dominio y el alojamiento si decides gestionarlos tú.</p>
                        </div></div>
                    </div>

                    <div class="faq__item">
                        <button class="faq__q" type="button" aria-expanded="false">
                            ¿Puedo seguir editando la página después?
                            <span class="faq__icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq__a"><div>
                            <p>Sí. Te entregamos todo y te explicamos cómo hacer cambios básicos. Si prefieres que nos encarguemos nosotros, también ofrecemos mantenimiento.</p>
                        </div></div>
                    </div>

                    <div class="faq__item">
                        <button class="faq__q" type="button" aria-expanded="false">
                            ¿Necesito saber de diseño o tecnología?
                            <span class="faq__icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq__a"><div>
                            <p>Nada. Tú nos cuentas tu negocio y nosotros nos encargamos de todo lo técnico y visual, de principio a fin.</p>
                        </div></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======== 9. CIERRE (CTA final) ======== -->
        <section class="section">
            <div class="container">
                <div class="cta reveal">
                    <h2>Tu página puede estar en línea la próxima semana.</h2>
                    <p>Quedan pocos cupos este mes. Escríbenos y empecemos hoy mismo.</p>
                    <a class="btn btn--white" href="<?= e($wa) ?>" target="_blank" rel="noopener">Pedir mi página</a>
                </div>
            </div>
        </section>

    </main>

    <!-- ======== 10. FOOTER (fondo oscuro) ======== -->
    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__brand">
                <span class="logo" aria-label="<?= e($nombre_marca) ?>">
                    <svg class="brand-logo" xmlns="http://www.w3.org/2000/svg" viewBox="-20 -20 348 112" role="img" aria-label="<?= e($nombre_marca) ?>">
                        <g fill="none" stroke-width="16" stroke-linecap="round" stroke-linejoin="round">
                            <g stroke="#ffffff">
                                <path d="M8 8V64"/>
                                <path d="M8 30A22 22 0 0 1 52 30V64"/>
                            </g>
                            <path stroke="#ffffff" d="M80 36H136A28 28 0 1 0 127.8 55.8"/>
                            <path stroke="#2a37f5" d="M164 8L216 64"/>
                            <path stroke="#ff6b4a" d="M216 8L164 64"/>
                            <circle stroke="#ffffff" cx="272" cy="36" r="28"/>
                        </g>
                    </svg>
                </span>
                <p>Diseñamos sitios web claros y profesionales para negocios que quieren crecer en internet.</p>
            </div>

            <nav class="footer__nav" aria-label="Enlaces del pie">
                <h4>Navegar</h4>
                <a href="#proceso">Proceso</a>
                <a href="#trabajos">Trabajos</a>
                <a href="#precio">Precio</a>
                <a href="#preguntas">Preguntas</a>
            </nav>

            <div class="footer__contact">
                <h4>Contacto</h4>
                <a href="mailto:<?= e($correo_contacto) ?>">Correo</a>
                <a href="<?= e($wa) ?>" target="_blank" rel="noopener">WhatsApp</a>
                <a href="<?= e($instagram_url) ?>" target="_blank" rel="noopener">Instagram</a>
            </div>
        </div>

        <div class="container footer__legal">
            <p>&copy; <?= e($anio) ?> <?= e($nombre_marca) ?>. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- =============== BOTÓN FLOTANTE DE WHATSAPP =============== -->
    <a class="whatsapp-float"
       href="<?= e($wa) ?>"
       target="_blank"
       rel="noopener"
       aria-label="Contactar por WhatsApp">
        <svg viewBox="0 0 32 32" width="30" height="30" aria-hidden="true" focusable="false">
            <path fill="#FFFFFF" d="M16.04 4C9.4 4 4 9.4 4 16.04c0 2.12.55 4.11 1.52 5.84L4 28l6.27-1.64a11.96 11.96 0 0 0 5.77 1.47h.01C22.68 27.83 28 22.43 28 15.79 28 9.15 22.68 4 16.04 4zm0 21.82h-.01a9.9 9.9 0 0 1-5.05-1.38l-.36-.21-3.72.97.99-3.62-.24-.37a9.86 9.86 0 0 1-1.51-5.17c0-5.46 4.45-9.9 9.91-9.9 2.65 0 5.13 1.03 7 2.9a9.84 9.84 0 0 1 2.9 7.01c0 5.46-4.45 9.9-9.9 9.9zm5.44-7.42c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.48-.89-.79-1.49-1.77-1.66-2.07-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.48s1.06 2.88 1.21 3.08c.15.2 2.09 3.19 5.06 4.47.71.31 1.26.49 1.69.63.71.23 1.36.19 1.87.12.57-.09 1.76-.72 2.01-1.42.25-.7.25-1.29.17-1.42-.07-.13-.27-.2-.57-.35z"/>
        </svg>
    </a>

    <script src="assets/js/main.js" defer></script>
</body>
</html>
