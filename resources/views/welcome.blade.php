<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
    </head>
    <body class="p-6">
        <h1 class="text-3xl font-bold">
            Welcome to the Books App!
        </h1>
    <ul>
        @if (Route::has('login'))
            @auth
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>

            @else
                <li><a href="{{ url('/login') }}">Anmeldung</a></li>
            @endauth

        @endif
    </ul>
</body>
</html>
