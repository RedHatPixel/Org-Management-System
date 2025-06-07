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

        <title>Dashboard | Calendar</title>
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
            <div class="home-content">
                <div class="main-content">
                    <h2>For you</h2>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores architecto perspiciatis molestiae voluptas porro. Fuga perferendis explicabo, odio dolor quibusdam, error expedita blanditiis nulla inventore corrupti ab, voluptatum laboriosam. Nisi!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed rem, illum consequatur excepturi illo beatae fuga obcaecati autem? Facere accusantium id quod velit, quaerat ex illo quas reiciendis corporis voluptatibus.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta distinctio ab magni odit? Architecto reprehenderit dolores explicabo quas. Alias perspiciatis repellendus excepturi temporibus veniam provident, rerum sit dolores dolor nemo.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis nesciunt vero dicta id inventore dolore explicabo beatae quia eligendi maxime nisi, nobis laborum eius pariatur voluptates est aliquam autem. Hic?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus facere iste nemo modi tenetur, repellat sit quam eligendi ex accusantium veritatis eius laborum fugit impedit quaerat eos non sequi quia!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores architecto perspiciatis molestiae voluptas porro. Fuga perferendis explicabo, odio dolor quibusdam, error expedita blanditiis nulla inventore corrupti ab, voluptatum laboriosam. Nisi!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed rem, illum consequatur excepturi illo beatae fuga obcaecati autem? Facere accusantium id quod velit, quaerat ex illo quas reiciendis corporis voluptatibus.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta distinctio ab magni odit? Architecto reprehenderit dolores explicabo quas. Alias perspiciatis repellendus excepturi temporibus veniam provident, rerum sit dolores dolor nemo.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis nesciunt vero dicta id inventore dolore explicabo beatae quia eligendi maxime nisi, nobis laborum eius pariatur voluptates est aliquam autem. Hic?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus facere iste nemo modi tenetur, repellat sit quam eligendi ex accusantium veritatis eius laborum fugit impedit quaerat eos non sequi quia!
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis nesciunt vero dicta id inventore dolore explicabo beatae quia eligendi maxime nisi, nobis laborum eius pariatur voluptates est aliquam autem. Hic?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus facere iste nemo modi tenetur, repellat sit quam eligendi ex accusantium veritatis eius laborum fugit impedit quaerat eos non sequi quia!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores architecto perspiciatis molestiae voluptas porro. Fuga perferendis explicabo, odio dolor quibusdam, error expedita blanditiis nulla inventore corrupti ab, voluptatum laboriosam. Nisi!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed rem, illum consequatur excepturi illo beatae fuga obcaecati autem? Facere accusantium id quod velit, quaerat ex illo quas reiciendis corporis voluptatibus.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta distinctio ab magni odit? Architecto reprehenderit dolores explicabo quas. Alias perspiciatis repellendus excepturi temporibus veniam provident, rerum sit dolores dolor nemo.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis nesciunt vero dicta id inventore dolore explicabo beatae quia eligendi maxime nisi, nobis laborum eius pariatur voluptates est aliquam autem. Hic?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus facere iste nemo modi tenetur, repellat sit quam eligendi ex accusantium veritatis eius laborum fugit impedit quaerat eos non sequi quia!
                </div>

                <div class="right-content">
                    <h3>Recommended</h3>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores architecto perspiciatis molestiae voluptas porro. Fuga perferendis explicabo, odio dolor quibusdam, error expedita blanditiis nulla inventore corrupti ab, voluptatum laboriosam. Nisi!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed rem, illum consequatur excepturi illo beatae fuga obcaecati autem? Facere accusantium id quod velit, quaerat ex illo quas reiciendis corporis voluptatibus.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta distinctio ab magni odit? Architecto reprehenderit dolores explicabo quas. Alias perspiciatis repellendus excepturi temporibus veniam provident, rerum sit dolores dolor nemo.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis nesciunt vero dicta id inventore dolore explicabo beatae quia eligendi maxime nisi, nobis laborum eius pariatur voluptates est aliquam autem. Hic?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus facere iste nemo modi tenetur, repellat sit quam eligendi ex accusantium veritatis eius laborum fugit impedit quaerat eos non sequi quia!
                </div>
            </div>
        </main>
    </div>



</body>

</html>