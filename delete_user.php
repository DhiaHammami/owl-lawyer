<?php
include 'Config.php';
//On teste si le formulaire a été soumis
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM user WHERE id=$id");
	header('location: index.php');
}
	
$sql = "DELETE from user  WHERE id='$_REQUEST[id]'";
$result = mysqli_query($db, $sql);
header('Location: list_user.php');     


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
<form class="form-horizontal" action="delete.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $id;?>"/>
                      
Are you sure to delete ?

<br />
<div class="form-actions">
                          <button type="submit" class="btn btn-danger">Yes</button>
                          <a class="btn" href="index.php">No</a>
</div>
<p>

                    </form>

<body>
		<?php include 'logo.php'; ?>
		<!-- Container fluid start -->
		<div class="container-fluid">



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