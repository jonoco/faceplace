<div class="container">
    <form action="change_profile.php" method="post">
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
                <input autofocus class="form-control" name="profile" placeholder="Tell us about yourself..." type="text"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Confirm Changes</button>
            </div>
        </fieldset>
    </form>
</div>