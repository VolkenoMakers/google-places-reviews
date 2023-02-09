## About Volkeno Google Places Reviews
Volkeno-GPR is a laravel package for managing the display of Google Places Reviews. It is simplistic, easy to use and designed to fill the lack of reliable documentation and resources needed to display the reviews of your business.

## Installation

You can install the package via composer :
``` bash
composer require volkenomakers/google-places-reviews
```

After installation, you must publish vendor :
``` php
php artisan  vendor:publish --provider="VolkenoMakers\GooglePlacesReviews\GooglePlacesReviewsServiceProvider"
```
