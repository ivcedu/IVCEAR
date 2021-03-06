<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <meta http-equiv="Cache-Control" content="no-cache"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>IVC EAR System</title>
        <!-- homer-1.8 Vendor css -->
        <link rel="stylesheet" href="../homer-1.8/vendor/fontawesome/css/font-awesome.css"/>
        <link rel="stylesheet" href="../homer-1.8/vendor/metisMenu/dist/metisMenu.css"/>
        <link rel="stylesheet" href="../homer-1.8/vendor/animate.css/animate.css"/>
        <link rel="stylesheet" href="../homer-1.8/vendor/bootstrap/dist/css/bootstrap.css"/>
        <!-- homer-1.8 App css -->
        <link rel="stylesheet" href="../homer-1.8/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css"/>
        <link rel="stylesheet" href="../homer-1.8/fonts/pe-icon-7-stroke/css/helper.css"/>
        <link rel="stylesheet" href="../homer-1.8/styles/style.css"/>
        <link rel="stylesheet" href="../homer-1.8/styles/static_custom.css">
        <!-- include css -->
        <link rel="stylesheet" href="../include/sweetalert/css/sweetalert.css"/>
        <!-- application css -->
        <link rel="stylesheet" href="css/login.css"/>
    </head>
    <body>
        <div class="login-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center m-b-md">
                        <h3 class="font-bold">IVC EAR System</h3>
                    </div>
                    <div class="hpanel">
                        <div class="panel-body">
                            <form action="#" id="loginForm">
                                <div class="form-group">
                                    <label class="control-label">Username</label>
                                    <input type="text" class="form-control" id="username">
                                    <span class="help-block small">Your network username or email address</span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Password</label>
                                    <input type="password" class="form-control" id="password">
                                    <span class="help-block small">Your network password</span>
                                </div>
                                <button class="btn btn-success btn-block" id="btn_login">Login</button>
                                <div class="text-center" id="login_error">
                                    <h4 class="font-bold" id="error_msg"></h4>
                                </div>    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- homer-1.5 Vendor javascript -->
        <script src="../homer-1.8/vendor/jquery/dist/jquery.min.js"></script>
        <script src="../homer-1.8/vendor/jquery-ui/jquery-ui.min.js"></script>
        <script src="../homer-1.8/vendor/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="../homer-1.8/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../homer-1.8/vendor/metisMenu/dist/metisMenu.min.js"></script>
        <script src="../homer-1.8/vendor/iCheck/icheck.min.js"></script>
        <script src="../homer-1.8/vendor/sparkline/index.js"></script>
        <!-- include javascript -->
        <script src="../include/bowser/bowser.min.js"></script>
        <script src="../include/sweetalert/js/sweetalert.min.js"></script>
        <!-- application javascript -->
        <script src="js/Login.js"></script>
        <script src="js/session_data.js"></script>
        <script src="js/db_access.js"></script>
    </body>
</html>
