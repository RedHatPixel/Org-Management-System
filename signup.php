<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Sign up</title>
    <link rel="stylesheet" href="./css/index.css">
</head>

<body class="center-page">

    <div class="signup-container">
        <a class="top-link" href="./home.php">Home</a>
        <h1>Sign up</h1>
        <div class="signup-form">
            <form action="signup.php" method="post">
                <label>Full Name</label>
                <div class="fullname-field">
                    <input class="normal-field" type="text" id="first-name" name="first_name" placeholder="First Name" required>
                    <input class="normal-field" type="text" id="last-name" name="last_name" placeholder="Last Name" required>
                    <input class="normal-field" type="text" id="middle-name" name="middle-name" placeholder="Middle Name" required>
                </div>

                <div class="course-info-field">
                    <div class="course-input">
                        <label for="course">Course</label>
                        <select class="normal-field" id="course" name="course" required>
                            <option value="" disabled selected>Select courses</option>
                            <option value="BSIT">BSIT</option>
                            <option value="BSHM">BSHM</option>
                            <option value="BSBA">BSBA</option>
                            <option value="BSP">BSP</option>
                        </select>
                    </div>
                    <div class="year-input">
                        <label for="year">Year</label>
                        <input class="normal-field" type="number" min=1 id="year" name="year" placeholder="1-4" required>
                    </div>
                    <div class="section-input">
                        <label for="section">Section</label>
                        <input class="normal-field" type="number" min=1 id="section" name="section" placeholder="1 & above" required>
                    </div>
                </div>

                <div class="email-field">
                    <label for="cvsu-email">CVSU Email</label>
                    <div class="input-field">
                        <label for="cvsu-email"><i class="material-icons email-icon">mail</i></label>
                        <input type="email" id="cvsu-email" name="cvsu-email" placeholder="Enter your cvsu email" required>
                    </div>
                    <label for="optional-email">Personal Email</label>
                    <div class="input-field">
                        <label for="optional-email"><i class="material-icons email-icon">mail</i></label>
                        <input type="email" id="optional-email" name="optional-email" placeholder="Enter your personal email (optional)" required>
                    </div>
                </div>

                <div class="contact-field">
                    <label for="contact">Contact No.</label>
                    <div class="input-field">
                        <label for="contact"><i class="material-icons phone-icon">phone</i></label>
                        <input type="tel" id="contact" name="contact" placeholder="Enter your contact number" required>
                    </div>
                </div>
                <hr>
                <div class="password-field">
                    <label for="password">Password</label>
                    <div class="input-field">
                        <label for="password"><i class="material-icons password-icon">lock</i></label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        <i class="material-icons visibility-icon toggle-password">visibility</i>
                    </div>
                    <label for="confirm-password">Confirm Password</label>
                    <div class="input-field">
                        <label for="confirm-password"><i class="material-icons password-icon">lock</i></label>
                        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
                        <i class="material-icons visibility-icon toggle-password">visibility</i>
                    </div>
                </div>
                <div class="trust-field">
                    <input type="checkbox" id="trust" name="trust" required>
                    <label for="trust">Do you trust this website with your personal information?</label>
                </div>
                <button type="submit" class="main-btn">Sign up</button>
            </form>
            <p>Already have an account <a class="link-btn" href="./login.php">Log in</a></p>
        </div>
    </div>

    <script src="./js/password.js"></script>
</body>

</html>