
<section id="contact" class="py-12 bg-blue-50" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-10" data-aos="fade-up">Свяжитесь с нами</h2>

        <div class="grid md:grid-cols-2 gap-10 items-start">
            {{-- Контактная информация --}}
            <div class="space-y-4 text-gray-700 text-base" data-aos="fade-right" data-aos-delay="100">
                <p><strong>📍 Адрес:</strong> Москва, ул. Парадная, 42 </p>
                <p><strong>📞 Телефон:</strong> <a href="tel:+89031556787" class="text-blue-600 hover:underline">+7 (903) 155-67-87</p>
                <p><strong>📧 Email:</strong> <a href="mailto:banker99@yandex.ru" class="text-blue-600 hover:underline">banker99@yandex.ru"</a></p>
                <p><strong>🕒 Время работы:</strong> Пн–Пт, 10:00–19:00</p>

                {{-- Мессенджеры --}}
                <div class="flex space-x-4 pt-4">
                    {{-- Telegram --}}
                    <a href="https://t.me/Beherit1977" target="_blank"
                       class="flex items-center space-x-2 bg-blue-500 text-white px-4 py-2 rounded-xl hover:bg-blue-600 transition">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M9.743 16.958l-.396 3.937c.567 0 .813-.245 1.111-.54l2.667-2.552 5.523 4.028c1.014.562 1.736.27 1.983-.934l3.594-16.906c.339-1.57-.568-2.183-1.582-1.808l-21.214 8.16c-1.453.567-1.432 1.384-.255 1.753l5.421 1.693L19.608 5.84 9.743 16.958z"/>
                        </svg>
                        <span>Telegram</span>
                    </a>

                    {{-- WhatsApp --}}
                    <a href="https://wa.me/79991234567" target="_blank"
                       class="flex items-center space-x-2 bg-green-500 text-white px-4 py-2 rounded-xl hover:bg-green-600 transition">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 32 32">
                            <path d="M16.004 0c-8.837 0-16 7.164-16 16 0 2.823.737 5.545 2.141 7.957l-2.191 7.996 8.183-2.15c2.326 1.221 4.932 1.863 7.867 1.863 8.837 0 16-7.164 16-16s-7.163-16-15.999-16zM22.148 20.823c-.369-.184-2.18-1.075-2.518-1.197-.338-.122-.584-.184-.83.184s-.953 1.197-1.168 1.445c-.215.246-.43.276-.8.092s-1.56-.573-2.973-1.829c-1.1-.981-1.844-2.192-2.06-2.56-.215-.369-.023-.567.162-.75.167-.166.369-.43.553-.646.184-.215.246-.369.369-.615.122-.246.062-.461-.03-.646-.092-.184-.83-2.003-1.137-2.74-.3-.715-.607-.615-.83-.615s-.43-.03-.646-.03c-.215 0-.554.092-.846.43s-1.108 1.083-1.108 2.645c0 1.561 1.134 3.065 1.292 3.274.153.215 2.228 3.4 5.4 4.762.755.326 1.342.52 1.8.663.755.241 1.442.207 1.98.126.604-.09 1.859-.76 2.121-1.493.261-.73.261-1.356.184-1.493-.077-.138-.3-.215-.63-.369z"/>
                        </svg>
                        <span>WhatsApp</span>
                    </a>
                </div>
            </div>

            {{-- Форма --}}
            <form action="{{ route('contact.submit') }}" method="POST"
                  class="bg-white p-6 rounded-2xl shadow space-y-4"
                  data-aos="fade-left" data-aos-delay="200">
                @csrf

                @if(session('success'))
                    <div class="bg-green-100 text-green-700 p-3 rounded">{{ session('success') }}</div>
                @endif

                <input type="text" name="name" placeholder="Ваше имя" class="w-full p-3 border rounded-xl" required>
                <input type="email" name="email" placeholder="Ваш email" class="w-full p-3 border rounded-xl" required>
                <textarea name="message" rows="4" placeholder="Сообщение" class="w-full p-3 border rounded-xl" required></textarea>
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition w-full">
                    Отправить
                </button>
            </form>
        </div>
    </div>
</section>
