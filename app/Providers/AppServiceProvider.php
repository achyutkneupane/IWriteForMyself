<?php

namespace App\Providers;

use App\Helpers\CookieHelper;
use Illuminate\Support\ServiceProvider;
use App\Models\Stranger;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Schema;
use Jaybizzle\LaravelCrawlerDetect\Facades\LaravelCrawlerDetect as Crawler;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        if(Crawler::isCrawler()) {
            return response()->json(Crawler::getMatches());
        }
        if(Schema::hasTable('strangers')) {
            if(!auth()->check()) {
                if(Cookie::has('cookie_id')) {
                    $cookie_id = CookieHelper::getCookie('cookie_id');
                    if(Stranger::where('cookie_id', $cookie_id)->count() == 0) {
                        Stranger::create([
                            'cookie_id' => $cookie_id,
                        ]);
                    }
                }
                else {
                    $faker = \Faker\Factory::create();
                    $cookie_id = $faker->bothify('##??#?##?#');
                    Cookie::queue('cookie_id', $cookie_id);
                }
            }
        }
    }
}
