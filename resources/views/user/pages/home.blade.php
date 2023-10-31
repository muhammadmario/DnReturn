@extends('user.layout.main')

@section('title')
<title>DnReturn</title>
@endsection

@section('content')
<header class="overflow-x-hidden h-[21rem] md:h-[19rem] flex flex-col items-center justify-center relative box-border bg-zinc-800">
    <video
        class="h-full w-full max-w-screen-xl object-cover"
        autoplay
        muted
        loop
        playsinline
        <source src="{{ asset('assets/videos/intro.mp4') }}" type="video/mp4">
    </video>
    <div class="h-full w-full max-w-screen-xl  absolute bg-transparent flex flex-col items-center justify-center backdrop-blur-sm">
        <a href="/">
            <img src="{{asset('assets/images/rdn-logo.png')}}" class="w-[8rem]" alt="logo" />
        </a>
        <div class="flex flex-col items-center justify-center font-semibold text-white text-center">
            <h1 class="text-2xl">RETURN DRAGON NEST</h1>
            <span class="text-xl">Welcome to Dragon Nest Return, Feel the Sensation.</span>
        </div>
        <a href="{{url('/')}}" class="my-2 p-2 bg-red-600 hover:bg-red-800 font-semibold text-white text-xs rounded">PLAY NOW</a>
    </div>
</header>
<div id="section1" class="py-5 px-5 md:pt-10 w-full overflow-x-hidden flex flex-col items-center justify-center bg-zinc-800">
    <div class="w-full max-w-screen-xl flex flex-col items-center justyfy-center gap-5 md:flex-row md:justify-between">
        <a href="{{url('/')}}" class="py-4 px-6 w-full md:min-w-[12rem] md:max-w-sm flex flex-col items-center justify-center bg-gradient-to-r from-red-800 to-red-600 rounded-lg text-center font-semibold text-white">
                <span class="text-xs">Total Player Online</span>
                <h1 class="text-3xl">956</h1>
        </a>
        <a href="{{url('/')}}" class="py-4 px-6 w-full md:min-w-[12rem] md:max-w-sm flex flex-col items-center justify-center bg-gradient-to-r from-red-800 to-red-600 rounded-lg text-center font-semibold text-white">
                <span class="text-xs">Total Character</span>
                <h1 class="text-3xl">178,108</h1>
        </a>
        <a href="{{url('/')}}" class="py-4 px-6 w-full md:min-w-[12rem] md:max-w-sm flex flex-col items-center justify-center bg-gradient-to-r from-red-800 to-red-600 rounded-lg text-center font-semibold text-white">
                <span class="text-xs">Total Account</span>
                <h1 class="text-3xl">91,788</h1>
        </a>
    </div>
    <img src="{{asset('assets/images/Asset10.png')}}" alt="asset10" class="mx-5 h-auto w-full max-w-screen-xl"/>
</div>
<div id="section2" class="py-5 px-5 md:pt-10 w-full overflow-x-hidden flex flex-col items-center justify-center bg-zinc-800">
    <div class="w-full max-w-screen-xl flex flex-col items-center justify-normal gap-5 md:flex-row md:justify-between flex-wrap">
        <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5">
            <div class="w-full box-border bg-white rounded shadow-md">
                <a href="{{ url('/') }}">
                    <img class="rounded-t object-cover" src="{{asset('assets/images/1.png')}}"
                        alt="img">
                </a>
                <div class="p-4 flex-1 flex flex-col items-start justify-center">
                    <a href="{{url('/')}}">
                        <h1 class="font-semibold text-black">NEWS</h1>
                        <span class="text-zinc-600 text-sm">Welcome to DN Return</span>
                    </a>
                </div>
            </div>
            <div class="w-full box-border bg-white rounded shadow-md">
                <a href="{{ url('/') }}">
                    <img class="rounded-t object-cover" src="{{asset('assets/images/2.png')}}"
                        alt="img">
                </a>
                <div class="p-4 flex-1 flex flex-col items-start justify-center">
                    <a href="{{url('/')}}">
                        <h1 class="font-semibold text-black">UPDATE</h1>
                        <span class="text-zinc-600 text-sm">Welcome to DN Return</span>
                    </a>
                </div>
            </div>
            <div class="w-full box-border bg-white rounded shadow-md">
                <a href="{{ url('/') }}">
                    <img class="rounded-t object-cover" src="{{asset('assets/images/3.png')}}"
                        alt="img">
                </a>
                <div class="p-4 flex-1 flex flex-col items-start justify-center">
                    <a href="{{url('/')}}">
                        <h1 class="font-semibold text-black">DOWNLOAD</h1>
                        <span class="text-zinc-600 text-sm">Welcome to DN Return</span>
                    </a>
                </div>
            </div>
            <div class="w-full box-border bg-white rounded shadow-md">
                <a href="{{ url('/') }}">
                    <img class="rounded-t object-cover" src="{{asset('assets/images/4.png')}}"
                        alt="img">
                </a>
                <div class="p-4 flex-1 flex flex-col items-start justify-center">
                    <a href="{{url('/')}}">
                        <h1 class="font-semibold text-black">PATCH</h1>
                        <span class="text-zinc-600 text-sm">Welcome to DN Return</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="section3"></div>
<div id="section4" class="pt-5 px-0 md:pt-10 xl:px-5 w-full overflow-x-hidden flex flex-col items-center justify-center bg-zinc-800">
    <div class="p-5 w-full max-w-screen-xl flex flex-col items-center justify-normal gap-5 md:flex-row md:justify-between flex-wrap bg-white">
        <span class="mx-auto">
            <h1 class="font-semibold text-3xl">TOP RANKING</h1>
        </span>
        <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5">
            <div class="p-5 w-full box-border bg-white rounded shadow-md border">
                <a href="{{ url('/') }}">
                    <img class="m-auto h-12 object-cover" src="{{asset('assets/images/ladder.png')}}"
                        alt="img">
                </a>
                <div class="flex-1 flex flex-col items-center justify-center">
                    <a href="{{url('/')}}" class="font-semibold text-center">
                        <span class="text-zinc-600 text-sm">Top Ladder Point</span>
                        <h1 class="text-xl text-black">Floxars</h1>
                    </a>
                </div>
            </div>
            <div class="p-5 w-full box-border bg-white rounded shadow-md border">
                <a href="{{ url('/') }}">
                    <img class="m-auto h-12 object-cover" src="{{asset('assets/images/gold.png')}}"
                        alt="img">
                </a>
                <div class="flex-1 flex flex-col items-center justify-center">
                    <a href="{{url('/')}}" class="font-semibold text-center">
                        <span class="text-zinc-600 text-sm">Top Gold</span>
                        <h1 class="text-xl text-black">Ovilia</h1>
                    </a>
                </div>
            </div>
            <div class="p-5 w-full box-border bg-white rounded shadow-md border">
                <a href="{{ url('/') }}">
                    <img class="m-auto h-12 object-cover" src="{{asset('assets/images/sdnh.png')}}"
                        alt="img">
                </a>
                <div class="flex-1 flex flex-col items-center justify-center">
                    <a href="{{url('/')}}" class="font-semibold text-center">
                        <span class="text-zinc-600 text-sm">Top Best SDN N</span>
                        <h1 class="text-xl text-black">Pendek</h1>
                    </a>
                </div>
            </div>
            <div class="p-5 w-full box-border bg-white rounded shadow-md border">
                <a href="{{ url('/') }}">
                    <img class="m-auto h-12 object-cover" src="{{asset('assets/images/sdnhc.png')}}"
                        alt="img">
                </a>
                <div class="flex-1 flex flex-col items-center justify-center">
                    <a href="{{url('/')}}" class="font-semibold text-center">
                        <span class="text-zinc-600 text-sm">Best SDN HC</span>
                        <h1 class="text-xl text-black">DN Return</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection