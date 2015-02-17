<!DOCTYPE html>

<html>

<head>

    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="/css/styles.css" rel="stylesheet"/>

    <?php if (isset($title)): ?>
        <title>Faceplace: <?= htmlspecialchars($title) ?></title>
    <?php else: ?>
        <title>Faceplace</title>
    <?php endif ?>

    <script src="/js/jquery-1.11.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/scripts.js"></script>

</head>

<body>
    <div class="navbar">
        <div class="navbar-inner">
            <ul class="nav nav-pills">
                <li><a href="/index.php">Profile</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings</a>
                    <ul class="dropdown-menu">
                        <li><a href="/change_profile.php">Edit Profile</a></li>
                        <li><a href="/change_avatar.php">Change Avatar</a></li>
                        <li><a href="/change_password.php">Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="/logout.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>