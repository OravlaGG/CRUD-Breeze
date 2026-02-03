<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=cinzel:400,600,700&display=swap" rel="stylesheet" />
        <link rel="icon" type="img/svg+xml" href="{{ asset('favicon.svg') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-serif bg-[#582D30] text-[#F8D5B5] min-h-screen">
        <div class="min-h-screen">
            @include('layouts.navigation')

            @isset($header)
                <header class="bg-[#582D30] border-b border-[#BBBCAC]">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <h1 class="text-3xl font-bold text-[#F8D5B5] tracking-wide">
                            {{ $header }}
                        </h1>
                    </div>
                </header>
            @endisset

            <main class="py-6">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
