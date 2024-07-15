@props([
'title' => config('site.title'),
'description' => config('site.description'),
])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#0C1728]">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @vite(['resources/css/app.css', 'resources/css/animation.css', 'resources/js/app.js'])

    @livewireStyles

    <script defer src="https://unpkg.com/@alpinejs/ui@3.13.1-beta.0/dist/cdn.min.js"></script>
    <link href="{{ asset('css/tailwindcss-forms.css') }}" rel="stylesheet">

    <link ref="stylesheet" href="{{ asset('css/locomotive-scroll.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="h-full text-[#FCFCFC]" data-scroll-container>
    <x-ui.header />

    <main id="swup" class="transition-main" aria-labelledby="main website content">
        {{ $slot }}
    </main>

    <x-ui.footer />

    <div class="overlay transition-overlay"></div>

    @livewireScripts

    <script src="{{ asset('js/locomotive-scroll.js') }}"></script>
    <script src="{{ asset('js/gsap.js') }}"></script>
    <script src="{{ asset('js/ScrollTrigger.js') }}"></script>

    <script src="{{ asset('js/swup.js') }}"></script>
    <script>
        const swup = new Swup({
            cache: false,
            containers: ["#swup"]
        });
    </script>

    @stack('scripts')
</body>

</html>