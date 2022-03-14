<div class='flex items-center'>
    
    <button class="py-2 pl-4 pr-2 border-2 rounded-tl-full rounded-bl-full border-themeColor {{ $upVoted ? 'bg-themeColor' : 'bg-white' }}" wire:click='upVote'><i class="fa-solid {{ $upVoted ? 'text-white' : 'text-themeColor' }} fa-square-caret-up fa-lg"></i></button>
    <div class='px-2 font-bold'>{{ $vote }}</div>
    <button class="py-2 pl-2 pr-4 border-2 rounded-tr-full rounded-br-full border-themeColor {{ $downVoted ? 'bg-themeColor' : 'bg-white' }}" wire:click='downVote'><i class="fa-solid {{ $downVoted ? 'text-white' : 'text-themeColor' }} fa-square-caret-down fa-lg"></i></button>
</div>
