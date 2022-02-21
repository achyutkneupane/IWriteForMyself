<?php

use App\Http\Livewire\Pages\LandingPage;
use App\Http\Livewire\Pages\Login;
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
Route::get('/login', Login::class)->name('login');