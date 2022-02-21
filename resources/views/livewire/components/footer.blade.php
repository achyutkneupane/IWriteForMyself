<svg id="visual" viewBox="0 400 900 130" class='w-screen' xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
    <path
        d="M0 525L21.5 519.2C43 513.3 86 501.7 128.8 498.3C171.7 495 214.3 500 257.2 505.2C300 510.3 343 515.7 385.8 511.7C428.7 507.7 471.3 494.3 514.2 480C557 465.7 600 450.3 642.8 443C685.7 435.7 728.3 436.3 771.2 442.7C814 449 857 461 878.5 467L900 473L900 601L878.5 601C857 601 814 601 771.2 601C728.3 601 685.7 601 642.8 601C600 601 557 601 514.2 601C471.3 601 428.7 601 385.8 601C343 601 300 601 257.2 601C214.3 601 171.7 601 128.8 601C86 601 43 601 21.5 601L0 601Z"
        fill="#01849a" stroke-linecap="round" stroke-linejoin="miter"></path>
</svg>
<div class='flex flex-col w-screen gap-8 px-4 py-12 text-white md:gap-4 md:px-48 bg-themeColor md:flex-row'>
    <div class='flex flex-col order-2 w-full gap-4 md:w-2/5 md:order-1'>
        <div class="text-4xl text-center text-white md:text-5xl logoFont md:text-left">
            I Write For Myself
        </div>
        <div class='w-full text-justify md:pr-24'>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer consequat volutpat ligula, in malesuada
            justo pellentesque at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer consequat volutpat
            ligula, in malesuada justo pellentesque at.
        </div>
    </div>
    <div class='flex-col hidden w-full gap-4 text-center md:flex md:w-1/5 md:order-2'>
        <div class='text-2xl font-bold'>
            Categories
        </div>
        <div class='flex flex-col w-full gap-1'>
            @for ($i = 1; $i <= 7; $i++)
                <a href="" class='w-full '>
                    Category {{ $i }}
                </a>
            @endfor
        </div>
    </div>
    <div class='flex flex-col order-1 w-full gap-4 text-center md:text-right md:w-2/5 md:order-3'>
        <div class='text-2xl font-bold'>
            Latest Posts
        </div>
        <div class='flex flex-col w-full gap-1'>
            @for ($i = 1; $i <= 7; $i++)
                <a href="" class='w-full '>
                    This is post title {{ $i }}. This is post title {{ $i }}. This is post title
                    {{ $i }}.
                </a>
            @endfor
        </div>
    </div>
</div>
<div class='w-screen pt-4 pb-12 text-lg font-bold text-center text-white bg-themeColor'>
    &copy; {{ env('APP_NAME') }} {{ date('Y') }}
</div>
