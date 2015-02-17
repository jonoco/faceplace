<div class="container">
    <?php
        if (isset($message)) {
            print ("<div style=text-align: center>");
                print ("<p>" . $message . "</p>");
            print("</div>");
        }
    ?>
    <form action="change_avatar.php" class="form-vertical" method="post">
        <fieldset>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="form-group">
                        <label for="url" >URL for avatar</label>
                        <input autofocus class="form-control" name="image" id="url" placeholder="e.g., http://i.imgur.com/..." type="url"/>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Change avatar</button>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
</div>