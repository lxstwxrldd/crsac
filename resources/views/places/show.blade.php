<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $place->title }} — Путеводитель</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .swiper { width: 100%; height: 500px; border-radius: 2rem; }
        .swiper-slide img { width: 100%; height: 100%; object-fit: cover; }
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


    <div class="container mx-auto py-10 px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
            <div class="swiper mySwiper shadow-2xl">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/places/' . $place->image) }}" alt="{{ $place->title }}">
                    </div>
                    @foreach($place->images as $img)
                        <div class="swiper-slide">
                            <img src="{{ asset('img/places/' . $img->path) }}" alt="{{ $place->title }}">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next text-white"></div>
                <div class="swiper-button-prev text-white"></div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="flex flex-col justify-center">
                <span class="text-blue-600 font-bold uppercase tracking-widest text-sm mb-4">
                    {{ $place->category->name }}
                </span>
                <h1 class="text-5xl font-black mb-6 leading-tight dark:text-gray-100">{{ $place->title }}</h1>

                <div class="flex items-center gap-4 mb-8 bg-yellow-50 w-fit px-6 py-3 rounded-2xl border border-yellow-200">
                    <span class="text-3xl font-black text-yellow-600">{{ $place->averageRating() }}</span>
                    <div class="flex flex-col">
                        <div class="flex text-yellow-400">
                            {{ str_repeat('⭐️', floor($place->averageRating())) }}
                        </div>
                        <span class="text-xs text-yellow-800 font-bold">{{ $place->reviews->count() }} отзывов</span>
                    </div>
                </div>

                <p class="text-xl text-gray-600 dark:text-gray-300 leading-relaxed mb-8">{{ $place->description }}</p>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white dark:bg-gray-800 p-4 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700">
                        <p class="text-xs text-gray-400 font-bold uppercase">Адрес</p>
                        <p class="font-bold dark:text-white">{{ $place->address }}</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-4 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-700">
                        <p class="text-xs text-gray-400 font-bold uppercase">Координаты</p>
                        <p class="font-mono text-blue-600 dark:text-blue-300">{{ $place->lat }}, {{ $place->lng }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-black mb-8 border-b pb-4">Отзывы туристов</h2>

            <div class="bg-white dark:bg-gray-900 p-8 rounded-[2rem] shadow-xl border border-gray-100 dark:border-gray-800">
                <h3 class="text-xl font-bold mb-6 dark:text-white">Оставить свой отзыв</h3>
                <form action="{{ route('reviews.store', $place->id) }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" name="user_name" placeholder="Ваше имя" required class="p-4 bg-gray-50 dark:bg-gray-800 dark:text-white rounded-xl border-none outline-blue-500 shadow-inner w-full">
                        <select name="rating" required class="p-4 bg-gray-50 dark:bg-gray-800 dark:text-white rounded-xl border-none outline-blue-500 shadow-inner w-full">
                            <option value="5">⭐️⭐️⭐️⭐️⭐️ (Отлично)</option>
                            <option value="4">⭐️⭐️⭐️⭐️ (Хорошо)</option>
                            <option value="3">⭐️⭐️⭐️ (Средне)</option>
                            <option value="2">⭐️⭐️ (Плохо)</option>
                            <option value="1">⭐️ (Ужасно)</option>
                        </select>
                    </div>
                    <textarea name="comment" rows="4" placeholder="Поделитесь вашими впечатлениями о посещении этого места..." required class="p-4 bg-gray-50 dark:bg-gray-800 dark:text-white rounded-xl border-none outline-blue-500 shadow-inner w-full"></textarea>
                    <button type="submit" class="bg-blue-600 text-white px-10 py-4 rounded-xl font-bold hover:bg-blue-700 transition shadow-lg">
                        Отправить отзыв
                    </button>
                </form>
            </div>

            <div class="space-y-6">
                @forelse($place->reviews as $review)
                    <div class="bg-white dark:bg-gray-900 p-8 rounded-[2rem] shadow-sm border border-gray-100 dark:border-gray-800">
                        <div class="flex justify-between items-center mb-4">
                            <span class="font-bold text-lg">{{ $review->user_name }}</span>

                            <div class="text-yellow-400">
                                {{ str_repeat('⭐', $review->rating) }}
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 italic">"{{ $review->comment }}"</p>
                        <p class="text-xs text-gray-300 dark:text-gray-500 mt-4">{{ $review->created_at->diffForHumans() }}</p>
                    </div>
                @empty
                    <p class="text-center text-gray-400 py-10">Пока никто не оставил отзыв. Будьте первым!</p>
                @endforelse
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            pagination: { el: ".swiper-pagination", clickable: true },
            navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
</body>
</html>