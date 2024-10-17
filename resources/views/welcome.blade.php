<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-cover bg-no-repeat min-h-screen" style="background-image: url('{{ asset('storage/pmb.png') }}');">

    <div class="relative flex justify-center items-center min-h-screen">
        @if (Route::has('login'))
            <div class="absolute top-0 right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-white hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-white rounded">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-white hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-white rounded">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-white hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-white rounded">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>
</html>
