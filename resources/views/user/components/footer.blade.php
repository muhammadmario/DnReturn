<footer class="py-8 px-5 w-full overflow-x-hidden bg-zinc-900">
    <div class="m-auto h-[16rem] md:h-[6rem] max-w-screen-xl flex flex-col-reverse items-center justify-between gap-8 md:flex-row">
        <div class="h-full flex flex-col items-center justify-center gap-2">
            <img src="{{ asset('assets/images/rdn-logo.png') }}" class="w-[6rem]" alt="logo" />
            <div>
                <span class="text-xs font-semibold text-gray-200">&#169; {{ date('Y') }} Return Corp, All rights reserved.</span>
            </div>
        </div>
        <div class="h-full w-full md:w-auto flex flex-col items-center md:justify-center gap-5">
            <div class="text-lg font-semibold text-gray-200">Follow Us</div>
            <div class="w-full flex items-center justify-around md:justify-center gap-4">
                <a href="{{url('https://www.facebook.com/DragonNestReturn/')}}" target="_blank"><i class="fa-brands fa-square-facebook text-3xl text-gray-500 hover:text-red-800"></i></a>
                <a href="{{url('https://www.instagram.com/dragonnest_return/')}}" target="_blank"><i class="fa-brands fa-square-instagram text-3xl text-gray-500 hover:text-red-800"></i></a>
                <a href="{{url('https://discord.com/invite/dnreturn')}}" target="_blank"><i class="fa-brands fa-discord text-3xl text-gray-500 hover:text-red-800"></i></a>
                <a href="{{url('/')}}" target="_blank"><i class="fa-brands fa-line text-[1.8rem] text-gray-500 hover:text-red-800"></i></a>
            </div>
        </div>
    </div>
</footer>