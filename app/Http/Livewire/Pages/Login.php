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
                'username.exists' => 'Email is not registered',
                'username.required' => 'Enter Password',
                'password.required' => 'Enter Password',
            ],[
                'username' => 'Email',
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
                'username.exists' => 'Username is not registered',
                'username.required' => 'Enter Username',
                'password.required' => 'Enter Password',
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
