<?php

namespace App\Helpers;

use App\Models\Stranger;
use Illuminate\Cookie\CookieValuePrefix;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;

class CookieHelper
{
    static public function getCookie($key)
    {
        return CookieValuePrefix::remove(Crypt::decryptString(Cookie::get($key)));
    }
    static public function getUser()
    {
        return auth()->check() ? auth()->user() : Stranger::where('cookie_id', Cookie::get('cookie_id'))->first();
    }
}
