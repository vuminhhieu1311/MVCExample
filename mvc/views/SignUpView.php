<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Applicator - Admin Dashboard Template</title>

    <?php
    require_once "mvc/views/components/CssLink.php";
    ?>
</head>

<body>
    <div class="app">
        <div class="layout bg-white full-height">
            <div class="row no-gutters">
                <div class="col-md-6 d-none d-md-block align-self-end" style="background-image: url('resources/assets/images/others/img-32.jpg'); height: 700px">
                    <div class="row full-height">
                        <div class="col-md-10 align-self-center">
                            <div class="m-b-50 m-l-70">
                                <img class="img-fluid" src="resources/assets/images/logo/logo-white.png" alt="">
                                <div class="m-t-15 m-l-20">
                                    <h1 class="font-weight-light font-size-35 text-white">Exploring The World</h1>
                                    <p class="text-white width-60 text-opacity m-t-25 font-size-16">Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub face on everything hopped up.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="row">
                        <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                            <div class="p-v-25">
                                <h1 class="m-b-30">Create Your account</h1>
                                <form method="post" action="">
                                    <div class="form-group">
                                        <label class="control-label">Email Address</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                        <p style="color: #CD113B" id="email_error"></p>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                        <p style="color: #CD113B" id="password_error"></p>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Password">
                                        <p style="color: #CD113B" id="confirm_error"></p>
                                    </div>
                                    <div class="form-group m-t-20">
                                        <button type="submit" name="signup" class="btn btn-gradient-success btn-block btn-lg">Create New Account</button>
                                    </div>
                                </form>
                                <p>Already have an account? <a href="/MVCExample/Login">Sign In</a></p>
                                <hr>
                                <small>By signing up you agree to out <a href="#">Terms &amp; Policy</a></small>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#email').blur(function() {
                var email = $(this).val();

                $.post('/MVCExample/FormValidation/check_email', {
                    email: email
                }, function(data) {
                    $("#email_error").html(data);
                });
            });

            $('#password').blur(function() {
                var password = $(this).val();
                $.post('/MVCExample/FormValidation/check_password', {
                    password: password
                }, function(data) {
                    $("#password_error").html(data);
                });

            });

            $('#confirm_password').blur(function() {
                var password = $('#password').val();
                var cPassword = $(this).val();
                $.post('/MVCExample/FormValidation/check_confirm_password', {
                    password: password,
                    cPassword: cPassword
                }, function(data) {
                    $("#confirm_error").html(data);
                });

            });
        });
    </script>
</body>

</html>