<div class='flex justify-center w-full gap-4 pt-12 pb-24'>
    <div class='flex flex-col w-11/12 gap-8 md:w-1/2'>
        <div class="relative overflow-hidden bg-white">
            <img class="object-cover w-full h-full" height='630' width='1200' loading="lazy"
                src="https://www.webtech.co.jp/blog/wp-content/uploads/2015/01/1200x630.png" alt="Thumbnail Image" />
            <div class='absolute bottom-0 flex items-center justify-center w-full px-12 py-4 text-center'>
                <span class='px-8 py-2 font-bold text-white rounded-full bg-themeColor'>Category</span>
            </div>
        </div>
        <div class='flex flex-col gap-2'>
            <h1 class='w-full text-4xl font-bold text-center md:text-justify articleTitle text-themeColor'>Lorem ipsum
                dolor sit amet,
                consectetur adipiscing elit. Curabitur sollicitudin ultrices quam</h1>
            <div class='flex justify-center w-full gap-2 text-lg md:justify-start'>
                <span>22 Feb. 2022</span>
                <span>|</span>
                <span class='font-bold'>Achyut Neupane</span>
            </div>
            <article class='flex flex-col gap-3 text-lg text-justify articleText'>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan egestas augue, id lobortis
                    diam congue quis. Proin cursus est ligula, et posuere orci mollis ut. Interdum et malesuada fames ac
                    ante ipsum primis in faucibus. Pellentesque et convallis ex. In condimentum ullamcorper lacus id
                    scelerisque. Maecenas non leo tincidunt, tempor ex quis, tincidunt nisl. Donec rutrum tellus id
                    lorem aliquet ultrices. Nunc ut <strong>lorem</strong> malesuada, consequat est eu, mollis eros.
                    Duis metus dolor,
                    elementum sit amet tincidunt et, cursus quis sapien. Curabitur accumsan tristique nulla nec
                    tristique. Cras rutrum dolor id mattis ultricies.</p>
                <p>Mauris finibus urna id nisl suscipit, a suscipit velit convallis. Morbi faucibus viverra laoreet.
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean
                    lacinia venenatis mattis. Nam accumsan elit a imperdiet egestas. Maecenas tempor odio a fringilla
                    ultrices. Pellentesque laoreet pellentesque nunc. Integer aliquam nisl quis ipsum semper fringilla.
                    Ut sem leo, cursus a euismod eget, elementum a urna. Nunc faucibus mattis euismod. Ut quam sem,
                    sollicitudin eu pharetra sed, vulputate eget urna. Phasellus sit amet magna et arcu elementum
                    imperdiet in pulvinar erat. Quisque aliquam id justo a dictum. Nulla cursus aliquam velit, et
                    porttitor ex venenatis sed.</p>
                <blockquote>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempor, leo vitae tristique
                    pulvinar, metus leo semper nulla, sed malesuada enim nulla euismod est. Aliquam efficitur sit amet
                    ligula at eleifend. Sed fermentum urna sed risus vehicula maximus. Vivamus malesuada arcu enim, eget
                    vehicula libero pharetra ut. Vivamus non tempor.
                </blockquote>
                <p>Sed vitae varius ipsum. Etiam imperdiet risus id tellus vestibulum eleifend. Sed vitae vestibulum
                    leo. Pellentesque vitae vehicula nulla, vel consequat dolor. Nullam cursus vel risus rutrum semper.
                    Ut dapibus ut est non fringilla. Nunc at ex leo. Vestibulum ante ipsum primis in faucibus orci
                    luctus et ultrices posuere cubilia curae; Sed quis vulputate nisl. Phasellus urna velit, mattis
                    ornare purus non, rhoncus bibendum ipsum. Integer porttitor fermentum leo, sed rhoncus augue. Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis semper odio. Proin malesuada dictum
                    sem, non convallis urna volutpat vel. Aliquam erat volutpat.</p>
                <p>Maecenas sed urna in libero volutpat pulvinar. Vestibulum pharetra nisl quis ultricies finibus.
                    Aliquam auctor, nisi in mollis mattis, orci elit interdum est, nec facilisis nibh erat nec magna.
                    Fusce aliquam non eros et vestibulum. Aliquam sit amet libero at elit suscipit placerat. Vestibulum
                    et erat eget sem finibus egestas nec eu nunc. Nulla ut aliquam nisl. Vivamus eu tempor mi, in
                    blandit libero. Nam ante enim, aliquam non dignissim imperdiet, luctus a turpis.</p>
                <p>Vivamus nec augue ornare, ornare neque nec, lobortis purus. Suspendisse potenti. Donec sit amet eros
                    placerat, semper dolor eu, ultrices lectus. Integer non erat ornare, volutpat velit non, pretium
                    ligula. Donec massa mi, feugiat ut magna vitae, efficitur mollis mi. Curabitur in molestie magna,
                    non iaculis enim. Vestibulum ultricies pulvinar enim, vitae aliquam turpis eleifend nec. Aenean
                    faucibus rutrum sollicitudin.</p>
            </article>
            <div class='flex items-center gap-4 mt-8'>
                <span class='text-xl titleLetter'>Share: </span>
                {!! Share::currentPage('Test Title', ['class' => 'text-themeColor text-4xl', 'target' => '_blank', 'title' => 'Test Title', 'alt' => 'Test Title'], "<ul class='flex gap-2'>", '</ul>')->facebook()->linkedin()->twitter()->reddit()->whatsapp()->pinterest() !!}
            </div>
        </div>
        <hr class='border-1 border-themeColor' />
        <div class='flex justify-center w-full gap-8'>
            <div class='flex items-center justify-center w-full gap-8 md:w-2/3'>
                <img src='{{ asset('assets/man-avatar.png') }}' loading='lazy'
                    class='w-[120px] h-[120px] md:w-[180px] md:h-[180px]' />
                <div class='flex flex-col justify-center gap-2 text-left'>
                    <span class='font-bold'>
                        Achyut Neupane
                    </span>
                    <span class='text-sm'>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s.
                    </span>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-2 p-4 md:grid md:grid-rows-3 md:grid-cols-2 md:gap-4">
            <div class="order-1 row-span-1">
                <input type='text' class='w-full h-full px-4 py-2 border-2 rounded border-themeColor'
                    placeholder='Full Name' />
            </div>
            <div class="order-2 row-span-1 md:order-3">
                <input type='email' class='w-full h-full px-4 py-2 border-2 rounded border-themeColor'
                    placeholder='Email Address' />
            </div>
            <div class="order-3 row-span-1 md:row-span-3 md:order-2">
                <textarea class='w-full h-full px-4 py-2 border-2 rounded resize-y border-themeColor md:resize-none'
                    rows="5" placeholder="Message"></textarea>
            </div>
            <div class="order-last row-span-1">
                <button
                    class='w-full h-full px-4 py-2 text-white border-2 rounded border-themeColor bg-themeColor'>Comment</button>
            </div>
        </div>
    </div>
</div>

@push('meta_tags')
    
@endpush

@push('schema_tags')
    
@endpush