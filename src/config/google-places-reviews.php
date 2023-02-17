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
