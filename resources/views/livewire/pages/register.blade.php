<div class='flex flex-col items-center justify-center w-full gap-12 py-20 text-center'>
    <div class='text-3xl font-bold blockLetter'>Sign Up</div>
    <div class='flex flex-col items-center w-5/6 gap-2 md:w-1/3'>
        <div class='w-full'>
            <label for="email" class="block mb-2 font-bold text-left text-themeColor">Full Name</label>
            <div class="relative flex flex-wrap items-stretch w-full mb-3">
                <span
                    class="absolute z-10 items-center justify-center w-8 h-full py-3 pl-4 text-base font-normal leading-snug text-center bg-transparent rounded text-themeColor">
                    <i class="fa-solid fa-id-card"></i>
                </span>
                <input type="text" placeholder="Enter Full Name" wire:model='full_name'
                    class="relative w-full px-3 py-3 pl-10 text-sm text-black placeholder-gray-400 bg-white border rounded-full outline-none border-themeColor focus:outline-none focus:ring-2 focus:ring-themeColor" />
                @error('full_name')
                    <span class="ml-12 mt-2 text-xs text-red-700">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class='w-full'>
            <label for="email" class="block mb-2 font-bold text-left text-themeColor">Email Address</label>
            <div class="relative flex flex-wrap items-stretch w-full mb-3">
                <span
                    class="absolute z-10 items-center justify-center w-8 h-full py-3 pl-4 text-base font-normal leading-snug text-center bg-transparent rounded text-themeColor">
                    <i class="fa-solid fa-at"></i>
                </span>
                <input type="text" placeholder="Enter Your Email Address" wire:model='email'
                    class="relative w-full px-3 py-3 pl-10 text-sm text-black placeholder-gray-400 bg-white border rounded-full outline-none border-themeColor focus:outline-none focus:ring-2 focus:ring-themeColor" />
                @error('email')
                    <span class="ml-12 mt-2 text-xs text-red-700">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class='w-full'>
            <label for="email" class="block mb-2 font-bold text-left text-themeColor">Username</label>
            <div class="relative flex flex-wrap items-stretch w-full mb-3">
                <span
                    class="absolute z-10 items-center justify-center w-8 h-full py-3 pl-4 text-base font-normal leading-snug text-center bg-transparent rounded text-themeColor">
                    <i class="fa-solid fa-user"></i>
                </span>
                <input type="text" placeholder="Enter Username" wire:model='username'
                    class="relative w-full px-3 py-3 pl-10 text-sm text-black placeholder-gray-400 bg-white border rounded-full outline-none border-themeColor focus:outline-none focus:ring-2 focus:ring-themeColor" />
                @error('username')
                    <span class="ml-12 mt-2 text-xs text-red-700">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class='w-full' x-data="{ showPassword: false}">
            <label for="password" class="block mb-2 font-bold text-left text-themeColor">Password (<a @click="showPassword = !showPassword" class='text-gray-600 cursor-pointer' x-text="showPassword ? 'Hide' : 'Show'" ></a>)</label>
            <div class="relative flex flex-wrap items-stretch w-full mb-3">
                <span
                    class="absolute z-10 items-center justify-center w-8 h-full py-3 pl-4 text-base font-normal leading-snug text-center bg-transparent rounded text-themeColor">
                    <i class="fa-solid fa-lock"></i>
                </span>
                <input :type="showPassword ? 'text' : 'password'" placeholder="Enter Password" wire:model='password'
                    class="relative w-full px-3 py-3 pl-10 text-sm text-black placeholder-gray-400 bg-white border rounded-full outline-none border-themeColor focus:outline-none focus:ring-2 focus:ring-themeColor" />
                @error('password')
                    <span class="ml-12 mt-2 text-xs text-red-700">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class='w-full'>
            @error('general_error')
                <span class="ml-12 text-xs text-green-700">{{ $message }}</span>
            @enderror
        </div>
        <button wire:click='signUp'
            class='w-2/3 px-8 py-3 text-xl font-bold text-white border-2 rounded-full hover:bg-white hover:border-themeColor hover:text-themeColor border-themeColor bg-themeColor'>
            Sign Up
        </button>
        <div class='flex flex-col w-full gap-1'>
            <span>Already have an account? <a href="{{ route('login') }}" class='font-bold text-themeColor'>Sign In</a></span>
            <span>Having trouble logging in? <a href="" class='font-bold text-themeColor'>Reset Password</a></span>
        </div>
    </div>
</div>
@push('meta_tags')
    <title>Sign Up - {{ env('APP_NAME') }}</title>
    <meta name="title" content="Sign Up - {{ env('APP_NAME') }}">
    <meta name="description" content="I Write For Myself">
    <meta name="keywords" content="I Write For Myself, IWriteForMySelf, Sign Up">
    <meta property='article:published_time' content='2022-03-17 00:00:00' />
    <meta property='article:section' content='article' />
    <meta property='article:author' content='https://www.facebook.com/IWriteForMyself' />
    <meta property='article:publisher' content='https://www.facebook.com/IWriteForMyself' />
    <meta property="fb:app_id" content="931301841077172">
    <meta property="fb:pages" content="109010941712624">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Sign Up - {{ env('APP_NAME') }}">
    <meta property="og:description" content="I Write For Myself">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="{{ env('APP_NAME') }}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="Sign Up - {{ env('APP_NAME') }}">
    <meta name="twitter:description" content="I Write For Myself">
    <meta name="twitter:image" content="">
    <meta name="twitter:site" content="@IWriteForMyself">
    {{-- <link rel="amphtml" href="{{ strtolower(route('viewAmpArticle',$slug)) }}"> --}}
@endpush