<?php
include 'Config.php';
//on insere les données du formulaire dans la table 
$sql = "SELECT * FROM payement";
$result = mysqli_query($db, $sql);
?>
<!doctype html>
<html lang="en">	
<head>
    	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />
		<title>قائمة الإستخلاص</title>
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
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">	
							<div class="table-container">  
								<div class="t-header"> 	  قائمة الإستخلاص 	</div>
                                
								<div class="table-responsive">
									<table id="basicExample" class="table custom-table">
										<thead>
											<tr>
												<th>تاريخ الإستخلاص </th>
												<th>المبلغ</th>
												<th>طريقة الدفع</th>
												<th>البنك </th>
												<th>ملاحظة</th>
												<th> تغيير</th>
												<th>حذف</th>
											</form>
											</th>
											</tr>
										</thead>
										<tbody>
										<?php
											if (mysqli_num_rows($result) > 0) {
												// output data of each row
												while($row = mysqli_fetch_assoc($result)) {
										?>
											<tr>
													<td><?php echo $row["date_pay"]; ?></td>
													<td><?php echo $row["montant"]; ?></td>
												
													<td><?php echo $row["type_pay"]; ?></td>
													<td><?php echo $row["banque"]; ?></td>
                                                    <td><?php echo $row["remarque"]; ?></td>
														
													<td><a href="update_payement.php?id=<?php echo $row["id_case"]; ?>"><i class="icon-edit"  style="color: black;" ></i></a></td>
													<td><a href="delete_payement.php?id=<?php echo $row["id_case"]; ?>"><i class="icon-cancel" style="color: black;" ></i></a></td>													
											</tr>
										<?php
												}

											}
										?>
										</tbody>
                                        
									</table>
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