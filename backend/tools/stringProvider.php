<?php

/**
 * Combine the given names into a full name in the format "Last, First Middle"
 * with each part capitalized.
 *
 * @param string $lastName The user's last name
 * @param string $firstName The user's first name
 * @param string $middleName The user's middle name
 *
 * @return string The formatted and capitalized full name
 */
function getFullName($lastName, $firstName, $middleName)
{
    // Normalize case: make lowercase then capitalize first letters
    $lastName = ucwords(strtolower($lastName));
    $firstName = ucwords(strtolower($firstName));
    $middleName = ucwords(strtolower($middleName));

    return trim("$lastName, $firstName $middleName");
}

/**
 * Split a full name into last, first, and middle names
 *
 * Expected format: "Last, First Middle"
 * @param string $fullName The full name string to split
 * @return array An array with [lastName, firstName, middleName], or [null, null, null] if invalid
 */
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
