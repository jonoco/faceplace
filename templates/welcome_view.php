<!DOCTYPE html>

<html>

<head>

    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="/css/styles.css" rel="stylesheet"/>

    <title>Faceplace</title>
   
    <script src="/js/jquery-1.11.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/scripts.js"></script>
    <style> 
        body {
            
            background: #222222 url('/img/login_bg.jpg') no-repeat; 
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
           <h1>FacePlace</h1>
           <p>The world's first social network for faces</p>
        </div>
    </div>
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
                        <form action="/login.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input autofocus class="form-control" name="username" placeholder="Username" type="text"/>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password" placeholder="Password" type="password"/>

                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Log In</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>    
                                </div>
                            </fieldset>
                        </form>
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
                                    <button type="submit" class="btn btn-primary">Register</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row bottom">
            <div class="col-md-12">
                <p>&#169; Joshua Cox</p>
            </div>
        </div>
    </div>

</body>
</html>