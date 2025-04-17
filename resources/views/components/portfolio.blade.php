<section id="portfolio" class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-10">Наши проекты</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8" data-aos="fade-up" data-aos-delay="100">
            {{-- Проект 1 --}}
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                <img src="{{ asset ('images/portfolio1.jpg') }}" alt="Проект 1" class="w-full h-48 object-cover">
                <div class="p-4 text-left">
                    <h3 class="text-lg font-semibold mb-1">Landing для стартапа</h3>
                    <p class="text-sm text-gray-600">Адаптивный лендинг для запуска IT-продукта</p>
                </div>
            </div>

            {{-- Проект 2 --}}
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                <img src="{{ asset ('images/portfolio2.jpg') }}" alt="Проект 2" class="w-full h-48 object-cover">
                <div class="p-4 text-left">
                    <h3 class="text-lg font-semibold mb-1">Интернет-магазин одежды</h3>
                    <p class="text-sm text-gray-600">Современный каталог с корзиной и фильтрами</p>
                </div>
            </div>

            {{-- Проект 3 --}}
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                <img src="{{ asset ('images/portfolio3.jpg') }}" alt="Проект 3" class="w-full h-48 object-cover">
                <div class="p-4 text-left">
                    <h3 class="text-lg font-semibold mb-1">Редизайн сайта юристов</h3>
                    <p class="text-sm text-gray-600">UX/UI улучшения, повышение конверсии</p>
                </div>
            </div>
        </div>
    </div>
</section>

