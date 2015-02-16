<?php

	// configuration
    require("../includes/config.php"); 

    // if user reached page via GET
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("sell_form.php", ["title" => "Sell shares"]);
    }

    // else if user reached page via POST
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		if (!empty($_POST["symbol"]) and !empty($_POST["amount"]))
		{
			// check database for shares of stock being sold
    		$rows = query("SELECT shares FROM portfolio WHERE id = ? AND symbol = ?", $_SESSION["id"], $_POST["symbol"]);

    		$shares = $rows[0]["shares"];

    		// check if enough shares are available to sell amount
    		if ($shares >= $_POST["amount"])
    		{
    			if (preg_match("/^\d+$/", $_POST["amount"]))
    			{
	    			// get value of shares sold
	    			$stock = lookup($_POST["symbol"]);

	    			$value = $stock["price"] * $_POST["amount"];

	    			// reduce portfolio by amount of shares
					query("UPDATE portfolio SET shares = shares - ? WHERE id = ? AND symbol = ?", $_POST["amount"], $_SESSION["id"], $_POST["symbol"]);    			
	    			
	    			// increase cash by value
					query("UPDATE users SET cash = cash + ? WHERE id = ?", $value, $_SESSION["id"]);

					// insert transaction into history
					query("INSERT INTO history (id, symbol, shares, transaction, price, time) VALUES (?, ?, ?, ?, ?, NOW())", $_SESSION["id"], $_POST["symbol"], $_POST["amount"], "Sell", $stock["price"]);

	    			// render sell_form again with recent sell information
					render("sell_form.php", ["title" => "Sell shares", "message" => "Sold " . $_POST["amount"] . " shares of " . $_POST["symbol"]]);
    			}
    			else
    			{
    				render("apology.php", ["message" => "You cannot trade " . $_POST["amount"] . " shares"]);
    			}
    		}
    		else
    		{
    			// user does not own enough shares
    			render("apology.php", ["message" => "You do not own enough shares to sell " . $_POST["amount"]]);
    		}
		}
		else
		{
			render("apology.php", ["message" => "Please enter a value for symbol and shares to be sold"]);
		}
	}
?>