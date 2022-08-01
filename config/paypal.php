<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

return [
    'mode'    => env('PAYPAL_MODE', 'sandbox'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'username'    => env('PAYPAL_SANDBOX_API_USERNAME', 'sb-5b43wf8374552_api1.business.example.com'),
        'password'    => env('PAYPAL_SANDBOX_API_PASSWORD', 'BZCZDN2RMAMZ7MK6'),
        'secret'      => env('PAYPAL_SANDBOX_API_SECRET', 'Aa4YreKWFRD8an.Bj5TSfh4rwzFIAVvMPekzEb46GkM5H2LMIvGFeFzO'),
        'certificate' => env('PAYPAL_SANDBOX_API_CERTIFICATE', ''),
        'client_id'         => env('PAYPAL_SANDBOX_CLIENT_ID', 'ASC8NOh34_u1Xqi7wVo3FcDv-jnFGQB9P2KK43b-2WD_CwIT9YgJGJT8aJFrwV47LhRtapyUW0ncgptw'),
        'client_secret'     => env('PAYPAL_SANDBOX_CLIENT_SECRET', 'EB-gA08yMtWNQ-5e6mm-F_9WwfE_ac44PwPYfI0euWE903Cr1gvQkYshRltPrNqv2a55Mf-tuOufMSZm'),
        'app_id'            => 'APP-80W284485P519543T',
    ],
    'live' => [
        'client_id'         => env('PAYPAL_LIVE_CLIENT_ID', ''),
        'client_secret'     => env('PAYPAL_LIVE_CLIENT_SECRET', ''),
        'app_id'            => '',
    ],

    'payment_action' => env('PAYPAL_PAYMENT_ACTION', 'Sale'), // Can only be 'Sale', 'Authorization' or 'Order'
    'currency'       => env('PAYPAL_CURRENCY', 'USD'),
    'notify_url'     => env('PAYPAL_NOTIFY_URL', ''), // Change this accordingly for your application.
    'locale'         => env('PAYPAL_LOCALE', 'en_US'), // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => env('PAYPAL_VALIDATE_SSL', true), // Validate SSL when creating api client.
];
