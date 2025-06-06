<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Log in | Recover Password</title>
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body class="center-page">

    <div class="outline-container recover-container">
        <a class="top-link" href="./home.php">Home</a>
        <h1>Forgot Password</h1>
        <div class="form-pr recover-form">
            <form action="recover-password.php" method="post">
                <label for="email">Email</label>
                <div class="input-field">
                    <label for="email"><i class="material-icons left-icon">mail</i></label>
                    <input type="text" id="email" name="email" placeholder="Enter your cvsu email" required>
                </div>
                <button type="submit" class="main-btn">Reset My Password</button>
            </form>
            <p>Insert your email and press the button then wait for your mail with authentication code.</p>
        </div>
    </div>

    <script src="./assets/js/password.js"></script>
</body>

</html>