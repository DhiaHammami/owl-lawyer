<?php
include 'Config.php';		
 $sql = "UPDATE folder SET embedding_number='$_POST[embedding_number]',statut='$_POST[statut]',date_accept='$_POST[date_accept]',alternate='$_POST[alternate]',amount_accept='$_POST[amount_accept],amount_paid='$_POST[amount_paid]',amount_restant='$_POST[amount_restant]' ,Expenses	='$_POST[Expenses]'WHERE id_case='$_POST[id_case]' ";
mysqli_query($db, $sql);
header('Location: list_folder.php');     

//On teste si le formulaire a été soumis
 $sqll="SELECT * FROM user  WHERE id='$_REQUEST[id]' ";	

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
		<title>الملفات</title>
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
									<div class="card-title">  تغيير الملفات
									</div>
								</div>
								<div class="card-body">
								<form action="update_folder.php" method="POST">
									<input type="hidden" name="id_case" value="<?php echo $_REQUEST['id_case'] ?>"/>	
									<div class="row gutters">

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
												<label for="number">عدد التضمين	</label>
												<input type="number" class="form-control" name="embedding_number" value="<?php echo (isset($row['embedding_number'])) ? $row['embedding_number'] : ''; ?>">
												
											</div>
											<div class="col-xl-12 col-lg col-md-12 col-sm-12 col-12">
											<p><code>الوضعية  </code></p>
											<select class="form-control selectpicker">
												<option>مفتوح </option>
												<option>مغلق</option>
											</select>
										</div>
											<div class="form-group">
												<label for="date">تاريخ القبول	</label>
												<input type="date" class="form-control" id="date_accept" name="date_accept"  value="<?php echo $row["date_accept"]; ?>">
											</div>
											<div class="form-group">
												<label for="alternate"> المنوب</label>
												<input type="fullname" class="form-control" id="alternate" name="alternate"  value="<?php echo $row["alternate"]; ?>"    >
											</div>
											<div class="form-group">
												<label for="number">المبلغ المتفق عليه	  </label>
												<input type="number" class="form-control" id="amount_accept" name="amount_accept"  value="<?php echo $row["amount_accept"] ?>">
											</div>
                                        <div class="form-group">
												<label for="number">المبلغ المدفوع	 </label>
												<input type="number" class="form-control" id="amount_paid" name="amount_paid" >
											</div>
											<div class="form-group">
												<label for="number"> المتبقي  </label>
												<input type="number" class="form-control" id="amount_restant" name="amount_restant" >
											</div>
                                            <div class="form-group">
												<label for="text"> ملاحظة</label>
												<input type="text" class="form-control" id="Expenses" name="Expenses"  value="<?php echo $row["Expenses"]; ?>"    >
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