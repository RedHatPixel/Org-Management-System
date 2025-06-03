<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>CVSU Organization Network</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
</head>

<body>
    <?php
    include_once 'includes/navbar.php';
    ?>
    <div class="hero">
        <div class="hero-content">
            <h2>ORGANIZATION NETWORK</h2>
            <h1>Cavite State University</h1>
            <h3>TRECE MARTIRES CITY CAMPUS</h3>
            <h4>Truth • Excellence • Service</h4>
        </div>
        <img class="hero-img" src="./assets/images/hero.jpg">
    </div>

    <div class="about" id="about">
        <div class="about-content">
            <h2>CvSU Community</h2>
            <p>
                <strong>UniVerse</strong>
                is a centralized platform built specifically for college and university students to connect, collaborate, and manage their organization activities—all in one place.
            </p>
            <p>Whether you're part of a student organization, a campus club, or an academic group.</p>
            <p>
                Designed with students in mind, our platform brings the best of modern group communication (like Discord) into a structured, academic-friendly environment that supports productivity, transparency, and engagement on campus.
            </p>
        </div>
        <div class="about-orgs">
            <div class="org-card">
                <div class="org-header">
                    <i class="material-icons org-img">public</i>
                    <span class="org-name">SAMPLE</span>
                </div>
                <p class="org-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <i class="material-icons org-help">help</i>
            </div>
            <div class="org-card">
                <div class="org-header">
                    <i class="material-icons org-img">public</i>
                    <span class="org-name">SAMPLE</span>
                </div>
                <p class="org-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <i class="material-icons org-help">help</i>
            </div>
            <div class="org-card">
                <div class="org-header">
                    <i class="material-icons org-img">public</i>
                    <span class="org-name">SAMPLE</span>
                </div>
                <p class="org-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <i class="material-icons org-help">help</i>
            </div>
        </div>
    </div>

    <div class="headline" id="services">
        <h2>We Offer</h2>
        <div class="slide-container">
            <div class="offers-content slide">
                <div class="offer-card">
                    <i class="material-icons offer-img">festival</i>
                    <h4>Events</h4>
                </div>
                <div class="offer-card">
                    <i class="material-icons offer-img">dashboard</i>
                    <h4>Dashboard</h4>
                </div>
                <div class="offer-card">
                    <i class="material-icons offer-img">signpost</i>
                    <h4>Posting</h4>
                </div>
                <div class="offer-card">
                    <i class="material-icons offer-img">chat</i>
                    <h4>Group Chat</h4>
                </div>
                <div class="offer-card">
                    <i class="material-icons offer-img">analytics</i>
                    <h4>Analytics</h4>
                </div>
                <div class="offer-card">
                    <i class="material-icons offer-img">people</i>
                    <h4>Management</h4>
                </div>
                <div class="offer-card">
                    <i class="material-icons offer-img">assignment</i>
                    <h4>Tasking</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="info">
        <h2>Be Immersed and share your ideas</h2>
        <div class="info-section">
            <div class="info-img">
                <img src="./assets/Cavite_State_University_(CvSU).png" alt="student dashboard">
            </div>
            <div class="info-content">
                <h3>Complete Students Interactions and Participation</h3>
                <p>Users is now always notified by every post, events and announcement from the joined grouped.</p>
                <p>What’s more you ask? Well each of you have the ability to comment, react, vote and report. Just like using discord or facebook but from your community. No distraction and faster approach.</p>
            </div>
        </div>
    </div>

    <?php
    include_once 'includes/footer.php';
    ?>
</body>

</html>