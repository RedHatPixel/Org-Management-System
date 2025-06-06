<?php

/**
 * Check if the password is strong
 * 
 * Requirements:
 * - At least 8 characters long
 * - Contains at least one uppercase letter
 * - Contains at least one lowercase letter
 * - Contains at least one number
 * - Contains at least one special character
 * @param string $password
 * @return bool $isStrong
 */
function isPasswordStrong($password)
{
    $length = strlen($password) >= 8;
    $upper  = preg_match('/[A-Z]/', $password);
    $lower  = preg_match('/[a-z]/', $password);
    $number = preg_match('/[0-9]/', $password);
    $special = preg_match('/[\W_]/', $password);

    return $length && $upper && $lower && $number && $special;
}
