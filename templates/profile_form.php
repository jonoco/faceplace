<div class="container">
    <div class="change-profile">
        <div class="message">
            <?php
                if (isset($message)) {
                print ("<div style=text-align: center>");
                    print ("<p>" . $message . "</p>");
                print("</div>");
                }
            ?>
        </div>
        <div class='aboutme-form'>
            <form action="change_profile.php" class="form-inline" method="post">
                <fieldset>
                    <div class="form-group">
                        <label for="aboutme-input">About me</label>
                        <input autofocus class="form-control" name="profile" id="aboutme-input" placeholder="Tell us about yourself..." type="text"/>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Change profile</button>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="avatar-form">
            <form action="change_avatar.php" class="form-inline" method="post">
                <fieldset>
                    <div class="form-group">
                        <label for="avatar-input">URL for avatar</label>
                        <input autofocus class="form-control" name="image" id="avatar-input" placeholder="e.g., http://i.imgur.com/..." type="url"/>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Change avatar</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>