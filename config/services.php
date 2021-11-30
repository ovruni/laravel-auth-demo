<?php

return [

    /*
       |--------------------------------------------------------------------------
       | Third Party Services
       |--------------------------------------------------------------------------
       |
       | This file is for storing the credentials for third party services such
       | as Mailgun, Postmark, AWS and more. This file provides the de facto
       | location for this type of information, allowing packages to have
       | a conventional file to locate the various service credentials.
       |
     */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'openstreetmap' => [
        'client_id' => env('OPENSTREETMAP_CLIENT_ID'),
        'client_secret' => env('OPENSTREETMAP_CLIENT_SECRET'),
        'redirect' => 'http://127.0.0.1:8000/oauth/complete/openstreetmap/',
    ],
    'mediawiki' => [
        'client_id' => env('MEDIAWIKI_CLIENT_ID'),
        'client_secret' => env('MEDIAWIKI_CLIENT_SECRET'),
        'redirect' => 'http://127.0.0.1:8000/oauth/complete/mediawiki/',
    ],
];
