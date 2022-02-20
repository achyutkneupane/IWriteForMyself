<nav x-data="{ sideBarOpen: false }"
    class='w-screen sticky-top h-24 px-8 border-b-4 border-themeColor bg-white flex items-center fixed top-0'>
    {{-- sidebar hamburger --}}
    <button class="text-themeColor w-10 h-10 absolute left-6 focus:outline-none block md:hidden"
        @click="sideBarOpen = !sideBarOpen">
        <span class="sr-only">Open sidebar</span>
        <div class="block fixed">
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
    <nav class='fixed top-0 right-0 border-l-4 h-screen w-3/4 bg-white px-8 pt-12 text-black border-themeColor border-y-4 rounded-tl-2xl rounded-bl-2xl flex flex-col gap-4 md:hidden' :class="{'block': sideBarOpen,' hidden': !sideBarOpen }">
        <div class='w-full text-themeColor flex justify-end'>
            <button @click="sideBarOpen = !sideBarOpen">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="gap-4 md:hidden flex flex-col text-center">
            <a class='font-bold text-2xl text-themeColor'>Home</a>
            <a class='font-bold text-2xl text-themeColor'>Explore</a>
            <a class='font-bold text-2xl text-themeColor'>About</a>
        </div>
        <div class='md:hidden flex flex-col gap-4'>
            <div class='border px-4 py-3 rounded-3xl font-bold text-xl bg-themeColor text-white text-center'>Login</div>
            <div class='border px-4 py-3 rounded-3xl font-bold text-xl bg-themeColor text-white text-center'>Register</div>
        </div>
    </nav>
    <div class='w-full h-full flex items-center justify-center md:justify-between'>
        <div class='text-5xl logoFont text-themeColor'>I Write For Myself</div>
        <div class="gap-12 hidden md:flex">
            <a class='font-bold text-xl text-themeColor'>Home</a>
            <a class='font-bold text-xl text-themeColor'>Explore</a>
            <a class='font-bold text-xl text-themeColor'>About</a>
        </div>
        <div class='hidden md:flex flex-row gap-4'>
            <div class='border px-4 py-2 rounded-3xl font-bold text-xl bg-themeColor text-white'>Login</div>
            <div class='border px-4 py-2 rounded-3xl font-bold text-xl bg-themeColor text-white'>Register</div>
        </div>
    </div>
</nav>
