<?php

    require("../includes/config.php"); 

    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        redirect("welcome.php");
    }

    else if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // validate submission
        if (empty($_POST["username"])) {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"])) {
            apologize("You must provide your password.");
        }

        $rows = query("SELECT * FROM users WHERE username = ?", $_POST["username"]);

        // if we found user, check password
        if (count($rows) == 1) {
            // first (and only) row
            $row = $rows[0];

            // compare hash of user's input against hash that's in database
            if (crypt($_POST["password"], $row["hash"]) == $row["hash"]) {

                $_SESSION["id"] = $row["id"];
                $_SESSION["username"] = $_POST["username"];

                redirect("index.php");
            }
        }
        apologize("Invalid username and/or password.");
    }

?>
