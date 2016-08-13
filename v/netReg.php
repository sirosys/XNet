<?php
	//tolak akses langsung ke file
	if ($_SERVER['SCRIPT_FILENAME'] == __FILE__) {
		die ("Akses Ditolak");
	} else { ?>
	
		<!DOCTYPE html>
		<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
		<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
		<!--[if !IE]><!-->
		<html lang="en" class="no-js">
			<!--<![endif]-->
			<!-- BEGIN HEAD -->
			<head>
			<meta charset="utf-8"/>
				<title><?php echo $_GET['page']; ?> | Sirosys</title>
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta content="width=device-width, initial-scale=1" name="viewport"/>
				<meta content="" name="description"/>
				<meta content="" name="author"/>
				<!-- BEGIN GLOBAL MANDATORY STYLES -->
				<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
				<link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
				<link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
				<link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
				<link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
				<link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
				<!-- END GLOBAL MANDATORY STYLES -->
				<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
				<link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
				<link href="../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
				<link href="../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
				<link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css">
				<!-- END PAGE LEVEL PLUGIN STYLES -->
				<!-- BEGIN PAGE STYLES -->
				<link href="../assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
				<!-- END PAGE STYLES -->
				<!-- BEGIN THEME STYLES -->
				<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
				<link href="../assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
				<link href="../assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
				<link href="../assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
				<link href="../assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css" id="style_color"/>
				<link href="../assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
				<!-- END THEME STYLES -->
				<link rel="shortcut icon" href="favicon.ico"/>
			</head>
			<!-- END HEAD -->
			<!-- BEGIN BODY -->
			<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
			<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
			<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
			<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
			<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
			<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
			<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
			<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
			<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
			<body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
				<!-- BEGIN HEADER -->
				<?php include "include/header.php"; ?>
				<!-- END HEADER -->
				<div class="clearfix"></div>
				<!-- BEGIN CONTAINER -->
				<div class="page-container">
					<!-- BEGIN SIDEBAR -->
					<?php include "include/sidebar.php"; ?>
					<!-- END SIDEBAR -->
					<!-- BEGIN CONTENT -->
					<div class="page-content-wrapper">
						<div class="page-content">


							<!-- BEGIN PAGE HEAD -->
							<div class="page-head">
								<!-- BEGIN PAGE TITLE -->
								<div class="page-title">
									<h1>Register <small>Add new sironet user</small></h1>
								</div>
								<!-- END PAGE TITLE -->
							</div>
							<!-- END PAGE HEAD -->
							<!-- BEGIN PAGE BREADCRUMB -->
							<ul class="page-breadcrumb breadcrumb">
								<li>
									<a href="javascript:;">Home</a><i class="fa fa-circle"></i>
								</li>
								<li class="active">
									 Register
								</li>
							</ul>
							<!-- END PAGE BREADCRUMB -->
							<div class="row">
								<div class="col-md-12">
									<!-- BEGIN SAMPLE FORM PORTLET-->
									<div class="portlet light">
										<div class="portlet-title">
											<div class="caption font-green-haze">
												<i class="icon-settings font-green-haze"></i>
												<span class="caption-subject bold uppercase"> Register new user</span>
											</div>
											<div class="actions">
												<a class="btn btn-circle btn-icon-only blue" href="javascript:;">
													<i class="icon-cloud-upload"></i>
												</a>
												<a class="btn btn-circle btn-icon-only green" href="javascript:;">
													<i class="icon-wrench"></i>
												</a>
												<a class="btn btn-circle btn-icon-only red" href="javascript:;">
													<i class="icon-trash"></i>
												</a>
												<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""></a>
											</div>
										</div>
										<div class="portlet-body form">
											<form role="form" class="form-horizontal">
												<div class="form-body">
													<div class="form-group form-md-line-input">
														<label class="col-md-2 control-label" for="form_control_1">Nomor Identitas</label>
														<div class="col-md-4">
															<input type="text" class="form-control" id="usrKTP" placeholder="Nomor KTP" maxlength="16">
															<div class="form-control-focus"></div>
														</div>
														<div class="col-md-6">
															<input type="text" class="form-control" id="form_control_1" placeholder="Alamat Email">
															<div class="form-control-focus"></div>
															<span class="help-block">Some help goes here...</span>
														</div>
													</div>

													<div class="form-group form-md-line-input">
														<label class="col-md-2 control-label" for="form_control_1">Nama Pelanggan</label>
														<div class="col-md-6">
															<input type="text" class="form-control" id="form_control_1" placeholder="First and Middle Name">
															<div class="form-control-focus"></div>
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control" id="form_control_1" placeholder="Last name">
															<div class="form-control-focus"></div>
														</div>
													</div>
													
													<div class="form-group form-md-line-input">
														<label class="col-md-2 control-label" for="form_control_1">Jenis Produk</label>
														<div class="col-md-10">
															<select class="form-control" id="form_control_1">
																<?php
																	foreach ($netRegModel->product() as $key) {
																		echo "<option value=''>$key[usrID]</option>";
																	}
																?>
															</select>
															<div class="form-control-focus"></div>
														</div>
													</div>
													<div class="form-group form-md-line-input has-success">
														<label class="col-md-2 control-label" for="form_control_1">Textarea</label>
														<div class="col-md-10">
															<textarea class="form-control" rows="3" placeholder="Enter more text"></textarea>
															<div class="form-control-focus"></div>
														</div>
													</div>
													<div class="form-group form-md-line-input">
														<label class="col-md-2 control-label" for="form_control_1">Disabled</label>
														<div class="col-md-10">
															<input type="text" class="form-control" id="form_control_1" placeholder="Placeholder..." disabled>
															<div class="form-control-focus"></div>
														</div>
													</div>
													<div class="form-group form-md-line-input">
														<label class="col-md-2 control-label" for="form_control_1">Readonly</label>
														<div class="col-md-10">
															<input type="text" class="form-control" readonly value="Some value" id="form_control_1" placeholder="Placeholder...">
															<div class="form-control-focus"></div>
														</div>
													</div>
													<div class="form-group form-md-line-input">
														<label class="col-md-2 control-label" for="form_control_1">Readonly</label>
														<div class="col-md-10">
															<div class="form-control form-control-static">
																email@example.com
															</div>
															<div class="form-control-focus"></div>
														</div>
													</div>
												</div>
												<div class="form-actions">
													<div class="row">
														<div class="col-md-offset-2 col-md-10">
															<button type="button" class="btn default">Cancel</button>
															<button type="button" class="btn blue">Submit</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
									<!-- END SAMPLE FORM PORTLET-->

								</div>
							</div>




						</div>
					</div>
					<!-- END CONTENT -->
				</div>
				<!-- END CONTAINER -->
				<!-- BEGIN FOOTER -->
				<?php include "include/footer.php"; ?>
				<!-- END FOOTER -->
			
				<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
				<!-- BEGIN CORE PLUGINS -->
				<!--[if lt IE 9]>
				<script src="../assets/global/plugins/respond.min.js"></script>
				<script src="../assets/global/plugins/excanvas.min.js"></script> 
				<![endif]-->
				<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
				<script src="../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
				<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
				<script src="../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
				<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
				<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
				<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
				<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
				<script src="../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
				<script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
				<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
				<!-- END CORE PLUGINS -->
				<script src="../assets/global/scripts/metronic.js" type="text/javascript"></script>
				<script src="../assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
				<script src="../assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
				<script>
					jQuery(document).ready(function() {   
						// initiate layout and plugins
						Metronic.init(); // init metronic core components
						Layout.init(); // init current layout
						Demo.init(); // init demo features
					});
				</script>
				<!-- END JAVASCRIPTS -->



			</body>
			<!-- END BODY -->
		</html>
	<?php } ?>