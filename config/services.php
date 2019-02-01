<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

    'facebook' => [
        'client_id'     => '819364401737651',
        'client_secret' => '23b7d9ebaa0d5683ebf4892912571ba2',
        'redirect'      => 'https://www.test.last-bee.com/api/auth/facebook/callback',
    ],

    'google' => [
        'client_id'     => '1030124301988-llk83bbh38uc0o2it26cldeorvsaknnf.apps.googleusercontent.com',
        'client_secret' => 'CSdKa2C9dXAaMudDzZ-y-Bl-',
        'redirect'      => 'https://www.test.last-bee.com/api/auth/google/callback',
    ],

];
