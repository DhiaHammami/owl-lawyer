<?php
   include("Config.php");
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM user WHERE username = '$myusername' and password = ".md5('$mypassword')." and etat=1";
     // $type = "SELECT type from user where username '$myusername';
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
	  
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {

         $_SESSION['login_user'] = $myusername;
         $_SESSION['id_user'] = $row["id"];
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
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

		<!-- Title -->
		<title>Login</title>
		
		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<!-- Master CSS -->
		<link rel="stylesheet" href="css/main.css" />

	</head>

	<body class="authentication">

		<!-- Container start -->
		<div class="container">
			
			<form method="POST" name="Login_Form">
				<div class="row justify-content-md-center">
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<a href="#" class="login-logo">
									<img src="img/OWL-LAWYER-01.png"style="margin-left:auto;margin-right:auto" alt="Wafi Admin Dashboard" />
								</a>
								<h5>تسجيل الدخول</h5>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="عنوان البريد الاكتروني" name="username" id="username" required/>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="كلمة السر" name="password" id="password" required/>
								</div>
								<div class="actions mb-4">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="remember_pwd" value="LOGIN">
										
               
										<label class="custom-control-label" for="remember_pwd">البقاء متصلا</label>
									</div>
									
									<input type="submit" value=تسجيل الدخول" class="btn btn-primary"style="background-color=#563d7c" />								</div>
							 			<div class="forgot-pwd">
									<a class="link" href="forgot-pwd.php">هل نسيت كلمة السر ؟</a>
								</div>
								<hr>
								
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
		<!-- Container end -->

	</body>

</html>