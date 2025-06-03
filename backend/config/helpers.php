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

function isCvsuEmail($email)
{
    return preg_match('/^[a-z0-9._%+-]+@cvsu\.edu\.ph$/i', $email);
}

function getFullName($lastName, $firstName, $middleName)
{
    return trim("$lastName, $firstName $middleName");
}

function splitFullName($fullName)
{
    // Expecting format: "Last, First Middle"
    $parts = explode(',', $fullName);

    if (count($parts) < 2) {
        return [null, null, null];
    }

    $lastName = trim($parts[0]);
    $firstMiddle = preg_split('/\s+/', trim($parts[1]), 2);

    $firstName = $firstMiddle[0] ?? null;
    $middleName = $firstMiddle[1] ?? null;

    return [$lastName, $firstName, $middleName];
}
