<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>BSA Rocket Studio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body class="font-sans text-gray-800 bg-white scroll-smooth">

    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
            {{-- Логотип --}}
            <a href="{{ url('/') }}" class="flex items-center space-x-3 select-none">
                <img src="{{ asset('images/logo.svg') }}"
                     alt="BSA Rocket Studio"
                     class="h-20 w-auto object-contain select-none">
                <span class="text-2xl font-bold text-blue-600">BSA Rocket Studio</span>
            </a>
    
            {{-- Навигация --}}
            <nav class="space-x-6 text-gray-600 text-sm font-medium">
                <a href="#services" class="hover:text-blue-600">Услуги</a>
                <a href="#portfolio" class="hover:text-blue-600">Портфолио</a>
                <a href="#testimonials" class="hover:text-blue-600">Отзывы</a>
                <a href="#pricing" class="hover:text-blue-600">Тарифы</a>
                <a href="#contact" class="hover:text-blue-600">Контакты</a>
            </nav>
        </div>
    </header>

    <main>@yield('content')</main>

    <footer class="bg-gray-100 py-6 mt-6">
        <div class="text-center text-gray-500 text-sm">
            © {{ date('Y') }} BSA Rocket Studio. Все права защищены.
        </div>
    </footer>

</body>
</html>