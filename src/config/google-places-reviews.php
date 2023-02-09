<?php
    /*
        Configuration.
        Note: You'll need a Google maps API key - requires both Maps JS and Places API services enabled.
    */

return [
    'place_ID'          => 'ChIJFb57ro6uthIRDLfDb_QGG_w', // Get from: https://developers.google.com/maps/documentation/javascript/examples/places-placeid-finder
    'business_type'     => 'Plumber', // Example: FinancialService (http://schema.org)
    'business_name'     => 'Sam the plumber',
    'street_address'    => '',
    'locality'          => '', // Example: Docklands (http://schema.org/addressLocality)
    'region '           => '',
    'post_code'          => '',
    'logo_path'         => '',
    'min_star'          => '1', // The minimum star rating (min = 1)
    'max_rows'          => '5', // The maximum number of results (max = 5)
    'api_key'           => 'AIzaSyBxm-IN3qI_2erMlbYlyIbtg-9M4F9xg0w',
    'fr_months_array'   => array('Janv','Fév','Mar','Avr','Mai','Juin','Juil','Août','Sept','Oct','Nov','Déc'),
    'en_months_array'   => array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec')
];
