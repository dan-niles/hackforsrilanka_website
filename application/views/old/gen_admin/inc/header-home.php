<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Astron Limited</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link type="text/css" href="<?php echo base_url(); ?>css/le-frog/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
<link type="text/css" href="<?php echo base_url(); ?>css/style.css" rel="stylesheet"  media="screen" />
<link type="text/css" href="<?php echo base_url(); ?>css/superfish.css" rel="stylesheet" media="screen">

<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/validate.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/autoNumeric.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui-1.8.16.custom.min.js"></script>
		
<script type="text/javascript" src="<?php echo base_url(); ?>js/hoverIntent.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/superfish.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easy-confirm-dialog.js"></script>
<script type="text/javascript">

// initialise plugins
jQuery(function(){
	jQuery('ul.sf-menu').superfish();
});

</script>
</head>
<body>
<div id="container">
<div id="header-wrapper">
  <div id="header">
      <?php
	$this->load->view('gen_admin/inc/gen_admin_menu_home');
	date_default_timezone_set('Asia/Colombo');
      ?>
  </div>
</div>