<?php
	require('../includes/functions.php');

	if (isset($_POST["username"])) {
		$username = htmlspecialchars($_POST["username"]);

		$rows = query("SELECT id FROM users WHERE username = ?", $username); 
		$length = count($rows);

		if ($length > 0) {
			echo $length;
		}
		else {
			echo $length;
		}	
	}
?>