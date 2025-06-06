<?php
include '../../backend/userDb.php';
$hasPicture = null;
if (isset($_SESSION['user'])) {
    $response = getUserAccount($_SESSION['user']);
    if ($response['status'] === 'success') {
        $user = $response['data'];
        $profilePicture = $user['profile_picture'];
        $hasPicture = !empty($profile_picture);
    }
}
?>

<header class="topnav">
    <div class="topnav-title">
        <div class="sidebar-toggler">
            <i class="material-icons toggle-btn">view_headline</i>
        </div>
        <a href="../../index.php">
            <img src="" alt="LOGO">
        </a>
    </div>

    <div class="topnav-profile">
        <div class="notification">
            <i class="material-icons">notifications</i>
        </div>
        <div class="profile-picture">
            <?php if ($hasPicture): ?>
                <img src="<?= htmlspecialchars($profile_picture) ?>" alt="Profile" />
            <?php else: ?>
                <i class="material-icons">account_circle</i>
            <?php endif; ?>
        </div>
    </div>
</header>