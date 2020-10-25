<?php

function restrict_rest_api_to_localhost()
{

    $whitelist = ['127.0.0.1', "::1", '170.79.54.73'];

    if (!in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
        die('REST API is disabled for you thanks.');
    }
}

add_action('rest_api_init', 'restrict_rest_api_to_localhost', 0);
