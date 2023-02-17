## About VolkenoMakers Google Places Reviews
VolkenoMakers-GPR is a laravel package for managing the display of Google Places Reviews. It is simplistic, easy to use and designed to fill the lack of reliable documentation and resources needed to display the reviews of your business.

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
To configure the package, you must edit the **config/google-places-reviews.php** file to fill in the essential information.
``` php
<?php
    /*
        Configuration.
        Note: You'll need a Google maps API key - requires both Maps JS and Places API services enabled.
    */

return [
    'place_ID'          => '', // [REQUIRED] Get from: https://developers.google.com/maps/documentation/javascript/examples/places-placeid-finder 
    'business_type'     => '', // [REQUIRED] Example: FinancialService (http://schema.org) 
    'business_name'     => '', // [REQUIRED] Your Business name 
    'street_address'    => '', // Your business address
    'locality'          => '', // Example: Docklands (http://schema.org/addressLocality)
    'region '           => '', // Your business region
    'post_code'          => '', // Your business post code
    'logo_path'         => '', // Your business logo lurl
    'min_star'          => '1', // The minimum star rating (min = 1)
    'max_rows'          => '5', // The maximum number of results (max = 5)
    'api_key'           => '', // [REQUIRED] Google API Key
];
```

## Override package css style
You can override the package styling by adding your custom CSS in the public/vendor/gp-reviews.css file.
If you also want to add new class or id to go further on the customization you must edit the view file integrated in **resources/views/vendor/gp-reviews.blade.php**

## Multilingual configuration (i18n)
The package is multilingual with two languages configured by default : English and French. On the other hand, you can always add other languages by creating a folder of the language you want to use in **resources/lang/vendor/gp-reviews**, taking the keys and assigning them a textual value.

**IMPORTANT TO KNOW :** <br>
You cannot configure the internationalization of the names of the months of the year in the lang folder. For this, you must edit the **resources/views/vendor/gp-reviews.blade.php** file on line 154. 
By default the months are in French.

```js
var convertTime = function(UNIX_timestamp) {
    var a = new Date(UNIX_timestamp * 1000);
    var months = ['Janv','Fév','Mar','Avr','Mai','Juin','Juil','Août','Sept','Oct','Nov','Déc']; // You can change this
    var time = a.getDate() + ' ' + months[a.getMonth()] + ' ' + a.getFullYear();
    return time;
}
```

## How to user VolkenoMakers-GPR
```blade
    @section('content)
        ...
        ...
        ...
        <div>
            @include('vendor.gp-reviews.gp-reviews')
        </div>
    @endsection
```

## Copyright and License

[google-places-reviews](https://github.com/VolkenoMakers/google-places-reviews)
was written by [Sadio Sangharé](https://github.com/sadiosandev) for [Volkeno Makers](https://volkeno.sn) and is released under the [MIT License](LICENSE.md).

Copyright (c) 2023 VolkenoMakers

