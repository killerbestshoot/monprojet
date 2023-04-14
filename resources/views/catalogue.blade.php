<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="resources/assets/img/favicon_io/favicon.ico" type="image/x-icon">
        <title>Plan seri Pam</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
        <!-- Styles -->
        @vite(['resources/css/catalog.css', 'resources/js/app.js'])
    </head>

    <body>
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
            @if (Route::has('login'))
            <div id="present">
                <div id="logo">
                    <a href="http://"> <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"
                            viewBox="0 0 800 800">
                            <symbol id="SvgjsSymbol1045">
                                <polygon points="0,18.75 37.5,0 75,18.75 37.5,37.5"></polygon>
                            </symbol>
                            <symbol id="SvgjsSymbol1046">
                                <polygon points="0,18.75 37.5,37.5 37.5,75 0,56.25"></polygon>
                            </symbol>
                            <symbol id="SvgjsSymbol1047">
                                <polygon points="37.5,37.5 75,18.75 75,56.25 37.5,75"></polygon>
                            </symbol>
                            <g shape-rendering="crispEdges">
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="56.25" y="637.5" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="56.25" y="637.5" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="56.25" y="637.5" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="56.25" y="600" fill="hsl(2, 84%, 57%)"></use>
                                    <use xlink:href="#SvgjsSymbol1046" x="56.25" y="600" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="56.25" y="600" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="56.25" y="562.5" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="56.25" y="562.5" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="56.25" y="562.5" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="56.25" y="525" fill="hsl(2, 84%, 57%)"></use>
                                    <use xlink:href="#SvgjsSymbol1046" x="56.25" y="525" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="56.25" y="525" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="56.25" y="487.5" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="56.25" y="487.5" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="56.25" y="487.5" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="56.25" y="450" fill="hsl(2, 84%, 57%)"></use>
                                    <use xlink:href="#SvgjsSymbol1046" x="56.25" y="450" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="56.25" y="450" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="56.25" y="412.5" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="56.25" y="412.5" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="56.25" y="412.5" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="56.25" y="375" fill="hsl(2, 84%, 57%)"></use>
                                    <use xlink:href="#SvgjsSymbol1046" x="56.25" y="375" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="56.25" y="375" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="93.75" y="393.75" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="93.75" y="393.75" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="93.75" y="393.75" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="131.25" y="412.5" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="131.25" y="412.5" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="131.25" y="412.5" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="93.75" y="525" fill="hsl(2, 84%, 57%)"></use>
                                    <use xlink:href="#SvgjsSymbol1046" x="93.75" y="525" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="93.75" y="525" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="131.25" y="543.75" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="131.25" y="543.75" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="131.25" y="543.75" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="168.75" y="543.75" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="168.75" y="543.75" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="168.75" y="543.75" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="168.75" y="506.25" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="168.75" y="506.25" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="168.75" y="506.25" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="168.75" y="487.5" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="168.75" y="487.5" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="168.75" y="487.5" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="168.75" y="468.75" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="168.75" y="468.75" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="168.75" y="468.75" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="168.75" y="450" fill="hsl(2, 84%, 57%)"></use>
                                    <use xlink:href="#SvgjsSymbol1046" x="168.75" y="450" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="168.75" y="450" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="262.5" y="600" fill="hsl(2, 84%, 57%)"></use>
                                    <use xlink:href="#SvgjsSymbol1046" x="262.5" y="600" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="262.5" y="600" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="262.5" y="562.5" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="262.5" y="562.5" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="262.5" y="562.5" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="262.5" y="525" fill="hsl(2, 84%, 57%)"></use>
                                    <use xlink:href="#SvgjsSymbol1046" x="262.5" y="525" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="262.5" y="525" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="262.5" y="487.5" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="262.5" y="487.5" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="262.5" y="487.5" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="262.5" y="450" fill="hsl(2, 84%, 57%)"></use>
                                    <use xlink:href="#SvgjsSymbol1046" x="262.5" y="450" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="262.5" y="450" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="262.5" y="412.5" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="262.5" y="412.5" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="262.5" y="412.5" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="300" y="618.75" fill="hsl(2, 84%, 57%)"></use>
                                    <use xlink:href="#SvgjsSymbol1046" x="300" y="618.75" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="300" y="618.75" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="337.5" y="637.5" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="337.5" y="637.5" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="337.5" y="637.5" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="431.25" y="637.5" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="431.25" y="637.5" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="431.25" y="637.5" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="431.25" y="600" fill="hsl(2, 84%, 57%)"></use>
                                    <use xlink:href="#SvgjsSymbol1046" x="431.25" y="600" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="431.25" y="600" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="431.25" y="581.25" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="431.25" y="581.25" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="431.25" y="581.25" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="431.25" y="562.5" fill="hsl(2, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="431.25" y="562.5" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="431.25" y="562.5" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="431.25" y="525" fill="hsl(2, 84%, 57%)"></use>
                                    <use xlink:href="#SvgjsSymbol1046" x="431.25" y="525" fill="#ff7260"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="431.25" y="525" fill="#b3000d"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="431.25" y="506.25" fill="hsl(230, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="431.25" y="506.25" fill="#7980ff"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="431.25" y="506.25" fill="#002cb9"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="431.25" y="487.5" fill="hsl(230, 84%, 57%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="431.25" y="487.5" fill="#7980ff"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="431.25" y="487.5" fill="#002cb9"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="431.25" y="487.5" fill="hsl(353, 98%, 41%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="431.25" y="487.5" fill="#ff5043"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="431.25" y="487.5" fill="#950000"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="431.25" y="468.75" fill="hsl(353, 98%, 41%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="431.25" y="468.75" fill="#ff5043"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="431.25" y="468.75" fill="#950000"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="431.25" y="431.25" fill="hsl(353, 98%, 41%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="431.25" y="431.25" fill="#ff5043"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="431.25" y="431.25" fill="#950000"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="431.25" y="412.5" fill="hsl(353, 98%, 41%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="431.25" y="412.5" fill="#ff5043"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="431.25" y="412.5" fill="#950000"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="468.75" y="431.25" fill="hsl(353, 98%, 41%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="468.75" y="431.25" fill="#ff5043"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="468.75" y="431.25" fill="#950000"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="506.25" y="450" fill="hsl(353, 98%, 41%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="506.25" y="450" fill="#ff5043"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="506.25" y="450" fill="#950000"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="468.75" y="562.5" fill="hsl(353, 98%, 41%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="468.75" y="562.5" fill="#ff5043"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="468.75" y="562.5" fill="#950000"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="506.25" y="581.25" fill="hsl(353, 98%, 41%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="506.25" y="581.25" fill="#ff5043"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="506.25" y="581.25" fill="#950000"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="543.75" y="581.25" fill="hsl(353, 98%, 41%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="543.75" y="581.25" fill="#ff5043"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="543.75" y="581.25" fill="#950000"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="543.75" y="562.5" fill="hsl(353, 98%, 41%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="543.75" y="562.5" fill="#ff5043"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="543.75" y="562.5" fill="#950000"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="543.75" y="543.75" fill="hsl(353, 98%, 41%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="543.75" y="543.75" fill="#ff5043"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="543.75" y="543.75" fill="#950000"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="543.75" y="525" fill="hsl(353, 98%, 41%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="543.75" y="525" fill="#ff5043"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="543.75" y="525" fill="#950000"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="543.75" y="506.25" fill="hsl(353, 98%, 41%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="543.75" y="506.25" fill="#ff5043"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="543.75" y="506.25" fill="#950000"></use>
                                </g>
                                <g>
                                    <use xlink:href="#SvgjsSymbol1045" x="543.75" y="487.5" fill="hsl(353, 98%, 41%)">
                                    </use>
                                    <use xlink:href="#SvgjsSymbol1046" x="543.75" y="487.5" fill="#ff5043"></use>
                                    <use xlink:href="#SvgjsSymbol1047" x="543.75" y="487.5" fill="#950000"></use>
                                </g>
                            </g>
                            <g></g>
                        </svg></a>
                    <h3></h3>
                </div>

            </div>

            @endif
        </main>
    </body>

</html>
