<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="bg-black min-h-screen ">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-zinc-900 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
                @endif
            <div class="flex flex-row ">
            <div class="flex h-screen">
            <div class="bg-zinc-800 text-white md:w-64 p-4 hidden md:block">
            <a href="{{ route('dashboard') }}" class="block py-2 px-4 hover:bg-gray-700">{{ __('Dashboard') }}</a>
            <a href="{{ route('profile.edit') }}" class="block py-2 px-4 hover:bg-gray-700">{{ __('Perfil') }}</a>
            <a href="{{ route('reservas') }}" class="block py-2 px-4 hover:bg-gray-700">{{ __('reservas') }}</a>
            <a href="" class="block py-2 px-4 hover:bg-gray-700">Finalizar sesión</a>
        </div>
            
            </div>
            <div class="w-full">
          <main>
                {{ $slot }}
            </main>
          </div>
        </div>
    </body>
</html>
