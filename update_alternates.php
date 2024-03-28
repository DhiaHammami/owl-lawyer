<?php
include 'Config.php';	
	
	
	
 $sql = "UPDATE alternates SET nom_alt='$_POST[nom_alt]',num_tlfn_alt='$_POST[num_tlfn_alt]',adresse_alt='$_POST[adresse_alt]'  WHERE id_alt='$_POST[id_alt]' "; 
mysqli_query($db, $sql);
header('Location: list_alternates.php');     
//On teste si le formulaire a été soumis
 $sqll="SELECT * FROM alternates  WHERE id_alt='$_REQUEST[id_alt]' ";	

$resultt = mysqli_query($db, $sqll);
$row = mysqli_fetch_assoc($resultt)

?>

<!doctype html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />
		<title>قائمة المنوبون</title>
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
					
				
					<div class="row gutters">
						
						<div class="col-xl-12 col-lg-12 col-md-9	 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-header">
									<div class="card-title">  تغيير المنوب
									</div>
								</div>
								<div class="card-body">
								<form action="update_alternates.php" method="POST">
									<input type="hidden" name="id_alt" value="<?php echo $_REQUEST['id_alt'] ?>"/>	
									<div class="row gutters">

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
												<label for="fullName">الإسم</label>
												<input type="text" class="form-control" name="nom_alt" value="<?php echo (isset($row['nom_alt'])) ? $row['nom_alt'] : ''; ?>">
												
											</div>
											<div class="form-group">
												<label for="phone">الهاتف</label>
												<input type="text" class="form-control" id="num_tel_alt" name="num_tel_alt"  value="<?php echo $row["num_tel_alt"]; ?>">
											</div>
											<div class="form-group">
												<label for="fullname"> العنوان </label>
												<input type="text" class="form-control" id="adresse_alt" name="adresse_alt"  value="<?php echo $row["adresse_alt"] ?>">
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="text-right">
												<button id="submit" name="submit" type="submit" class="btn btn-dark">إلغاء</button>
												<button type="submit" id="submit" name="submit" class="btn btn-success">تسجيل</button>
											</div>
										</div>
								</form>
									</div>
								</div>
							</div>
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