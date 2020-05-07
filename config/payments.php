<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Payment Services
    |--------------------------------------------------------------------------
    |
    | Description...
    |
    */

    'mpesa' => [
        'key' => env('MPESA_KEY'),
        'secret' => env('MPESA_SECRET'),
        'passkey' => env('MPESA_PASSKEY'),
        'short_code' => env('MPESA_SHORTCODE'),
    ],

];
