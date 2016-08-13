<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 3.3.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<!-- BEGIN HEAD -->
	<head>
		<meta charset="utf-8"/>
		<title>Sirosys | lock</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<meta content="" name="description"/>
		<meta content="" name="author"/>
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
		<link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
		<link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
		<link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN PAGE LEVEL STYLES -->
		<link href="../assets/admin/pages/css/lock.css" rel="stylesheet" type="text/css"/>
		<!-- END PAGE LEVEL STYLES -->
		<!-- BEGIN THEME STYLES -->
		<link href="../assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
		<link href="../assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
		<link href="../assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
		<link href="../assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
		<link href="../assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
		<!-- END THEME STYLES -->
		<link rel="shortcut icon" href="favicon.ico"/>
	</head>
	<!-- END HEAD -->
	<!-- BEGIN BODY -->
	<body>
		<?php $array = $query->lock($_COOKIE['siro']['usrID']); ?>
		<div class="page-lock">
			<div class="page-logo">
				<a class="brand" href="index.html">
					<img src="../assets/admin/layout4/img/logo-big.png" alt="logo"/>
				</a>
			</div>
			<div class="page-body">
				<div class="lock-head" id="result">Locked</div>
				<div class="lock-body">
					<div class="pull-left lock-avatar-block">
						<img src="../assets/admin/pages/media/profile/profile.jpg" class="lock-avatar">
					</div>
					<form class="lock-form pull-left">
						<div class="alert alert-danger display-hide">
							<button class="close" data-close="alert"></button>
							<span>Enter any username and password. </span>
						</div>
						<h4><?php echo "".$array['usrFname']." ".$array['usrLname'].""; ?></h4>
						<div class="form-group">
							<input class="form-control placeholder-no-fix hide" type="text" autocomplete="off" placeholder="Email" name="usrEmail" id="usrEmail" value="<?php echo $array['usrEmail']; ?>" readonly />
						</div>
						<div class="form-group">
							<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="usrPass" id="usrPass" />
						</div>
						<div class="form-actions">
							<button type="submit" id="submit" class="btn btn-success uppercase">Login</button>
						</div>
					</form>
				</div>
				<div class="lock-bottom">
					<a href="./logout">Bukan <?php echo "".$array['usrFname']." ".$array['usrLname'].""; ?>?</a>
				</div>
			</div>
			<div class="page-footer-custom">
				<?php echo date("Y"); ?> &copy; Sirosys Inc.
			</div>
		</div>
		<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
		<!-- BEGIN CORE PLUGINS -->
		<!--[if lt IE 9]>
		<script src="../assets/global/plugins/respond.min.js"></script>
		<script src="../assets/global/plugins/excanvas.min.js"></script> 
		<![endif]-->
		<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
		<script src="../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
		<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
		<script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
		<script src="../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
		<!-- END CORE PLUGINS -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<script src="../assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
		<script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
		<!-- END PAGE LEVEL PLUGINS -->
		<script src="../assets/global/scripts/metronic.js" type="text/javascript"></script>
		<script src="../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
		<script src="../admin/scripts/lock.js" type="text/javascript"></script>
		<script>
			jQuery(document).ready(function() {    
				Metronic.init(); // init metronic core components
				Layout.init(); // init current layout
				Lock.init();
			});
		</script>
		<!-- END JAVASCRIPTS -->
	</body>
	<!-- END BODY -->
</html>