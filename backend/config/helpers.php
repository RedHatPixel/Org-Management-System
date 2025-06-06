<?php
session_start();

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
 * 
 * @param string $message       The message to return
 * @param string|null $status   Optional status type ('success', 'error', etc.)
 * @param mixed $data           The data the user want to send
 * 
 * @return array
 */
function result($message = '', $status = null, $data = null)
{
    return [
        'message' => $message,
        'status' => $status,
        'data' => $data
    ];
}
