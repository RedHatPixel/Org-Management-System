<?php
function createConnection($host, $user, $pass, $dbname)
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try {
        $conn = new mysqli($host, $user, $pass, $dbname);
        return $conn;
    } catch (mysqli_sql_exception $e) {
        error_log("Database connection failed: " . $e->getMessage());
        return null;
    }
};

function closeConnection($conn)
{
    if ($conn) {
        mysqli_close($conn);
    }
}
