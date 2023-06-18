<?php 
	session_start();
	if(isset($_SESSION['user_id'])){
		unset($_SESSION['user_id']);
	}
	
	if(isset($_SESSION['admin_status'])){
		unset($_SESSION['admin_status']);
	}
	$title = "Login";
	include("header.php");

print_r($_SESSION);
?>
<body>
<section id="main-container">
	<div class="section section-login">
		<div class="se-lo-background">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url('assets/img/login-background.png');"></li>
					<li style="background-image: url('assets/img/login-background-2.png');"></li>
				</ul>
			</div>
		</div>
		<div class="se-lo-main">
			<div class="section container-fluid pt5 pb5">
				<div class="auto">
					<div class="se-lo-box fz-14 text-center">
						<div class="auto">
							<div class="bp-img text-center"><img src="assets/img/logofyp.png" width="230" alt=""></div>
							<div class="mt4">
								<form id="loginform" action="loginuser.php" method="POST">
									<div class="form-group">
										<input class="form-control com_input" type="text" name="email" id="email" value="" placeholder="Email Address">
									</div>
									<div class="form-group com_password">
										<input class="form-control com_input" type="password" name="password" id="password" value="" placeholder="Password">
									</div>
									<div class="form-group">
										<input class="btn btn-short btn-wide btn-blue" type="Submit" name="login" id="login"></input>
									</div>
									<div class="form-group mt1">
										<a class="link-blue-2 link-underline fz-12" href="#">Forgot Password?</a>
									</div>
								</form>
							</div>
							<hr class="bg-blue-6 mt2 mb2">
							<p class="co-blue-2">Not E-Learner member yet? <br>Signup with us now! </p>
							<div class="mt2">
								<a class="btn btn-short btn-wide btn-orange" href="register.php">Create Account</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- popups: error message -->
	<div style="position: relative; height: 0; overflow: hidden;">
		<div id="verify_output" class="popup-content width-2 fz-14 text-center">
			<div class="po-lo-main">
				<p id="output_message"></p>	
				<div class="mt4">
					<a id="output_button" class="btn btn-short btn-blue" href="#">Okay</a>
				</div>
			</div>
		</div>
	</div>
﻿</section>
<footer></footer>
<script src="assets/js/lib/jquery.min.js"></script>
<script src="assets/js/lib/jquery-ui.min.js"></script>
<script src="assets/js/custom.js"></script>

<script> type="text/javascript">

	$(document).ready(function() {
		$("#login").on('click', function () {
			var email = $("#email").val();
			var password = $("#password").val();
			

			if (email == "" || password == "") 
			$("#output_message").text("Please key in email and password");
			$('#output_button').click(function(){
			close_popup();
			});
			verification_message();

			});	
		});
		


</script>

</body>
</html>
