<?php

return [
    'appkey' => env('PHPBB_BRIDGE_SECRET_KEY', 'yoursecretapikey'),
    'client_auth' => false,
    'user_model' => [
        'username_column' => 'email',
        'password_column' => 'password',
    ],
];
