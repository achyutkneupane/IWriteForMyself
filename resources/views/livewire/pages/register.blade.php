<div class='flex flex-col items-center justify-center w-full gap-12 py-40 text-center'>
    <div class='text-3xl font-bold blockLetter'>Sign Up</div>
    <div class='flex flex-col items-center w-5/6 gap-2 md:w-1/3'>
        <div class='w-full'>
            <label for="email" class="block mb-2 font-bold text-left text-themeColor">Email Address</label>
            <div class="relative flex flex-wrap items-stretch w-full mb-3">
                <span
                    class="absolute z-10 items-center justify-center w-8 h-full py-3 pl-4 text-base font-normal leading-snug text-center bg-transparent rounded text-themeColor">
                    <i class="fa-solid fa-at"></i>
                </span>
                <input type="text" placeholder="Enter Your Email Address"
                    class="relative w-full px-3 py-3 pl-10 text-sm text-black placeholder-gray-400 bg-white border rounded-full outline-none border-themeColor focus:outline-none focus:ring-2 focus:ring-themeColor" />
            </div>
        </div>
        <div class='w-full'>
            <label for="email" class="block mb-2 font-bold text-left text-themeColor">Username</label>
            <div class="relative flex flex-wrap items-stretch w-full mb-3">
                <span
                    class="absolute z-10 items-center justify-center w-8 h-full py-3 pl-4 text-base font-normal leading-snug text-center bg-transparent rounded text-themeColor">
                    <i class="fa-solid fa-user"></i>
                </span>
                <input type="text" placeholder="Enter Username"
                    class="relative w-full px-3 py-3 pl-10 text-sm text-black placeholder-gray-400 bg-white border rounded-full outline-none border-themeColor focus:outline-none focus:ring-2 focus:ring-themeColor" />
            </div>
        </div>
        <div class='w-full' x-data="{ showPassword: false}">
            <label for="password" class="block mb-2 font-bold text-left text-themeColor">Password (<a @click="showPassword = !showPassword" class='text-gray-600 cursor-pointer' x-text="showPassword ? 'Hide' : 'Show'" ></a>)</label>
            <div class="relative flex flex-wrap items-stretch w-full mb-3">
                <span
                    class="absolute z-10 items-center justify-center w-8 h-full py-3 pl-4 text-base font-normal leading-snug text-center bg-transparent rounded text-themeColor">
                    <i class="fa-solid fa-lock"></i>
                </span>
                <input :type="showPassword ? 'text' : 'password'" placeholder="Enter Password"
                    class="relative w-full px-3 py-3 pl-10 text-sm text-black placeholder-gray-400 bg-white border rounded-full outline-none border-themeColor focus:outline-none focus:ring-2 focus:ring-themeColor" />
            </div>
        </div>
        <button
            class='w-2/3 px-8 py-3 text-xl font-bold text-white border-2 rounded-full hover:bg-white hover:border-themeColor hover:text-themeColor border-themeColor bg-themeColor'>
            Sign Up
        </button>
        <div class='flex flex-col w-full gap-1'>
            <span>Already have an account? <a href="{{ route('login') }}" class='font-bold text-themeColor'>Sign In</a></span>
            <span>Having trouble logging in? <a href="" class='font-bold text-themeColor'>Reset Password</a></span>
        </div>
    </div>
</div>
