<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-zinc-800 flex flex-col items-center justify-center">
    @include('user.components.navbar')
    <main class="container flex flex-col pt-20">
        @yield('content')
    </main>

    @include('user.components.footer')

    @stack('scripts')
    <script>
        const burger = document.getElementById('burger');
        const mobileList = document.getElementById('mobileList');
        
        burger.addEventListener('click', () => {
            mobileList.classList.toggle('flex'); // Mengganti 'flex' menjadi 'hidden' atau sebaliknya
            mobileList.classList.toggle('hidden');
        });
    </script>
</body>
</html>