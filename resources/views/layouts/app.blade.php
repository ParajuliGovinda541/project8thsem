<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite('resources/css/app.css')
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div>
            @include('layouts.navigation')
        </div>
            {{-- links --}}
    <div class="lg:flex hidden">

        <div class="px-2  fixed  w-56 bg-gradient-to-t  from-[#211C6A] to-[#59B4C3]  h-screen">
            <a class="my-1 hover:bg-white hover:text-black text-xl pl-5 text-white block w-full" href="{{route('dashboard')}}">Dashboard</a>
            <hr class="">
            <form action="" method="POST">
                @csrf
                <button
                class="my-1 hover:bg-white hover:text-black text-xl pl-5 text-white block w-full text-left" type="submit" >Logouts</button>
                <hr class="">
            </form>
        </div>

    </div>



    {{-- dashboard content --}}
    <div class="w-full pl-60">
        <div>
         <h1 class="text-black text-3xl">   @yield('heading')</h1>
        </div>
        @yield('content')
    </div>

    </body>
</html>
