<?php
	require('../includes/config.php');

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		render("register_form.php", ["title" => "Register"]);
	}

	else if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if (empty($_POST["username"]) or empty($_POST["password"])) {
			render("apology.php", ["message" => "Please enter a username and password"]);
		}

		if ($_POST["password"] !== $_POST["confirmation"]) {
			render("apology.php", ["message" => "Your passwords do not match"]);
		}
		
		// generate salt for password hash
		$salt = "$2y$14$";
		for ($i = 0; $i < 22; $i++) {
			$salt .= substr("./ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789", mt_rand(0, 63), 1);
		}

		if (query("INSERT INTO users (username, hash) VALUES (?, ?)", $_POST["username"], crypt($_POST["password"], $salt)) == false) {
			render("apology.php", ["message" => "This username is already in use"]);
		}

		$rows = query("SELECT LAST_INSERT_ID() AS id");
		$id = $rows[0]["id"];
		$_SESSION["id"] = $id;
		$_SESSION["username"] = $_POST["username"];
		redirect("index.php");	
	}
?>