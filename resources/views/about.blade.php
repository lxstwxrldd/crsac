<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О проекте — Южный Урал</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    // 
                }
            }
        }
    </script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .hero-mini { 
            background: linear-gradient(rgba(30, 58, 138, 0.8), rgba(17, 24, 39, 0.9)), 
                        url("{{ asset('img/hero.jpg') }}") center/cover; 
        }
    </style>
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        function toggleTheme() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
    <nav class="bg-white/80 dark:bg-gray-900/90 backdrop-blur sticky top-0 z-50 shadow-sm p-4 border-b border-gray-100 dark:border-gray-800">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="group flex items-center gap-2 no-underline">
                <div class="bg-blue-600 group-hover:bg-blue-400 p-1.5 rounded-lg transition-all duration-500">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <span class="font-black text-blue-900 dark:text-gray-100 group-hover:text-blue-600 transition-colors duration-500">ЮЖНЫЙ УРАЛ</span>
            </a>

            <div class="flex items-center gap-4">
                <a href="/" class="text-blue-600 font-bold flex items-center gap-2 hover:translate-x-[-5px] transition-transform dark:text-blue-300 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Назад
                </a>
                <button onclick="toggleTheme()" class="w-10 h-10 flex items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-all text-gray-600 dark:text-yellow-400 border border-gray-200 dark:border-gray-700">
                    <svg class="w-5 h-5 dark:hidden" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg class="hidden dark:block w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"></path></svg>
                </button>
            </div>
        </div>
    </nav>

    <header class="hero-mini h-[300px] flex items-center justify-center text-center text-white">
        <div data-aos="zoom-in">
            <h1 class="text-5xl font-black mb-2">О проекте</h1>
            <p class="text-blue-300 font-bold tracking-widest uppercase text-sm">Открой для себя сердце Урала</p>
        </div>
    </header>

    <main class="container mx-auto py-20 px-4">
        <div class="max-w-4xl mx-auto">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
                <div data-aos="fade-right">
                    <h2 class="text-3xl text-blue-900 font-black mb-6 dark:text-white">Для чего нужен путеводитель?</h2>
                    <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed mb-4">
                        «Путеводитель — Южный Урал» создан для тех, кто влюблен в уральскую природу или только собирается покорить ее вершины. Это цифровая энциклопедия края, где каждый найдет свой идеальный маршрут: от семейного пикника на Таганае до сурового похода на Ямантау.
                    </p>
                    <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed">
                        Мы рассказываем не просто про места, мы рассказываем про эмоции. Добро пожаловать домой, путешественник!
                    </p>
                </div>
                <div data-aos="fade-left" class="relative">
                    <img src="{{ asset('img/places/taganay.jpg') }}" class="rounded-[2rem] shadow-2xl relative z-10">
                </div>
            </div>

            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block px-4 py-1.5 mb-4 text-xs font-black tracking-[0.3em] uppercase text-blue-600 dark:text-blue-400 bg-blue-50 dark:bg-blue-900/30 rounded-full">
                    Наши преимущества
                </span>
                <h2 class="text-4xl md:text-5xl font-black text-blue-900 dark:text-white leading-tight">
                    Почему нас <span class="text-blue-600 dark:text-blue-400">выбирают</span>
                </h2>
                <div class="flex justify-center mt-6">
                    <div class="w-24 h-1.5 bg-blue-600 dark:bg-blue-500 rounded-full"></div>
                    <div class="w-4 h-1.5 bg-blue-300 dark:bg-blue-700 rounded-full ml-2"></div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
                <div data-aos="fade-up" data-aos-delay="100" class="bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-lg text-center border border-transparent dark:border-gray-800">
                    <div class="text-4xl mb-4">📍</div>
                    <h3 class="font-bold text-xl mb-2 dark:text-white">Навигация</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Интерактивная карта со всеми достопримечательностями региона</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200" class="bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-lg text-center border border-transparent dark:border-gray-800">
                    <div class="text-4xl mb-4">📸</div>
                    <h3 class="font-bold text-xl mb-2 dark:text-white">Галерея</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Качественные фотографии для каждого объекта</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="300" class="bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-lg text-center border border-transparent dark:border-gray-800">
                    <div class="text-4xl mb-4">⭐️</div>
                    <h3 class="font-bold text-xl mb-2 dark:text-white">Отзывы</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-sm">Честные оценки и комментарии от реальных туристов</p>
                </div>
            </div>

            <div data-aos="fade-up" class="bg-blue-900 rounded-[3rem] p-12 text-white text-center shadow-2xl dark:shadow-gray-700">
                <h2 class="text-3xl font-black mb-8">Компоненты, использовавшиеся для разработки</h2>
                <div class="flex flex-wrap justify-center gap-6">
                    <span class="bg-blue-800 px-6 py-2 rounded-full border border-blue-700 text-sm">Laravel</span>
                    <span class="bg-blue-800 px-6 py-2 rounded-full border border-blue-700 text-sm">Tailwind CSS</span>
                    <span class="bg-blue-800 px-6 py-2 rounded-full border border-blue-700 text-sm">MySQL</span>
                    <span class="bg-blue-800 px-6 py-2 rounded-full border border-blue-700 text-sm">Leaflet Maps</span>
                    <span class="bg-blue-800 px-6 py-2 rounded-full border border-blue-700 text-sm">AOS</span>
                </div>
            </div>

        </div>
    </main>

<footer class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white pt-20 pb-10 overflow-hidden">
    <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/4 w-96 h-96 bg-blue-500 rounded-full blur-[120px] opacity-20"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            
            <div data-aos="fade-up" class="col-span-1 md:col-span-1">
                <a href="/" class="group flex items-center gap-3 no-underline mb-8">
                    <div class="bg-white/10 group-hover:bg-blue-500 p-2.5 rounded-2xl transition-all duration-500 border border-white/10 backdrop-blur-md">
                        <svg class="w-7 h-7 text-blue-300 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col items-start leading-tight">
                        <span class="text-2xl font-black tracking-tighter group-hover:text-blue-300 transition-colors duration-500 uppercase">
                            ЮЖНЫЙ УРАЛ
                        </span>
                        <span class="text-[10px] font-bold tracking-[0.3em] uppercase opacity-60">
                            Путеводитель
                        </span>
                    </div>
                </a>
            </div>

            <div data-aos="fade-up" data-aos-delay="100">
                <h4 class="font-bold text-white mb-8 uppercase tracking-[0.2em] text-xs opacity-50">Навигация</h4>
                <ul class="space-y-4 font-bold text-sm">
                    <li><a href="/" class="text-blue-100/80 hover:text-white transition flex items-center gap-2"><span>→</span> Главная</a></li>
                                        <li><a href="{{ route('about') }}" class="text-blue-100/80 hover:text-white transition flex items-center gap-2"><span>→</span> О проекте</a></li>
                    <li><a href="/?category=nature" class="text-blue-100/80 hover:text-white transition flex items-center gap-2"><span>→</span> Заповедники</a></li>
                    <li><a href="/?category=lakes" class="text-blue-100/80 hover:text-white transition flex items-center gap-2"><span>→</span> Озера региона</a></li>
                </ul>
            </div>

            <div data-aos="fade-up" data-aos-delay="200">
                <h4 class="font-bold text-white mb-8 uppercase tracking-[0.2em] text-xs opacity-50">Связаться</h4>
                <ul class="space-y-5 text-sm font-medium">
                    <li class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-blue-500 transition-colors border border-white/10">
                            <svg class="w-5 h-5 text-blue-300 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <span class="text-blue-100/80">info@southural.ru</span>
                    </li>
                    <li class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-blue-500 transition-colors border border-white/10">
                            <svg class="w-5 h-5 text-blue-300 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <span class="text-blue-100/80">+7 (351) 000-00-00</span>
                    </li>
                </ul>
            </div>

            <div data-aos="fade-up" data-aos-delay="300">
                <h4 class="font-bold text-white mb-8 uppercase tracking-[0.2em] text-xs opacity-50">Мы в социальных сетях</h4>
                <div class="flex gap-4">
                    <a href="#" class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center text-blue-300 hover:bg-[#4C75A3] hover:text-white transition-all duration-300 border border-white/10 hover:scale-110 shadow-lg">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M15.608 22c-7.241 0-11.365-4.961-11.538-13.218H7.78c.118 6.059 2.787 8.623 4.904 9.153V8.782H16.21v5.223c2.148-.229 4.363-2.614 5.126-5.223H24.9c-.563 3.659-3.264 6.044-5.126 7.127 1.863.882 4.986 2.977 6.134 6.091h-3.83c-.896-2.793-3.132-4.953-5.385-5.176V22h-1.085z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center text-blue-300 hover:bg-[#0088cc] hover:text-white transition-all duration-300 border border-white/10 hover:scale-110 shadow-lg">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.665 3.717l-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center text-blue-300 hover:bg-[#FF0000] hover:text-white transition-all duration-300 border border-white/10 hover:scale-110 shadow-lg">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="pt-10 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-blue-100/40">
                © 2026 Путеводитель Южный Урал
            </p>
        </div>
    </div>
</footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init({ duration: 1000, once: true });</script>
</body>
</html>
