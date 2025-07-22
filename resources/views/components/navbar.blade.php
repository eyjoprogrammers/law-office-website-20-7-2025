<nav class="bg-blue-900 text-white shadow-md p-4 flex flex-col md:flex-row justify-between items-center" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
    <a href="{{ route('home') }}" class="flex items-center gap-2 text-2xl font-bold text-yellow-300 hover:text-white transition">
        <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="h-15 w-auto"> {{-- لوجو --}}
        {{ __('site.title') }}
    </a>

    <ul class="flex flex-wrap justify-center gap-4 mt-3 md:mt-0 md:gap-6 text-sm md:text-base font-medium">
        <li><a href="{{ route('home') }}" class="hover:text-yellow-300 transition">{{ __('site.home') }}</a></li>
        <li><a href="{{ route('about') }}" class="hover:text-yellow-300 transition">{{ __('site.about') }}</a></li>
        <li><a href="{{ route('services') }}" class="hover:text-yellow-300 transition">{{ __('site.services') }}</a></li>
        <li><a href="{{ route('team') }}" class="hover:text-yellow-300 transition">{{ __('site.team') }}</a></li>
        <li><a href="{{ route('blog') }}" class="hover:text-yellow-300 transition">{{ __('site.blog') }}</a></li>
        <li><a href="{{ route('contact') }}" class="hover:text-yellow-300 transition">{{ __('site.contact') }}</a></li>
        <div class="flex gap-3 mt-2 md:mt-0">
            <a href="{{ route('changeLang', 'ar') }}" class="{{ App::getLocale() === 'ar' ? 'font-bold underline' : '' }}">{{ __('site.lang_ar') }}</a>
            <a href="{{ route('changeLang', 'en') }}" class="{{ App::getLocale() === 'en' ? 'font-bold underline' : '' }}">{{ __('site.lang_en') }}</a>
        </div>
    </ul>
</nav>
