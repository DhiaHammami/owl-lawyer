<?php
include 'Config.php';
//On teste si le formulaire a été soumis
if ((isset($_POST['embedding_number'])) && (isset($_POST['statut']))	&& (isset($_POST['date_accept'])) && (isset($_POST['alternate'])) && (isset($_POST['amount_accept'])&& (isset($_POST['amount_paid']) && (isset($_POST['amount_restant']) && (isset($_POST['Expenses']))))))
	
	{	
	
	//on se connecte au srveur

//on insere les données du formulaire dans la table 
  $sql=" INSERT INTO `folder` (`embedding_number`, `statut`, `date_accept`,`alternate',`amount_accept',`amount_paid',`amount_restant',`Expenses') 
 VALUES('$_POST[embedding_number]','$_POST[statut]','$_POST[date_accept],'$_POST[alternate]','$_POST[amount_accept]','$_POST[amount_paid]','$_POST[amount_restant]','$_POST[Expenses])";
mysqli_query($db, $sql);
header('Location: list_folder.php');     
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
		<title>							إضافة ملف </title>
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
									<div class="card-title">إضافة  ملف  
									</div>
								</div>
								<div class="card-body">
								<form action="add_folder.php" method="POST">	

									<div class="row gutters">

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
												<label for="embedding_number">  عدد التضمين	</label>
												<input type="number" class="form-control" id="embedding_number" name="embedding_number" placeholder="أدخل عدد التضمين	 ">
											</div>
											
											<div class="form-group">
												<label for="statut">  الوضعية</label>
												<input type="text" class="form-control" id="statut" name="statut" >
											</div>
											
											
								
											<div class="form-group">
												<label for="date_accept">تاريخ القبول	 </label>
												<input type="date" class="form-control" id="date_accept" name="date_accept" placeholder="  أدخل تاريخ "    >
											</div>
											<div class="form-group">
												<label for="alternate"> المنوب </label>
												<input type="name" class="form-control" id="alternate" name="alternate"   >
											</div>
											<div class="form-group">
												<label for="amount_accept"> المبلغ المتفق عليه	 </label>
												<input type="number" class="form-control" id="amount_accept" name="amount_accept"   >
											</div>
											<div class="form-group">
												<label for="amount_paid"> المبلغ المدفوع	 </label>
												<input type="number" class="form-control" id="amount_paid" name="amount_paid"   >
											</div>
											<div class="form-group">
												<label for="amount_restant"> المتبقي	 </label>
												<input type="number" class="form-control" id="amount_restant" name="amount_restant"   >
											</div>
											<div class="form-group">
												<label for="Expenses"> ملاحظة	 </label>
												<input type="text" class="form-control" id="Expenses" name="Expenses"   >
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