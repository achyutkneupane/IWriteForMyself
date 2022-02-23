<?php

use App\Http\Livewire\Pages\LandingPage;
use App\Http\Livewire\Pages\Login;
use App\Http\Livewire\Pages\Register;
use App\Http\Livewire\Pages\ViewArticle;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', LandingPage::class)->name('landingPage');
Route::get('/sign-in', Login::class)->middleware('guest')->name('login');
Route::get('/sign-up', Register::class)->middleware('guest')->name('register');
Route::get('/logout', function() {
    auth()->logout();
    return redirect()->route('landingPage');
})->name('logout');
Route::get('/article', ViewArticle::class)->name('article.view');