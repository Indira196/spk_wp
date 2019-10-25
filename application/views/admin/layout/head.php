<?php
$this->admin_login->cek_login();

// Load konfigurasi
$site = $this->mConfig->list_config();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link href="<?php echo base_url('assets/upload/image/'.$site['icon']) ?>" rel="shortcut icon">
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
    <!-- summernote CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/summernote.css">
    <!-- modals CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/modals.css">
    <!-- tabs CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/tabs.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/normalize.css">
    <!-- buttons CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/buttons.css">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/c3.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url();?>assets/admin/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- DATETIMEPICKER -->
    <link href="<?php echo base_url() ?>assets/admin/assets/datepicker-bootstrap/css/bootstrap-datepicker.css" rel="stylesheet">
</head>