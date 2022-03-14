<div class="w-100">
    @if (!$hasCommenterData)
        <div class="flex flex-col gap-2 p-4 md:grid md:grid-rows-3 md:grid-cols-2 md:gap-4">
            <div class="order-1 row-span-1">
                <input type='text' class='w-full h-full px-4 py-2 border-2 rounded border-themeColor'
                    placeholder='Full Name' wire:model='full_name' />
            </div>
            <div class="order-2 row-span-1 md:order-3">
                <input type='email' class='w-full h-full px-4 py-2 border-2 rounded border-themeColor'
                    placeholder='Email Address' wire:model='email' />
            </div>
            <div class="order-3 row-span-1 md:row-span-3 md:order-2">
                <textarea class='w-full h-full px-4 py-2 border-2 rounded resize-y border-themeColor md:resize-none' rows="5"
                    wire:model='message' placeholder="Message"></textarea>
            </div>
            <div class="order-last row-span-1">
                <button class='w-full h-full px-4 py-2 text-white border-2 rounded border-themeColor bg-themeColor'
                    wire:click='store'>Comment</button>
            </div>
        </div>
    @else
        <div class="flex flex-col gap-2">
            <div class='text-sm text-gray-500'>
                Commenting as <strong class='font-bold text-black'>{{ $commenter->name }}</strong>.
                @guest
                    <a href='{{ route('login') }}' class='font-bold text-themeColor'>Login</a> or <a
                        href='{{ route('register') }}' class='font-bold text-themeColor'>Register</a> to change.
                @endguest
            </div>
            <div>
                <textarea class='w-full h-full px-4 py-2 border-2 rounded resize-y border-themeColor md:resize-none' rows="5"
                    wire:model='message' placeholder="Message"></textarea>
            </div>
            <div>
                <button class='w-full h-full px-4 py-2 text-white border-2 rounded border-themeColor bg-themeColor'
                    wire:click='store'>Comment</button>
            </div>
        </div>
    @endif
    <div class='flex flex-col items-center gap-1'>
        @error('full_name')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
        @error('email')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
        @error('message')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>
    <div class='flex flex-col gap-2 mt-4'>
        <div>
            {{ $comments->links() }}
        </div>
        @foreach ($comments as $comment)
            <div class='flex flex-row items-center gap-4 p-2 border'>
                <div class='w-1/4 md:w-1/6'>
                    <img src='{{ $comment->commenter->cover ??'https://media.istockphoto.com/vectors/default-avatar-photo-placeholder-icon-grey-profile-picture-business-vector-id1327592449?k=20&m=1327592449&s=612x612&w=0&h=6yFQPGaxmMLgoEKibnVSRIEnnBgelAeIAf8FqpLBNww=' }}'
                        class='w-full h-full rounded-full aspect-square' />
                </div>
                <div class="w-3/4 md:w-5/6">
                    <div class='flex flex-col gap-2'>
                        <div class="flex flex-col items-start justify-between md:items-center md:flex-row">
                            <div class='w-full'>
                                <div class='text-lg font-bold text-themeColor'>{{ $comment->commenter->name }}</div>
                            </div>
                            <div class='flex flex-row items-center w-100'>
                                {{-- <span class='mr-4 text-lg titleLetter'>Vote: </span> --}}
                                @livewire('components.voting-component', ['model' => $comment],key('commentvoting'.strval($comment->id)))
                            </div>
                        </div>
                        <div class=''>{{ $comment->content }}</div>
                        <div class='text-sm text-gray-500'>{{ $comment->created_at->diffForHumans() }}</div>
                    </div>
                </div>
            </div>
        @endforeach
        <div>
            {{ $comments->links() }}
        </div>
    </div>
</div>
