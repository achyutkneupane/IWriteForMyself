<div class='flex flex-col'>
    <div class='flex flex-col items-center justify-center w-full gap-4 text-center py-52'>
        <div class='text-6xl font-semibold blockLetter selection:bg-themeColor '>Let's <span
                class='hover:underline text-themeColor hover:decoration-themeColor hover:underline-offset-4 hover:decoration-8 selection:text-white'>write</span>
            together<span class="blinking-cursor">|</span></div>
        <a href="{{ route('register') }}"
            class='px-12 py-4 text-2xl font-semibold bg-white border-4 rounded-full border-themeColor text-themeColor hover:border-themeColor hover:text-white hover:bg-themeColor'>Get
            Started</a>
    </div>
    <div class="flex flex-col items-center gap-32">
        @foreach ($categories as $category)
            @livewire('components.category-three-articles', ['category' => $category])
        @endforeach
    </div>
</div>
@push('meta_tags')
    <title>{{ env('APP_NAME') }}</title>
    <meta name="title" content="{{ env('APP_NAME') }}">
    <meta name="description" content="I Write For Myself">
    <meta name="keywords" content="I Write For Myself, IWriteForMySelf">
    <meta property='article:published_time' content='2022-03-17 00:00:00' />
    <meta property='article:section' content='article' />
    <meta property='article:author' content='https://www.facebook.com/IWriteForMyself' />
    <meta property='article:publisher' content='https://www.facebook.com/IWriteForMyself' />
    <meta property="fb:app_id" content="931301841077172">
    <meta property="fb:pages" content="109010941712624">

    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ env('APP_NAME') }}">
    <meta property="og:description" content="I Write For Myself">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="{{ env('APP_NAME') }}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ env('APP_NAME') }}">
    <meta name="twitter:description" content="I Write For Myself">
    <meta name="twitter:image" content="">
    <meta name="twitter:site" content="@IWriteForMyself">
    {{-- <link rel="amphtml" href="{{ strtolower(route('viewAmpArticle',$slug)) }}"> --}}
@endpush
