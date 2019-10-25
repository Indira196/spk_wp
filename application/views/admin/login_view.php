<?php
// Load konfigurasi


$site = $this->mConfig->list_config();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Alazea-SPK</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/front/img/core-img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/normalize.css">
    <!-- form CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/form.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/admin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
 

            <!-- login Start-->
            <div class="login-form-area mg-t-30 mg-b-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <form id="adminpro-form" class="adminpro-form" action="<?php echo base_url('admin/login') ?>" method="post">
                            <div class="col-lg-4">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="logo">
                                                <a href="#"><img src="<?php echo base_url();?>assets/front/img/core-img/leaf.png" alt="" />
                                                 <a href="#"><img src="<?php echo base_url();?>assets/front/img/core-img/logo.png" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>Login Form</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Username</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="username" />
                                                <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Password</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="password" name="password" />
                                                <i class="fa fa-lock login-user"></i>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="forgot-password">
                                                        <a href="#">Forgot password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="login-keep-me">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="remember" checked><i></i>Keep me logged in
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">

                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-button-pro">
                                                <button type="submit" class="login-button login-button-rg">Register</button>
                                                <button type="submit" class="login-button login-button-lg">Log in</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
            </div>
            <!-- login End-->

    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url();?>assets/admin/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/admin/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/admin/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/admin/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/admin/js/jquery.scrollUp.min.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/admin/js/jquery.form.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/form-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/admin/js/main.js"></script>
</body>

</html>