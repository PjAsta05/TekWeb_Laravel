<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans antialiased bg-slate-900 grid h-screen w-screen">
    <header>
        <div class="w-full h-full bg-gradient-to-t from-slate-900 to-transparent backdrop-blur-sm">
            <nav class="w-12/12 h-auto bg-slate-900 bg-opacity-70 shadow-md">
                <div class="flex flex-col md:flex-row justify-between items-center p-4">
                    <div class="py-3 md:py-0 px-3 md:px-0">
                        <a class="text-white font-semibold text-3xl">INTEGER#4</a>
                    </div>
                    <ul class="flex w-full md:w-1/2 justify-evenly text-white">
                        <li><a href="{{route('home')}}" class="px-3 py-3 text-slate-400 hover:text-white font-semibold cursor-pointer">Home</a></li>
                        <li><a href="#" class="px-3 py-3 text-slate-400 hover:text-white font-semibold cursor-pointer">GusetStar</a></li>
                        <li><a href="#" class="px-3 py-3 text-slate-400 hover:text-white font-semibold cursor-pointer">Contact</a></li>
                        <li><a href="{{route('ticket')}}" class="px-3 py-3 text-slate-400 hover:text-white font-semibold cursor-pointer">Ticket</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        {{$slot}}
    </main>
    
    </body>
</html>
