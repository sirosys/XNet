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
				<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
				<link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
				<link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
				<link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
				<link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
				<link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
				<!-- END GLOBAL MANDATORY STYLES -->
				<!-- BEGIN THEME STYLES -->
				<link href="../assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
				<link href="../assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
				<link href="../assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
				<link id="style_color" href="../assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
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
									<h1>Search <small>Search Result</small></h1>
								</div>
								<!-- END PAGE TITLE -->
							</div>
							<!-- END PAGE HEAD -->
							<!-- BEGIN PAGE BREADCRUMB -->
							<ul class="page-breadcrumb breadcrumb">
								<li>
									<a href="./">Home</a><i class="fa fa-circle"></i>
								</li>
								<li class="active">
									 Search
								</li>
							</ul>
							<!-- END PAGE BREADCRUMB -->
							<div class="row">
								<div class="col-md-12">
									<!-- BEGIN SAMPLE TABLE PORTLET-->
									<div class="portlet box red">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-search"></i>Hasil Pencarian
											</div>
											<div class="tools">
												<a href="javascript:;" class="collapse">
												</a>
												<a href="#portlet-config" data-toggle="modal" class="config">
												</a>
												<a href="javascript:;" class="reload">
												</a>
												<a href="javascript:;" class="remove">
												</a>
											</div>
										</div>
										<div class="portlet-body">
											<div class="table-scrollable">
												<table class="table table-hover">
												<thead>
													<tr>
														<th class='text-center'>#</th>
														<th class='text-center text-danger'>User ID</th>
														<th class='text-center text-success'>Email</th>
														<th class='text-center text'>Nama</th>
														<th class='text-center text-warning'>Kontak</th>
													</tr>

												</thead>
													<tbody>
														<?php
															if (strlen($_GET['s']) < 3) {
																echo "
																	<tr class='text-center warning'>
																		<td colspan='5'><h2 class='text-danger'>Masukkan minimal 3 karakter</h2></td>
																	</tr>
																";
															} else {
																$array = $query->search($_GET['s']);
																/*
																echo "<pre>";
																	print_r($array);
																echo "</pre>";
																*/
																if (!empty($array)) {
																	$No = 1;
																	foreach($array as $searchShow){
																		echo "
																			<tr class='text-center'>
																				<td class='numeric'>".$No."</td>
																				<td class='text-center text-danger'><a href='usrDtl?usrID=".$searchShow['usrID']."'><button class='btn btn-xs red'>".$searchShow['usrID']."</button></a></td>
																				<td class='text-center text-success'>".$searchShow['usrEmail']."</td>
																				<td class='text-center text'>".$searchShow['usrFname']." ".$searchShow['usrLname']."</td>
																				<td class='text-center text-warning'>".$searchShow['usrCell']."</td>
																			</tr>
																		";

																		$No++;
																	}
																} else {
																	echo "
																		<tr class='text-center warning'>
																			<td colspan='5'><h2 class='text-danger'>Pencarian tidak ditemukan</h2></td>
																		</tr>
																	";
																}
															}
														?>
														
													</tbody>
												</table>

											</div>
											<p class="text-right btn btn-xs red disabled">Klik User ID untuk detail</p>
										</div>
									</div>
									<!-- END SAMPLE TABLE PORTLET-->
								</div>
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