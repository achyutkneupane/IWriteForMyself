<?php

namespace App\Http\Livewire\Pages;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $username, $email, $password, $full_name,$general_error;
    protected $rules = [
        'full_name' => 'required',
        'username' => 'required|min:6|unique:users,username',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
    ];
    protected $validationAttributes = [
        'email' => 'Email Address',
        'full_name' => 'Full Name',
        'username' => 'Username',
        'password' => 'Password',
    ];
    protected $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'email.unique' => 'This Email Address is already used.',
        'username.required' => 'The Username cannot be empty.',
        'username.min' => 'The Username must be at least 6 characters.',
        'username.unique' => 'This Username is already taken.',
        'password.required' => 'The Password cannot be empty.',
        'password.min' => 'The Password must be at least 8 characters.',
        'full_name.required' => 'The Full Name cannot be empty.',
    ];
 
    public function signUp()
    {
        $this->validate();
        $user = User::create([
            'name' => $this->full_name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'type' => 'writer',
            'gender' => 'pnts',
        ]);
        if($user)
        {
            $this->addError('general_error','User created successfully');
            $this->redirect(route('login'));
        }
        else {
            dd('error');
        }

    }
    public function render()
    {
        return view('livewire.pages.register');
    }
}
