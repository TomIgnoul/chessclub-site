<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Chess Club')</title>
</head>
<body>
    @include('layouts._partials.header')
    <main>
        @yield('content')
    </main>
    @include('layouts._partials.footer')
</body>
</html>
