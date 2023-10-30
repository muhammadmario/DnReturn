@extends('auth.layout.main')

@section('title')
<title>Login</title>
@endsection

@section('content')
<div class="max-w-xl p-5 mx-auto min-h-screen">
    <form class="mt-36">
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium">Your email</label>
            <input type="email" id="email" class=" border   text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-40 focus:ring-blue-500 focus:border-blue-500" placeholder="name@flowbite.com" required>
        </div>
        <div class="mb-6 relative">
            <label for="password" class="block mb-2 text-sm font-medium">Your password</label>
            <input type="password" id="password" class=" border   text-sm rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-40 focus:ring-blue-500 focus:border-blue-500" required>
            <i class="absolute top-10 right-3 cursor-pointer fas fa-eye" id="togglePassword"></i>
        </div>
        <div class="flex items-end justify-end mb-6">
            <a href="/forgot-password" class="text-sm font-medium text-end">Forgot your password?</a>
        </div>

        <div>
            <button type="submit" class="text-white w-full bg-red-800 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Submit</button>
        </div>
        
    </form>
</div>

@endsection