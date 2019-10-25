<?php 
    $site = $this->mConfig->list_config();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?php echo $title;?></title>

    <!-- Favicon -->
    <link href="<?php echo base_url('assets/upload/image/'.$site['icon']) ?>" rel="shortcut icon">

    <!-- Core Stylesheet -->
    <link href="<?php echo base_url();?>assets/front/style.css" rel="stylesheet" type="text/css">
    <!-- modals CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/modals.css">
        <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/responsive.css">
    

</head>