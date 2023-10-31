@extends('auth.layout.main')

@section('title')
<title>Login</title>
@endsection

@section('content')
<div class="max-w-xl p-5 mx-auto min-h-[80vh]">
    <form class="mt-28 bg-white text-black p-10 rounded-lg">
        <div class="mb-6">
            <label for="username" class="block mb-2 text-sm font-medium ">Username</label>
            <input type="text" id="username" class="border text-sm rounded-lg block w-full p-2.5 border-gray-400 placeholder-gray-40 focus:ring-blue-500 focus:border-blue-500" placeholder="Username" required>
        </div>
        <div class="mb-6 relative">
            <label for="password" class="block mb-2 text-sm font-medium">Password</label>
            <input type="password" id="password" class=" border text-sm rounded-lg block w-full p-2.5 border-gray-400 placeholder-gray-40 focus:ring-blue-500 focus:border-blue-500" placeholder="Password" required>
            <i class="absolute top-10 right-3 cursor-pointer fas fa-eye" id="togglePassword"></i>
        </div>
        <div class="flex items-end justify-end mb-6">
            <a href="/forgot-password" class="text-sm font-medium text-end text-red-500">Forgot your password?</a>
        </div>
        <div>
            <button type="submit" class="text-white w-full bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign In</button>
        </div>
    </form>
</div>

@endsection