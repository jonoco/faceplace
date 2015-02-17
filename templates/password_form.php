<div class="container"> 
    <form action="change_password.php" method="post">
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
                <input autofocus class="form-control" name="password" placeholder="New Password" type="password"/>
            </div>
            <div class="form-group">
                <input autofocus class="form-control" name="confirmation" placeholder="Retype Password" type="password"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default">Confirm</button>
            </div>
        </fieldset>
    </form>
</div>