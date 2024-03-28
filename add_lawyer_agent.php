<?php
include 'Config.php';
//On teste si le formulaire a été soumis
	if ((isset($_POST['nom'])) && (isset($_POST['prenom']))	&& (isset($_POST['num_tlfn'])) && (isset($_POST['email'])) && (isset($_POST['username'])&& (isset($_POST['password']) && (isset($_POST['adresse']) && (isset($_POST['num_fixe']))))))
	
	{
//on insere les données du formulaire dans la table 
  $sql=" INSERT INTO `user` (`nom`, `prenom`, `num_tlfn`, `email`, `username`, `password`, `adresse`, `num_fixe`,`type`, `etat`) 
 VALUES('$_POST[nom]','$_POST[prenom]','$_POST[num_tlfn]','$_POST[email]','$_POST[username]','".md5($_POST["password"])."','$_POST[adresse]','$_POST[num_fixe]', 3, 1 )";
mysqli_query($db, $sql);
header('Location: list_lawyer_agent.php');     
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
		<title>محامي</title>
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
									<div class="card-title">إضافة محامي جديد
									</div>
								</div>
								<div class="card-body">
								<form action="add_lawyer_agent.php" method="POST">	

									<div class="row gutters">

										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
												<label for="fullName">الإسم</label>
												<input type="text" class="form-control" id="nom" name="nom" placeholder="أدخل الإسم ">
											</div>
											<div class="form-group">
												<label for="fullname">اللقب</label>
												<input type="fullname" class="form-control" id="nom"name="prenom" placeholder="أدخل اللقب ">
											</div>
											<div class="form-group">
												<label for="phone">الهاتف</label>
												<input type="text" class="form-control" id="phone" name="num_tlfn" placeholder="أدخل رقم الهاتف">
											</div>
											<div class="form-group">
												<label for="email">العنوان الإلكتروني </label>
												<input type="email" class="form-control" id="email" name="email" placeholder="@@@">
											</div>
										
								
											<div class="form-group">
												<label for="fullname">إسم المستخدم</label>
												<input type="fullname" class="form-control" id="username" name="username" placeholder="  أدخل إسم محامي"    >
											</div>
											<div class="form-group">
												<label for="fullname">الرقم السري </label>
												<input type="password" class="form-control" id="password" name="password" placeholder="  أدخل  الرقم السري"    >
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
											<?php $sql = "SELECT * FROM pack_avocat GROUP BY id Order by nom_pack  ";
                                             $result = mysqli_query($db, $sql);
											?>
											<select class="form-control selectpicker" name="nom_pack">
												<?php while ($row = mysqli_fetch_array($result)) { ?>
													<option value="<?php echo $row["id"]; ?>"><?php echo $row["nom_pack"]; ?> </option>
												<?php } ?>
												
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