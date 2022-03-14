<?php

namespace App\Http\Livewire\Pages;

use App\Models\Article;
use Livewire\Component;

class ViewArticle extends Component
{
    public $slug,$article,$title;
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->article = Article::with('votes','media','writer','category','tags','comments')->where('slug',$slug)->firstOrFail();
        $this->title = $this->article->title.' - '.env('APP_NAME');
    }
    public function render()
    {
        return view('livewire.pages.view-article');
    }
}
