<main class='flex justify-center w-full gap-4 pt-12 pb-24'>
    <article class='flex flex-col w-11/12 gap-8 md:w-1/2' itemscope itemtype="http://schema.org/Article">
        <header class='w-full'>
            <div class="relative overflow-hidden bg-white">
                <a href='{{ $article->cover }}' target="_blank"><img class="object-cover w-full h-full" height='630'
                        width='1200' loading="lazy" src="{{ $article->big_cover }}" itemprop="image"
                        alt="{{ $article->title }} - {{ env('APP_NAME') }}" /></a>
                <div class='absolute bottom-0 flex items-center justify-center w-full px-12 py-4 text-center'>
                    <span
                        class='px-8 py-2 font-bold text-white rounded-full bg-themeColor'>{{ $article->category->title }}</span>
                </div>
            </div>
            <div class='flex flex-col gap-2 mt-4'>
                <h1 class='w-full text-4xl font-bold text-center headline md:text-justify articleTitle text-themeColor title metadata'
                    itemprop="headline">
                    {{ $article->title }}
                </h1>
                <p class='text-sm italic text-justify subhead metadata'>"{{ $article->description }}"</p>
                <div class='flex justify-center w-full gap-2 text-lg md:justify-start byline'>
                    <time pubdate datetime="{{ $article->published_at }}"
                        itemprop="dateCreated datePublished">{{ \Carbon\Carbon::parse($article->published_at)->isoFormat('d MMM. Y') }}</time>
                    <span>|</span>
                    <address class='font-bold author' itemprop="author publisher" name="{{ $article->writer->name }}"><a
                            rel='author'>{{ $article->writer->name }}</a></address>
                </div>
            </div>
        </header>
        <div class='flex flex-col gap-2'>
            <section itemprop="articleBody" class='flex flex-col gap-3 text-lg text-justify content articleText'>
                {!! $article->content !!}
            </section>
            <div class='flex flex-col items-start gap-4 mt-8 md:items-center md:flex-row'>
                <div class="flex flex-row items-center">
                    <span class='mr-4 text-lg titleLetter'>Vote: </span>
                    @livewire('components.voting-component', ['model' => $article])
                </div>
                @livewire('components.share-component', ['title' => $title])
            </div>
        </div>
        <hr class='border-1 border-themeColor' />
        <div class='flex justify-center w-full gap-8'>
            <div class='flex items-center justify-center w-full gap-8 md:w-2/3'>
                <img src='{{ $article->writer->medium_profile ?? asset('assets/man-avatar.png') }}' loading='lazy'
                    class='w-[120px] h-[120px] md:w-[180px] md:h-[180px]' />
                <div class='flex flex-col justify-center gap-2 text-left'>
                    <span class='font-bold'>
                        {{ $article->writer->name }}
                    </span>
                    <span class='text-sm'>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s.
                    </span>
                </div>
            </div>
        </div>
        @livewire('components.comments-component', ['model' => $article])
    </article>
</main>

@push('meta_tags')
    <title>{{ $article->title }} - {{ env('APP_NAME') }}</title>
    <link rel="canonical" href="{{ route('article.view',$article->slug) }}" />
    <meta name="title" content="{{ $article->title }} - {{ env('APP_NAME') }}">
    <meta name="description" content="{{ $article->description }}">
    <meta name="keywords" content="I Write For Myself, IWriteForMySelf, {{ $article->title }}">
    <meta property='article:published_time' content='2022-03-17 00:00:00' />
    <meta property='article:section' content='article' />
    <meta property='article:author' content='https://www.facebook.com/IWriteForMyself' />
    <meta property='article:publisher' content='https://www.facebook.com/IWriteForMyself' />
    <meta property="fb:app_id" content="931301841077172">
    <meta property="fb:pages" content="109010941712624">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $article->title }} - {{ env('APP_NAME') }}">
    <meta property="og:description" content="{{ $article->description }}">
    <meta property="og:image" content="{{ $article->cover }}">
    <meta property="og:site_name" content="{{ env('APP_NAME') }}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $article->title }} - {{ env('APP_NAME') }}">
    <meta name="twitter:description" content="{{ $article->description }}">
    <meta name="twitter:image" content="{{ $article->cover }}">
    <meta name="twitter:site" content="@IWriteForMyself">
    {{-- <link rel="amphtml" href="{{ strtolower(route('viewAmpArticle',$slug)) }}"> --}}
@endpush

@push('schema_tags')
@endpush
