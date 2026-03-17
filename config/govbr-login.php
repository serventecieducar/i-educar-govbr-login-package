<?php

return [
    'enabled' => env('GOVBR_LOGIN_ENABLED', false),

    'client_id' => env('GOVBR_CLIENT_ID'),
    'client_secret' => env('GOVBR_CLIENT_SECRET'),
    'redirect_uri' => env('GOVBR_REDIRECT_URI'),

    'authorization_endpoint' => env('GOVBR_AUTH_URL'),
    'token_endpoint' => env('GOVBR_TOKEN_URL'),
    'userinfo_endpoint' => env('GOVBR_USERINFO_URL'),

    'scopes' => explode(' ', env('GOVBR_SCOPES', 'openid profile email')),

    'cpf_claim' => env('GOVBR_CPF_CLAIM', 'cpf'),
];

