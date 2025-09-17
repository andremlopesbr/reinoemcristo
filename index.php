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
    <link rel="stylesheet" href="/src/css/tailwind.output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/src/css/style.css">
</head>

<body class="bg-gradient-to-br from-sky-200 via-blue-300 to-indigo-400 text-slate-800 flex flex-col h-screen">

    <header id="app-header" class="bg-white/70 backdrop-blur-md shadow-lg z-20 hidden flex-shrink-0 fixed top-0 w-full">
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

    <script src="/src/js/main.js"></script>
</body>

</html>