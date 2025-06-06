<div class="footer">
    <div class="footer-content">
        <a href="./index.php" class="logo">
            <img src="" alt="LOGO">
        </a>
        <p>Empowering student communities,</p>
        <p>one connection at a time.</p>
    </div>
    <div class="footer-sign">
        <?php if (!isset($_SESSION['user'])): ?>
            <span>Not part of a community yet?</span>
            <a href="./login.php" class="login">Log in</a>
            <a href="./signup.php" class="signup">Sign up</a>
        <?php else: ?>
            <span>Thanks for being part of the community!</span>
            <a href="./client/dashboard.php" class="dashboard-link">Dashboard</a>
            <a href="./backend/middleware/logout.php" class="logout">Log out</a>
        <?php endif; ?>

    </div>
</div>
</div>