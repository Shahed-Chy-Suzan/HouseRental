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

    'google' => [
        'client_id' => '326396424247-g3k0mugsr9ts1ef48fo1f36dgfrelnpn.apps.googleusercontent.com',
        'client_secret' => 'fRa0DImYy8pvP1CnXPfZwDFP',
        'redirect' => 'http://localhost/HouseRental/callback/google',
    ],

    // 'facebook' => [
    //     'client_id' => 'xxxx',
    //     'client_secret' => 'xxx',
    //     'redirect' => 'http://localhost/HouseRental/callback/facebook',
    // ],

];
