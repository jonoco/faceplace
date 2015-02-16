<?php

	// configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("quote_form.php", ["title" => "Enter quote"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		if (!empty($_POST["symbol"]))
		{
			// returns ["symbol", "name", "price"]
			$s = lookup($_POST["symbol"]);

			if (!$s["price"] === false)
			{
				render("quote_display.php", ["price" => $s["price"], "name" => $s["name"], "symbol" => $s["symbol"]]);
			}
			else
			{
				render("apology.php", ["message" => "Symbol provided is invalid"]);
			}
		}
		else
		{
			render("apology.php", ["message" => "Please enter a value for symbol"]);
		}
	}
?>