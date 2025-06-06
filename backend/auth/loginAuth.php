<?php
include_once __DIR__ . '/../config/helpers.php';
include_once __DIR__ . '/../tools/tokenProvider.php';

// Directly use the user id when session is set
if (isset($_SESSION['user_id'])) {
    redirect('home.php');
    exit(0);
}

// Auto-login using remember_token if session not set
if (!isset($_SESSION['user_id']) && isset($_COOKIE['remember_token'])) {

    $result = readToken($_COOKIE['remember_token']);

    if ($result['status'] === 'success') {
        $_SESSION['user_id'] = (int) $result['data'];
        redirect('home.php');

        // Optional: You can refresh the cookie expiration here if you want
        setcookie('remember_token', $_COOKIE['remember_token'], time() + (86400 * 30), '/', '', true, true);
    } else {

        // Tampered cookie – delete it
        setcookie('remember_token', '', time() - 3600, '/');
    }
}
