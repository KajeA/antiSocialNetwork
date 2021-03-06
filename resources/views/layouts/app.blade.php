<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <section class="px-8 py-4">
            <header class="container mx-auto">
                <h1>
                    <img src="/images/gVf5m401.svg" alt="twatter">
                </h1>
            </header>
        </section>

        <section class="px-8">
            <main class="container mx-auto">
                <div class="lg:flex">
                    @if (auth()->check())
                        <div class="lg:w-1/6 p-2">
                            @include ('_sidebar-links')
                        </div>
                    @endif

                    <div class="lg:flex-1 lg:mx-8 p-2">
                        @yield('content')
                    </div>

                    @if (auth()->check())
                        <div class="lg:w-1/6 p-2">
                            @include ('_friends-list')
                        </div>
                        @endif
                </div>
            </main>
        </section>
    </div>
</body>
</html>
