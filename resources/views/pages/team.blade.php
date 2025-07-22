@extends('layouts.app')

@section('title', __('site.team'))

@section('content')
<section class="max-w-6xl mx-auto py-12 px-4" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
    <h2 class="text-4xl font-extrabold text-center text-blue-900 mb-12">
        {{ __('site.lawyers') }}
    </h2>

    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach ([
            [
                'name' => __('site.lawyer1_name'),
                'title' => __('site.lawyer1_title'),
                'img' => 'https://images.pexels.com/photos/3785084/pexels-photo-3785084.jpeg',
                'bio' => __('site.lawyer1_bio'),
                'email' => 'mohamed@example.com',
                'whatsapp' => '966500000001'
            ],
            [
                'name' => __('site.lawyer2_name'),
                'title' => __('site.lawyer2_title'),
                'img' => 'https://images.pexels.com/photos/1181690/pexels-photo-1181690.jpeg',
                'bio' => __('site.lawyer2_bio'),
                'email' => 'sara@example.com',
                'whatsapp' => '966500000002'
            ],
            [
                'name' => __('site.lawyer3_name'),
                'title' => __('site.lawyer3_title'),
                'img' => 'https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg',
                'bio' => __('site.lawyer3_bio'),
                'email' => 'talal@example.com',
                'whatsapp' => '966500000003'
            ]
        ] as $lawyer)
            <div class="bg-white border border-gray-200 shadow-md rounded-xl overflow-hidden hover:shadow-xl transition duration-300 flex flex-col">
                <img src="{{ $lawyer['img'] }}" alt="{{ $lawyer['name'] }}" class="w-full h-56 object-cover">

                <div class="p-5 flex-grow flex flex-col justify-between space-y-3">
                    <div>
                        <h3 class="text-xl font-bold text-blue-800">{{ $lawyer['name'] }}</h3>
                        <p class="text-sm text-gray-700">{{ $lawyer['title'] }}</p>
                        <p class="text-sm text-gray-600 mt-2">{{ $lawyer['bio'] }}</p>
                    </div>

                    <div class="mt-4 flex justify-center gap-3">
                        <a href="https://wa.me/{{ $lawyer['whatsapp'] }}" target="_blank"
                           class="bg-green-500 hover:bg-green-600 text-white text-sm font-medium px-4 py-2 rounded-full shadow">
                            {{ __('site.whatsapp') }}
                        </a>
                        <a href="mailto:{{ $lawyer['email'] }}"
                           class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium px-4 py-2 rounded-full shadow">
                            {{ __('site.email') }}
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
