<?php
include_once __DIR__ . '/../config/helpers.php';

$secret_key = '8GDkmL_)uknHG!gX7XUP{fj0.5]jX.1seKnW{E}Sq9w:QA]HidsUo[m)=aZK_J';

function createToken($value)
{
    global $secret_key;
    $signature = hash_hmac('sha256', $value, $secret_key);
    $token_value = base64_encode($value . ':' . $signature);

    return $token_value;
}

function readToken($token)
{
    global $secret_key;
    $value_parts = explode(':', base64_decode($token));
    if (count($value_parts) === 2) {
        [$value, $signature] = $value_parts;
        $expected_signature = hash_hmac('sha256', $value, $secret_key);

        if (hash_equals($expected_signature, $signature)) {
            return result('Token is valid', 'success', $value);
        } else {
            return result('Token is not valid', 'none');
        }
    }
}
