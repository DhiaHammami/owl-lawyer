<?php include("Config.php");
	if(!isset($_SESSION['id_user'])){
		//header("location: login.php");
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
		<title> الحساب
</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="fonts/style.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="vendor/daterange/daterange.css" />
		<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css" />
		<link rel="stylesheet" href="vendor/chartist/css/chartist-custom.css" />	
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4.css" />
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4-custom.css" />
		<link href="vendor/datatables/buttons.bs.css" rel="stylesheet" />	
	<!-- Calendar css -->
    <link rel="stylesheet" href="vendor/calendar/css/core/main.css" />
		<link rel="stylesheet" href="vendor/calendar/css/list/main.css" />
	</head>
	<body>
		<?php include 'logo.php'; ?>
		<!-- Container fluid start -->
		<div class="container-fluid">

			<?php include 'header.php' ?>

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">


				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
					
						<li class="breadcrumb-item active"> تحديث الحساب</li>
					</ol>

					<ul class="app-actions">
						<li>
							<a href="#" id="reportrange">
								<span class="range-text"></span>
								<i class="icon-chevron-down"></i>	
							</a>
						</li>
						<li>
							<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
								<i class="icon-print"></i>
							</a>
						</li>
						<li>
							<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download CSV">
								<i class="icon-cloud_download"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Page header end -->


				<!-- Content wrapper start -->
				<div class="content-wrapper">

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-body">
									<div class="account-settings">
										<div class="user-profile">
											<div class="user-avatar">
												<img src="img/dhia.png" alt="Wafi Admin" />
											</div>
											<h5 class="user-name">Dhia Hammami</h5>
											<h6 class="user-email">dhiahammami100@OwlCom.com</h6>
										</div>
										<div class="setting-links">
											<a href="chat.html">
												<i class="icon-chat"></i>
												الرسائل
											</a>
											<a href="tasks.html">
												<i class="icon-date_range"></i>
												المهام
											</a>
											<a href="documents.html">
												<i class="icon-file-text"></i>
												الوثائق
											</a>
											<a href="faq.html">
												<i class="icon-info"></i>
												FAQ's
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-header">
									<div class="card-title"> تحديث الحساب</div>
								</div>
								<div class="card-body">
									<div class="row gutters">
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="fullName">الإسم الكامل </label>
												<input type="text" class="form-control" id="fullName" placeholder="Enter full name">
											</div>
											<div class="form-group">
												<label for="eMail">البريد الإلكتروني</label>
												<input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
											</div>
											<div class="form-group">
												<label for="phone">رقم الهاتف</label>
												<input type="text" class="form-control" id="phone" placeholder="Enter phone number">
											</div>
											<div class="form-group">
												<label for="website"> موقع الواب</label>
												<input type="url" class="form-control" id="website" placeholder="Website url">
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="addRess">الولاية</label>
												<input type="text" class="form-control" id="addRess" placeholder="Enter Address">
											</div>
											<div class="form-group">
												<label for="ciTy">المدينة</label>
												<input type="name" class="form-control" id="ciTy" placeholder="Enter City">
											</div>
						
											<div class="form-group">
												<label for="zIp">البريد</label>
												<input type="number" class="form-control" id="zIp" placeholder="Website ZIP">
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="text-right">
												<button type="button" id="submit" name="submit" class="btn btn-dark">إلغاء</button>
												<button type="button" id="submit" name="submit" class="btn btn-success"> تحديث</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

				</div>
				<!-- Content wrapper end -->


			</div>
			<!-- *************
				************ Main container end *************
			************* -->


			<!-- Footer start -->
			<footer class="main-footer">© OwlCom 2021</footer>
			<!-- Footer end -->


		</div>

		<!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
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

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>

<!-- Mirrored from bootstrap.gallery/wafi-admin/dashboard-v2/topbar-rtl/account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Feb 2021 10:23:02 GMT -->
</html>