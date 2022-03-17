<?php

namespace App\Helpers;

use App\Models\Crawl;
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
        $userCheck = auth()->check() ? auth()->user() : Stranger::where('cookie_id', Cookie::get('cookie_id'))->first();
        if(!$userCheck) {
            Crawl::create([
                'ip' => request()->ip(),
                'user_agent' => request()->userAgent(),
                'is_crawler' => Crawler::isCrawler(),
                'referrer' => request()->server('HTTP_REFERER'),
                'url' => request()->fullUrl(),
            ]);
            return User::find(2);
        }
        else {
            return $userCheck;
        }
    }
}
