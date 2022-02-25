<?php

namespace App\Http\Livewire\Pages;

use App\Models\User;
use Livewire\Component;

class Login extends Component
{
    public $username,$password;
    public function authenticate()
    {
        if(filter_var($this->username, FILTER_VALIDATE_EMAIL))
        {
            $this->validate([
                'username' => 'required|exists:users,email',
                'password' => 'required',
            ],[
                'username.required' => 'The Email Address cannot be empty.',
                'username.exists' => 'This Email Address is not registered.',
                'password.required' => 'The Password cannot be empty.',
            ],[
                'username' => 'Email Address',
                'password' => 'Password',
            ]);
            $user = User::where('email',$this->username)->first();
        }
        else
        {
            $this->validate([
                'username' => 'required|exists:users,username',
                'password' => 'required',
            ],[
                'username.required' => 'The Username cannot be empty.',
                'username.exists' => 'This Username is not registered.',
                'password.required' => 'The Password cannot be empty.',
            ],[
                'username' => 'Username',
                'password' => 'Password',
            ]);
            $user = User::where('username',$this->username)->first();
        }
        if(!auth()->attempt(['email' => $user->email, 'password' => $this->password]))
        {
            $this->addError('password','Password is incorrect');
        }
        else
        {
            auth()->login($user);
            $this->redirect(route('landingPage'));
        }
    }
    public function render()
    {
        return view('livewire.pages.login');
    }
}
