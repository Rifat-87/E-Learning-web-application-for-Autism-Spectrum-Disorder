<?php 
	session_start();
	
	$title = "Manage Account";
	include("header.php");

//print_r($_SESSION);
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
              
              <h1 style="font-size: 3rem; font-weight: bold;" class="co-blue-2">Edit Account </h1>
							<div class="mt4">
								<form action="profileupdate.php" method="POST">
									<div class="form-group">
										<input class="form-control com_input" type="text" name="Fname" value="" placeholder="First Name">
									</div>
									<div class="form-group">
										<input class="form-control com_input" type="text" name="Lname" value="" placeholder="Last Name">
                                    </div>
                                    <div class="form-group">
										<input class="form-control com_input" type="text" name="phone" value="" placeholder="ex.01126...">
									</div>
									<div class="form-group">
                                     <input class="form-control com_input" type="hidden" name="user_id" value="<?php echo $userID; ?>" placeholder="Comment"> 
										<button class="btn btn-short btn-wide btn-blue">Submit</button>
									</div>
								</form>
							</div>
							<hr class="bg-blue-6 mt2 mb2">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
﻿</section>
<footer></footer>
<script src="assets/js/lib/jquery.min.js"></script>
<script src="assets/js/lib/jquery-ui.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>