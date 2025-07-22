@extends('layouts.app')

@section('title', __('site.our_services'))

@section('content')
<section class="max-w-6xl mx-auto py-12 px-4" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <h2 class="text-4xl font-extrabold text-center text-blue-900 mb-12">
        {{ __('site.legal_services') }}
    </h2>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @php
            $services = [
                ['icon' => '⚖️', 'key' => 'legal_consulting'],
                ['icon' => '🧑‍⚖️', 'key' => 'civil_and_criminal_litigation'],
                ['icon' => '📄', 'key' => 'contracts_and_notarization'],
                ['icon' => '🏢', 'key' => 'corporate_and_commercial_law'],
                ['icon' => '👨‍👩‍👧‍👦', 'key' => 'family_and_inheritance'],
                ['icon' => '🤝', 'key' => 'arbitration_and_dispute'],
            ];
        @endphp

        @foreach ($services as $service)
            <div class="bg-white shadow-lg hover:shadow-xl transition duration-300 p-6 rounded-xl border border-blue-100">
                <div class="flex items-center {{ app()->getLocale() == 'ar' ? 'space-x-reverse' : '' }} space-x-4 mb-4">
                    <div class="text-4xl">{{ $service['icon'] }}</div>
                    <h3 class="text-xl font-bold text-blue-800">{{ __('site.' . $service['key']) }}</h3>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    {{ __('site.service_description', ['service' => __('site.' . $service['key'])]) }}
                </p>
            </div>
        @endforeach
    </div>
</section>
@endsection
