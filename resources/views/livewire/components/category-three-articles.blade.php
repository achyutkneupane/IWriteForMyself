<div class='flex flex-col items-center w-full'>
    <div class='w-11/12 overflow-hidden text-4xl text-center text-black uppercase xl:w-3/4 articleTitle categoryTitle xl:text-left'>
        {{ $category->title }}
    </div>
    <div class='flex flex-col flex-wrap items-center justify-center w-11/12 xl:items-start xl:w-3/4 xl:flex-row'>
        @foreach ($articles as $article)
            <div class="w-full h-full p-4 xl:w-1/3">
                <div class='flex flex-row w-full gap-1 bg-white border rounded-lg shadow-md xl:gap-4 xl:flex-col'>
                    <div class='w-1/3 xl:w-full'>
                        <a href="{{ route('article.view',$article->slug) }}">
                            <img class="object-cover object-center w-full h-full rounded-lg" src="{{ $article->medium_cover }}" alt="" />
                        </a>
                    </div>
                    <div class='flex flex-col w-2/3 gap-1 p-2 h-full xl:h-[24rem] xl:p-5 xl:w-full'>
                        <a href="{{ route('article.view', $article->slug) }}">
                            <h5 class="mb-2 text-base font-bold tracking-tight xl:text-2xl text-themeColor dark:text-white">
                                {{ $article->title }}
                            </h5>
                        </a>
                        <div class='flex flex-col items-start justify-center w-full gap-0 xl:flex-row xl:gap-2'>
                            <span
                                class='text-gray-600'>{{ \Carbon\Carbon::parse($article->published_at)->diffForHumans() }}</span>
                            <span class='hidden text-black xl:block'>|</span>
                            <a class='font-bold text-gray-600'>{{ $article->writer->name }}</a>
                        </div>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                            {{ \Illuminate\Support\Str::words(strip_tags($article->content), 25, '...') }}
                        </p>
                        <a href="{{ route('article.view', $article->slug) }}"
                            class='items-center hidden gap-2 font-bold xl:flex text-themeColor'>
                            Read more
                            <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class='w-11/12'>
            {{ $articles->links() }}
        </div>
    </div>
</div>