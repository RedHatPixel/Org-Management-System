<?php
include_once '../../backend/config/helpers.php';
include_once '../../backend/middleware/loginAuth.php';
autoLogin($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <title>Dashboard | Home</title>
        <link rel="stylesheet" href="../../assets/css/index.css">
        <link rel="stylesheet" href="../../assets/css/sidebar.css">
        <link rel="stylesheet" href="../../assets/css/topnav.css">
    </head>

</head>

<body>

    <div class="dashboard-container">
        <div class="dashboard-header">
            <?php
            include_once '../includes/topnav.php';
            ?>
        </div>

        <div class="dashboard-sidebar">
            <?php
            include_once '../includes/sidebar.php';
            ?>
        </div>

        <main class="dashboard-content">
        </main>
    </div>



</body>

</html>