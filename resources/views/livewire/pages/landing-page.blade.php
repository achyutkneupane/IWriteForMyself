<div class="w-screen">
    @livewire('components.header')
    <div class='w-screen h-screen mt-32'>
        <div class='border-4 border-black px-4'>This is text</div>
        <div x-data="{ message: 'I ❤️ Alpine' }">
            <h1 x-text="message"></h1>
        </div>
        <div x-data="{ count: 0 }">
            <button x-on:click="count++">Increment</button>
            <span x-text="count"></span>
        </div>
        <article>Test</article>
    </div>
</div>
