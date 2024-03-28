<?php include("Config.php");
	if(!isset($_SESSION['id_user'])){
		//header("location: login.php");
	}
?>
<!doctype html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />
		<title> الحسابات
</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="fonts/style.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="vendor/daterange/daterange.css" />
		<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css" />
		<link rel="stylesheet" href="vendor/chartist/css/chartist-custom.css" />	
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4.css" />
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4-custom.css" />
		<link href="vendor/datatables/buttons.bs.css" rel="stylesheet" />	
	<!-- Calendar css -->
    <link rel="stylesheet" href="vendor/calendar/css/core/main.css" />
		<link rel="stylesheet" href="vendor/calendar/css/list/main.css" />
	</head>
	<body>
		<?php include 'logo.php'; ?>
		<!-- Container fluid start -->
		<div class="container-fluid">

			<?php include 'header.php'; ?>

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">

				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"> الحسابات</li>
					</ol>

					<ul class="app-actions">
						<li>
							<a href="#" id="reportrange">
								<span class="range-text"></span>
								<i class="icon-chevron-down"></i>	
							</a>
						</li>
						<li>
							<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
								<i class="icon-print"></i>
							</a>
						</li>
						<li>
							<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download CSV">
								<i class="icon-cloud_download"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Page header end -->

				<div class="content-wrapper">

						<!-- Row start -->
                        <div class="row gutters">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							

							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic Column Graph</div>
								</div>
								<div class="card-body">
									<div id="basic-column-graph" class="primary-graph"></div>
								</div>
							</div>


							
							<div class="row gutters">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							
							<div class="card">
								<div class="card-header">
									<div class="card-title">Basic Line Graph</div>
								</div>
								<div class="card-body">
									<div id="basic-line-graph"></div>
								</div>
							</div>

						

						

						</div>
					</div>


												

						</div>
					</div>
					<!-- Row end -->

				</div>
				<!-- Content wrapper end -->


			</div>
				<!-- Content wrapper end -->

			</div>

		<!-- Daterange -->
		
        <?php include 'footer.php' 
					?>

	<!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>

<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
		<script src="vendor/slimscroll/slimscroll.min.js"></script>
		<script src="vendor/slimscroll/custom-scrollbar.js"></script>
		
		<!-- Daterange -->
		<script src="vendor/daterange/daterange.js"></script>
		<script src="vendor/daterange/custom-daterange.js"></script>

		<!-- Apex Charts -->
		<script src="vendor/apex/apexcharts.min.js"></script>
		<script src="vendor/apex/examples/line/basic-line-graph.js"></script>
		<script src="vendor/apex/examples/line/line-with-data-labels.js"></script>
		<script src="vendor/apex/examples/line/stepline.js"></script>

		<!-- Main Js Required -->
		<script src="js/main.js"></script>
		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
		<script src="vendor/slimscroll/slimscroll.min.js"></script>
		<script src="vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Daterange -->
		<script src="vendor/daterange/daterange.js"></script>
		<script src="vendor/daterange/custom-daterange.js"></script>

		<!-- Apex Charts -->
		<script src="vendor/apex/apexcharts.min.js"></script>
		<script src="vendor/apex/examples/column/basic-column-graph.js"></script>
		<script src="vendor/apex/examples/column/basic-column-graph-datalables.js"></script>
		<script src="vendor/apex/examples/column/basic-column-stack-graph.js"></script>
		<script src="vendor/apex/examples/column/basic-column-stack-graph-fullheight.js"></script>
		<script src="vendor/apex/examples/column/basic-column-graph-rotated-labels.js"></script>

		<!-- Main Js Required -->
		<script src="js/main.js"></script>
		<!-- Download / CSV / Copy / Print -->
		<script src="vendor/datatables/buttons.min.js"></script>
		<script src="vendor/datatables/jszip.min.js"></script>
		<script src="vendor/datatables/pdfmake.min.js"></script>
		<script src="vendor/datatables/vfs_fonts.js"></script>
		<script src="vendor/datatables/html5.min.js"></script>
		<script src="vendor/datatables/buttons.print.min.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>
		<script src="vendor/slimscroll/slimscroll.min.js"></script>
		<script src="vendor/slimscroll/custom-scrollbar.js"></script>
		<script src="vendor/daterange/daterange.js"></script>
		<script src="vendor/daterange/custom-daterange.js"></script>
		<script src="vendor/chartist/js/chartist.min.js"></script>
		<script src="vendor/chartist/js/chartist-tooltip.js"></script>
		<script src="vendor/chartist/js/custom/threshold/threshold.js"></script>
		<script src="vendor/chartist/js/custom/bar/bar-chart-orders.js"></script>
		<script src="vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
		<script src="vendor/jvectormap/world-mill-en.js"></script>
		<script src="vendor/jvectormap/gdp-data.js"></script>
		<script src="vendor/jvectormap/custom/world-map-markers2.js"></script>
		<script src="vendor/rating/raty.js"></script>	
		<script src="vendor/rating/raty-custom.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>

