<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use Livewire\Component;

class LandingPage extends Component
{
    public function render() {
        $categories = Category::with('articles.media')->get();
        return view('livewire.pages.landing-page', compact('categories'));
    }
}
