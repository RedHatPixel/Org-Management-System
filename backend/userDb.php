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
    redirect('/CvSUOrganizationNetwork/maintenance.html');
    exit;
}

function createAccount(
    $cvsu_email,
    $personal_email,
    $password,
    $student_id,
    $full_name,
    $contact,
    $course,
    $year,
    $section
) {
    global $user_conn;

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        // Prepare the SQL insert statement
        $stmt = $user_conn->prepare("CALL createStudentAccount(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            throw new Exception("Failed to prepare sign up procedure.");
        }

        // Bind parameters
        $stmt->bind_param(
            "sssssssii",
            $cvsu_email,
            $personal_email,
            $hashed_password,
            $student_id,
            $full_name,
            $contact,
            $course,
            $year,
            $section,
        );

        // Execute the statement
        if ($stmt->execute()) {
            $stmt->close();
            return result("Account created successfully!", 'success');
        } else {
            throw new Exception("An error occured while creating your account.");
        }
    } catch (mysqli_sql_exception | Exception $e) {
        if (str_contains($e->getMessage(), 'chk_student_id_format')) {
            return result("Invalid student ID format.", 'error');
        }

        if (str_contains($e->getMessage(), 'chk_email_format')) {
            return result("Invalid email account. ", 'error');
        }

        if (str_contains($e->getMessage(), 'chk_cvsu_email_format')) {
            return result("Invalid CVSU email account. ", 'error');
        }

        return result($e->getMessage(), 'error');
    }
}

function loginAccount($cvsu_email, $password)
{
    global $user_conn;

    try {
        // Prepare the SQL insert statement
        $stmt = $user_conn->prepare("CALL loginUser(?)");
        if (!$stmt) {
            throw new Exception("Failed to prepare login procudure.");
        }

        // Bind parameters
        $stmt->bind_param("s", $cvsu_email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verify if an account exist
        if ($result->num_rows === 0) {
            throw new Exception("Account not found.");
        }

        $user = $result->fetch_assoc();
        $stmt->close();

        // Verify the password
        if (!password_verify($password, $user['password'])) {
            throw new Exception("Incorrect password.");
        }

        return result("Account successfully login.", 'success', $user['user_id']);
    } catch (mysqli_sql_exception | Exception $e) {
        return result($e->getMessage(), 'error');
    }
}

function logoutAccount() {}

function getUserAccount($user_id)
{
    global $user_conn;

    try {
        // Use a prepared statement to prevent SQL injection
        $stmt = $user_conn->prepare("SELECT * FROM user_profile WHERE user_id = ?");
        if (!$stmt) {
            throw new Exception("Prepare failed: " . $user_conn->error);
        }

        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if (!$result || $result->num_rows === 0) {
            throw new Exception("No user found.");
        }

        $user = $result->fetch_assoc();
        return result("Account was given.", 'success', $user);
    } catch (mysqli_sql_exception | Exception $e) {
        return result($e->getMessage(), 'error');
    }
}

function getUsersActiveStatus()
{
    global $user_conn;

    try {
        $query = "SELECT * FROM users_active_status";
        $result = $user_conn->query($query);
        if (!$result) {
            throw new Exception("Query Failed: " . $user_conn->error);
        }

        return result("Courses was given.", 'success', $result->fetch_all(MYSQLI_ASSOC));
    } catch (mysqli_sql_exception | Exception $e) {
        return result($e->getMessage(), 'error');
    }
}

function getCourses()
{
    global $user_conn;

    try {
        $query = "SELECT * FROM courses ORDER BY courses.course_code ASC";
        $result = $user_conn->query($query);
        if (!$result) {
            throw new Exception("Query Failed: " . $user_conn->error);
        }

        return result("Courses was given.", 'success', $result->fetch_all(MYSQLI_ASSOC));
    } catch (mysqli_sql_exception | Exception $e) {
        return result($e->getMessage(), 'error');
    }
}
