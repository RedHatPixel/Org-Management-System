<?php
include_once './backend/userDb.php';
include_once './backend/middleware/loginAuth.php';
include_once './backend/tools/tokenProvider.php';

autoLogin('index.php');
redirectIfLoggedIn('index.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cvsu_email = validate($_POST['email'], $user_conn);
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

    $result = loginAccount($cvsu_email, $password);

    if ($result['status'] === 'error') {
        redirect(
            "login.php",
            "<div class='popup modal error'>
                <span>" . $result['message'] . "</span>
            </div>"
        );
    } else if ($result['status'] === 'success') {
        $user_id = $result['data'];
        $_SESSION['user'] = $user_id;

        if ($remember) {
            $cookie_value = createToken($user_id);
            createCookie('remember_token', $cookie_value, 30);
        }

        redirect('index.php');
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

    <title>Log in</title>
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body class="center-page">

    <?php alertMessage(); ?>

    <div class="outline-container login-container">
        <a class="top-link" href="./home.php">Home</a>
        <h1>Log in</h1>
        <div class="form-pr login-form">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="email">CVSU Email</label>
                <div class="input-field">
                    <label for="email"><i class="material-icons left-icon">mail</i></label>
                    <input type="text" id="email" name="email" placeholder="example@cvsu.edu.ph" required>
                </div>
                <label for="password">Password</label>
                <div class="input-field">
                    <label for="password"><i class="material-icons left-icon">lock</i></label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    <i class="material-icons right-icon toggle-password">visibility</i>
                </div>
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>
                <button type="submit" class="main-btn">Log in</button>
                <div class="forgot-password">
                    <a class="link-btn" href="./recovery.php">Forgot Password?</a>
                </div>
            </form>
            <p>Don't have an account? <a class="link-btn" href="./signup.php">Sign up</a></p>
        </div>
    </div>

    <script src="./assets/js/password.js"></script>
</body>

</html>