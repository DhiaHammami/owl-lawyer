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

	</head>
	<body>
	
		</div>
		<?php include 'logo_agent.php'; ?>
		<!-- Container fluid start -->
		<div class="container-fluid">

			<?php include 'header_agent.php'; ?>

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">

				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">الرئيسية</li>
						<li class="breadcrumb-item active">لوحة القيادة</li>
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
						<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
							<!-- Row start -->
							<div class="row gutters">
								<div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
									<div class="info-tiles">
										<div class="info-icon">
											<i class="icon-account_circle"></i>
										</div>
										<div class="stats-detail">
											<h3>10</h3>
											<p>Active Users</p>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
									<div class="info-tiles">
										<div class="info-icon">
											<i class="icon-watch_later"></i>
										</div>
										<div class="stats-detail">
											<h3>450</h3>
											<p>Active Agents</p>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
									<div class="info-tiles">
										<div class="info-icon">
											<i class="icon-visibility"></i>
										</div>
										<div class="stats-detail">
											<h3>7500</h3>
											<p>Visitors</p>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
									<div class="info-tiles">
										<div class="info-icon">
											<i class="icon-shopping_basket"></i>
										</div>
										<div class="stats-detail">
											<h3>$300k</h3>
											<p>Sales</p>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
									<div class="info-tiles">
										<div class="info-icon secondary">
											<i class="icon-check_circle"></i>
										</div>
										<div class="stats-detail">
											<h3>250</h3>
											<p>Signups</p>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12">
									<div class="info-tiles">
										<div class="info-icon secondary">
											<i class="icon-archive"></i>
										</div>
										<div class="stats-detail">
											<h3>2500</h3>
											<p>Orders</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Row ends -->
						</div>
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="card h-280">
								<div class="card-header">
									<div class="card-title">Orders</div>
								</div>
								<div class="card-body">
									<div class="chartist bar-scheme-one">
										<div class="barChartOrders"></div>
									</div>
									<div class="row gutters justify-content-center">
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
											<div class="info-stats m-0">
												<span class="info-label"></span>
												<p class="info-title">Online Orders</p>
												<h3 class="info-total">950k</h3>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
											<div class="info-stats m-0">
												<span class="info-label secondary"></span>
												<p class="info-title">Direct Orders</p>
												<h3 class="info-total">300k</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="card h-280 agenda-bg">
								<div class="card-body">
									<div class="agenda">
										<div class="todays-date">
											<h5>Agenda - <span class="date" id="todays-date"></span></h5>
										</div>
										<ul class="agenda-list">
											<li>
												<span class="bullet">&nbsp;</span>
												<div class="details">
													<p>Call with Willams</p>
													<small>09:00</small>
												</div>
											</li>
											<li>
												<span class="bullet">&nbsp;</span>
												<div class="details">
													<p>Book a Hotel for James</p>
													<small>09:30</small>
												</div>
											</li>
											<li>
												<span class="bullet">&nbsp;</span>
												<div class="details">
													<p>Book a Flight to California</p>
													<small>10:00</small>
												</div>
											</li>
											<li>
												<span class="bullet secondary">&nbsp;</span>
												<div class="details">
													<p>Call with Willams</p>
													<small>09:00</small>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

					<!-- Row starts -->
					
						
					<!-- Row ends -->

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
							<div class="card h-320">
								<div class="card-header">
									<div class="card-title">Messages</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<ul class="user-messages">
											<li class="clearfix">
												<div class="customer">AM</div>
												<div class="delivery-details">
													<span class="badge badge-primary">Ordered</span>
													<h5>Aaleyah Malik</h5>
													<p>We are pleased to inform that the following ticket no. <b>WAFI510</b> have been booked.</p>
												</div>
											</li>
											<li class="clearfix">
												<div class="customer">AS</div>
												<div class="delivery-details">
													<span class="badge badge-primary">Delivered</span>
													<h5>Ali Sayed</h5>
													<p>The carrier successfully delivered the message to the end user.</p>
												</div>
											</li>
											<li class="clearfix">
												<div class="customer">ZR</div>
												<div class="delivery-details">
													<span class="badge badge-primary">Cancelled</span>
													<h5>Zaira Raheem</h5>
													<p>The following describe the status codes and messages states for delivery receipts.</p>
												</div>
											</li>
											<li class="clearfix">
												<div class="customer secondary">LJ</div>
												<div class="delivery-details">
													<span class="badge badge-secondary">Returned</span>
													<h5>Lily Jordan</h5>
													<p>Status codes and descriptions are returned in the following OpenMarket-specific TLVs When a delivery receipt is received.</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="card h-320">
								<div class="card-header">
									<div class="card-title">Activity</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<ul class="project-activity">
											<li class="activity-list">
												<div class="detail-info">
													<p class="date">Today</p>
													<p class="info">Messages accepted with attachments.</p>
												</div>
											</li>
											<li class="activity-list success">
												<div class="detail-info">
													<p class="date">Yesterday</p>
													<p class="info">Send email notifications of subscriptions and deletions to list owner.</p>
												</div>
											</li>
											<li class="activity-list danger">
												<div class="detail-info">
													<p class="date">10th December</p>
													<p class="info">Required change logs activity reports.</p>
												</div>
											</li>
											<li class="activity-list warning">
												<div class="detail-info">
												<p class="date">15th December</p>
													<p class="info">Strategic partnership plan.</p>
												</div>
											</li>
											<li class="activity-list success">
												<div class="detail-info">
													<p class="date">21st December</p>
													<p class="info">Send email notifications of subscriptions and deletions to list owner.</p>
												</div>
											</li>
											<li class="activity-list danger">
												<div class="detail-info">
													<p class="date">25th December</p>
													<p class="info">Required change logs activity reports.</p>
												</div>
											</li>
											<li class="activity-list warning">
												<div class="detail-info">
												<p class="date">28th December</p>
													<p class="info">Strategic partnership plan.</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row ends -->

				</div>
				<!-- Content wrapper end -->

			</div>
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

		<!-- Chartist JS -->
		<script src="vendor/chartist/js/chartist.min.js"></script>
		<script src="vendor/chartist/js/chartist-tooltip.js"></script>
		<script src="vendor/chartist/js/custom/threshold/threshold.js"></script>
		<script src="vendor/chartist/js/custom/bar/bar-chart-orders.js"></script>

		<!-- jVector Maps -->
		<script src="vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
		<script src="vendor/jvectormap/world-mill-en.js"></script>
		<script src="vendor/jvectormap/gdp-data.js"></script>
		<script src="vendor/jvectormap/custom/world-map-markers2.js"></script>

		<!-- Rating JS -->
		<script src="vendor/rating/raty.js"></script>	
		<script src="vendor/rating/raty-custom.js"></script>

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>
</html>

