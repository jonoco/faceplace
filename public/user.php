<?php
    require("../includes/config.php"); 

    // query database for comments
    $profile = query("SELECT image,profile FROM users WHERE username = ?", $_GET['q']);
    $users = query("SELECT username FROM users"); 
    $comments = query("SELECT users.image, comments.poster, comments.comment, comments.time
                        FROM comments
                        JOIN users 
                        ON comments.poster = users.username
                        WHERE comments.user = ?
                        ORDER BY comments.time DESC", $_GET['q']);
    
    render("profile.php", [
    "title" => "Profile",
    "comments" => $comments,
    "users" => $users,
    "user" => $_GET['q'],
    "profile" => $profile ]);
    
?>