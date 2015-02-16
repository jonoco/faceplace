<div class="container">
    
    <a href="#loginModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Log in</a>
    <a href="#registerModal" role="button" class="btn btn-large btn-info" data-toggle="modal">Sign up</a>
 
    <!-- Modal HTML -->
    <div id="loginModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Log in</h4>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input autofocus class="form-control" name="username" placeholder="Username" type="text"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="password" placeholder="Password" type="password"/>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Log In</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="registerModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Sign up</h4>
                </div>
                <div class="modal-body">
                    <form action="register.php" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input autofocus class="form-control" name="username" placeholder="Username" type="text"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="password" placeholder="Password" type="password"/>
                            </div>
                            <div class ="form-group">
                                <input class="form-control" name="confirmation" placeholder="Retype Password" type="password"/>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Register</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
