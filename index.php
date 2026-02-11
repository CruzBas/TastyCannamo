<!DOCTYPE html>

<html class="light" lang="es"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Tasty Fruits SRL | Inversión en Cáñamo Industrial</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#11d452",
                        "primary-dark": "#0eaf44",
                        "accent-gold": "#d4af37",
                        "background-light": "#f6f8f6",
                        "background-dark": "#102216",
                        "forest-green": "#0a1f11",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
       
        /* Estilos de la pagina principal*/
       body { font-family: 'Manrope', sans-serif; }
        .glass-effect {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .gold-gradient {
            background: linear-gradient(135deg, #d4af37 0%, #f1d592 50%, #d4af37 100%);
        }
       
        /* 3D Animacion efecto */
        .perspective-container { perspective: 1000px; }
        .preserve-3d { transform-style: preserve-3d; }
        .backface-hidden { backface-visibility: hidden; }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) translateZ(20px); }
            50% { transform: translateY(-15px) translateZ(20px); }
        }
        @keyframes float-delayed {
            0%, 100% { transform: translateY(0px) translateZ(40px); }
            50% { transform: translateY(-10px) translateZ(40px); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .animate-float-delayed { animation: float-delayed 7s ease-in-out infinite 1s; }
        
        .hero-glow {
            background: radial-gradient(circle at center, rgba(17, 212, 82, 0.15) 0%, transparent 70%);
        }

        /* Animación de brillo para botón */
        @keyframes shine-move {
            0% { left: -100%; opacity: 0; }
            10% { opacity: 0.6; }
            100% { left: 200%; opacity: 0; }
        }
        .btn-shine { position: relative; overflow: hidden; }
        .btn-shine::after {
            content: ''; position: absolute; top: 0; left: -100%; width: 60%; height: 100%;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.6), transparent);
            transform: skewX(-25deg); animation: shine-move 2s infinite; pointer-events: none;
        }

        /* Animación de fondo Hero */
        @keyframes move-blob-1 {
            0%, 100% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(50px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.95); }
        }
        @keyframes move-blob-2 {
            0%, 100% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(-50px, 30px) scale(1.1); }
            66% { transform: translate(30px, -30px) scale(0.9); }
        }
        .animate-blob-1 { animation: move-blob-1 15s infinite ease-in-out; }
        .animate-blob-2 { animation: move-blob-2 18s infinite ease-in-out; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-200">

<!-- Header navigation -->
<nav class="fixed w-full z-50 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-primary/10">
<div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
<div class="flex items-center space-x-2">
<div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
<span class="material-icons text-white">eco</span>
</div>
<span class="text-xl font-extrabold tracking-tight text-forest-green dark:text-white">TASTY FRUITS <span class="text-primary">SRL</span></span>
</div>
<div class="hidden md:flex items-center space-x-8 text-sm font-semibold uppercase tracking-wider">
<a class="hover:text-primary transition-colors" href="#">Oportunidad</a>
<a class="hover:text-primary transition-colors" href="#">Datos Financieros</a>
<a class="hover:text-primary transition-colors" href="#">Sostenibilidad</a>
<button class="bg-primary hover:bg-primary-dark text-white px-6 py-2.5 rounded-lg shadow-lg shadow-primary/20 transition-all active:scale-95">
                    CONTACTAR
                </button>
</div>
</div>
</nav>

<!-- Hero Section -->
<header class="relative min-h-screen w-full flex items-center overflow-hidden bg-[#05100a]">
    
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-[20%] -right-[10%] w-[70%] h-[70%] bg-primary/10 rounded-full blur-[120px] animate-blob-1"></div>
        <div class="absolute bottom-[10%] -left-[10%] w-[50%] h-[50%] bg-accent-gold/5 rounded-full blur-[100px] animate-blob-2"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full grid lg:grid-cols-2 gap-12 items-center pt-20 lg:pt-0">
        
    <!-- Contenido de la pagina principal -->
        <div class="max-w-2xl relative z-20">
            <div class="inline-flex items-center space-x-2 bg-primary/10 backdrop-blur-md border border-primary/20 text-primary px-4 py-2 rounded-full mb-6">
                <span class="material-icons text-sm">verified_user</span>
                <span class="text-xs font-bold uppercase tracking-widest">Inversión de Alto Impacto</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-6">
                    Invertir en el futuro verde con <span class="text-primary">Tasty Fruits </span>
            </h1>
            <p class="text-xl text-slate-300 mb-10 max-w-xl leading-relaxed">
                    Lideramos la revolución del cáñamo industrial con tecnología de vanguardia y un compromiso inquebrantable con la rentabilidad sostenible.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <button class="btn-shine gold-gradient text-forest-green font-extrabold px-8 py-4 rounded-xl shadow-xl hover:shadow-accent-gold/20 transition-all flex items-center justify-center gap-2">
                        DESCUBRE CÓMO INVERTIR
                        <span class="material-icons">arrow_forward</span>
                </button>
                <button class="glass-effect text-white font-bold px-8 py-4 rounded-xl hover:bg-white/10 transition-all">
                        Descargar Dossier
                </button>
            </div>
        </div>

        <!-- 3D Planta principal  -->
        <div class="hidden lg:flex relative h-[600px] w-full items-center justify-center perspective-container" id="hero-visual">
            <!-- 3D Contenedor de la planta -->
            <div class="relative w-[380px] h-[500px] preserve-3d transition-transform duration-100 ease-out cursor-pointer" id="tilt-card">
                
                <div class="absolute inset-0 -z-10 border border-white/10 rounded-[3rem] transform translate-z-[-50px] scale-110"></div>
                
                <!-- Imagen de la planta -->
                <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent backdrop-blur-sm rounded-[2.5rem] border border-white/10 shadow-2xl overflow-hidden">
                    <img src="Copilot_20260210_184116.png" 
                         class="w-full h-full object-cover transform scale-110 hover:scale-125 transition-transform duration-700" alt="Planta de Cáñamo 3D">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#05100a]/80 via-transparent to-transparent"></div>
                </div>

                
                <div class="absolute -right-8 top-20 bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-2xl shadow-xl animate-float preserve-3d">
                    <span class="material-icons text-primary text-4xl drop-shadow-lg">eco</span>
                </div>

                <div class="absolute -left-12 bottom-32 bg-background-dark/80 backdrop-blur-md border border-primary/30 px-6 py-4 rounded-2xl shadow-2xl animate-float-delayed preserve-3d flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center">
                        <span class="material-icons text-white text-sm">trending_up</span>
                    </div>
                    <div>
                        <p class="text-xs text-slate-400 uppercase font-bold">Rentabilidad</p>
                        <p class="text-xl font-black text-white">+300%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Mercado-->
<section class="py-24 bg-white dark:bg-background-dark">
<div class="max-w-7xl mx-auto px-6">
<div class="text-center mb-16">
<h2 class="text-sm font-bold text-primary uppercase tracking-[0.2em] mb-4">Mercado Global</h2>
<h3 class="text-4xl font-extrabold text-forest-green dark:text-white">Una Oportunidad Multi-Industria</h3>
</div>
<div class="grid md:grid-cols-3 gap-12">

<!-- Pharma -->
<div class="js-tilt-card group p-8 rounded-2xl bg-background-light dark:bg-forest-green/20 border border-slate-100 dark:border-white/5 hover:border-primary/30 transition-all duration-200 ease-out hover:shadow-2xl hover:shadow-primary/5">
<div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
<span class="material-icons text-primary text-3xl">medical_services</span>
</div>
<h4 class="text-xl font-bold mb-4 dark:text-white">Industria Farmacéutica</h4>
<p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        Extracción de cannabinoides de alta pureza para aplicaciones terapéuticas y bienestar. Un mercado en crecimiento exponencial.
                    </p>
</div>

<!-- Textil -->
<div class="js-tilt-card group p-8 rounded-2xl bg-background-light dark:bg-forest-green/20 border border-slate-100 dark:border-white/5 hover:border-primary/30 transition-all duration-200 ease-out hover:shadow-2xl hover:shadow-primary/5">
<div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
<span class="material-icons text-primary text-3xl">checkroom</span>
</div>
<h4 class="text-xl font-bold mb-4 dark:text-white">Moda Sostenible</h4>
<p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        Fibras de cáñamo premium para la industria textil, ofreciendo durabilidad y una huella hídrica mínima frente al algodón tradicional.
                    </p>
</div>
<!-- Construccion -->
<div class="js-tilt-card group p-8 rounded-2xl bg-background-light dark:bg-forest-green/20 border border-slate-100 dark:border-white/5 hover:border-primary/30 transition-all duration-200 ease-out hover:shadow-2xl hover:shadow-primary/5">
<div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
<span class="material-icons text-primary text-3xl">foundation</span>
</div>
<h4 class="text-xl font-bold mb-4 dark:text-white">Bio-Construcción</h4>
<p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        Hempcrete y materiales aislantes que capturan CO2, revolucionando la construcción con soluciones carbono-negativas.
                    </p>
</div>
</div>
</div>

<!-- Proyeccion de trabajo  -->
<div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8 border-t border-slate-100 dark:border-white/5 pt-16">
    <div class="text-center">
        <p class="text-4xl font-black text-primary mb-2">150+</p>
        <p class="text-sm font-bold text-slate-500 uppercase tracking-widest">Hectáreas</p>
    </div>
    <div class="text-center">
        <p class="text-4xl font-black text-primary mb-2">12k</p>
        <p class="text-sm font-bold text-slate-500 uppercase tracking-widest">Toneladas CO2</p>
    </div>
    <div class="text-center">
        <p class="text-4xl font-black text-primary mb-2">24/7</p>
        <p class="text-sm font-bold text-slate-500 uppercase tracking-widest">Monitoreo</p>
    </div>
    <div class="text-center">
        <p class="text-4xl font-black text-primary mb-2">100%</p>
        <p class="text-sm font-bold text-slate-500 uppercase tracking-widest">Legalidad</p>
    </div>
</div>

</section>
<!-- Datos Financieros -->
<section class="py-24 bg-background-light dark:bg-background-dark/50">
<div class="max-w-7xl mx-auto px-6">
<div class="grid lg:grid-cols-2 gap-16 items-center">
<div>
<h2 class="text-sm font-bold text-primary uppercase tracking-[0.2em] mb-4">Proyecciones Financieras</h2>
<h3 class="text-4xl font-extrabold text-forest-green dark:text-white mb-6">Rentabilidad Sólida y Transparente</h3>
<p class="text-lg text-slate-600 dark:text-slate-400 mb-8">
                        Nuestros modelos financieros han sido validados para maximizar el retorno mientras mitigamos riesgos operativos a través de contratos de pre-venta.
                    </p>
<div class="space-y-4">
<div class="bg-white dark:bg-forest-green/10 p-6 rounded-xl border-l-4 border-accent-gold shadow-sm">
<div class="flex justify-between items-center">
<span class="font-bold dark:text-white">ROI Estimado (3 años)</span>
<span class="text-2xl font-black text-primary">Hasta 300%</span>
</div>
</div>
<div class="bg-white dark:bg-forest-green/10 p-6 rounded-xl border-l-4 border-primary shadow-sm">
<div class="flex justify-between items-center">
<span class="font-bold dark:text-white">Proyección Año 1</span>
<span class="text-2xl font-black text-primary">$380,000+</span>
</div>
</div>
</div>
</div>
<div class="bg-white dark:bg-background-dark p-8 rounded-3xl shadow-2xl border border-slate-100 dark:border-white/5">
<div class="flex justify-between items-center mb-8">
<h4 class="font-bold text-lg">Crecimiento de la Inversión</h4>
<div class="flex space-x-4 text-xs">
<div class="flex items-center"><span class="w-3 h-3 bg-primary rounded-full mr-2"></span> Optimista</div>
<div class="flex items-center"><span class="w-3 h-3 bg-slate-300 rounded-full mr-2"></span> Conservador</div>
</div>
</div>
<!-- Estadistica -->
<div class="h-64 flex items-end justify-between gap-2">
<div class="w-1/6 bg-slate-100 dark:bg-white/5 rounded-t-lg h-[20%] relative group">
<div class="absolute bottom-full mb-2 left-1/2 -translate-x-1/2 bg-slate-800 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">Q1</div>
</div>
<div class="w-1/6 bg-slate-200 dark:bg-white/10 rounded-t-lg h-[40%]"></div>
<div class="w-1/6 bg-primary/40 rounded-t-lg h-[60%]"></div>
<div class="w-1/6 bg-primary/60 rounded-t-lg h-[80%]"></div>
<div class="w-1/6 bg-primary rounded-t-lg h-[100%]"></div>
<div class="w-1/6 bg-accent-gold rounded-t-lg h-[110%] animate-pulse"></div>
</div>
<div class="mt-4 pt-4 border-t border-slate-100 dark:border-white/5 flex justify-between text-xs text-slate-400 font-bold">
<span>2024</span>
<span>2025</span>
<span>2026</span>
<span>2027</span>
</div>
</div>
</div>
</div>
</section>
<!-- Sector Vetajas Competitivas -->
<section class="py-24 bg-white dark:bg-background-dark">
<div class="max-w-7xl mx-auto px-6">
<div class="text-center mb-16">
<h2 class="text-sm font-bold text-primary uppercase tracking-[0.2em] mb-4">Por qué Nosotros</h2>
<h3 class="text-4xl font-extrabold text-forest-green dark:text-white">Ventajas Competitivas Únicas</h3>
</div>
<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
<div class="p-8 rounded-2xl border border-slate-100 dark:border-white/5 hover:bg-background-light dark:hover:bg-white/5 transition-colors">
<span class="material-icons text-primary text-4xl mb-4">workspace_premium</span>
<h5 class="text-lg font-bold mb-2">Certificación Orgánica</h5>
<p class="text-sm text-slate-600 dark:text-slate-400">Procesos 100% libres de químicos bajo estándares internacionales.</p>
</div>
<div class="p-8 rounded-2xl border border-slate-100 dark:border-white/5 hover:bg-background-light dark:hover:bg-white/5 transition-colors">
<span class="material-icons text-primary text-4xl mb-4">handshake</span>
<h5 class="text-lg font-bold mb-2">Contratos Asegurados</h5>
<p class="text-sm text-slate-600 dark:text-slate-400">Acuerdos de compra pre-establecidos con líderes de la industria.</p>
</div>
<div class="p-8 rounded-2xl border border-slate-100 dark:border-white/5 hover:bg-background-light dark:hover:bg-white/5 transition-colors">
<span class="material-icons text-primary text-4xl mb-4">precision_manufacturing</span>
<h5 class="text-lg font-bold mb-2">Agro-Tecnología</h5>
<p class="text-sm text-slate-600 dark:text-slate-400">Sistemas de monitoreo IoT para optimizar cada hectárea de cultivo.</p>
</div>
<div class="p-8 rounded-2xl border border-slate-100 dark:border-white/5 hover:bg-background-light dark:hover:bg-white/5 transition-colors">
<span class="material-icons text-primary text-4xl mb-4">gavel</span>
<h5 class="text-lg font-bold mb-2">Cumplimiento Legal</h5>
<p class="text-sm text-slate-600 dark:text-slate-400">Marco jurídico robusto y total cumplimiento normativo local.</p>
</div>
</div>
</div>
</section>
<!-- Sector Impacto positivo -->
<section class="py-24 bg-primary/10 dark:bg-primary/5">
<div class="max-w-7xl mx-auto px-6">
<div class="bg-forest-green rounded-[3rem] overflow-hidden flex flex-col lg:flex-row shadow-2xl">
<div class="lg:w-1/2 relative h-80 lg:h-auto">
<img alt="Eco Impact" class="w-full h-full object-cover" data-alt="Close up of a vibrant green hemp leaf in sunshine" src="Planeta.png"/>
</div>
<div class="lg:w-1/2 p-12 lg:p-20">
<h2 class="text-sm font-bold text-primary uppercase tracking-[0.2em] mb-4">Nuestro Impacto ESG</h2>
<h3 class="text-4xl font-extrabold text-white mb-8">Sembrando un Futuro Regenerativo</h3>
<div class="space-y-8">
<div class="flex gap-4">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center text-primary">
<span class="material-icons">co2</span>
</div>
<div>
<h6 class="text-white font-bold mb-1">Secuestro de Carbono</h6>
<p class="text-slate-400 text-sm">Cada hectárea de cáñamo captura hasta 15 toneladas de CO2 anualmente.</p>
</div>
</div>
<div class="flex gap-4">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center text-primary">
<span class="material-icons">water_drop</span>
</div>
<div>
<h6 class="text-white font-bold mb-1">Eficiencia Hídrica</h6>
<p class="text-slate-400 text-sm">Nuestras técnicas de riego inteligente reducen el consumo de agua en un 40%.</p>
</div>
</div>
<div class="flex gap-4">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center text-primary">
<span class="material-icons">groups</span>
</div>
<div>
<h6 class="text-white font-bold mb-1">Impacto Social</h6>
<p class="text-slate-400 text-sm">Generamos empleo local calificado y fomentamos el desarrollo rural.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Unete a la inversion -->
<section class="py-24 bg-white dark:bg-background-dark overflow-hidden relative">
<div class="max-w-5xl mx-auto px-6 text-center relative z-10">
<h2 class="text-5xl md:text-6xl font-extrabold text-forest-green dark:text-white mb-8">Únete a nuestra visión</h2>
<p class="text-xl text-slate-600 dark:text-slate-400 mb-12 max-w-2xl mx-auto">
                No pierdas la oportunidad de formar parte de la industria que está definiendo la nueva economía verde. El momento es ahora.
            </p>
<div class="flex flex-col sm:flex-row justify-center gap-6">
<button class="bg-primary hover:bg-primary-dark text-white px-10 py-5 rounded-2xl font-extrabold text-lg shadow-2xl shadow-primary/30 transition-all hover:-translate-y-1">
                    INVERTIR AHORA
                </button>
<button class="border-2 border-slate-200 dark:border-white/10 hover:border-primary px-10 py-5 rounded-2xl font-extrabold text-lg transition-all dark:text-white">
                    Hable con un Asesor
                </button>
</div>
</div>
<div class="absolute -bottom-24 -left-24 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
<div class="absolute -top-24 -right-24 w-96 h-96 bg-accent-gold/5 rounded-full blur-3xl"></div>
</section>

<!-- Footer -->
<footer class="bg-forest-green py-12 border-t border-white/5">
<div class="max-w-7xl mx-auto px-6">
<div class="flex flex-col md:flex-row justify-between items-center gap-8">
<div class="flex items-center space-x-2">
<div class="w-8 h-8 bg-primary rounded flex items-center justify-center">
<span class="material-icons text-white text-sm">eco</span>
</div>
<span class="text-lg font-bold text-white tracking-tight">TASTY FRUITS SRL</span>
</div>
<div class="flex space-x-8 text-slate-400 text-sm">
<a class="hover:text-primary" href="#">Términos</a>
<a class="hover:text-primary" href="#">Privacidad</a>
<a class="hover:text-primary" href="#">Legal</a>
</div>
<div class="text-slate-500 text-sm font-medium">
                    © 2026 Tasty Fruits SRL. Todos los derechos reservados.
                </div>
</div>
</div>
</footer>
<script>
    // 3D efecto de inclinación para la planta en el hero
    const heroContainer = document.getElementById('hero-visual');
    const tiltCard = document.getElementById('tilt-card');

    if (heroContainer && tiltCard) {
        heroContainer.addEventListener('mousemove', (e) => {
            const rect = heroContainer.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
           
            const rotateY = (x / rect.width) * 30; 
            const rotateX = (y / rect.height) * -30;

            tiltCard.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        });

        heroContainer.addEventListener('mouseleave', () => {
            tiltCard.style.transform = 'rotateX(0deg) rotateY(0deg)';
        });
    }

    // Efecto Tilt para las tarjetas de mercado
    const cards = document.querySelectorAll('.js-tilt-card');
    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            const rotateY = (x / rect.width) * 10; // Rotación sutil
            const rotateX = (y / rect.height) * -10;

            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
        });
    });
</script>
</body></html>