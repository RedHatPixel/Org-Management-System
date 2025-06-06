<header class="navbar-container <?php echo isset($AsBlack) && $AsBlack === true ? 'startup-black' : 'startup-white'; ?>">
    <a href="./index.php" class="logo">
        <img src="" alt="LOGO">
    </a>
    <nav class="navbar">
        <i class="material-icons menu-closer">
            close
        </i>
        <ul class="nav-links">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./index.php#about">About</a></li>
            <li><a href="./index.php#services">Services</a></li>
            <li><a href="./orgs.php">Orgs</a></li>
        </ul>
        <div class="guest-selection <?php if (isset($_SESSION['user'])) echo "hidden" ?>">
            <a href="./login.php" class="login-btn">
                <i class="material-icons">login</i>
                Log in
            </a>
        </div>
    </nav>

    <div class="side-nav">
        <span class="user-selection <?php if (!isset($_SESSION['user'])) echo "hidden" ?>">
            <a href="./client/dashboard/home.php">
                <i class="material-icons">person</i>
            </a>
            <a href="./backend/middleware/logout.php">
                <i class="material-icons">logout</i>
            </a>
        </span>

        <i class="material-icons menu-opener">
            view_headline
        </i>
    </div>


    <script src="./assets/js/navbar.js"></script>
</header>