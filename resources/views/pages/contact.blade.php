@extends('layouts.app')

@section('title', __('site.contact_us'))

@section('content')
<section class="max-w-5xl mx-auto px-4 py-10 space-y-10" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <h2 class="text-4xl font-extrabold text-center text-blue-900 mb-6">{{ __('site.contact_us') }}</h2>

    <div class="grid md:grid-cols-2 gap-8">

        <!-- معلومات الاتصال -->
        <div class="space-y-5 text-gray-800">
            <h3 class="text-2xl font-semibold text-blue-800 mb-4">{{ __('site.contact_info') }}</h3>

            <div class="flex items-start gap-3">
                <span class="text-blue-700"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></span>
                <p><strong>{{ __('site.address') }}:</strong> {{ __('site.address_content') }}</p>
            </div>

            <div class="flex items-start gap-3">
                <span class="text-blue-700"><i class="fas fa-phone-alt" aria-hidden="true"></i></span>
                <p><strong>{{ __('site.phone') }}:</strong> +966 555 555 555</p>
            </div>

            <div class="flex items-start gap-3">
                <span class="text-blue-700"><i class="fas fa-envelope" aria-hidden="true"></i></span>
                <p><strong>{{ __('site.email') }}:</strong> info@unitedlaw.com</p>
            </div>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.6686846123833!2d46.67529521501183!3d24.713551184105504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f04e28d90f0eb%3A0x24ee1059e30f3f60!2z2KfZhNmF2KjYqSDZhdi52KfZhNmF2YrYsQ!5e0!3m2!1sar!2ssa!4v1680000000000!5m2!1sar!2ssa"
                width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" aria-label="خريطة الموقع">
            </iframe>
        </div>

        <!-- نموذج التواصل -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-xl font-semibold text-blue-700 mb-4">{{ __('site.send_message') }}</h3>
            <form method="POST" action="#">
                @csrf

                <div class="mb-4">
                    <label class="block text-sm font-bold mb-1" for="name">{{ __('site.full_name') }}</label>
                    <input id="name" type="text" name="name" class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:border-blue-600" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-bold mb-1" for="email">{{ __('site.email') }}</label>
                    <input id="email" type="email" name="email" class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:border-blue-600" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-bold mb-1" for="message">{{ __('site.message') }}</label>
                    <textarea id="message" name="message" rows="5" class="w-full border border-gray-300 rounded p-3 focus:outline-none focus:border-blue-600" required></textarea>
                </div>

                <button type="submit" class="bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-6 rounded transition">
                    {{ __('site.send') }}
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
