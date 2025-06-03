<?php
session_start();

/**
 * Sanitize input using the active `$conn` connection
 */
function validate($input)
{
    global $conn;
    return trim(mysqli_real_escape_string($conn, $input));
}

/**
 * Redirect with optional session status message
 */
function redirect($url, $status = null)
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
