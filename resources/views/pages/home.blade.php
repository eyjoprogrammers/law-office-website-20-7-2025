@extends('layouts.app')

@section('title', __('site.title'))

@section('styles')
<style>
  .swiper-slide {
    position: relative;
    height: 320px;
    border-radius: 16px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 2rem;
    color: white;
    border: 5px solid transparent;
    box-sizing: border-box;
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background-size: cover !important;
    background-position: center !important;
  }
  .swiper-slide:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.25);
  }
  .slide-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.5); /* غمق الخلفية قليلاً لتحسين وضوح النص */
    border-radius: 16px;
    z-index: 1;
  }
  .slide-content {
    position: relative;
    z-index: 2;
    text-align: right;
  }

  /* زرار السويبر */
  .swiper-button-next,
  .swiper-button-prev {
    color: #004a4a !important;
    background-color: #ffdd57 !important;
    width: 60px !important;
    height: 60px !important;
    border-radius: 50% !important;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25) !important;
    top: 50% !important;
    transform: translateY(-50%) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    transition: background-color 0.3s ease !important;
  }
  .swiper-button-next:hover,
  .swiper-button-prev:hover {
    background-color: #ffec00 !important;
  }
  .swiper-button-next::after,
  .swiper-button-prev::after {
    font-size: 32px !important;
    font-weight: bold !important;
  }
</style>
@endsection

@section('content')
<section class="max-w-6xl mx-auto p-6 space-y-16" dir="{{ session('locale', 'ar') == 'ar' ? 'rtl' : 'ltr' }}">
  <div class="text-center space-y-6 rounded-lg p-10 shadow-lg">
    <h1 class="text-5xl font-extrabold text-blue-900">
      <i class="fas fa-gavel text-yellow-500 ml-3"></i>
      {{ __('site.welcome') }}
    </h1>
    <p class="text-lg text-gray-800 max-w-3xl mx-auto leading-relaxed">
      {{ __('site.welcome_paragraph') }}
    </p>
    <a href="{{ route('contact') }}" 
       class="inline-block bg-blue-700 text-white px-10 py-4 rounded-lg text-lg font-semibold shadow-lg hover:bg-blue-800 transition">
        {{ __('site.contact_us') }}
    </a>
  </div>

  <section>
    <h2 class="text-3xl font-bold text-blue-800 mb-8 text-{{ session('locale', 'ar') == 'ar' ? 'right' : 'left' }}">
      <i class="fas fa-briefcase-medical text-yellow-500 ml-3"></i>
      {{ __('site.legal_services') }}
    </h2>

    @php
    // روابط صور مجانية مع حقوق ملكية خاصة بالقانون والتقاضي
    $serviceImages = [
      'https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=800&q=80', // قانون
      'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80', // مكتب محاماة
      'https://images.unsplash.com/photo-1526256262350-7da7584cf5eb?auto=format&fit=crop&w=800&q=80', // كتب قانون
      'https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=800&q=80', // جلسة محكمة
      'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80', // قاعة محكمة
      'https://images.unsplash.com/photo-1526256262350-7da7584cf5eb?auto=format&fit=crop&w=800&q=80', // كتب قانون
    ];

    $services = [
        ['title' => __('site.service_1'), 'desc' => __('site.service_1_desc')],
        ['title' => __('site.service_2'), 'desc' => __('site.service_2_desc')],
        ['title' => __('site.service_3'), 'desc' => __('site.service_3_desc')],
        ['title' => __('site.service_4'), 'desc' => __('site.service_4_desc')],
        ['title' => __('site.service_5'), 'desc' => __('site.service_5_desc')],
        ['title' => __('site.service_6'), 'desc' => __('site.service_6_desc')],
    ];
    @endphp

    <div class="swiper mySwiperServices">
        <div class="swiper-wrapper">
            @foreach ($services as $index => $service)
            <div class="swiper-slide" style="background-image: url('{{ $serviceImages[$index] }}')">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h3 class="text-2xl font-semibold mb-3">{{ $service['title'] }}</h3>
                    <p class="text-sm leading-relaxed">{{ $service['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
  </section>

  <section class="rounded-lg p-10 text-center shadow-lg">
    <h2 class="text-3xl font-bold text-blue-900 mb-6">
      <i class="fas fa-comments-dollar text-yellow-600 ml-3"></i>
      {{ __('site.need_consultation') }}
    </h2>
    <p class="text-gray-800 mb-8 max-w-xl mx-auto leading-relaxed">
      {{ __('site.ready_to_help') }}
    </p>
    <a href="{{ route('contact') }}" 
       class="inline-block bg-blue-700 text-white px-10 py-4 rounded-lg font-semibold shadow hover:bg-blue-800 transition">
        {{ __('site.contact_now') }}
    </a>
  </section>

  <section>
    <h2 class="text-3xl font-bold text-blue-800 mb-8 text-right">
      <i class="fas fa-users text-yellow-500 ml-3"></i>
      {{ __('site.client_testimonials') }}
    </h2>
    <div class="grid sm:grid-cols-2 gap-10">
        @foreach ([['name' => 'أ. أحمد السالم', 'comment' => __('site.testimonial_1')],
                  ['name' => 'أ. نورة الخطيب', 'comment' => __('site.testimonial_2')]] as $testimonial)
        <div class="p-8 rounded-lg shadow-lg text-right bg-white bg-opacity-90">
            <p class="text-gray-800 italic mb-6">"{{ $testimonial['comment'] }}"</p>
            <p class="font-semibold text-blue-700">- {{ $testimonial['name'] }}</p>
        </div>
        @endforeach
    </div>
  </section>
</section>
@endsection

@section('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const swiperServices = new Swiper('.mySwiperServices', {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
      },
    });
  });
</script>
@endsection
