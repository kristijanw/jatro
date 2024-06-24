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

    <meta name="description" content="{{ $description }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css','resources/js/app.js'])
    
    <script defer src="https://unpkg.com/@alpinejs/ui@3.13.1-beta.0/dist/cdn.min.js"></script>
    
    <link href="https://unpkg.com/@tailwindcss/forms@0.2.1/dist/forms.min.css" rel="stylesheet">

    @livewireStyles
</head>
<body class="h-full text-[#FCFCFC]">

    <x-ui.header />

    <main id="main_content" aria-labelledby="main website content">
        {{ $slot }}
    </main>

    <x-ui.footer />

    @livewireScripts

    @stack('scripts')
</body>
</html>