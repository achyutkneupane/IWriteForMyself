<?php

namespace App\Http\Livewire\Components;

use App\Helpers\CookieHelper;
use App\Models\Stranger;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;
use Livewire\WithPagination;

class CommentsComponent extends Component
{
    use WithPagination;

    public $model;
    public $full_name,$email,$message;
    public $commenter,$commenterType,$hasCommenterData;
    public $rules = [
        'message' => 'required|string|max:255',
    ];
    public $messages = [
        'full_name.required' => 'Full Name must be filled in.',
        'full_name.string' => 'Full Name must be a string.',
        'email.required' => 'Email must be filled in.',
        'email.email' => 'Email must be a valid email.',
        'message.required' => 'Comment must be filled in.',
        'message.max' => 'Comment must be less than 255 characters.',
    ];
    public function validate($rules = null, $messages = [], $attributes = [])
    { 
        if(!$this->hasCommenterData){
            $this->rules['full_name'] = 'required|string|max:255';
            $this->rules['email'] = 'required|email|max:255';
        }
    }
    public function mount($model)
    {
        $this->model = $model;
        $this->commenter = CookieHelper::getUser();
        $this->commenterType = $this->commenter ? $this->commenter->getMorphClass() : null;
        $this->full_name = $this->commenter->name ?? null;
        $this->email = $this->commenter->email ?? null;
    }
    public function store()
    {
        $this->validate();
        $this->model->comments()->create([
            'content' => $this->message,
            'commenter_type' => $this->commenterType,
            'commenter_id' => $this->commenter->id,
        ]);
        $storeEmail = !$this->commenter->email && $this->email;
        $storeName = !$this->commenter->name && $this->full_name;
        if($storeName) {
            $this->commenter->name = $this->full_name;
        }
        if($storeEmail) {
            $this->commenter->email = $this->email;
        }
        if($storeName || $storeEmail) {
            $this->commenter->save();
        }
        $this->reset([
            'full_name',
            'email',
            'message',
        ]);
    }

    public function paginationView()
    {
        return 'vendor.livewire.i-write-for-myself-pagination';
    }
    public function render()
    {
        $this->hasCommenterData = ($this->commenter->name || $this->commenter->email) ? true : false;
        $comments = $this->model->comments()->with('commenter')->latest()->paginate(10);
        return view('livewire.components.comments-component', compact('comments'));
    }
}
