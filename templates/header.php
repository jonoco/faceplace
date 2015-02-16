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
    <div class="container">
        <div class="jumbotron">
           <h1>FacePlace</h1>
           <p>The world's first social network for faces</p>
        </div>
        <div class="nav">
            <ul>
                <li><a href="/index.php">Profile</a></li>
                <li><a href="/change_password.php">Change Password</a></li>
                <li><a href="/logout.php">Log Out</a></li>
            </ul>
        </div>
    </div>
