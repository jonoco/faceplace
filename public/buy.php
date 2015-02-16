<?php

	// configuration
    require("../includes/config.php"); 

    // if user reached page via GET
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("buy_form.php", ["title" => "Buy shares"]);
    }

    // else if user reached page via POST
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		if (!empty($_POST["symbol"]) and preg_match("/^\d+$/", $_POST["amount"]))
		{
            // get value of shares to buy
            $stock = lookup($_POST["symbol"]);
            $value = $stock["price"] * $_POST["amount"];

            // convert symbol to uppercase for storage
            $symbol_upper = strtoupper($_POST["symbol"]);

            // check if user has sufficient funds
            $rows = query("SELECT cash FROM users WHERE id = ?", $_SESSION["id"]);
            if ($value <= $rows[0]["cash"])
            {
                // reduce user cash by value
                query("UPDATE users SET cash = cash - ? WHERE id = ?", $value, $_SESSION["id"]);

                // allocate shares to portfolio
                query("INSERT INTO portfolio (id, symbol, shares) VALUES(?, ?, ?) ON DUPLICATE KEY UPDATE shares = shares + VALUES(shares)", $_SESSION["id"], $symbol_upper,$_POST["amount"]);

                // insert transaction into history
                query("INSERT INTO history (id, symbol, shares, transaction, price, time) VALUES (?, ?, ?, ?, ?, NOW())", $_SESSION["id"], $_POST["symbol"], $_POST["amount"], "Buy", $stock["price"]);
                
                // render buy form with message
                render("buy_form.php", ["title" => "Buy shares", "message" => "Bought " . $_POST["amount"] . " shares of " . $_POST["symbol"]]);
            }
            else
            {
                // not enough cash
                render("apology.php", ["message" => "You do not have enough cash for this transaction"]);
            }
		}
		else
		{
			render("apology.php", ["message" => "Please enter a symbol and valid number of shares to be bought"]);
		}
	}
?>