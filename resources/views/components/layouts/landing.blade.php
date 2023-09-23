<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=roboto:300,400,500,700,900" rel="stylesheet" />

    @livewireStyles
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-slate-100 dark:bg-slate-900">
    @if (session()->has('flash-messages'))
        <input type="hidden" id="flash-message-error"
            value="{{ session('flash-messages')['error'] }}">
        <input type="hidden" id="flash-message-message"
            value="{{ session('flash-messages')['message'] }}">
    @endif

    <header
        class="flex flex-wrap shadow sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm py-4 dark:bg-gray-800">
        <nav class="max-w-5xl w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between"
            aria-label="Global">
            <a class="flex-none text-xl font-semibold dark:text-white"
                href="{{ route('welcome') }}">SupplyPulse</a>
            <div class="flex flex-row items-center gap-5 mt-5 sm:justify-end sm:mt-0 sm:pl-5">
                @if (Auth::check())
                    <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-500"
                        href="{{ route('dshb.index') }}">
                        Dashboard
                    </a>
                @else
                    <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-500"
                        href="{{ route('login') }}">
                        Login
                    </a>
                @endif
            </div>
        </nav>
    </header>

    {{-- @include('components.layouts.dashboard.navbar') --}}

    <main id="content" role="main">
        <div class="max-w-5xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>

    @stack('models')

    {{-- start script --}}
    @livewireScripts
    @vite(['resources/js/app.js'])
    @stack('scripts')
    {{-- end script --}}
</body>

</html>
