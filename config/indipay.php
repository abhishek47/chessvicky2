<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Indipay Service Config
    |--------------------------------------------------------------------------
    |   gateway = CCAvenue / PayUMoney / EBS / Citrus / InstaMojo
    |   view    = File
    */

    'gateway' => 'InstaMojo',                // Replace with the name of default gateway you want to use

    'testMode'  => true,                   // True for Testing the Gateway [For production false]

    'ccavenue' => [                         // CCAvenue Parameters
        'merchantId'  => env('INDIPAY_MERCHANT_ID', ''),
        'accessCode'  => env('INDIPAY_ACCESS_CODE', ''),
        'workingKey' => env('INDIPAY_WORKING_KEY', ''),

        // Should be route address for url() function
        'redirectUrl' => env('INDIPAY_REDIRECT_URL', 'payments/response'),
        'cancelUrl' => env('INDIPAY_CANCEL_URL', 'payments/cancel'),

        'currency' => env('INDIPAY_CURRENCY', 'INR'),
        'language' => env('INDIPAY_LANGUAGE', 'EN'),
    ],

    'payumoney' => [                         // PayUMoney Parameters
        'merchantKey'  => env('INDIPAY_MERCHANT_KEY', ''),
        'salt'  => env('INDIPAY_SALT', ''),
        'workingKey' => env('INDIPAY_WORKING_KEY', ''),

        // Should be route address for url() function
        'successUrl' => env('INDIPAY_SUCCESS_URL', 'payments/response'),
        'failureUrl' => env('INDIPAY_FAILURE_URL', 'payments/response'),
    ],

    'ebs' => [                         // EBS Parameters
        'account_id'  => env('INDIPAY_MERCHANT_ID', ''),
        'secretKey' => env('INDIPAY_WORKING_KEY', ''),

        // Should be route address for url() function
        'return_url' => env('INDIPAY_SUCCESS_URL', 'payments/response'),
    ],

    'citrus' => [                         // Citrus Parameters
        'vanityUrl'  => env('INDIPAY_CITRUS_VANITY_URL', ''),
        'secretKey' => env('INDIPAY_WORKING_KEY', ''),

        // Should be route address for url() function
        'returnUrl' => env('INDIPAY_SUCCESS_URL', 'payments/response'),
        'notifyUrl' => env('INDIPAY_SUCCESS_URL', 'payments/response'),
    ],

    'instamojo' =>  [
        'api_key' => env('INSTAMOJO_API_KEY','6ebecf2e98554a05b3497bab3dd23f09'),
        'auth_token' => env('INSTAMOJO_AUTH_TOKEN','b94c4c24b3f64ba8c57f98a65c91e833'),
        'redirectUrl' => env('INDIPAY_REDIRECT_URL', 'payments/response'),
    ],

    // Add your response link here. In Laravel 5.2 you may use the api middleware instead of this.
    'remove_csrf_check' => [
        'payments/response'
    ],





];
