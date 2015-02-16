<?php

    // configuration
    require("../includes/config.php"); 

    // query database for history
    $rows = query("SELECT symbol, shares, transaction, price, time  FROM history WHERE id = ?", $_SESSION["id"]);
    if ($rows !== false)
    {
	    $positions = [];
		foreach ($rows as $row)
		{
			$positions[] = [
				"symbol" => $row["symbol"],
				"shares" => $row["shares"],
				"transaction" => $row["transaction"],
				"price" => $row["price"],
				"time" => $row["time"]
			];
		}

		// render history_display
		render("history_display.php", ["title" => "History", "positions" => $positions]);
	}
	else
	{
		render("apology.php", ["message" => "Could not find your history"]);
	}	
?>