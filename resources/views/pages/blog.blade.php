@extends('layouts.app')

@section('title', __('site.articles'))

@section('content')
<section dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" class="max-w-7xl mx-auto px-4 py-12 text-{{ app()->getLocale() === 'ar' ? 'right' : 'left' }} bg-gradient-to-b from-yellow-50 to-white">
    <h2 class="text-4xl font-extrabold text-red-800 text-center mb-10">
        {{ __('site.legal_articles') }}
    </h2>

    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach ([
            [
                'title' => __('site.article_1_title'),
                'excerpt' => __('site.article_1_excerpt'),
                'image' => 'https://images.pexels.com/photos/4427610/pexels-photo-4427610.jpeg'
            ],
            [
                'title' => __('site.article_2_title'),
                'excerpt' => __('site.article_2_excerpt'),
                'image' => 'https://images.pexels.com/photos/7841451/pexels-photo-7841451.jpeg'
            ],
            [
                'title' => __('site.article_3_title'),
                'excerpt' => __('site.article_3_excerpt'),
                'image' => 'https://images.pexels.com/photos/3183186/pexels-photo-3183186.jpeg'
            ]
        ] as $post)
        <div class="bg-white border border-gray-200 shadow-lg hover:shadow-2xl transition duration-300 rounded-xl overflow-hidden flex flex-col">
            <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-48 object-cover">

            <div class="p-5 flex-grow flex flex-col justify-between bg-gray-50">
                <div>
                    <h3 class="text-xl font-bold text-blue-900">{{ $post['title'] }}</h3>
                    <p class="text-sm text-gray-700 leading-relaxed mt-2">{{ $post['excerpt'] }}</p>
                </div>
                <div class="{{ app()->getLocale() === 'ar' ? 'text-left' : 'text-right' }} mt-4">
                    <a href="#" class="inline-block px-4 py-2 bg-blue-700 text-white text-sm rounded hover:bg-blue-800 transition">
                        {{ __('site.read_more') }}
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
