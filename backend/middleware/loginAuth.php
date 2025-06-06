<?php
include_once __DIR__ . '/../config/helpers.php';
include_once __DIR__ . '/../tools/tokenProvider.php';

// Auto-login using remember_token if session is not set
function autoLogin($reloadTo = null, $redirectTo = null)
{
    // Reload and use the saved user data.
    if (!isset($_SESSION['user']) && isset($_COOKIE['remember_token'])) {

        $result = readToken($_COOKIE['remember_token']);

        if ($result['status'] === 'success') {
            $_SESSION['user'] = (int) $result['data'];

            if ($reloadTo !== null)
                redirect($reloadTo);

            // Refresh the cookie expiration
            createCookie('remember_token', $_COOKIE['remember_token'], 30);
        } else {

            // Tampered cookie – delete it
            createToken('remember_token', '', -1);
        }
    }
    // Redirect to a given link when you can't login in anyway
    else if (!isset($_SESSION['user']) && $redirectTo !== null) {
        redirect($redirectTo);
    }
}

// Check login status and redirect them to logged pages
function redirectIfLoggedIn($AllowedTo)
{
    if (isset($_SESSION['user'])) {
        redirect($AllowedTo);
    }
}
