<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <?php
    require_once "./mvc/views/components/CssLink.php";
    ?>
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
                                            <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo (isset($_COOKIE['email']) ? $_COOKIE['email'] : '') ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo (isset($_COOKIE['password']) ? $_COOKIE['password'] : '') ?>">
                                        </div>
                                        <div class="form-check">
                                            <input <?php echo (isset($_COOKIE['email'])) ? 'checked' : '' ?> class="form-check-input" type="checkbox" value="1" name="remember">
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
</body>

</html>