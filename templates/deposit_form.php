<form action="deposit.php" method="post">
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
            <input autofocus class="form-control" name="cash" placeholder="Amount to deposit" type="text"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Deposit</button>
        </div>
    </fieldset>
</form>