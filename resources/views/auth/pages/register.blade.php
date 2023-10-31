@extends('auth.layout.main')

@section('title')
<title>Register</title>
@endsection

@section('content')
<div class="max-w-xl p-5 mx-auto min-h-[80vh]">
    <form class=" bg-white text-black p-10 rounded-lg">
        <div class="mb-6">
            <img src="{{ asset('assets/images/rdn-logo.png') }}" class="w-[10rem] mx-auto" alt="logo" />
        </div>
        <div class="mb-6">
            <label for="username" class="block mb-2 text-sm font-medium">Username</label>
            <input type="text" id="username" class="border text-sm rounded-lg block w-full p-2.5 border-gray-400 placeholder-gray-40 focus:ring-blue-500 focus:border-blue-500" placeholder="Username" required>
        </div>   
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium">Email</label>
            <input type="email" id="email" class="border text-sm rounded-lg block w-full p-2.5 border-gray-400 placeholder-gray-40 focus:ring-blue-500 focus:border-blue-500" placeholder="Username" required>
        </div>
        <div class="mb-6">
            <label for="pin" class="block mb-2 text-sm font-medium">PIN</label>
            <input type="number" id="pin" class="border text-sm rounded-lg block w-full p-2.5 border-gray-400 placeholder-gray-40 focus:ring-blue-500 focus:border-blue-500" placeholder="Username" required>
        </div>
        <div class="mb-6 relative">
            <label for="password" class="block mb-2 text-sm font-medium">Password</label>
            <input type="password" id="password" class=" border text-sm rounded-lg block w-full p-2.5 border-gray-400 placeholder-gray-40 focus:ring-blue-500 focus:border-blue-500" placeholder="Password" required>
            <i class="absolute top-10 right-3 cursor-pointer fas fa-eye" id="togglePassword"></i>
        </div>
        <div class="mb-6 relative">
            <label for="confPassword" class="block mb-2 text-sm font-medium">Confirm Password</label>
            <input type="password" id="confPassword" class=" border text-sm rounded-lg block w-full p-2.5 border-gray-400 placeholder-gray-40 focus:ring-blue-500 focus:border-blue-500" placeholder="Password" required>
            <i class="absolute top-10 right-3 cursor-pointer fas fa-eye" id="toggleConfPassword"></i>
        </div>
        <div>
            <button type="submit" class="text-white w-full bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create Account</button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
    <script>
        const confPasswordInput = document.getElementById('confPassword');
        const toggleConfPassword = document.getElementById('toggleConfPassword');

        toggleConfPassword.addEventListener('click', () => {
            if (confPasswordInput.type === 'password') {
                confPasswordInput.type = 'text';
                toggleConfPassword.classList.remove('fa-eye');
                toggleConfPassword.classList.add('fa-eye-slash');
            } else {
                confPasswordInput.type = 'password';
                toggleConfPassword.classList.remove('fa-eye-slash');
                toggleConfPassword.classList.add('fa-eye');
            }
        });
    </script>
@endpush