<?php include("Config.php");
	if(!isset($_SESSION['id_avocat'])){
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
		<title>الرئيسية</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="fonts/style.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="vendor/daterange/daterange.css" />
		<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css" />
		<link rel="stylesheet" href="vendor/chartist/css/chartist-custom.css" />	
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4.css" />
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4-custom.css" />
		<link href="vendor/datatables/buttons.bs.css" rel="stylesheet" />	


		<!-- *************
			************ Vendor Css Files *************
		************ -->
		<!-- DateRange css -->
		<link rel="stylesheet" href="vendor/daterange/daterange.css" />

		<!-- Calendar css -->
		<link rel="stylesheet" href="vendor/calendar/css/core/main.css" />
		<link rel="stylesheet" href="vendor/calendar/css/daygrid/main.css" />
		<link rel="stylesheet" href="vendor/calendar/css/timegrid/main.css" />

	</head>
	<body>
		<?php include 'logo.php'; ?>
		<!-- Container fluid start -->
		<div class="container-fluid">

			<?php include 'header_avocat.php'; ?>

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">

				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">الرئيسية</li>
						<li class="breadcrumb-item active"> المواعيد و الجلسات</li>
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
					

		<!-- Daterange -->
		

	


		<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

							<div class="card m-0">
								<div class="card-body">
									<div id="calendarSelectable"></div>
								</div>
							</div>

						</div>
					</div>					</div>
                    <?php include 'footer.php' 
					?>
                   <!-- *************
			************ Required JavaScript Files *************
		************* -->
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

		<!-- Fullcalendar -->
		<script src="vendor/calendar/js/core/main.min.js"></script>
		<script src="vendor/calendar/js/daygrid/main.min.js"></script>
		<script src="vendor/calendar/js/interaction/main.min.js"></script>
		<script src="vendor/calendar/js/timegrid/main.min.js"></script>
		<script src="vendor/calendar/js/custom-selectable-calendar.js"></script>

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>
</html>