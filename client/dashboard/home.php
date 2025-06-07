<?php
include_once '../../backend/middleware/loginAuth.php';
autoLogin($_SERVER['PHP_SELF'], "../../index.php");
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
            <div class="home-content" id="db-home">
                <div class="left-content">
                    <form action="#" id="search-form">
                        <div class="input-field">
                            <label for="search"><i class="material-icons left-icon">search</i></label>
                            <input type="text" id="search" name="search" placeholder="Search" required>
                        </div>
                        <button type="submit" class="side-btn">Search</button>
                    </form>

                    <details class="dropdown">
                        <summary>
                            <i class="material-icons">groups</i>
                            <span>Organizations</span>
                        </summary>
                        <ul class="dropdown-menu">
                            <li><a href="#">LITL</a></li>
                            <li><a href="#">MAGE</a></li>
                        </ul>
                    </details>
                    <details class="dropdown">
                        <summary>
                            <i class="material-icons">event</i>
                            <span>Events</span>
                        </summary>
                        <ul class="dropdown-menu">
                            <li><a href="#">Ctrl + Alt game</a></li>
                            <li><a href="#">IWAS PAWIS</a></li>
                            <li><a href="#">go go go cvsuhenyo</a></li>
                            <li><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></li>
                        </ul>
                    </details>

                </div>

                <div class="main-content">
                    <h2>For you</h2>
                    <div class="post-container">
                        <div class="post">
                            <div class="post-header">
                                <img src="../../assets//images/Cavite_State_University_(CvSU).png" alt="org profile" class="post-org-profile">
                                <span class="post-org-title">SAMPLE</span>
                            </div>
                            <div class="post-desc-container">
                                <div class="post-desc">
                                    <pre>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, illum. Reprehenderit esse totam, nemo ea doloribus natus ducimus quasi? Odio reprehenderit voluptate magni veniam ducimus perspiciatis modi, illum quia. Expedita.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, illum. Reprehenderit esse totam, nemo ea doloribus natus ducimus quasi? Odio reprehenderit voluptate magni veniam ducimus perspiciatis modi, illum quia. Expedita.
                                    </pre>
                                </div>
                                <span>read more...</span>
                            </div>
                            <div class="post-content">
                                <img src="../../assets//images/hero.jpg" alt="post">
                                <img src="../../assets//images/hero.jpg" alt="post">
                                <img src="../../assets//images/hero.jpg" alt="post">
                                <img src="../../assets//images/hero.jpg" alt="post">
                            </div>
                            <div class="post-user-selection">
                                <button class="post-like">Like</button>
                                <button class="post-comment">Comment</button>
                            </div>
                        </div>
                        <div class="post">
                            <div class="post-header">
                                <img src="../../assets//images/Cavite_State_University_(CvSU).png" alt="org profile" class="post-org-profile">
                                <span class="post-org-title">SAMPLE</span>
                            </div>
                            <div class="post-desc-container">
                                <div class="post-desc">
                                    <pre>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, illum. Reprehenderit esse totam, nemo ea doloribus natus ducimus quasi? Odio reprehenderit voluptate magni veniam ducimus perspiciatis modi, illum quia. Expedita.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, illum. Reprehenderit esse totam, nemo ea doloribus natus ducimus quasi? Odio reprehenderit voluptate magni veniam ducimus perspiciatis modi, illum quia. Expedita.
                                    </pre>
                                </div>
                                <span>read more...</span>
                            </div>
                            <div class="post-content">
                                <img src="../../assets//images/hero.jpg" alt="post">
                                <img src="../../assets//images/hero.jpg" alt="post">
                                <img src="../../assets//images/hero.jpg" alt="post">
                                <img src="../../assets//images/hero.jpg" alt="post">
                            </div>
                            <div class="post-user-selection">
                                <button class="post-like">Like</button>
                                <button class="post-comment">Comment</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right-content">
                    <h3>Active</h3>
                    <ul class="member-accounts">
                        <li>Example, Sample A.</li>
                        <li>Example, Sample A.</li>
                        <li>Example, Sample A.</li>
                        <li>Example, Sample A.</li>
                    </ul>
                    <h3>Inactive</h3>
                    <ul class="member-accounts">
                        <li>Example, Sample A.</li>
                        <li>Example, Sample A.</li>
                        <li>Example, Sample A.</li>
                        <li>Example, Sample A.</li>
                    </ul>
                </div>
            </div>
        </main>
    </div>



</body>

</html>