<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Plan seri Pam</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

        <link rel="stylesheet" href="../css/app.css">
        <!-- Styles -->

    </head>

    <body class="antialiased">
        <header>
            <div class=''>
                @if (Route::has('login'))
                <div class="">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="">Tablo bo</a>
                    @else
                    <a href="{{ route('login') }}" class="">Konekte</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="">Enskri</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </header>
    </body>

</html>
