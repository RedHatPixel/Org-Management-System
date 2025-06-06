<?php
include_once './backend/middleware/loginAuth.php';
autoLogin($_SERVER['PHP_SELF'], 'index.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>CVSU Organization Network | Orgs</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/navbar.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
</head>

<body>
    <?php
    $AsBlack = true;
    include_once 'includes/navbar.php';
    ?>

    <div class="organizations">
        <h1>Organizations</h1>
        <p>List of organizations in the CVSU Organization Network.</p>

        <div class="org-container">
            <div class="org-main-card">

                <div class="org-left-info">
                    <div class="org-main-header">
                        <i class="material-icons org-main-img">public</i>
                        <span class="org-main-title">SAMPLE</span>
                    </div>
                    <div class="org-main-desc">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo quis voluptatem, vel exercitationem, blanditiis minima quaerat labore in pariatur, esse minus natus. Culpa omnis ratione, earum consequuntur atque non nostrum!</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet enim illo dolores obcaecati repellat ullam similique numquam quae minus error, voluptatem a nulla suscipit porro ab fugit voluptate laudantium eveniet!</p>
                    </div>
                    <div class="org-main-accounts">
                        <div class="accounts-joined">
                            <i class="material-icons account">account_circle</i>
                            <i class="material-icons account">account_circle</i>
                            <i class="material-icons account">account_circle</i>
                            <i class="material-icons account">account_circle</i>
                            <i class="material-icons account">account_circle</i>
                        </div>
                        <span>currently joined...</span>
                    </div>
                </div>

                <div class="org-right-info">
                    <a href="#">Join</a>
                    <p>Created At: MM-DD-YYYY</p>
                    <p>0 accounts joined</p>
                    <div class="org-rating">
                        <i class="material-icons star">star</i>
                        <i class="material-icons star">star</i>
                        <i class="material-icons star">star</i>
                        <i class="material-icons star">star</i>
                        <i class="material-icons star">star</i>
                    </div>
                </div>

            </div>
            <div class="org-main-card">

                <div class="org-left-info">
                    <div class="org-main-header">
                        <i class="material-icons org-main-img">public</i>
                        <span class="org-main-title">SAMPLE</span>
                    </div>
                    <div class="org-main-desc">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo quis voluptatem, vel exercitationem, blanditiis minima quaerat labore in pariatur, esse minus natus. Culpa omnis ratione, earum consequuntur atque non nostrum!</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet enim illo dolores obcaecati repellat ullam similique numquam quae minus error, voluptatem a nulla suscipit porro ab fugit voluptate laudantium eveniet!</p>
                    </div>
                    <div class="org-main-accounts">
                        <div class="accounts-joined">
                            <i class="material-icons account">account_circle</i>
                            <i class="material-icons account">account_circle</i>
                            <i class="material-icons account">account_circle</i>
                            <i class="material-icons account">account_circle</i>
                            <i class="material-icons account">account_circle</i>
                        </div>
                        <span>currently joined...</span>
                    </div>
                </div>

                <div class="org-right-info">
                    <a href="#">Join</a>
                    <p>Created At: MM-DD-YYYY</p>
                    <p>0 accounts joined</p>
                    <div class="org-rating">
                        <i class="material-icons star">star</i>
                        <i class="material-icons star">star</i>
                        <i class="material-icons star">star</i>
                        <i class="material-icons star">star</i>
                        <i class="material-icons star">star</i>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php
    include_once 'includes/footer.php';
    ?>
</body>

</html>