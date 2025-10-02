<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<div class="header">
    <h1>GNH Support Team Dashboard</h1>
    <ul class="nav">
        <li class="nav-button <?php if ($currentPage == 'index.php') echo 'active'; ?>">
            <a href="index.php">Home</a>
        </li>
        <li class="nav-button <?php if ($currentPage == 'profile.php') echo 'active'; ?>">
            <a href="profile.php">Profile</a>
        </li>
        <li class="nav-button <?php if ($currentPage == 'dash.php') echo 'active'; ?>">
            <a href="dash.php">Dashboard</a>
        </li>
        <li class="nav-button <?php if ($currentPage == 'logout.php') echo 'active'; ?>">
            <a href="logout.php">Logout</a>
        </li>
    </ul>
</div>