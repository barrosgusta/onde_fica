<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @yield('head')        
    </head>
    <body class="font-sans antialiased bg-gray-100 dark:bg-black dark:text-white" onload="initMap()">        
        <header class="backdrop-blur-3xl w-full p-4 flex justify-between items-center gap-2 shadow-lg mb-6 text-2xl rounded-b-xl bg-white/65 dark:bg-gray-800/65">
            <div class="flex items-center gap-1">
                <strong>Imigra Fácil</strong>
                <x-zondicon-location class="h-7 block" />
            </div>
            <div class="text-sm flex gap-3">
                <a href="{{ route('home', 'en') }}">English</a>
                <a href="{{ route('home', 'es') }}">Español</a>
                <a href="{{ route('home', 'br') }}">Português</a>    
            </div>
        </header>
        <main class="flex h-full min-h-screen w-full items-center justify-center px-2 sm:px-6 md:px-10 lg:px-14 xl:px-32 2xl:px-48 mb-11">
            <div class="backdrop-blur-3xl flex flex-col w-full h-full rounded-xl p-7 md:p-14 shadow-xl bg-white/70 dark:bg-gray-800/70">
                @yield('content')                
            </div>
        </main>
        <!-- <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            Criado por alunos da <a href="https://www.unidavi.edu.br">Unidavi</a>
        </footer> -->
        <img class="fixed top-0 left-0 w-screen h-screen -z-50" src="{{ asset('images/rio_do_sul_1.webp') }}" alt="Image">
    </body>
</html>
