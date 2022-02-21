<div class='flex flex-col items-center justify-center w-full gap-12 py-40 text-center'>
    <div class='text-3xl font-bold blockLetter'>Login</div>
    <div class='flex flex-col items-center w-5/6 gap-4 md:w-1/3'>
        <div class="relative flex flex-wrap items-stretch w-full mb-3">
            <label for="email" class="block mb-2 text-lg font-bold text-themeColor">Your Email/Username</label>
            <span
                class="absolute z-10 items-center justify-center w-8 h-full py-3 pl-3 text-base font-normal leading-snug text-center bg-transparent rounded text-blueGray-300">
                <i class="fas fa-lock"></i>
            </span>
            <input type="text" placeholder="Enter Your Email/Username"
                class="relative w-full px-3 py-3 pl-10 text-sm text-black placeholder-gray-400 bg-white border rounded-full outline-none border-themeColor focus:outline-none focus:ring-2 focus:ring-themeColor" />
        </div>
        <div class="relative flex flex-wrap items-stretch w-full mb-3">
            <label for="email" class="block mb-2 text-lg font-bold text-themeColor">Your Password</label>
            <span
                class="absolute z-10 items-center justify-center w-8 h-full py-3 pl-3 text-base font-normal leading-snug text-center bg-transparent rounded text-blueGray-300">
                <i class="fas fa-lock"></i>
            </span>
            <input type="text" placeholder="Enter Your Password"
                class="relative w-full px-3 py-3 pl-10 text-sm text-black placeholder-gray-400 bg-white border rounded-full outline-none border-themeColor focus:outline-none focus:ring-2 focus:ring-themeColor" />
        </div>
        <button
            class='w-2/3 px-8 py-3 text-xl font-bold text-white border-2 rounded-full hover:bg-white hover:border-themeColor hover:text-themeColor border-themeColor bg-themeColor'>
            Login
        </button>
    </div>
</div>
