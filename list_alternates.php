<?php
include 'Config.php';
//on insere les données du formulaire dans la table 
 $sql = "SELECT * FROM alternates  GROUP BY id_alt ";
//$sql ="SELECT user.id as id, nom,prenom,num_tlfn,date_insert,username,adresse,num_fixe,nb_jours FROM user, pack_avocat WHERE user.id = pack_avocat.id GROUP BY id Order by nom , prenom ,num_tlfn,date_insert,username,adresse,num_fixe,nb_jours";

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
			<!-- Datatable CSS -->
			<link href='DataTables/datatables.min.css' rel='stylesheet' type='text/css'>

<!-- jQuery Library -->
<script src="jquery-3.3.1.min.js"></script>

<!-- Datatable JS -->
<script src="DataTables/datatables.min.js"></script>
<!-- Data Tables -->
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
					<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">المنوبون</li>
						<li class="breadcrumb-item active"> قائمة المنوبون</li>
					</ol>
					</div>
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">	
							<div class="table-container">  
								<div class="t-header"> 	  قائمة المنوبون 	</div>
                                
								<div class="table-responsive">
									<table id="basicExample" class="table custom-table">
										<thead>
											<tr>
												<th>الإسم </th>
												<th>الهاتف</th>
												<th>العنوان </th>
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
													<td><?php echo $row["nom_alt"]; ?></td>
													<td><?php echo $row["num_tel_alt"]; ?></td>
													<td><?php echo $row["adresse_alt"]; ?></td>
													<td><a href="update_alternates.php?id_alt=<?php echo $row["id_alt"]; ?>"><i class="icon-edit"  style="color: black;" ></i></a></td>
													<td><a href="delete_alternates.php?id_alt=<?php echo $row["id_alt"]; ?>"><i class="icon-cancel" style="color: black;" ></i></a></td>													
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
	<!-- Slimscroll JS -->
	<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
		<script src="vendor/slimscroll/slimscroll.min.js"></script>
		<script src="vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Daterange -->
		<script src="vendor/daterange/daterange.js"></script>
		<script src="vendor/daterange/custom-daterange.js"></script>

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

		<!-- Main Js Required -->
		<script src="js/main.js"></script>
	</body>
</html>