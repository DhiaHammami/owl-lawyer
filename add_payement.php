<?php
include 'Config.php';		
 $sql = "UPDATE payement SET date_pay='$_POST[date_pay]',montant='$_POST[montant]',type_pay='$_POST[type_pay]',banque='$_POST[banque]',remarque='$_POST[remarque]";
mysqli_query($db, $sql);
header('Location: list_payement.php');     

//On teste si le formulaire a été soumis
 $sqll="SELECT * FROM payement  WHERE id_case='$_REQUEST[id_case]' ";	

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
		<title>الحسابات</title>
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
						
						<div class="col-xl-12 col-lg-12 col-md-12	 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-header">
									<div class="card-title">  تغيير الحسابات
									</div>
								</div>
								<div class="card-body">
								<form action="update_payement.php" method="POST">
									<input type="hidden" name="id_case" value="<?php echo $_REQUEST['id_case'] ?>"/>	
									<div class="row gutters">

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
												<label for="date">تاريخ الدفع 	</label>
												<input type="date" class="form-control" name="date_pay" value="<?php echo (isset($row['date_pay'])) ? $row['date_pay'] : ''; ?>">
												
											</div>
											
											<div class="form-group">
												<label for="number"> المبلغ	</label>
												<input type="number" class="form-control" id="montant" name="montant"  value="<?php echo $row["montant"]; ?>">
											</div>
											<div class="form-group">
												<label for="alternate"> كيفية الدفع</label>
												<input type="fullname" class="form-control" id="type_pay" name="type_pay"  value="<?php echo $row["type_pay"]; ?>"    >
											</div>
											<div class="form-group">
												<label for="text">البنك  	  </label>
												<input type="text" class="form-control" id="banque" name="banque"  value="<?php echo $row["banque"] ?>">
											</div>
                                            <div class="form-group">
												<label for="text"> ملاحظة</label>
												<input type="text" class="form-control" id="remarque" name="remarque"  value="<?php echo $row["remarque"]; ?>"    >
											</div>
											

											<div class="row gutters">
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