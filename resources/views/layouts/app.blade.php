<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
<x-jet-banner/>

<div class="min-h-screen bg-gray-100">
    @livewire('navigation-menu')

    <!-- Page Heading -->
    @if (isset($header))
        {{ $header }}
@endif
    <header class="flex justify-center mt-5 bg-green-400">
        <div class=" opacity-70 w-3/4 ">
            <ul class="flex flex-wrap space-x-8 justify-left py-4 w-600  md:pl-10 sm:pl-3 text-white">
                <li ><a active class=" hover:bg-white active:bg-indio-500" href="">分类</a></li>
                <li ><a class=" hover:bg-green-700" href="">分类</a></li>
                <li ><a class=" hover:bg-green-700" href="">分类</a></li>
                <li ><a class=" hover:bg-green-700" href="">分类</a></li>

                <li>6</li>
            </ul>
        </div>
    </header>
<!-- Page Content -->
    <main>
        @yield('content')
    <!-- component -->
    </main>

</div>

@stack('modals')

@livewireScripts
</body>
</html>
