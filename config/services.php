<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    
    'paypal' => [
        'client_id' => 'ASbRE6CwWuPNx_-oYDtqQor8HUC0NM9pSqkQOtO2FU4rDEwNXLjUnjOfKeuMAlznm57bo1Dy_0Zoemld',
        'secret' => 'EG6HAHOCvHczSGacj87I_Z0o53vEI6vlJO_m44D5suO48PEEFjANtkJ_ppq9zF-SYzxExwV9ulyC6qVh'
    ],

];
