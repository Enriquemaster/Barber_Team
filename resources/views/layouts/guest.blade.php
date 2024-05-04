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
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-black">
    <div class="flex flex-col md:flex-row justify-center mt-20 mb-20 mx-auto">

            <div class="text-center  mx-12">
                <h1 class="text-white text-center Bodoni text-2xl md:text-5xl"> THE BARBER HOUSE </h1><br>
                <p class=" text-white text-justify md:text-justify montserrat md:px-6 md:text-2xl">“Revitaliza tu vida, renueva tu estilo con un cambio de look”.</p>
                
            <div class=" w-11/12 mt-6 px-6 py-4 dark:bg-black  shadow-md overflow-hidden sm:rounded-lg mx-auto">
                {{ $slot }}
            </div>
            </div>

         
    </body>
</html>
