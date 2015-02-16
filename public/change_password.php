<?php

	// configuration
	require('../includes/config.php');

	// if user reached page via GET
	if ($_SERVER["REQUEST_METHOD"] == "GET")
	{
		// else render form (as by clicking a link or via redirect)
		render("password_form.php", ["title" => "Change Password"]);
	}

	// else if user reached page via POST (by submitting a form via POST)
	else if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if ($_POST["password"] == $_POST["confirmation"])
		{
			// change password
			if (query("UPDATE users SET hash = ? WHERE id = ?", crypt($_POST["password"]), $_SESSION["id"]) !== false)
			{
				render("password_form.php", ["title" => "Change Password", "message" => "Password has been updated"]);
			}
			else
			{
				render("apology.php", ["message" => "Failed to change password"]);
			}
		}
		else
		{
			render("apology.php", ["message" => "Your passwords do not match"]);
		}
	}
?>