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

<body class="min-h-screen bg-slate-50 dark:bg-slate-900">
    @if (session()->has('flash-messages'))
        <input type="hidden" id="flash-message-error"
            value="{{ session('flash-messages')['error'] }}">
        <input type="hidden" id="flash-message-message"
            value="{{ session('flash-messages')['message'] }}">
    @endif

    @include('components.layouts.dashboard.navbar')

    <main id="content" role="main">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
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
