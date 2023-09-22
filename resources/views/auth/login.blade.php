<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-gray-100">
    <div class="w-screen h-screen flex items-center justify-center">
        <x-preline.card class="w-full max-w-sm shadow">
            <x-preline.card.title>
                Login
            </x-preline.card.title>

            <x-preline.card.subtitle>
                Welcome back :)
            </x-preline.card.subtitle>

            <form action="{{ route('login') }}" method="POST" class="mt-6">
                @csrf

                <div class="w-full mb-4">
                    <x-preline.form.label>Username</x-preline.form.label>
                    <x-preline.form.input type="text" name="username" placeholder="usernameaku" />
                    @error('username')
                        <x-preline.form.error-message :message="$message" />
                    @enderror
                </div>

                <div class="w-full mb-5">
                    <x-preline.form.label>Password</x-preline.form.label>
                    <x-preline.form.input type="password" name="password" placeholder="***" />
                </div>

                <div class="">
                    <x-preline.button.primary type="submit" class="w-full">
                        LOGIN
                    </x-preline.button.primary>
                </div>
            </form>
        </x-preline.card>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
