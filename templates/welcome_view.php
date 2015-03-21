<style> body { background: #222222 url('/img/login_bg.jpg') no-repeat; background-size: cover; } </style>

<div class="container">
    <div class="front-card">
        <div class="row">
            <div class="col-sm-8">
                <div class="front-welcome">
                    <h1>Welcome to Faceplace.</h1>
                    <p>Connect with other faces. See other faces. Look at other faces. 
                    Do things with other faces. Verb with other faces. Have you ever been looking at another 
                    face and thought, "I could be friends with that face." Make that thought a reality through 
                    a series of clicks and inputs and join Faceplace right now.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="signin">
                    <form action="/login.php" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input autofocus class="form-control" name="username" placeholder="Username" type="text"/>
                            </div>
                            <div class="form-group">
                                <table>
                                    <tr>
                                        <td><input class="form-control" name="password" placeholder="Password" type="password"/></td>
                                        <td><button type="submit" class="btn btn-primary">Log In</button> </td>
                                    </tr>
                                </table>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="signup">
                    <h4 class="pull-left">Get access to all the faces you can handle</h4>
                    <form action="register.php" class="form" method="post">
                        <div class="form-group has-feedback">
                            <span id="user-result"></span>
                            <input autofocus class="form-control" id="reg-username" name="username" placeholder="Username" autocomplete="off" minlength="3" maxlength="25" type="text"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="password" placeholder="Password" type="password"/>
                        </div>
                        <div class ="form-group">
                            <input class="form-control" name="confirmation" placeholder="Retype Password" type="password"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right">Sign up for Faceplace</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
