<?php
include './backend/userDb.php';
include './backend/middleware/validator.php';
include './backend/tools/stringProvider.php';

redirectIfLoggedIn('home.php');
autoLogin('home.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Collect and sanitize input data
    $last_name = validate($_POST['last_name'], $user_conn);
    $first_name = validate($_POST['first_name'], $user_conn);
    $middle_name = validate($_POST['middle-name'], $user_conn);
    $full_name = getFullName($last_name, $first_name, $middle_name);
    $course = $_POST['course'];
    $year = $_POST['year'];
    $section = $_POST['section'];
    $student_id = validate($_POST['student-id'], $user_conn);
    $cvsu_email = validate($_POST['cvsu-email'], $user_conn);
    $personal_email = validate($_POST['optional-email'], $user_conn) ?: null;
    $contact = validate($_POST['contact'], $user_conn) ?: null;
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Validate both passwords
    if ($password !== $confirm_password) {
        redirect(
            "signup.php#error",
            "<div class='modal error' id='error'>
                <span> Password did not match. </span>
            </div>"
        );
    }

    // Validate strong password
    if (!isPasswordStrong($password)) {
        redirect(
            "signup.php#error",
            "<div class='modal error' id='error'>
                <span> Password is not strong enough. </span>
            </div>"
        );
    }

    // Query creating account
    $result = createAccount(
        $cvsu_email,
        $personal_email,
        $password,
        $student_id,
        $full_name,
        $contact,
        $course,
        $year,
        $section,
    );

    if ($result['status'] === 'success') {
        redirect(
            "./login.php",
            "<div class='popup modal success'>
                <span>" . $result['message'] . "</span>
            </div>"
        );
    } else if ($result['status'] === 'error') {
        redirect(
            "signup.php#error",
            "<div class='modal error' id='error'>
                <span>" . $result['message'] . "</span>
            </div>"
        );
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Sign up</title>
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body class="center-page">

    <div class="outline-container signup-container">
        <a class="top-link" href="./home.php">Home</a>
        <h1>Sign up</h1>
        <div class="form-pr signup-form">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <label>Full Name</label>
                <div class="fullname-field">
                    <input class="normal-field" type="text" id="last-name" name="last_name" placeholder="Last Name" required>
                    <input class="normal-field" type="text" id="first-name" name="first_name" placeholder="First Name" required>
                    <input class="normal-field" type="text" id="middle-name" name="middle-name" placeholder="Middle Name" required>
                </div>

                <div class="course-info-field">
                    <div class="course-input">
                        <label for="course">Course</label>
                        <select class="normal-field" id="course" name="course" required>
                            <?php
                            $courses = getCourses();
                            if ($courses) {
                                echo '<option value="" disabled selected>Select courses</option>';
                                foreach ($courses as $course) {
                                    echo '<option value="' . htmlspecialchars($course['course_code']) . '">'
                                        . htmlspecialchars($course['course_code']) . '</option>';
                                }
                            } else {
                                echo '<option value="" disabled selected>No courses available</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="year-input">
                        <label for="year">Year</label>
                        <input class="normal-field" type="number" min=1 id="year" name="year" placeholder="1-4" required>
                    </div>
                    <div class="section-input">
                        <label for="section">Section</label>
                        <input class="normal-field" type="number" min=1 id="section" name="section" placeholder="1 and above" required>
                    </div>
                </div>

                <div class="studentId-field">
                    <label for="student-id">Student ID</label>
                    <div class="input-field">
                        <label for="student-id"><i class="material-icons left-icon">badge</i></label>
                        <input type="text" id="student-id" name="student-id" placeholder="Enter your student ID" required>
                    </div>
                </div>

                <div class="email-field">
                    <label for="cvsu-email">CVSU Email</label>
                    <div class="input-field">
                        <label for="cvsu-email"><i class="material-icons left-icon">mail</i></label>
                        <input type="email" id="cvsu-email" name="cvsu-email" placeholder="Enter your cvsu email" required>
                    </div>
                    <label for="optional-email">Personal Email</label>
                    <div class="input-field">
                        <label for="optional-email"><i class="material-icons left-icon">mail</i></label>
                        <input type="email" id="optional-email" name="optional-email" placeholder="Enter your personal email (optional)">
                    </div>
                </div>

                <div class="contact-field">
                    <label for="contact">Contact No.</label>
                    <div class="input-field">
                        <label for="contact"><i class="material-icons left-icon">phone</i></label>
                        <input type="tel" id="contact" name="contact" placeholder="Enter your contact number (optional)">
                    </div>
                </div>
                <hr>
                <div class="password-field">
                    <label for="password">Password</label>
                    <div class="input-field">
                        <label for="password"><i class="material-icons left-icon">lock</i></label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        <i class="material-icons right-icon toggle-password">visibility</i>
                    </div>
                    <label for="confirm-password">Confirm Password</label>
                    <div class="input-field">
                        <label for="confirm-password"><i class="material-icons left-icon">lock</i></label>
                        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
                        <i class="material-icons right-icon toggle-password">visibility</i>
                    </div>
                </div>
                <div class="trust-field">
                    <input type="checkbox" id="trust" name="trust" required>
                    <label for="trust">Do you trust this website with your personal information?</label>
                </div>
                <?php alertMessage(); ?>
                <button type="submit" class="main-btn">Sign up</button>
            </form>
            <p>Already have an account? <a class="link-btn" href="./login.php">Log in</a></p>
        </div>
    </div>

    <script src="./assets/js/password.js"></script>
</body>

</html>