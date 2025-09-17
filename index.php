<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresentação | Reino em Cristo Kids</title>
    <link rel="icon" type="image/png" href="/src/image/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/src/image/favicon.svg" />
    <link rel="shortcut icon" href="/src/image/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/src/image/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Ministério Kids" />
    <link rel="manifest" href="/src/image/site.webmanifest" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        html {
            height: 100%;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        @media (max-width: 768px) { /* Apply these styles only on mobile devices */
            body {
                height: 100vh;
                /* Fallback for browsers that don't support custom properties or JS */
                height: calc(var(--vh, 1vh) * 100);
            }
        }

        main {
            overflow-y: auto;
            scroll-behavior: smooth;
        }

        .slide {
            transition: opacity 0.7s ease-in-out, transform 0.7s ease-in-out;
            opacity: 0;
            transform: scale(0.98);
            display: none;
        }

        .slide.active {
            opacity: 1;
            transform: scale(1);
            display: flex;
        }

        .btn-glow {
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.7), 0 0 10px rgba(147, 197, 253, 0.5);
        }

        @keyframes bounce-and-fade {

            0%,
            100% {
                transform: translateY(0);
                opacity: 0.8;
            }

            50% {
                transform: translateY(-15px);
                opacity: 1;
            }
        }

        .scroll-hint {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            pointer-events: none;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .scroll-hint.visible {
            opacity: 1;
        }

        .swipe-hint {
            position: fixed;
            top: 50%;
            transform: translateY(-50%); /* Centraliza verticalmente */
            z-index: 20;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            pointer-events: none;
        }

        .swipe-hint.visible {
            opacity: 1;
        }

        .swipe-hint.left {
            left: 20px;
        }

        .swipe-hint.right {
            right: 20px;
        }

        .swipe-hint-icon {
            width: 48px;
            height: 48px;
            background-color: rgba(26, 32, 44, 0.4); /* Fundo mais sutil */
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); /* Sombra mais sutil */
        }

        /* Animations for swipe hints */
        @keyframes bounce-left {
            0%, 100% {
                transform: translateX(0); /* Remove translateY */
                opacity: 0.8;
            }
            50% {
                transform: translateX(-15px); /* Remove translateY */
                opacity: 1;
            }
        }

        @keyframes bounce-right {
            0%, 100% {
                transform: translateX(0); /* Remove translateY */
                opacity: 0.8;
            }
            50% {
                transform: translateX(15px); /* Remove translateY */
                opacity: 1;
            }
        }

        .swipe-hint.left .swipe-hint-icon {
            animation: bounce-left 2.5s infinite;
        }

        .swipe-hint.right .swipe-hint-icon {
            animation: bounce-right 2.5s infinite;
        }

        @media (min-width: 769px) {
            .swipe-hint {
                display: none;
            }
        }

        /* Fix for footer positioning on mobile */
        #navigation {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 1000; /* Ensure it's above any modal */
        }
    </style>
</head>

<body class="bg-gradient-to-br from-sky-200 via-blue-300 to-indigo-400 text-slate-800 flex flex-col h-screen">

    <header id="app-header" class="bg-white/70 backdrop-blur-md shadow-lg z-20 hidden flex-shrink-0">
        <div class="mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
            <h1 class="text-xl sm:text-2xl font-bold text-indigo-700 flex items-center"> <img src="/src/image/logo-reino-kids.png" alt="Logo Reino em Cristo Kids" class="h-10 w-10 mr-2"> Apresentação: </h1>
            <h2 id="slide-title" class="text-base sm:text-lg font-semibold text-slate-600 text-right"></h2>
        </div>
    </header>

    <main class="flex-grow w-full relative">
        <!-- Slide 0: Tela de Boas-Vindas -->
        <div id="slide-0" data-title="Bem-vindos!" class="slide active h-full flex-col items-center justify-center p-4">
            <div class="text-center bg-white/50 backdrop-blur-md p-6 sm:p-8 md:p-12 rounded-2xl shadow-2xl w-full max-w-2xl lg:max-w-3xl mx-4">
                <h1 class="text-5xl sm:text-6xl md:text-8xl font-bold text-yellow-500 drop-shadow-lg">👑</h1>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-indigo-700 mt-4">Reino em Cristo Kids</h2>
                <p class="text-base sm:text-lg md:text-xl mt-2 text-slate-600">Ministério Infantil da Igreja Reino em Cristo – Belém/PA</p>
                <button id="startBtn" class="mt-8 bg-indigo-600 text-white font-bold py-3 px-8 rounded-full hover:bg-indigo-700 transition-transform transform hover:scale-105 btn-glow">
                    Iniciar Apresentação
                </button>
            </div>
        </div>

        <!-- Slides da Apresentação -->
        <div id="slide-1" data-title="🎯 Nossa Missão" class="slide min-h-full flex-col items-center justify-center p-4">
            <div class="text-center bg-white/50 backdrop-blur-md p-6 sm:p-8 md:p-12 rounded-2xl shadow-2xl w-full max-w-3xl lg:max-w-4xl mx-4">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-indigo-700 mb-6">🎯 Nossa Missão</h2>
                <p class="text-lg sm:text-xl md:text-2xl leading-relaxed text-slate-700">
                    Formar uma geração de crianças apaixonadas por Deus, que conhecem a Sua Palavra, vivem os valores do Reino e crescem conscientes do seu chamado e identidade profética.
                </p>
            </div>
        </div>

        <div id="slide-2" data-title="🌟 Nossa Visão" class="slide min-h-full flex-col items-center justify-center p-4">
            <div class="bg-white/50 backdrop-blur-md p-6 sm:p-8 md:p-12 rounded-2xl shadow-2xl w-full max-w-4xl lg:max-w-5xl mx-4">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-indigo-700 mb-8 text-center">🌟 Nossa Visão</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-base sm:text-lg text-slate-700">
                    <div class="flex items-center space-x-3"><span class="text-2xl">💝</span><span>Amam a presença de Deus</span></div>
                    <div class="flex items-center space-x-3"><span class="text-2xl">📖</span><span>Conhecem e praticam a Palavra</span></div>
                    <div class="flex items-center space-x-3"><span class="text-2xl">😊</span><span>Servem com alegria</span></div>
                    <div class="flex items-center space-x-3"><span class="text-2xl">🙏</span><span>Oram com fé</span></div>
                    <div class="flex items-center space-x-3"><span class="text-2xl">🎵</span><span>Adoram com verdade</span></div>
                    <div class="flex items-center space-x-3"><span class="text-2xl">💭</span><span>Sonham os sonhos do Pai</span></div>
                    <div class="flex items-center space-x-3 md:col-span-2 lg:col-span-1"><span class="text-2xl">😍</span><span>Ajudam os amiguinhos</span></div>
                </div>
                <p class="mt-8 text-center text-lg sm:text-xl text-slate-800 italic">"Queremos ver meninos e meninas como verdadeiros missionários em sua casa, escola e onde estiverem. 🕊️"</p>
            </div>
        </div>

        <div id="slide-3" data-title="🏰 Quem Somos" class="slide min-h-full flex-col items-center justify-center p-4">
            <div class="bg-white/50 backdrop-blur-md p-6 sm:p-8 md:p-12 rounded-2xl shadow-2xl w-full max-w-4xl lg:max-w-5xl mx-4">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-indigo-700 mb-6 text-center">🏰 Quem Somos</h2>
                <p class="text-center text-lg sm:text-xl mb-8 text-slate-700">O Reino em Cristo Kids é mais que um ministério: é uma família espiritual para as crianças da igreja, onde elas:</p>
                <ul class="space-y-4 text-base sm:text-lg text-left">
                    <li class="flex items-start space-x-4"><span class="text-3xl mt-1">✨</span><span><span class="font-semibold">Aprendem a Bíblia</span> de forma lúdica e profunda.</span></li>
                    <li class="flex items-start space-x-4"><span class="text-3xl mt-1">🙏</span><span><span class="font-semibold">Participam de planos devocionais</span> e momentos de intercessão.</span></li>
                    <li class="flex items-start space-x-4"><span class="text-3xl mt-1">🎁</span><span><span class="font-semibold">Desenvolvem dons</span> e descobrem seu propósito.</span></li>
                    <li class="flex items-start space-x-4"><span class="text-3xl mt-1">🎉</span><span><span class="font-semibold">Vivem a cultura do Reino</span> com leveza, brincadeiras e fé.</span></li>
                    <li class="flex items-start space-x-4"><span class="text-3xl mt-1">😇</span><span><span class="font-semibold">Aprendem a compartilhar</span> e respeitar as outras crianças e adultos.</span></li>
                </ul>
            </div>
        </div>

        <div id="slide-4" data-title="🧒👧 Faixas Etárias" class="slide min-h-full flex-col items-center justify-center p-4">
            <div class="bg-white/50 backdrop-blur-md p-6 sm:p-8 md:p-12 rounded-2xl shadow-2xl w-full max-w-5xl lg:max-w-6xl mx-4">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-indigo-700 mb-8 text-center">🧒👧 Faixas Etárias</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-sky-100 p-6 rounded-xl text-center border-2 border-sky-300 transform hover:scale-105 transition-transform">
                        <div class="text-5xl mb-3">🐑</div>
                        <h3 class="text-xl font-bold text-sky-800">Jardim do Cordeiro</h3>
                        <p class="font-semibold text-sky-600">4 a 6 anos</p>
                        <p class="text-sm mt-2 text-slate-600">Primeiros passos na fé.</p>
                    </div>
                    <div class="bg-amber-100 p-6 rounded-xl text-center border-2 border-amber-300 transform hover:scale-105 transition-transform">
                        <div class="text-5xl mb-3">⚔️</div>
                        <h3 class="text-xl font-bold text-amber-800">Guerreiros da Fé</h3>
                        <p class="font-semibold text-amber-600">7 a 9 anos</p>
                        <p class="text-sm mt-2 text-slate-600">Fortalecendo a caminhada.</p>
                    </div>
                    <div class="bg-purple-100 p-6 rounded-xl text-center border-2 border-purple-300 transform hover:scale-105 transition-transform">
                        <div class="text-5xl mb-3">🌟</div>
                        <h3 class="text-xl font-bold text-purple-800">Identidade Profética</h3>
                        <p class="font-semibold text-purple-600">10 a 13 anos</p>
                        <p class="text-sm mt-2 text-slate-600">Descobrindo o propósito.</p>
                    </div>
                </div>
                <p class="text-center text-sm mt-6 text-slate-600 italic">Observação: Fisicamente separaremos em duas turmas, no futuro vamos separar.</p>
            </div>
        </div>

        <div id="slide-5" data-title="🛡️ Elementos-chave" class="slide min-h-full flex-col items-center justify-center p-4">
            <div class="bg-white/50 backdrop-blur-md p-6 sm:p-8 md:p-12 rounded-2xl shadow-2xl w-full max-w-4xl lg:max-w-5xl mx-4">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-indigo-700 mb-8 text-center">🛡️ Elementos-chave do Ministério</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6 text-base sm:text-lg">
                    <div class="flex items-center space-x-3"><span class="text-3xl">🎵</span><span>Louvor e adoração genuína</span></div>
                    <div class="flex items-center space-x-3"><span class="text-3xl">🙏</span><span>Oração, intercessão e dons</span></div>
                    <div class="flex items-center space-x-3"><span class="text-3xl">💞</span><span>Dinâmica Do Reino</span></div>
                    <div class="flex items-center space-x-3"><span class="text-3xl">📚</span><span>Ensino bíblico com identidade profética</span></div>
                    <div class="flex items-center space-x-3"><span class="text-3xl">🏆</span><span>Sistema de galardão e premiação espiritual</span></div>
                    <div class="flex items-center space-x-3"><span class="text-3xl">👨‍🏫</span><span>Discipulado infantil e liderança em formação</span></div>
                </div>
            </div>
        </div>

        <div id="slide-6" data-title="🎁 Frutos Esperados" class="slide min-h-full flex-col items-center justify-center p-4">
            <div class="bg-white/50 backdrop-blur-md p-6 sm:p-8 md:p-12 rounded-2xl shadow-2xl w-full max-w-5xl lg:max-w-6xl mx-4">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-indigo-700 mb-8 text-center">🎁 Frutos que Esperamos</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-6">
                    <div>
                        <h3 class="font-bold text-base sm:text-lg text-emerald-700">✔️ Têm prazer na presença de Deus</h3>
                        <p class="text-slate-600 ml-5 text-sm sm:text-base">Desenvolvendo intimidade com o Pai celestial.</p>
                    </div>
                    <div>
                        <h3 class="font-bold text-base sm:text-lg text-emerald-700">✔️ Se tornam constantes na leitura da Palavra</h3>
                        <p class="text-slate-600 ml-5 text-sm sm:text-base">Criando o hábito da leitura bíblica diária.</p>
                    </div>
                    <div>
                        <h3 class="font-bold text-base sm:text-lg text-emerald-700">✔️ Servem com responsabilidade</h3>
                        <p class="text-slate-600 ml-5 text-sm sm:text-base">Aprendendo a servir ao próximo com amor.</p>
                    </div>
                    <div>
                        <h3 class="font-bold text-base sm:text-lg text-emerald-700">✔️ Reconhecem sua identidade como filhos do Rei</h3>
                        <p class="text-slate-600 ml-5 text-sm sm:text-base">Compreendendo sua posição no Reino de Deus.</p>
                    </div>
                    <div>
                        <h3 class="font-bold text-base sm:text-lg text-emerald-700">✔️ Carregam um testemunho profético</h3>
                        <p class="text-slate-600 ml-5 text-sm sm:text-base">Sendo luz onde estiverem.</p>
                    </div>
                    <div>
                        <h3 class="font-bold text-base sm:text-lg text-emerald-700">✔️ Respeitam o próximo</h3>
                        <p class="text-slate-600 ml-5 text-sm sm:text-base">Sendo exemplos por onde estiverem.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="slide-7" data-title="🌈 Venha fazer parte!" class="slide min-h-full flex-col items-center justify-center p-4">
            <div class="text-center bg-white/50 backdrop-blur-md p-6 sm:p-8 md:p-12 rounded-2xl shadow-2xl w-full max-w-3xl lg:max-w-4xl mx-4">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-indigo-700 mb-6">🌈 Venha fazer parte!</h2>
                <p class="text-lg sm:text-xl md:text-2xl leading-relaxed text-slate-700">
                    O Reino em Cristo Kids está de portas abertas para receber sua criança em um ambiente de amor, ensino e crescimento espiritual. Juntos, vamos formar uma geração que conhece a Deus e vive para Sua glória!
                </p>
                <p class="text-sm sm:text-md md:text-lg italic mt-8 text-slate-600">"Deixai vir a mim as criancinhas e não as impeçais, porque delas é o Reino de Deus." - Lucas 18:16</p>
                <button id="restartBtn" class="mt-8 bg-amber-500 text-white font-bold py-3 px-8 rounded-full hover:bg-amber-600 transition-transform transform hover:scale-105 btn-glow">
                    Reiniciar
                </button>
            </div>
        </div>

        <!-- Scroll Hint Animation -->
        <div id="scroll-hint" class="scroll-hint">
            <span class="text-white bg-gray-800/50 rounded-full px-3 py-1 text-sm mb-2 shadow-lg">Role para ver</span>
            <div class="scroll-hint-icon">
                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>

        <!-- Swipe Hint Left -->
        <div id="swipe-hint-left" class="swipe-hint left">
            <div class="swipe-hint-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                    <path d="m15 18-6-6 6-6" />
                </svg>
            </div>
        </div>

        <!-- Swipe Hint Right -->
        <div id="swipe-hint-right" class="swipe-hint right">
            <div class="swipe-hint-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </div>
        </div>
    </main>

    <footer id="navigation" class="bg-white/70 backdrop-blur-md shadow-inner p-2 hidden flex-shrink-0">
        <div class="mx-auto flex items-center justify-center space-x-4">
            <button id="prevBtn" class="bg-white/60 backdrop-blur-sm p-3 rounded-full shadow-lg hover:bg-white transition-transform transform hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-slate-700">
                    <path d="m15 18-6-6 6-6" />
                </svg>
            </button>
            <div id="slide-indicator" class="text-lg font-semibold text-slate-700 bg-black/10 px-3 py-1 rounded-full"></div>
            <button id="nextBtn" class="bg-white/60 backdrop-blur-sm p-3 rounded-full shadow-lg hover:bg-white transition-transform transform hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-slate-700">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </button>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
            let vh = window.innerHeight * 0.01;
            // Then we set the value in the --vh custom property to the root of the document
            document.documentElement.style.setProperty('--vh', `${vh}px`);

            // We listen for the resize event
            window.addEventListener('resize', () => {
                // We execute the same code as above
                let vh = window.innerHeight * 0.01;
                document.documentElement.style.setProperty('--vh', `${vh}px`);
            });
            const mainContent = document.querySelector('main');
            const slides = document.querySelectorAll('.slide');
            const startBtn = document.getElementById('startBtn');
            const restartBtn = document.getElementById('restartBtn');
            const nextBtn = document.getElementById('nextBtn');
            const prevBtn = document.getElementById('prevBtn');
            const navigation = document.getElementById('navigation');
            const slideIndicator = document.getElementById('slide-indicator');
            const appHeader = document.getElementById('app-header');
            const slideTitle = document.getElementById('slide-title');
            const scrollHint = document.getElementById('scroll-hint');
            const swipeHintLeft = document.getElementById('swipe-hint-left');
            const swipeHintRight = document.getElementById('swipe-hint-right');
            let scrollHintVisible = false;

            function isMobileDevice() {
                return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
            }

            function positionScrollHints() {
                if (isMobileDevice()) {
                    const footerHeight = navigation.offsetHeight;
                    scrollHint.style.bottom = `${footerHeight + 20}px`; // 20px above the footer
                    // swipeHintLeft.style.bottom = `${footerHeight + 20}px`; // Removed, handled by CSS
                    // swipeHintRight.style.bottom = `${footerHeight + 20}px`; // Removed, handled by CSS
                }
            }

            function adjustMainContentPadding() {
                const footerHeight = navigation.offsetHeight;
                mainContent.style.paddingBottom = `${footerHeight}px`;
            }

            // Call adjustMainContentPadding initially and on resize
            adjustMainContentPadding();
            window.addEventListener('resize', adjustMainContentPadding);

            let currentSlide = 0;
            const totalPresentationSlides = slides.length - 1; // Total de slides da apresentação (ignora o slide 0)

            function checkScroll() {
                setTimeout(() => {
                    const isScrollable = mainContent.scrollHeight > mainContent.clientHeight;
                    const isTargetSlide = currentSlide >= 2 && currentSlide <= 6;

                    if (isScrollable && isTargetSlide && isMobileDevice()) { // Added isMobileDevice()
                        scrollHint.classList.add('visible');
                        scrollHintVisible = true;
                    } else {
                        scrollHint.classList.remove('visible');
                        scrollHintVisible = false;
                    }
                }, 100);
            }

            function showSwipeHints() {
                if (currentSlide > 0 && currentSlide < slides.length -1) { // Show only on presentation slides, not first or last
                    swipeHintLeft.classList.add('visible');
                    swipeHintRight.classList.add('visible');
                    setTimeout(() => {
                        swipeHintLeft.classList.remove('visible');
                        swipeHintRight.classList.remove('visible');
                    }, 2000); // Hide after 2 seconds
                } else {
                    swipeHintLeft.classList.remove('visible');
                    swipeHintRight.classList.remove('visible');
                }
            }

            mainContent.addEventListener('scroll', () => {
                if (scrollHintVisible && mainContent.scrollTop > 50) { // Oculta após rolar um pouco
                    scrollHint.classList.remove('visible');
                    scrollHintVisible = false;
                }
            });

            function updateHeader(index) {
                const slide = document.getElementById(`slide-${index}`);
                if (slide && slide.dataset.title) {
                    slideTitle.textContent = slide.dataset.title;
                } else {
                    slideTitle.textContent = '';
                }
            }

            function showSlide(index) {
                mainContent.scrollTop = 0; // Reseta a rolagem ao trocar de slide
                slides.forEach(slide => slide.classList.remove('active'));
                const slideToShow = document.getElementById(`slide-${index}`);
                if (slideToShow) {
                    slideToShow.classList.add('active');
                }

                if (index > 0) {
                    slideIndicator.textContent = `${index} / ${totalPresentationSlides}`;
                }
                updateHeader(index);
                checkScroll();
                if (isMobileDevice()) {
                    showSwipeHints(); // Call to show swipe hints
                }
            }

            function next() {
                if (currentSlide < slides.length - 1) { // Permite ir até o último slide
                    currentSlide++;
                    showSlide(currentSlide);
                }
            }

            function prev() {
                if (currentSlide > 1) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            }

            startBtn.addEventListener('click', () => {
                currentSlide = 1;
                showSlide(currentSlide);
                appHeader.classList.remove('hidden');
                navigation.classList.remove('hidden');
                console.log('Navigation and Header shown via direct style manipulation.');
            });

            restartBtn.addEventListener('click', () => {
                currentSlide = 0;
                showSlide(currentSlide);
                appHeader.classList.add('hidden');
                navigation.classList.add('hidden');
                console.log('Navigation and Header hidden via direct style manipulation.');
            });

            nextBtn.addEventListener('click', next);
            prevBtn.addEventListener('click', prev);

            document.addEventListener('keydown', (e) => {
                if (currentSlide > 0) {
                    if (e.key === 'ArrowRight') next();
                    else if (e.key === 'ArrowLeft') prev();
                }
            });

            // Swipe gestures for mobile
            let touchStartX = 0;
            let touchStartY = 0;
            const swipeThreshold = 50; // Minimum horizontal distance for a swipe
            const verticalThreshold = 30; // Maximum vertical movement allowed for a horizontal swipe

            mainContent.addEventListener('touchstart', (e) => {
                touchStartX = e.touches[0].clientX;
                touchStartY = e.touches[0].clientY;
            });

            mainContent.addEventListener('touchmove', (e) => {
                const touchCurrentX = e.touches[0].clientX;
                const touchCurrentY = e.touches[0].clientY;

                const deltaX = touchCurrentX - touchStartX;
                const deltaY = touchCurrentY - touchStartY;

                // Se o movimento for predominantemente horizontal e exceder um pequeno limiar, previne a rolagem vertical
                if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > 10) { // Limiar de 10px para evitar acionamento acidental
                    e.preventDefault();
                }
            });

            mainContent.addEventListener('touchend', (e) => {
                const touchEndX = e.changedTouches[0].clientX;
                const touchEndY = e.changedTouches[0].clientY;

                const deltaX = touchEndX - touchStartX;
                const deltaY = touchEndY - touchStartY;

                // Check if it's primarily a horizontal swipe and exceeds the threshold
                if (Math.abs(deltaX) > swipeThreshold && Math.abs(deltaY) < verticalThreshold) {
                    if (deltaX > 0) { // Swiped right
                        prev();
                    } else { // Swiped left
                        next();
                    }
                }
            });

            showSlide(0);
        });
    </script>
</body>

</html>