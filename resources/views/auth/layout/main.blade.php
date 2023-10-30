<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-zinc-800 text-white">
    @include('user.components.navbar')
    <main class="container " style="margin-top: 90px">
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
    <script>
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');

        togglePassword.addEventListener('click', () => {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                togglePassword.classList.remove('fa-eye');
                togglePassword.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                togglePassword.classList.remove('fa-eye-slash');
                togglePassword.classList.add('fa-eye');
            }
        });
    </script>
</body>
</html>