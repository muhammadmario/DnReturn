<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('user.components.navbar')
    <main class="container" style="margin-top: 80px; margin-bottom: 80px">
        @yield('content')
    </main>

    @include('user.components.footer')
</body>
</html>