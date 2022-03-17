<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Livewire\WithPagination;

class CategoryThreeArticles extends Component
{
    use WithPagination;

    public $category;
    public function mount($category)
    {
        $this->category = $category;
    }
    public function paginationView()
    {
        return 'vendor.livewire.i-write-for-myself-pagination';
    }
    public function render()
    {
        $articles = $this->category->articles()->with('media','writer.media')->orderBy('created_at','desc')->paginate(6, ['*'], $this->category->slug.'-page');
        return view('livewire.components.category-three-articles', compact('articles'));
    }
}
