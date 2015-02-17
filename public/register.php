<?php

	// configuration
	require('../includes/config.php');

	// if user reached page via GET
	if ($_SERVER["REQUEST_METHOD"] == "GET")
	{
		// else render form (as by clicking a link or via redirect)
		render("register_form.php", ["title" => "Register"]);
	}

	// else if user reached page via POST (by submitting a form via POST)
	else if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// TODO
		if (!empty($_POST["username"]) and !empty($_POST["password"]))

			if ($_POST["password"] == $_POST["confirmation"])
			{
				$salt = "$2y$14$";
				for ($i = 0; $i < 22; $i++) {
					$salt .= substr("./ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789", mt_rand(0, 63), 1);
				}
				if (query("INSERT INTO users (username, hash) VALUES (?, ?)", $_POST["username"], crypt($_POST["password"], $salt)) !== false)
				{
					$rows = query("SELECT LAST_INSERT_ID() AS id");
					$id = $rows[0]["id"];
					$_SESSION["id"] = $id;
					$_SESSION["username"] = $_POST["username"];
					redirect("index.php");
				}
				else
				{
					render("apology.php", ["message" => "This username is already in use"]);
				}	
			}
			else
			{
				render("apology.php", ["message" => "Your passwords do not match"]);
			}
		else
		{
			render("apology.php", ["message" => "Please enter a username and password"]);
		}
	}
?>