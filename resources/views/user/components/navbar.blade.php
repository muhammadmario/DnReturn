
<nav class="bg-zinc-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4 px-5 md:px-0">
        <div class="flex gap-10">
            <a href="/">
                <img src="{{ asset('assets/images/logo.png') }}" class="h-12 object-contain" alt="Flowbite Logo">
            </a>
            {{-- dekstop navbar --}}
            <div class="hidden md:flex md:items-center md:justify-between md:w-full" id="navbar-sticky">
                <ul class="flex p-4 md:p-0  font-mediumborder border-gray-100 rounded-lg space-x-1">
                  <li>
                    <a href="/home" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-500 {{ (request()->is('/')) ? 'bg-red-800' : '' }} ">Home</a>
                  </li>
                  <li>
                    <a href="/rank" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-500 {{ (request()->is('rank')) ? 'bg-red-800' : '' }}">Rank</a>
                  </li>
                  <li>
                    <a href="/donation" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-500 {{ (request()->is('donation')) ? 'bg-red-800' : '' }}">Donation</a>
                  </li>
                  <li>
                    <a href="/rule" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-500 {{ (request()->is('rule')) ? 'bg-red-800' : '' }}">Rule</a>
                  </li>
                  <li>
                    <a href="/connection" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-500 {{ (request()->is('connection')) ? 'bg-red-800' : '' }}">Connection</a>
                  </li>
                  <li>
                    <a href="/wiki" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-500 {{ (request()->is('wiki')) ? 'bg-red-800' : '' }}">Wiki</a>
                  </li>
                </ul>
            </div>
        </div>

        <div class="hidden md:flex gap-1">
            <a href="/login" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-500">Sign In</a>
            <a href="/register" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-500">Sign Up</a>
            <a href="/download" class="block py-2 pl-3 pr-4 text-white rounded bg-red-800">Download</a>
        </div>
        
        {{-- mobile navbar link --}}
        <div class="flex md:hidden">
            <button type="button" class="hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
            <button id="burger" data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
      
        <div class="flex items-center w-full md:hidden">
            <ul id="mobileList" class="hidden flex-col w-full p-4 mt-4 font-medium rounded-lg">
              <li>
                <a href="/home" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-500 {{ (request()->is('/')) ? 'bg-red-800' : '' }} ">Home</a>
              </li>
              <li>
                <a href="/rank" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-500 {{ (request()->is('rank')) ? 'bg-red-800' : '' }}">Rank</a>
              </li>
              <li>
                <a href="/donation" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-500 {{ (request()->is('donation')) ? 'bg-red-800' : '' }}">Donation</a>
              </li>
              <li>
                <a href="/rule" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-500 {{ (request()->is('rule')) ? 'bg-red-800' : '' }}">Rule</a>
              </li>
              <li>
                <a href="/connection" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-500 {{ (request()->is('connection')) ? 'bg-red-800' : '' }}">Connection</a>
              </li>
              <li>
                <a href="/wiki" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-500">Wiki</a>
              </li>
              <li>
                <a href="/register" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-500">Sign In</a>
              </li>
              <li>
                <a href="/login" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-500">Sign Up</a>
              </li>
              <li>
                <a href="/download" class="block py-2 pl-3 pr-4 text-white rounded bg-red-800">Download</a>
              </li>
            </ul>
        </div>
</nav>
  