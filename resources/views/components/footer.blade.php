<footer class="bg-blue-900 text-yellow-300 text-center py-6 mt-10 text-sm md:text-base" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <p class="mb-0">
        &copy; {{ now()->year }} {{ __('site.office_name') }}. {{ __('site.all_rights_reserved') }}
    </p>
</footer>
