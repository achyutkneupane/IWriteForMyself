<?php

namespace App\Helpers;

use App\Models\Stranger;
use App\Models\User;
use Illuminate\Cookie\CookieValuePrefix;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Jaybizzle\LaravelCrawlerDetect\Facades\LaravelCrawlerDetect as Crawler;

class CookieHelper
{
    static public function getCookie($key)
    {
        return CookieValuePrefix::remove(Crypt::decryptString(Cookie::get($key)));
    }
    static public function getUser()
    {
        if(Crawler::isCrawler()) {
            return User::find(2);
        }
        return auth()->check() ? auth()->user() : Stranger::where('cookie_id', Cookie::get('cookie_id'))->first();
    }
}
