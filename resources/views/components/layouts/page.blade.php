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
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/css/animation.css', 'resources/js/app.js'])

    @livewireStyles

    <script defer src="https://unpkg.com/@alpinejs/ui@3.13.1-beta.0/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/@tailwindcss/forms@0.2.1/dist/forms.min.css" rel="stylesheet">

    <link ref="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@beta/bundled/locomotive-scroll.css">
</head>

<body class="h-full text-[#FCFCFC]" data-scroll-container>
    
    <x-ui.header />

    <main id="swup" class="transition-main" aria-labelledby="main website content">
        {{ $slot }}
    </main>

    <x-ui.footer />

    <div class="overlay transition-overlay"></div>

    @livewireScripts

    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@beta/bundled/locomotive-scroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>

    <script src="https://unpkg.com/swup@4"></script>
    <script src="https://unpkg.com/@swup/progress-plugin@3"></script>
    <script>
        const swup = new Swup({
            cache: false,
            containers: ["#swup"],
            plugins: [
                new SwupProgressPlugin()
            ]
        });
    </script>

    @stack('scripts')
</body>

</html>