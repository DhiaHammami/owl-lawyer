<?php
include 'Config.php';	
if((isset($_POST['nom_pack'])) && (isset($_POST['prix'])))
	
	{
	
 $sql = "UPDATE user SET nom='$_POST[nom]',prenom='$_POST[prenom]',num_tlfn='$_POST[num_tlfn]',username='$_POST[username]',password='".md5($_POST["password"])."',adresse='$_POST[adresse]',num_fixe='$_POST[num_fixe]' WHERE id='$_POST[id]' ";
mysqli_query($db, $sql);
header('Location: list_lawyer_agent.php');     
}
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
		<title>قائمةالمستخدمون</title>
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
		<?php include 'logo_agent.php'; ?>
		<!-- Container fluid start -->
		<div class="container-fluid">

			<?php include 'header_agent.php'; ?>
					<!-- Row start -->
					
				
					<div class="row gutters">
						
						<div class="col-xl-12 col-lg-12 col-md-12	 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-header">
									<div class="card-title">  تغيير المستخدم
									</div>
								</div>
								<div class="card-body">
								<form action="update_user.php" method="POST">
									<input type="hidden" name="id" value="<?php echo $_REQUEST['id'] ?>"/>	
									<div class="row gutters">

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
												<label for="fullName">الإسم</label>
												<input type="text" class="form-control" name="nom" value="<?php echo (isset($row['nom'])) ? $row['nom'] : ''; ?>">
												
											</div>
											<div class="form-group">
												<label for="fullname">اللقب</label>
												<input type="fullname" class="form-control" id="nom"name="prenom"  value="<?php echo $row["prenom"]; ?>">
											</div>
											<div class="form-group">
												<label for="phone">الهاتف</label>
												<input type="text" class="form-control" id="phone" name="num_tlfn"  value="<?php echo $row["num_tlfn"]; ?>">
											</div>
											<div class="form-group">
												<label for="username">إسم المستخدم</label>
												<input type="fullname" class="form-control" id="username" name="username"  value="<?php echo $row["username"]; ?>"    >
											</div>
											<div class="form-group">
												<label for="password">الرقم السري </label>
												<input type="password" class="form-control" id="password" name="password"  value="<?php echo $row["password"] ?>">
											</div>
                                        <div class="form-group">
												<label for="fullname">العنوان </label>
												<input type="fullname" class="form-control" id="adresse" name="adresse" placeholder="  أدخل  العنوان "    >
											</div>
											<div class="form-group">
												<label for="fullname"> الهاتف القار </label>
												<input type="fullname" class="form-control" id="num_fixe" name="num_fixe" placeholder="  أدخل  رقم الهاتف القار "    >
											</div>
											<div class="row gutters">
										<div class="col-xl-12 col-lg col-md-12 col-sm-12 col-12">
											<p><code>الباقة  </code></p>
											<select class="form-control selectpicker">
												<option>برونزي </option>
												<option>فضي</option>
												<option>ذهبي</option>
											</select>
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