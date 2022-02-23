<nav x-data="{ sideBarOpen: false }"
    class='fixed top-0 z-50 flex items-center w-screen h-24 px-8 bg-white border-b-4 sticky-top border-themeColor'>
    {{-- sidebar hamburger --}}
    <button class="absolute block w-10 h-10 text-themeColor left-6 focus:outline-none md:hidden"
        @click="sideBarOpen = !sideBarOpen">
        <span class="sr-only">Open sidebar</span>
        <div class="fixed block">
            <span aria-hidden="true"
                class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out -translate-y-1.5"
                :class="{'scale-x-[.9]': sideBarOpen,' scale-x-100': !sideBarOpen }"></span>
            <span aria-hidden="true"
                class="block absolute  h-0.5 w-5 bg-current transform transition duration-500 ease-in-out"
                :class="{'scale-x-[.6]': sideBarOpen,' scale-x-100': !sideBarOpen }"></span>
            <span aria-hidden="true"
                class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out translate-y-1.5"
                :class="{'scale-x-[.3]': sideBarOpen, ' scale-x-100': !sideBarOpen}"></span>
        </div>
    </button>
    {{-- sidebar --}}
    <nav class='fixed top-0 right-0 flex flex-col h-screen gap-4 px-8 pt-12 text-black transition-all duration-500 ease-in-out transform bg-white border-l-4 border-themeColor border-y-4 rounded-tl-2xl rounded-bl-2xl md:hidden'
        :class="{'w-3/4': sideBarOpen,'w-0 translate-x-full': !sideBarOpen }">
        <div class='flex justify-end w-full text-themeColor'>
            <button @click="sideBarOpen = !sideBarOpen">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 20 20"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="flex flex-col gap-4 text-center md:hidden">
            <a href="{{ route('landingPage') }}" class='text-2xl font-bold text-themeColor'>Home</a>
            <a class='text-2xl font-bold text-themeColor'>Explore</a>
            <a class='text-2xl font-bold text-themeColor'>About</a>
        </div>
        <div class='flex flex-col gap-4 md:hidden'>
            <a href="{{ route('login') }}" class='px-4 py-3 text-xl font-bold text-center text-white border rounded-3xl bg-themeColor'>Login</a>
            <a href="{{ route('register') }}" class='px-4 py-3 text-xl font-bold text-center text-white border rounded-3xl bg-themeColor'>Register</a>
        </div>
    </nav>
    {{-- Navbar --}}
    <div class='flex items-center justify-center w-full h-full md:justify-between'>
        <div class='text-3xl logoFont text-themeColor'>
            <a href="{{ route('landingPage') }}">
                {{ env('APP_NAME') }}
            </a>
        </div>
        <div class="hidden gap-12 md:flex">
            <a href="{{ route('landingPage') }}" class='text-xl font-bold text-themeColor'>Home</a>
            <a class='text-xl font-bold text-themeColor'>Explore</a>
            <a class='text-xl font-bold text-themeColor'>About</a>
        </div>
        <div class='flex-row hidden gap-4 md:flex'>
            @guest
            <a href="{{ route('login') }}" class='px-4 py-3 text-xl font-bold text-center text-white border rounded-3xl bg-themeColor'>Login</a>
            <a href="{{ route('register') }}" class='px-4 py-3 text-xl font-bold text-center text-white border rounded-3xl bg-themeColor'>Register</a>
            @else
            <a href="{{ route('landingPage') }}" class='px-4 py-3 text-xl font-bold text-center text-white border rounded-3xl bg-themeColor'>My Account</a>
            <a href="{{ route('logout') }}" class='px-4 py-3 text-xl font-bold text-center text-white border rounded-3xl bg-themeColor'>
                Sign Out
            </a>
            @endguest
        </div>
    </div>
</nav>
