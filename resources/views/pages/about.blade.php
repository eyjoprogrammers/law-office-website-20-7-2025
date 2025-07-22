@extends('layouts.app')
@section('title', __('site.about_us_title'))

@section('content')
<section class="max-w-5xl mx-auto px-4 py-10 space-y-10 text-right" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <!-- عنوان الصفحة -->
    <div class="text-center space-y-3">
        <h2 class="text-4xl font-bold text-blue-900">{{ __('site.about_us_title') }}</h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            {{ __('site.about_us_description') }}
        </p>
    </div>

    <!-- قسم المعلومات -->
    <div class="grid md:grid-cols-3 gap-6 text-gray-800">
        <!-- الرسالة -->
        <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300 border-t-4 border-blue-700">
            <div class="mb-3">
                <svg class="w-10 h-10 text-blue-700 mx-auto" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M3 7l9-4 9 4-9 4-9-4z" />
                    <path d="M3 17l9 4 9-4" />
                    <path d="M3 12l9 4 9-4" />
                </svg>
            </div>
            <h3 class="text-xl font-bold mb-2 text-blue-700">{{ __('site.our_mission') }}</h3>
            <p>{{ __('site.our_mission_description') }}</p>
        </div>

        <!-- الرؤية -->
        <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300 border-t-4 border-green-600">
            <div class="mb-3">
                <svg class="w-10 h-10 text-green-600 mx-auto" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 2l4 7H8l4-7z" />
                    <path d="M2 22h20L12 13 2 22z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold mb-2 text-green-600">{{ __('site.our_vision') }}</h3>
            <p>{{ __('site.our_vision_description') }}</p>
        </div>

        <!-- القيم -->
        <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300 border-t-4 border-yellow-500">
            <div class="mb-3">
                <svg class="w-10 h-10 text-yellow-500 mx-auto" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h3 class="text-xl font-bold mb-2 text-yellow-600">{{ __('site.our_values') }}</h3>
            <ul class="list-disc list-inside space-y-1 text-gray-700">
                <li>{{ __('site.integrity') }}</li>
                <li>{{ __('site.professionalism') }}</li>
                <li>{{ __('site.commitment') }}</li>
                <li>{{ __('site.transparency') }}</li>
            </ul>
        </div>
    </div>
</section>
@endsection
