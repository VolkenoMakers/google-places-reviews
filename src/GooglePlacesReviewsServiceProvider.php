<?php
declare(strict_types=1);
namespace VolkenoMakers\GooglePlacesReviews;

use Illuminate\Support\ServiceProvider;


class GooglePlacesReviewsServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'gp-reviews');
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor'),
        ]);
        $this->publishes([
            __DIR__.'/public' => public_path('vendor/gp-reviews'),
        ], 'public');
        $this->publishes([
            __DIR__.'/config/google-places-reviews.php' => config_path('google-places-reviews.php')
        ], 'google-places-reviews');

        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'gp-reviews');

        $this->publishes([
            __DIR__.'/resources/lang' => resource_path('lang/vendor/gp-reviews'),
        ]);
    }

    public function register()
    {

    }
}
