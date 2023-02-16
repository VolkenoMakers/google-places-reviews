## About Volkeno Google Places Reviews
Volkeno-GPR is a laravel package for managing the display of Google Places Reviews. It is simplistic, easy to use and designed to fill the lack of reliable documentation and resources needed to display the reviews of your business.

## Installation

You can install the package via composer :
``` bash
composer require volkenomakers/google-places-reviews
```

After installation, you must publish vendor :
``` php
php artisan vendor:publish --provider="VolkenoMakers\GooglePlacesReviews\GooglePlacesReviewsServiceProvider"
```

## Updating config file 
To configure the package, you must edit the config/google-places-reviews.php file to fill in the essential information.
``` php
<?php
    /*
        Configuration.
        Note: You'll need a Google maps API key - requires both Maps JS and Places API services enabled.
    */

return [
    'place_ID'          => '', // Get from: https://developers.google.com/maps/documentation/javascript/examples/places-placeid-finder **REQUIRED
    'business_type'     => '', // Example: FinancialService (http://schema.org) **REQUIRED
    'business_name'     => '', // Your Business name **REQUIRED
    'street_address'    => '', // Your business address
    'locality'          => '', // Example: Docklands (http://schema.org/addressLocality)
    'region '           => '', // Your business region
    'post_code'          => '', // Your business post code
    'logo_path'         => '', // Your business logo lurl
    'min_star'          => '1', // The minimum star rating (min = 1)
    'max_rows'          => '5', // The maximum number of results (max = 5)
    'api_key'           => '', // Google API Key **REQUIRED
];
```

