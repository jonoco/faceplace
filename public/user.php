<?php
    require("../includes/config.php"); 

    // query database for comments
    $users = query("SELECT username FROM users"); 
    $comments = query("SELECT poster,comment FROM comments WHERE user = ?", $_GET['q']);
    if ($comments !== false) {
    	render("profile.php", ["title" => "Profile", "comments" => $comments, "users" => $users, "user" => $_GET['q']]);
    }
    else {
       render("apology.php", ["message" => "Could not find your profile (- _ -;)"]);
    }
    
?>
