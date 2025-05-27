<?php
require_once './dbConnection.php';
session_start();

dbConnection();

// Input Validation Function
function validate($input)
{
    global $conn;
    $validatedData = mysqli_real_escape_string($conn, $input);
    return trim($validatedData);
}

// Redirect from 1 page to another with a message
function redirect($url, $status = null)
{
    $_SESSION['status'] = $status;
    header("Location: $url");
    exit(0);
}

// Display messages or status after a process
function alertMessage()
{
    if (isset($_SESSION['status'])) {
        echo $_SESSION['status'];
        unset($_SESSION['status']);
    }
}

// Insert record using this function
function insertQuery($tableName, $data)
{
    global $conn;
    $table = validate($tableName);
    $columns = implode(", ", array_keys($data));
    $values = implode("', '", array_values($data));
    $sql = "INSERT INTO $table ($columns) VALUES ('$values')";
    return mysqli_query($conn, $sql);
}

function updateQuery($tableName, $id, $data)
{
    global $conn;
    $table = validate($tableName);
    $id = validate($id);
    $set = "";
    foreach ($data as $key => $value) {
        $set .= "$key = '" . validate($value) . "', ";
    }
    $set = rtrim($set, ", ");
    $sql = "UPDATE $table SET $set WHERE $id='$id'";
    return mysqli_query($conn, $sql);
}

function getAllQuery($tableName, $status = null)
{
    global $conn;
    $table = validate($tableName);
    $status = validate($status);
    if ($status) {
        $sql = "SELECT * FROM $table WHERE status='$status'";
    } else {
        $sql = "SELECT * FROM $table";
    }
    return mysqli_query($conn, $sql);
}

function getByIdQuery($tableName, $id)
{
    global $conn;
    $table = validate($tableName);
    $id = validate($id);
    $sql = "SELECT * FROM $table WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $response = [
                'status' => 200,
                'data' => $row,
                'message' => "Record Found"
            ];
            return $response;
        } else {
            $response = [
                'status' => 404,
                'message' => "No Data Found"
            ];
        }
    } else {
        $response = [
            'status' => 500,
            'message' => "Something went wrong"
        ];
        return $response;
    }
}

function deleteQuery($tableName, $id)
{
    global $conn;
    $table = validate($tableName);
    $id = validate($id);
    $sql = "DELETE FROM $table WHERE id='$id'";
    return mysqli_query($conn, $sql);
}
