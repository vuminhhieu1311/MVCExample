<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="resources/assets/images/logo/apple-touch-icon.html">
    <link rel="shortcut icon" href="resources/assets/images/logo/favicon.png">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="resources/assets/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="resources/assets/vendor/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="resources/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page css -->

    <!-- core css -->
    <link href="resources/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="resources/assets/css/themify-icons.css" rel="stylesheet">
    <link href="resources/assets/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="resources/assets/css/animate.min.css" rel="stylesheet">
    <link href="resources/assets/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="layout bg-gradient-info">
            <div class="container">
                <div class="row full-height align-items-center">
                    <div class="col-md-6 d-none d-md-block">
                        <img class="img-fluid" src="assets/images/logo/logo-white.png" alt="">
                        <div class="m-t-15 m-l-20">
                            <h1 class="font-weight-light font-size-35 text-white">Exploring The World</h1>
                            <p class="text-white width-70 text-opacity m-t-25 font-size-16">Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub face on everything hopped up.</p>
                            <div class="m-t-60">
                                <a href="#" class="text-white text-link m-r-15">Term &amp; Conditions</a>
                                <a href="#" class="text-white text-link">Privacy &amp; Policy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-shadow">
                            <div class="card-body">
                                <div class="p-h-15 p-v-40">
                                    <h2>Login</h2>
                                    <p class="m-b-15 font-size-13">Please enter your user name and password to login</p>
                                    <form method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo(isset($_COOKIE['email']) ? $_COOKIE['email'] : '')?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo(isset($_COOKIE['password']) ? $_COOKIE['password'] : '')?>">
                                        </div>
                                        <div class="form-check">
                                            <input <?php echo (isset($_COOKIE['email'])) ? 'checked' : ''?> class="form-check-input" type="checkbox" value="1" name="remember">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Remember me
                                            </label>
                                        </div>
                                        <button type="submit" name="login" class="btn btn-block btn-lg btn-gradient-success" style="margin-top: 20px;">Login</button>
                                        <p>If you don't have an account, <a href="http://localhost/MVCExample/SignUp">Sign up</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="resources/assets/js/vendor.js"></script>
    <script src="resources/assets/js/app.min.js"></script>
</body>

</html>

