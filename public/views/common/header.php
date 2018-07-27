<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo isset($_page_title) ? $_page_title : 'Công ty cổ phần thanh toán điện tử VNPT'; ?></title>
		<link href="<?php echo base_url('public/theme/images/logo.png') ?>" rel="Shortcut Icon">
		<?php echo isset($_styles) ? $_styles : '';?>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>
    <body class="<?php echo isset($_body_classes) ? $_body_classes : '';?>">


        <!--start page wrapper-->
        <div id="wrapper">

            <?php $this->load->view("common/header-bar");?>
