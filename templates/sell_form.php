<form action="sell.php" method="post">
    <fieldset>
    	<?php
    	if (isset($message))
    	{
    	print ("<div style=text-align: center>");
			print ("<p>" . $message . "</p>");
		print("</div>");
		}
		?>

        <div class="form-group">
            <input autofocus class="form-control" name="symbol" placeholder="Symbol" type="text"/>
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="amount" placeholder="Amount of shares" type="text"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Sell</button>
        </div>
    </fieldset>
</form>
