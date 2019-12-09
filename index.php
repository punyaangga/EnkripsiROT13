<!DOCTYPE html>
<html lang="en">
<head>
	<title>Enkripsi Dengan ROT 13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<!--php-->
	<?php 
		session_start();
		if (isset($_SESSION["Test"])) {
			$Dekrip = $_SESSION["NilaiDekrip"];
			$Enkrip = $_SESSION["NilaiEnkrip"];
		}else{
			$Dekrip = "";
			$Enkrip = "";
		}
	 ?>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Enkripsi Data Dengan ROT 13
				</span>
				<form class="login100-form validate-form p-b-33 p-t-7" method="POST" action="tes.php">

					<div class="wrap-input100 validate-input" data-validate = "Plainteks belum dimasukan" >
						<input class="input100" type="text" name="plainteks" placeholder="Masukan Plainteks" value="<?php echo $Dekrip; ?>" >
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
			
					<div class="wrap-input100" >
						<input class="input100" type="dialog" placeholder="hasil enkrip" name="enkripsi" value="<?php echo $Enkrip; ?>" readonly>
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
				

					<div class="wrap-input100" >
						<input class="input100" type="text" placeholder ="hasil dekrip"name="enkripsi" value="<?php echo $Dekrip; ?>" readonly>
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Submit
						</button>
					</div>
				
					<div class="container-login100-form-btn m-t-32">
				<center><a href="stream.php"><submit class="login100-form-btn" width="10%">Stream Chiper</button></a></center>
			</div>
				</form>
			
						
				
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>