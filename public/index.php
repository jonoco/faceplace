<?php
    require("../includes/config.php"); 

    // query database for comments
    $users = query("SELECT username FROM users"); 
    $comments = query("SELECT poster,comment FROM comments WHERE user = ?", $_SESSION["username"]);
    
    render("profile.php", ["title" => "Profile", "comments" => $comments, "users" => $users, "user" => $_SESSION["username"]]);
?>
