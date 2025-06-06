<?php
include_once __DIR__ . '/../config/helpers.php';
include_once __DIR__ . '/../tools/tokenProvider.php';

// Auto-login using remember_token if session is not set
function autoLogin($redirectTo = null)
{
    if (!isset($_SESSION['user']) && isset($_COOKIE['remember_token'])) {

        $result = readToken($_COOKIE['remember_token']);

        if ($result['status'] === 'success') {
            $_SESSION['user'] = (int) $result['data'];

            if ($redirectTo !== null)
                redirect($redirectTo);

            // Refresh the cookie expiration
            createCookie('remember_token', $_COOKIE['remember_token'], 30);
        } else {

            // Tampered cookie – delete it
            createToken('remember_token', '', -1);
        }
    }
}

// Check login status and redirect them to logged pages
function redirectIfLoggedIn($AllowedTo, $NotTo = null)
{
    if (isset($_SESSION['user'])) {
        redirect($AllowedTo);
    } else if ($NotTo != null) {
        redirect($NotTo);
    }
}
