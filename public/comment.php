<?php
    require("../includes/config.php"); 

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        redirect("index.php");
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (!empty($_POST["comment"])) {
            // upload comment
            query("INSERT INTO comments (comment, user, poster) VALUES (?, ?, ?) ", $_POST["comment"], $_POST["user"], $_SESSION["username"]);

            redirect('user.php?q='.$_POST["user"]);
		} 
        else {
			redirect("index.php");
		}
	}
?>