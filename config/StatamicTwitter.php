<?php

return [
    'api_version'                   => env('TWITTER_VERSION',2),
    'consumer_key'                   => env('TWITTER_CONSUMER_KEY'),
    'consumer_secret'                => env('TWITTER_CONSUMER_SECRET'),
    'access_token'                   => env('TWITTER_ACCESS_TOKEN'),
    'access_token_secret'            => env('TWITTER_ACCESS_TOKEN_SECRET'),
    'access_bearer_token'            => env('TWITTER_ACCESS_BEARER'),
    'expiration'                     => env('TWITTER_EXPIRATION', 86400),
];
