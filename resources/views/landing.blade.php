<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HONOR - Reto Legendario 2026</title>

    <!-- Design System & Good Practices -->
    @vite(['resources/css/app.css'])

    <style>
        /* ... fonts ... */
        @font-face {
            font-family: 'HonorSans';
            src: url("{{ asset('assets/fonts/HONORSansWorld-Regular.ttf') }}") format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'HonorSans';
            src: url("{{ asset('assets/fonts/HONORSansWorld-Bold.ttf') }}") format('truetype');
            font-weight: bold;
            font-style: normal;
        }

        @font-face {
            font-family: 'HonorSans';
            src: url("{{ asset('assets/fonts/HONORSansWorld-Medium.ttf') }}") format('truetype');
            font-weight: 500;
            font-style: normal;
        }

        .hero {
            background-image: url("{{ asset('assets/images/retolegendario_web.jpg') }}");
            background-repeat: no-repeat;
        }

        @media (max-width: 768px) {
            .hero {
                background-image: url("{{ asset('assets/images/honor_kv_retolegendario_responsive.jpg') }}");
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <a href="#" class="nav-logo">
            {!! file_get_contents(public_path('assets/images/honor_logo.svg')) !!}
        </a>

        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>

        <ul class="nav-links">
            <li><a href="#" class="nav-link active">Inicio</a></li>
            <li><a href="https://honor.com.bo/retolegendario" class="nav-link">Registro</a></li>
            <li><a href="#informacion" class="nav-link">Bases Legales</a></li>
        </ul>
    </nav>

    <section class="hero">
        <!-- Contenido removido para mostrar solo la imagen -->
    </section>

    <section id="sobre-la-promocion" class="section-highlight-1">
        <div class="section-content">
            <h2 class="section-title hide-mobile">El Reto legendario</h2>
            <div class="promo-description">
                <p>
                    ¡Llegó el momento de demostrar tu audacia! En HONOR celebramos la resistencia y tecnología del nuevo
                    <strong>HONOR Magic8 Lite</strong> con el <strong>RETO LEGENDARIO 2026</strong>.
                </p>
                <p class="mt-20">
                    Participa por la oportunidad de ganar dispositivos de última generación y vivir la experiencia
                    HONOR.
                    Sigue los pasos, regístrate y prepárate para el gran sorteo nacional.
                </p>
                <div class="mt-30">
                    <a href="https://honor.com.bo/retolegendario" class="cta-button">Regístrate Aquí</a>
                </div>
            </div>
        </div>
    </section>

    <section id="mecanica" class="section-highlight-2">
        <div class="section-content">
            <h2 class="section-title">¿Cómo Participar?</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Registro Único</h3>
                        <p>Regístrate en nuestro formulario oficial del 13 al 24 de febrero de 2026. ¡Solo se permite un
                            registro por Cédula de Identidad!</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Acción en el Live</h3>
                        <p>Comenta en el Live de lanzamiento (24 de febrero) en Facebook etiquetando a un amigo y guarda
                            la captura de pantalla de tu comentario.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Sigue nuestras Redes</h3>
                        <p>Asegúrate de seguir las cuentas oficiales de HONOR Bolivia en Instagram, Facebook y TikTok.
                            ¡Es un requisito para validar tu premio!</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">*</div>
                    <div class="step-content">
                        <h3>Santa Cruz - Invitaciones Especiales</h3>
                        <p>Si eres de Santa Cruz y eres de los primeros 15 en registrarte, responde "Sí" al uso de HONOR
                            y tu interés en asistir para ganar una invitación doble al evento en Fexpocruz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="premios" class="section-premios">
        <div class="bg-light-effect"></div>

        <div class="section-content section-content-premios">
            <h2 class="section-title">Premios de Leyenda</h2>

            <div class="prizes-grid">
                <!-- 1er Lugar Card -->
                <div class="prize-card">
                    <div class="prize-image-wrapper">
                        <img src="{{ asset('assets/images/1erpremio_marronrojizo.jpg') }}"
                            alt="HONOR Magic8 Lite Marrón Rojizo" class="main-prize-img">
                        <img src="{{ asset('assets/images/aud_2.png') }}" alt="HONOR Choice Earbuds"
                            class="earbuds-prize-img">
                    </div>

                    <div class="prize-name">1er Lugar</div>
                    <p class="prize-desc">
                        1 Celular <strong>HONOR Magic8 Lite</strong> <br>
                        + <strong>HONOR Choice Earbuds Clips</strong>
                    </p>
                </div>

                <!-- 2do Lugar Card -->
                <div class="prize-card">
                    <div class="prize-image-wrapper">
                        <img src="{{ asset('assets/images/1erpremio_verdebosque.jpg') }}"
                            alt="HONOR Magic8 Lite Verde Bosque" class="main-prize-img">
                    </div>
                    <div class="prize-name">2do Lugar</div>
                    <p class="prize-desc-secondary">
                        1 Celular <strong>HONOR Magic8 Lite</strong>
                    </p>
                </div>
            </div>

            <div class="banner-container">
                <div class="invitation-banner">
                    <div class="invitation-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 12 20 22 4 22 4 12"></polyline>
                            <rect x="2" y="7" width="20" height="5"></rect>
                            <line x1="12" y1="22" x2="12" y2="7"></line>
                            <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                            <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                        </svg>
                    </div>
                    <div class="invitation-content">
                        <span class="invitation-title">Invitaciones Especiales</span>
                        <span class="invitation-text">15 Invitaciones Dobles para los primeros registrados en Santa
                            Cruz.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="informacion" class="section-info">
        <div class="section-content">
            <h2 class="section-title">Información Importante</h2>
            <div class="info-container">
                <div class="social-links-container">
                    <h3 class="info-subtitle">SÍGUENOS EN NUESTRAS REDES</h3>
                    <div class="social-links-grid">
                        <a href="https://www.facebook.com/HonorMobileBO?locale=es_LA" class="social-link"
                            target="_blank">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                            Facebook
                        </a>
                        <a href="https://www.instagram.com/honor.bolivia/" class="social-link" target="_blank">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                            Instagram
                        </a>
                        <a href="https://www.tiktok.com/@honorbolivia" class="social-link" target="_blank">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path>
                            </svg>
                            TikTok
                        </a>
                    </div>
                </div>

                <div class="info-card">
                    <p class="mb-15"><strong>Lugar y Fecha del Sorteo:</strong> 26 de febrero de 2026, Edificio Green
                        Tower, Piso 15, Santa Cruz.</p>
                    <p><strong>Entrega de Premios:</strong> 26 de febrero de 2026, en el mismo lugar del sorteo.</p>
                </div>

                <div class="legal">
                    <div class="legal-logos">
                        <img src="{{ asset('assets/images/ATT.svg') }}" alt="ATT" class="legal-logo-att">
                        <img src="{{ asset('assets/images/AJ.svg') }}" alt="Autoridad de Juegos" class="legal-logo-aj">
                    </div>
                    <div class="legal-text">
                        Actividad de promoción empresarial regulada y fiscalizada por la Autoridad de Juegos (AJ).
                        La promoción se desarrollará a nivel nacional desde el 13 hasta el 26 de febrero de 2026.
                        Consulta los términos y condiciones completos en nuestros canales oficiales.
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>