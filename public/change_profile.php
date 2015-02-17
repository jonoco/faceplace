<?php

	require('../includes/config.php');

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		
		render("profile_form.php", ["title" => "Edit Profile"]);
	}
	else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (query("UPDATE users SET profile = ? WHERE id = ?", $_POST["profile"], $_SESSION["id"]) !== false) {
			render("profile_form.php", ["title" => "Edit Profile", "message" => "Profile has been updated"]);
		}
		else {
			render("apology.php", ["message" => "Failed to change profile"]);
		}
	}
?>