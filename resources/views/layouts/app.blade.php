<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    {{-- عنوان الصفحة --}}
    <title>@yield('title', __('site.title'))</title>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
      integrity="sha512-/1c4PaHGc..."
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Swiper CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />

    @yield('styles')
</head>
<body class="bg-gray-50 text-gray-900 {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}">

    {{-- شريط التنقل --}}
    @include('components.navbar')

    {{-- محتوى الصفحة --}}
    <main class="min-h-screen py-10 px-4">
        @yield('content')
    </main>

    {{-- التذييل --}}
    @include('components.footer')

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    @yield('scripts')

</body>
</html>
