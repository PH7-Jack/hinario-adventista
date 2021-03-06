<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Hinario') }}</title>

        <link rel="icon" type="image/png" sizes="196x196" href="{{ asset('icons/favicon-196.png') }}">

        <meta name="description" content="Hinário Adventista. Pesquise por hinos e louve ao Senhor.">

        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ config('app.url') }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ config('app.name', 'Hinario') }}">
        <meta property="og:description" content="Hinário Adventista. Pesquise por hinos e louve ao Senhor.">
        <meta property="og:image" content="{{ asset('images/cover.png') }}">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="{{ asset('images/cover.png') }}">
        <meta property="twitter:domain" content="{{ parse_url(config('app.url'), PHP_URL_HOST) }}">
        <meta property="twitter:url" content="{{ config('app.url') }}">
        <meta name="twitter:title" content="{{ config('app.name', 'Hinario') }}">
        <meta name="twitter:description" content="Hinário Adventista. Pesquise por hinos e louve ao Senhor.">
        <meta name="twitter:image" content="{{ asset('images/cover.png') }}">

        <!-- pwa tags -->
        <link rel="manifest" href="manifest.json" />
        <meta name="theme-color" content="#f1f5f9" />
        <meta name="msapplication-square70x70logo" content="{{ asset('icons/mstile-icon-128.png') }}">
        <meta name="msapplication-square150x150logo" content="{{ asset('icons/mstile-icon-270.png') }}">
        <meta name="msapplication-square310x310logo" content="{{ asset('icons/mstile-icon-558.png') }}">
        <meta name="msapplication-wide310x150logo" content="{{ asset('icons/mstile-icon-558-270.png') }}">
        <meta name="apple-mobile-web-app-status-bar" content="#f1f5f9" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="apple-touch-icon" href="{{ asset('icons/apple-icon-180.png') }}">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-2048-2732.jpg') }}" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-2732-2048.jpg') }}" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-1668-2388.jpg') }}" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-2388-1668.jpg') }}" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-1536-2048.jpg') }}" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-2048-1536.jpg') }}" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-1668-2224.jpg') }}" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-2224-1668.jpg') }}" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-1620-2160.jpg') }}" media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-2160-1620.jpg') }}" media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-1284-2778.jpg') }}" media="(device-width: 428px) and (device-height: 926px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-2778-1284.jpg') }}" media="(device-width: 428px) and (device-height: 926px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-1170-2532.jpg') }}" media="(device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-2532-1170.jpg') }}" media="(device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-1125-2436.jpg') }}" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-2436-1125.jpg') }}" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-1242-2688.jpg') }}" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-2688-1242.jpg') }}" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-828-1792.jpg') }}" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-1792-828.jpg') }}" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-1242-2208.jpg') }}" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-2208-1242.jpg') }}" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-750-1334.jpg') }}" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-1334-750.jpg') }}" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-640-1136.jpg') }}" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{ asset('icons/apple-splash-1136-640.jpg') }}" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset(mix('dist/app.css')) }}">
        <livewire:styles />

        <wireui:scripts />
        <script src="{{ asset(mix('dist/app.js')) }}" defer></script>

        <style>
            [x-cloak] { display: none !important; }
        </style>
    </head>

    <body class="font-sans text-gray-900 antialiased bg-slate-100">
        <x-notifications />

        {{ $slot }}

        <livewire:scripts />
        <script src="{{ asset(mix('dist/pwa.js')) }}" defer></script>
    </body>
</html>
