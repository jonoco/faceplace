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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/scripts.js"></script>

</head>
<body>
    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <ul class="nav nav-pills">
                <a class="navbar-brand" href="index.php"><img src="/img/faceplace-logo.png" alt="Faceplace"></a>
                <?php if (isset($_SESSION['id'])): ?>
                    <li class="dropdown pull-right">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Settings <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/change_profile.php">Edit Profile</a></li>
                            <li><a href="/change_avatar.php">Change Avatar</a></li>
                            <li><a href="/change_password.php">Change Password</a></li>
                            <li class="divider"></li>
                            <li><a href="/logout.php">Log Out</a></li>
                        </ul>
                    </li>
                    <li class="pull-right"><a href="/index.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                <?php endif ?>
            </ul>
        </div>
    </nav>