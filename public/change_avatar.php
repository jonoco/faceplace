<?php

	require('../includes/config.php');

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		
		render("profile_form.php", ["title" => "Change Avatar"]);
	}
	else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (query("UPDATE users SET image = ? WHERE id = ?", $_POST["image"], $_SESSION["id"]) !== false) {
			render("profile_form.php", ["title" => "Change Avatar", "message" => "Avatar has been updated"]);
		}
		else {
			render("apology.php", ["message" => "Failed to change password"]);
		}
	}
?>