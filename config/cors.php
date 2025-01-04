<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Laravel CORS Options
    |--------------------------------------------------------------------------
    |
    | Here you may configure your CORS settings. This will determine which
    | origins, methods, and headers are allowed when making requests to your
    | application. You can change these values to your needs.
    |
    */

    'paths' => ['api/*'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['*'], // Здесь может быть указано ваше доменное имя, например: 'http://localhost:8080'
    'allowed_headers' => ['*'],
    'supports_credentials' => true, // Если вы работаете с авторизацией через cookies

];
