<?php

namespace App\Http\Livewire\Components;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;

class Footer extends Component
{
    public $categories,$latestArticles;
    public function mount()
    {
        $this->categories = Category::with('articles.media')->withCount('articles')->orderBy('articles_count', 'desc')->take(7)->get();
        $this->latestArticles = Article::with('media')->latest()->take(7)->get();
    }
    public function render()
    {
        return view('livewire.components.footer');
    }
}
