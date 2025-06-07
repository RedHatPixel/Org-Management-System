<?php
session_start();

/**
 * Stop and delete all working session
 */
function deleteAllSession()
{
    session_unset();
    session_destroy();
}

/**
 * Sanitize input using the active `$conn` connection
 */
function validate($input, $conn)
{
    return trim(mysqli_real_escape_string($conn, $input));
}

/**
 * Redirect with optional session status message
 */
function redirect($url = './', $status = null)
{
    $_SESSION['status'] = $status;
    header("Location: $url");
    exit(0);
}

/**
 * Show session alert message if available
 */
function alertMessage()
{
    if (isset($_SESSION['status'])) {
        echo $_SESSION['status'];
        unset($_SESSION['status']);
    }
}

/**
 * Create a structured result array for feedback
 */
function result($message = '', $status = null, $data = null)
{
    return [
        'message' => $message,
        'status' => $status,
        'data' => $data
    ];
}

/**
 * Create a specified cookies with time control
 */
function createCookie($name, $value, $days = 0, $hours = 0)
{
    $expiration = time() + ($days * 86400) + ($hours * 3600); // 86400 = 1 day, 3600 = 1 hour
    setcookie($name, $value, $expiration, '/', '', true, true); // Secure, HttpOnly
}
