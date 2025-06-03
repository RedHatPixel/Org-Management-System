<?php
include_once __DIR__ . '/config/connector.php';
include_once __DIR__ . '/config/helpers.php';

$user_conn = createConnection(
    "localhost",
    "admin",
    "Qa.TN3JnAl[-vRdz",
    "cvsunet_user_db"
);

if (!$user_conn) {
    die("Connection Failed to user data.");
}

function getCourses()
{
    global $user_conn;
    $query = "SELECT * FROM courses ORDER BY courses.course_code ASC";
    $result = $user_conn->query($query);
    if (!$result) {
        error_log("Query Failed: " . $user_conn->error);
    }

    $courses = [];
    while ($row = $result->fetch_assoc()) {
        $courses[] = $row;
    }
    return $courses;
}
