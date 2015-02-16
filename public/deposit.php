<?php

	// configuration
    require("../includes/config.php"); 

    // if user reached page via GET
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("deposit_form.php", ["title" => "Deposit"]);
    }

    // else if user reached page via POST
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (!empty($_POST["cash"]) and is_numeric($_POST["cash"]) and ($_POST["cash"] > 0))
        {
            query("UPDATE users SET cash = cash + ? WHERE id = ?",$_POST["cash"], $_SESSION["id"]);

            render("deposit_form.php", ["title" => "Deposit", "message" => "Deposited $" . number_format($_POST["cash"],2) . " into account"]);
        }
        else
        {
            render("apology.php", ["message" => "Please enter a positive numeric amount"]);
        }
    }
?>