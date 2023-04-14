<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Plan seri Pam</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="antialiased">
        <header>
            <div id="login-action">
                @if (Route::has('login'))
                {{-- <div class=""> --}}
                @auth
                <a href="{{ url('/dashboard') }}" class="">Tablo bo</a>
                @else
                <a href="{{ route('login') }}" class="">Konekte</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="">Enskri</a>
                @endif
                @endauth
                {{-- </div> --}}
                @endif
            </div>
        </header>
        <main>
            <div id="first">
                <p>
                    <span id="s1">Plan Seri Pam </span>se yon platfom ki pemet ou achte yon plan
                    <span id="s2">NetFlix</span> <span id="s3">Disney</span> <span id="s4">HBO-max</span> <span
                        id="s5">Curiosity</span> san kat kredi
                    wap ka peye depi sou kont <a href="#">Mon Cash</a> ou e wap gen posiblit pou gen pwop kont paw san
                    pataje ak lot moun.
                </p>
            </div>
            <div id="second">
                <a id="con" href="{{ route('login') }}">konekte w</a>
                <a id="cata" href="{{url('catalogue')}}">katalog nou</a>
            </div>
        </main>
    </body>

</html>
