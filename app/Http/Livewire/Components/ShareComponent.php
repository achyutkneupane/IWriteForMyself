<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class ShareComponent extends Component
{
    public $title;
    public function mount($title)
    {
        $this->title = $title;
    }
    public function render()
    {
        return view('livewire.components.share-component');
    }
}
