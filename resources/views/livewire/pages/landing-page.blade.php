<div class='flex flex-col'>
    <div class='flex flex-col items-center justify-center w-full gap-4 text-center py-60'>
        <div class='text-6xl font-semibold blockLetter'>Let's <span
                class='hover:underline text-themeColor hover:decoration-themeColor hover:underline-offset-4 hover:decoration-8'>write</span>
            together<span class="blinking-cursor">|</span></div>
        <a href="{{ route('register') }}"
            class='px-12 py-4 text-2xl font-semibold bg-white border-4 rounded-full border-themeColor text-themeColor hover:border-themeColor hover:text-white hover:bg-themeColor'>Get
            Started</a>
    </div>
    <div class="flex flex-col items-center gap-8">
        @foreach ($categories as $category)
            @livewire('components.category-three-articles', ['category' => $category])
        @endforeach
    </div>
</div>
