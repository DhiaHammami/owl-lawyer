<?php
include 'Config.php';
//On teste si le formulaire a été soumis
	if ((isset($_POST['nom_pack'])) && (isset($_POST['prix']))	)
	
	{
	//on se connecte au srveur

//on insere les données du formulaire dans la table 
  $sql=" INSERT INTO `pack_avocat` (`nom_pack`, `prix`, `nb_jours`) 
 VALUES('$_POST[nom_pack]','$_POST[prix]','$_POST[nb_jours]')";
mysqli_query($db, $sql);
header('Location: list_pack.php');     
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
		<title>								إضافة باقة جديدة</title>
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

			<?php include 'header.php'; ?>
					<!-- Row start -->
					
					<div class="row gutters">
						
						<div class="col-xl-12 col-lg-12 col-md-9	 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-header">
									<div class="card-title">إضافة  باقة جديدة
									</div>
								</div>
								<div class="card-body">
								<form action="add_pack.php" method="POST">	

									<div class="row gutters">

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
												<label for="nom"> إسم الباقة</label>
												<input type="text" class="form-control" id="nom_pack" name="nom_pack" placeholder="أدخل الإسم ">
											</div>
											
								
											<div class="form-group">
												<label for="prix">الثمن </label>
												<input type="fullname" class="form-control" id="prix" name="prix" placeholder="  أدخل الثمن "    >
											</div>
											<div class="form-group">
												<label for="prix">مدة الصلوحية </label>
												<input type="number" class="form-control" id="nb_jours" name="nb_jours"   >
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
					<!-- Data Tables -->
		<script src="vendor/datatables/dataTables.min.js"></script>
		<script src="vendor/datatables/dataTables.bootstrap.min.js"></script>
		
		<!-- Custom Data tables -->
		<script src="vendor/datatables/custom/custom-datatables.js"></script>
		<script src="vendor/datatables/custom/fixedHeader.js"></script>

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