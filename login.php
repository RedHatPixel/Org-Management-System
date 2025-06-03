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

    <div class="outline-container login-container">
        <a class="top-link" href="./home.php">Home</a>
        <h1>Log in</h1>
        <div class="form-pr login-form">
            <form action="login.php" method="post">
                <label for="email">Email</label>
                <div class="input-field">
                    <label for="email"><i class="material-icons left-icon">mail</i></label>
                    <input type="text" id="email" name="email" placeholder="Enter your cvsu email" required>
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
                    <a class="link-btn" href="./recover-password.php">Forgot Password?</a>
                </div>
            </form>
            <p>Don't have an account? <a class="link-btn" href="./signup.php">Sign up</a></p>
        </div>
    </div>

    <script src="./assets/js/password.js"></script>
</body>

</html>