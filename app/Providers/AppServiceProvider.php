<?php

namespace App\Providers;
use App\Models\Slider;
use App\Models\Footer;
use App\Models\FooterContent;
use Illuminate\Support\ServiceProvider;
use View;
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
    public function boot()
    {
        $sliders = Slider::all();
        View::share('sliders', $sliders);
        $footerElement = Footer::orderby('id', 'desc')->paginate(10);
        View::share('footerElement', $footerElement);
    }
}
