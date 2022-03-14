<div class="flex items-center gap-4">
    <span class='text-xl titleLetter'>Share: </span>
    {!! Share::currentPage("$title", ['class' => 'text-themeColor text-4xl', 'target' => '_blank', 'title' => 'Test Title', 'alt' => 'Test Title'], "<ul class='flex gap-2'>", '</ul>')->facebook()->linkedin()->twitter()->reddit()->whatsapp()->pinterest() !!}
</div>