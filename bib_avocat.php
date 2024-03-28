<?php
include 'Config.php';

?>
<!doctype html>
<html lang="en">	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />
		<title> المكتبة </title>
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
<?php
if(isset($erreure)) echo $erreure;
?>
<body>
		<?php include 'logo.php'; ?>
		<!-- Container fluid start -->
		<div class="container-fluid">
			<?php include 'header_avocat.php'; ?>
					<!-- Row start -->
                    <div class="custom-search">
					<form action="search.php" method="POST">
					<input type="text" class="search-query" placeholder="إبحث من هنا ...">
					<input type="submit">
					</form>
				
					<i class="icon-search1"></i>
				</div>
                    <div class="row gutters">
							<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
								<a href="img/3.jpg" class="effects">
									<img src="img/2.jpg" class="img-fluid" alt="Wafi Admin">
									<div class="overlay">
										<span class="expand">+</span>
									</div>
								</a>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
								<a href="img/11.jpg" class="effects">
									<img src="img/11.jpg" class="img-fluid" alt="Wafi Admin">
									<div class="overlay">
										<span class="expand">+</span>
									</div>
								</a>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
								<a href="img/10.jpg" class="effects">
									<img src="img/10.jpg" class="img-fluid" alt="Wafi Admin">
									<div class="overlay">
										<span class="expand">+</span>
									</div>
								</a>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
								<a href="img/9.jpg" class="effects">
									<img src="img/9.jpg" class="img-fluid" alt="Wafi Admin">
									<div class="overlay">
										<span class="expand">+</span>
									</div>
								</a>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
								<a href="img/8.jpg" class="effects">
									<img src="img/8.jpg" class="img-fluid" alt="Wafi Admin">
									<div class="overlay">
										<span class="expand">+</span>
									</div>
								</a>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
								<a href="img/7.jpg" class="effects">
									<img src="img/7.jpg" class="img-fluid" alt="Wafi Admin">
									<div class="overlay">
										<span class="expand">+</span>
									</div>
								</a>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
								<a href="img/6.jpg" class="effects">
									<img src="img/6.jpg" class="img-fluid" alt="Wafi Admin">
									<div class="overlay">
										<span class="expand">+</span>
									</div>
								</a>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
								<a href="img/5.jpg" class="effects">
									<img src="img/5.jpg" class="img-fluid" alt="Wafi Admin">
									<div class="overlay">
										<span class="expand">+</span>
									</div>
								</a>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
								<a href="img/4.jpg" class="effects">
									<img src="img/4.jpg" class="img-fluid" alt="Wafi Admin">
									<div class="overlay">
										<span class="expand">+</span>
									</div>
								</a>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
								<a href="img/3.jpg" class="effects">
									<img src="img/3.jpg" class="img-fluid" alt="Wafi Admin">
									<div class="overlay">
										<span class="expand">+</span>
									</div>
								</a>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
								<a href="img/12.jpg" class="effects">
									<img src="img/12.jpg" class="img-fluid" alt="Wafi Admin">
									<div class="overlay">
										<span class="expand">+</span>
									</div>
								</a>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
								<a href="img/livre.jpg" class="effects">
									<img src="img/livre.jpg" class="img-fluid" alt="Wafi Admin">
									<div class="overlay">
										<span class="expand">+</span>
									</div>
								</a>
							</div>
						</div>








				<!-- Row end -->
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