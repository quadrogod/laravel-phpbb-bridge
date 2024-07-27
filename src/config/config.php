<?php

return [
    'appkey' => env('PHPBB_BRIDGE_SECRET_KEY', 'yoursecretapikey'),
    'client_auth' => false,
    'user_model' => [
        'username_column' => 'login',
        'password_column' => 'password',
    ],
];
