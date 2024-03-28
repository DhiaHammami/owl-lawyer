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
		<title> حسابي
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
		<?php include 'logo_avocat.php'; ?>
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
						<li class="breadcrumb-item active"> حسابي</li>
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
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="user-details h-320">
								<div class="user-thumb">
									<img src="img/dhia.png" alt="Admin Template" />
								</div>
								<h4>Dhia Hammami</h4>
								<h6>3SIL02</h6>
								<p>Tunisia</p>
								<button class="btn btn-lg btn-primary">Follow</button>
							</div>
						</div>
						
						
						
					</div>
					<!-- Row end -->

					<!-- Row start -->
					<div class="row gutters">
						
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="card h-320">
								<div class="card-header">
									<div class="card-title">Todo's</div>
								</div>
								<div class="card-body">
									<div class="todo-container">
										<ul class="todo-body">
											<li class="todo-list">
												<div class="todo-info">
													<span class="dot blue"></span>
													<p>Team Meeting</p>
													<p>Thursday at 3:30 PM</p>
												</div>
											</li>
											<li class="todo-list done">
												<div class="todo-info">
													<span class="dot orange"></span>
													<p>Make new page</p>
													<p>Wednesday at 10:30 AM</p>
												</div>
											</li>
											<li class="todo-list done">
												<div class="todo-info">
													<span class="dot yellow"></span>
													<p>Product launch</p>
													<p>Sunday at Baur Lac, Zurich</p>
												</div>
											</li>
											<li class="todo-list done">
												<div class="todo-info">
													<span class="dot green"></span>
													<p>Code Review</p>
													<p>Friday at 2:00PM</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
							<!-- Row start -->
							<div class="row gutters">
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
									<div class="social-tile">
										<div class="social-icon fb">
											<i class="icon-facebook"></i>
										</div>
										<div class="social-stats">
											<h3>4500</h3>
											<p>Posts</p>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
									<div class="social-tile">
										<div class="social-icon tw">
											<i class="icon-twitter"></i>
										</div>
										<div class="social-stats">
											<h3>100</h3>
											<p>Tweets</p>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
									<div class="social-tile">
										<div class="social-icon lk">
											<i class="icon-rss"></i>
										</div>
										<div class="social-stats">
											<h3>120</h3>
											<p>Blog Posts</p>
										</div>
									</div>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="card">
										<div class="card-header">
											<div class="card-title">Share your thoughts</div>
										</div>
										<div class="card-body">
											<div class="share-thoughts-container">
												<textarea class="form-control" rows="3">Hello, </textarea>
												<div class="share-thoughts-footer">
													<div class="share-icons">
														<a href="#">
															<i class="icon-map2"></i>
														</a>
														<a href="#">
															<i class="icon-link"></i>
														</a>
														<a href="#">
															<i class="icon-camera2"></i>
														</a>
														<a href="#">
															<i class="icon-users"></i>
														</a>
													</div>
													<button class="btn btn-primary">Share</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row end -->		
						</div>
					</div>
					<!-- Row end -->

				</div>
				<!-- Content wrapper end -->

			</div>

		<!-- Daterange -->
		
        <?php include 'footer.php' 
					?>


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

