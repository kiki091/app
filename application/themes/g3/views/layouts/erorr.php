<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php echo $title;?></title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/4.5.0/css/font-awesome.min.css');?>" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.googleapis.com.css');?>" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/ace.min.css');?>" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url('assets/css/ace-part2.min.css');?>" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/ace-skins.min.css');?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/ace-rtl.min.css');?>" />

		<script src="<?php echo base_url('assets/js/ace-extra.min.js');?>"></script>
        <?php
            header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
        ?>
	</head>

	<body class="no-skin">
	
		<?php echo $template['partials']['header']; ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
			<?php echo $template['body']; ?>
			<?php echo $template['partials']['footer']; ?>
		</div>

		<script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
		
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url('assets/js/jquery.mobile.custom.min.js');?>'>"+"<"+"/script>");
		</script>
		
		<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<?php if(isset($user)):?>
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>

			<script type="text/javascript">
				var auto_refresh = setInterval(
					function ()
					{
						$('#total-notif').load('<?php echo base_url('user/total-notif');?>').fadeIn("slow");
						$('#list-notif').load('<?php echo base_url('user/list-notif');?>').fadeIn("slow");
					}, 3000); 

			</script>
		<?php endif;?>
		
		<script src="<?php echo base_url('assets/js/jquery-ui.custom.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.ui.touch-punch.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.easypiechart.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.sparkline.index.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.flot.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.flot.pie.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.flot.resize.min.js');?>"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url('assets/js/ace-elements.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/ace.min.js');?>"></script>
		
	</body>
</html>