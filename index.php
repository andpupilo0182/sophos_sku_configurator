<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sophos Sizing Tool</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
			<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
			<link type="text/css" rel="stylesheet" href="assets/css/modules/materialadmin/css/theme-default/bootstrap.css?1422823238" />

			<link type="text/css" rel="stylesheet" href="assets/css/modules/materialadmin/css/theme-default/materialadmin.css?1422823243" />

			<link type="text/css" rel="stylesheet" href="assets/css/modules/materialadmin/css/theme-default/font-awesome.min.css?1422823239" />

			<link type="text/css" rel="stylesheet" href="assets/css/modules/materialadmin/css/theme-default/material-design-iconic-font.min.css?1422823240" />

  			<link type="text/css" rel="stylesheet" href="assets/css/modules/materialadmin/css/theme-default/libs/rickshaw/rickshaw.css?1422823372" />

	  		<link type="text/css" rel="stylesheet" href="assets/css/modules/materialadmin/css/theme-default/libs/morris/morris.core.css?1422823370" />

			  <link href="assets/css/modules/materialadmin/css/theme-default/bootstrap.css" rel="stylesheet">
		    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
		    <link href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css" rel="stylesheet">
		    <link href="assets/css/styles.css" rel="stylesheet">

		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
	<script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/html5shiv.js?1422823601"></script>
	<script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/respond.min.js?1422823601"></script>
    <![endif]-->
	</head>
	<style>
		title {
			cursor: pointer;
		}
	</style>

	<?php
	 	require("header.php");
	 	require("profile.php");
	 ?>

	<body class="menubar-hoverable header-fixed menubar-pin">

	<div id="base">
		<div class="offcanvas"></div>
		<div id="content">
			<?php include("blank.php"); ?> 
		</div>
		<?php require("menu.php"); ?>

		<!-- Right Pane -->
		<div class="offcanvas">
				<?php include("right_pane.php"); ?>
		</div>

	</div><!--end #base-->

	<div class="modal hide fade" id="warning_start_modal">
	  <div class="modal-header">
		<a class="close" data-dismiss="modal">×</a>
		<h3>Modal header</h3>
	  </div>
	  <div class="modal-body">
		Esta ferramenta tem o intúito de dar uma base para o sizing dos produtos. 
Por não conseguir validar todos os parâmetros individuáis de cada ambiente, não deve ser considerado um sizing definitivo.
	  </div>
	  <div class="modal-footer">
		<a href="#" class="btn">Close</a>
		<a href="#" class="btn btn-primary">Save changes</a>
	  </div>
	</div>


	<!-- END BASE -->

	<!-- BEGIN JAVASCRIPT -->

			<script src="assets/js/modules/materialadmin/libs/jquery/jquery-1.11.2.min.js"></script> 
			<script src="assets/js/modules/materialadmin/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
			<script src="assets/js/modules/materialadmin/libs/bootstrap/bootstrap.min.js"></script>
			<script src="assets/js/modules/materialadmin/libs/spin.js/spin.min.js"></script>
			<script src="assets/js/modules/materialadmin/libs/autosize/jquery.autosize.min.js"></script>
			<script src="assets/js/modules/materialadmin/libs/moment/moment.min.js"></script>
			<!-- <script src="assets/js/modules/materialadmin/core/cache/ec2c8835c9f9fbb7b8cd36464b491e73.js"></script> -->
			<!-- <script src="assets/js/modules/materialadmin/libs/jquery-knob/jquery.knob.min.js"></script> -->
			<!-- <script src="assets/js/modules/materialadmin/libs/sparkline/jquery.sparkline.min.js"></script> -->
			<!-- <script src="assets/js/modules/materialadmin/libs/nanoscroller/jquery.nanoscroller.min.js"></script> -->
			<!-- <script src="assets/js/modules/materialadmin/core/cache/43ef607ee92d94826432d1d6f09372e1.js"></script> -->
			<!-- <script src="assets/js/modules/materialadmin/libs/rickshaw/rickshaw.min.js"></script> -->
			<script src="assets/js/modules/materialadmin/core/cache/63d0445130d69b2868a8d28c93309746.js"></script>
			<!-- <script src="assets/js/modules/materialadmin/core/demo/Demo.js"></script> -->
			<!-- <script src="assets/js/modules/materialadmin/core/demo/DemoDashboard.js"></script> -->
			<!-- <script src="assets/js/modules/materialadmin/core/cache/63d0445130d69b2868a8d28c93309746.js"></script> -->

		       <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
			<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
			<script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
			<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
			<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
			<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
			<script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
			<script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

		       <script src="assets/js/modules/datatables/jszip.min.js"></script>

			<script src="assets/js/main.js"></script>
	<!-- END JAVASCRIPT -->

	</body>
</html>
