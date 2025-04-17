@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="py-24 bg-blue-50 text-center" data-aos="fade-up">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-5xl font-bold text-blue-600 mb-4">Мы создаём сайты, бренды и digital-решения</h1>
        <p class="text-lg text-gray-600 mb-8">BSA Rocket Studio — ваш партнёр в мире дизайна и технологий</p>
        <a href="#contact" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-xl text-lg hover:bg-blue-700 transition">
            Оставить заявку
        </a>
    </div>
</section>
@include('components.services')
@include('components.portfolio')
@include('components.testimonials')
@include('components.pricing')
@include('components.contact')

{{-- Контактная форма --}}
<section id="contact" class="py-20 bg-white">
    <div class="max-w-2xl mx-auto px-4">
        {{-- @include('components.contact') --}}
    </div>
</section>

@endsection

