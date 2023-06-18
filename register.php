<?php 
$title = "Register";
include("header.php");
require_once("connectDB.php");


?>


<section id="main-wrapper" class="animate" anim-control="parent">
	<section id="main-container">
		
		<div class="section section-login">
			<div class="se-lo-background">
				<div class="flexslider">
					<ul class="slides">
						<li style="background-size: contain; background-image: url('assets/img/login-background.png');"></li>
						<li style="background-size: contain; background-image: url('assets/img/login-background-2.png');"></li>
						
					</ul>
				</div>
			</div>
			<div class="se-lo-main">
				<div class="section container-fluid pt5 pb5">
					<div class="auto">
						<div class="se-lo-box box-wide box-2 fz-14">
							
							<form id="registerForm" method="POST" action="registration.php">
								<div class="mt4">
									<div class="row row-small pull-bottom">
										<div class="col-md-4 mb1">
											<div class="form-group">
												<label class="mb-2">Please enter email address </label>
												<input class="form-control com_input" type="text" id="email" name="email" value="" placeholder="Email Address">
												<div  style="color: red; margin-left: 15px;" id ='email_error'></div>
											</div>
											
										</div>
									</div>
								</div>
								<div class="mt3">
									<h4 class="fz-14 co-blue-2 mb1"><strong>Create Password</strong></h4>
									<hr class="bg-gray">
									<div class="row row-small-2 pull-bottom">
										<div class="col-md-4 mb1">
											<div class="form-group">
												<label class="fz-12 mb-2">Password</label>
												<div class="com_password">
													<input class="form-control com_input" type="password" name="password" id="password" value="" placeholder="Enter Password">
												</div>
												<div  style="color: red; margin-left: 15px;" id ='password_error'></div>
												<div class="form-group-notes mt1 fz-12">
													<p id="p_character" class="co-green"><span id="p_character_check" class="fas fa-check-circle"></span> Must contain 5-10 characters</p>
													<p id="p_upper" class="co-orange"><span id="p_upper_check" class="fas fa-times-circle"></span> Uppercase characters (A-Z)</p>
													<p id="p_lower" class="co-orange"><span id="p_lower_check" class="fas fa-times-circle"></span> Lowercase characters (a-z)</p>
													<p id="p_number" class="co-orange"><span id="p_number_check" class="fas fa-times-circle"></span> Numbers (0-9)</p>
												</div>
											</div>
										</div>
										<div class="col-md-4 mb1">
											<div class="form-group">
												<label class="fz-12 mb-2">Confirm Password<span class="co-red">*</span></label>
												<div class="com_password">
													<input class="form-control com_input" type="password" id="con_password" value="" placeholder="Re-enter Password">
												</div>
												<div  style="color: red; margin-left: 15px;" id ='con_password_error'></div>
											</div>
										</div>
									</div>
								</div>
								<div class="mt3">
									<h4 class="fz-14 co-blue-2 mb1"><strong>Personal Detail</strong></h4>
									<div class="in-co-par fz-14 co-blue-2">
										<p>Please key in personal details </p>
									</div>
									<hr class="bg-gray">
									<div class="row row-small-2 pull-bottom">
										
										<div class="col-md-4 mb1">
											<div class="form-group">
												<label class="fz-12 mb-2">First & Middle Name<span class="co-red">*</span></label>
												<input class="form-control com_input" type="text" id="fname" name="fname" value="" placeholder="First Name / Middle Name">
												<div  style="color: red; margin-left: 15px;" id ='fname_error'></div>
											</div>
										</div>
										<div class="col-md-4 mb1">
											<div class="form-group">
												<label class="fz-12 mb-2">Last Name<span class="co-red">*</span></label>
												<input class="form-control com_input" type="text" id="lname" name="lname" value="" placeholder="Last Name">
												<div  style="color: red; margin-left: 15px;" id ='lname_error'></div>
											</div>
										</div>
										
									</div>
								</div>
								<div class="mt3">
									<h4 class="fz-14 co-blue-2 mb1"><strong>Contact Information</strong></h4>
									<hr class="bg-gray">
									<div class="row row-small-2 pull-bottom">
										
										<div class="col-md-4 mb1">
											<div class="form-group">
												<label class="fz-12 mb-2">Contact Number</label>
												<input class="form-control com_input" type="text" id="contact" name="contact" value="" placeholder="Eg. 1012345678">
												<div  style="color: red; margin-left: 15px;" id ='contact_error'></div>
											</div>
										</div>
										<div class="col-12 mt1">
											<label class="tr-pa-checkbox">
												<input type="checkbox" type="checkbox" id="tnc" value="" Required>
												<span>I hereby acknowledge that I have read, understand and fully accept the stated Terms and Conditions.</span>
											</label>
											<div  style="color: red; margin-left: 15px;" id ='tnc_error'></div>
											<div class="mt15">
												<button class="btn btn-short btn-width-2 btn-orange fz-14" id="sign_up">Sign Up</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- popups: message -->
		<div style="position: relative; height: 0; overflow: hidden;">
			<div id="verify_output" class="popup-content width-2 fz-14 text-center">
				<div class="po-lo-main">
					<p id="output_message"></p>	
					<div class="mt4">
						<a id="output_button" class="btn btn-short btn-blue" href="#"> Okay </a>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
<footer></footer>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="assets/js/lib/jquery.min.js"></script>
<script src="assets/js/lib/jquery-ui.min.js"></script>
<script src="assets/js/custom.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<script>

function tnc() {
	document.getElementById("tnc").required = true;
	
}
//password format validation
var pass_validation=false;
$('#password').on('input', function(event){
	var input=$("#password").val();
	
	if(input.length>=5 && input.length<=10 && /[A-Z]/.test(input) && /[a-z]/.test(input) && /[0-9]/.test(input) && /[0-9]/.test(input)){
		document.getElementById("p_character").className="co-green";
		document.getElementById("p_upper").className="co-green";
		document.getElementById("p_lower").className="co-green";
		document.getElementById("p_number").className="co-green";
		document.getElementById("p_character_check").className="fas fa-check-circle";
		document.getElementById("p_upper_check").className="fas fa-check-circle";
		document.getElementById("p_lower_check").className="fas fa-check-circle";
		document.getElementById("p_number_check").className="fas fa-check-circle";
		pass_validation=true;
	}
	else{
		if(input.length<=0){
			document.getElementById("password_error").innerHTML="Please enter a valid password";
		}
		else{
			document.getElementById("password_error").innerHTML="";
		}
		
		//check number of characters for password
		if(input.length<5 || input.length>10){
			document.getElementById("p_character").className="co-orange";
			document.getElementById("p_character_check").className="fas fa-times-circle";
		}
		else{
			document.getElementById("p_character").className="co-green";
			document.getElementById("p_character_check").className="fas fa-check-circle";
		}	
			
		//check if password contains uppercase alphabet
		if (/[A-Z]/.test(input)) {
			document.getElementById("p_upper").className="co-green";
			document.getElementById("p_upper_check").className="fas fa-check-circle";
		}
		else{
			document.getElementById("p_upper").className="co-orange";
			document.getElementById("p_upper_check").className="fas fa-times-circle";
		}
			
		//check if password contains lowercase alphabet
		if (/[a-z]/.test(input)) {
			document.getElementById("p_lower").className="co-green";
			document.getElementById("p_lower_check").className="fas fa-check-circle";
		}
		else{
			document.getElementById("p_lower").className="co-orange";
			document.getElementById("p_lower_check").className="fas fa-times-circle";
		}
		
		//check if password contains number
		if (/[0-9]/.test(input)){
			document.getElementById("p_number").className="co-green";
			document.getElementById("p_number_check").className="fas fa-check-circle";
		}
		else{
			document.getElementById("p_number").className="co-orange";
			document.getElementById("p_number_check").className="fas fa-times-circle";
		}
	}	
});

//input validation for first_name and last_name fields to enter english alphabets only
$('.name').on('input', function(event){
	//this.value = this.value.replace(/[0-9]/g,'');
	var str = $(this).val();
	var res = str.replace(/\d+|^\s+$/g, '').replace(/\s+/g, ' ');
	$(this).val(res);	
});


//input validation for contact number field to enter numbers only
$('#contact').on('input', function(event){
    this.value = this.value.replace(/[^0-9]/g,'');
});

$('#sign_up').click(function(){
	var email = $("#email").val();
	var password = $("#password").val();
	var con_password = $("#con_password").val();
	var fname=$("#fname").val();
	var lname=$("#lname").val();
	var tnc = $("#tnc").is(':checked');
	var contact = $("#contact").val();
	var re=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var validation=true;




	//check email format
	if(!re.test(email)){
		$("#email_error").html("Please enter a valid email address");
		validation=false;
	}
	else{
		$("#email_error").html("");
	}

	//check password format
	if(pass_validation==false){
		$("#password_error").html("Please enter a valid password");
		validation=false;
	}
	else{
		$("#password_error").html("");
	}
	//check if confirm password is same as password
	if(con_password!=password){
		$("#con_password_error").html("Confirm password must be same as password");
		validation=false;
	}
	else{
		$("#con_password_error").html("");
	}


	//name check
	if(fname.length<1){
		$("#fname_error").html("Please enter valid name");
		validation=false;
	}else{
		$("#fname_error").html("");
	}

	//last
	if(lname.length<1){
		$("#lname_error").html("Please enter valid name");
		validation=false;
	}else{
		$("#lname_error").html("");
	}

	//contact error msg
	if(contact.length<9 || contact.length>13){
		$("#contact_error").html("Please enter a valid contact number");
		validation=false;
	}
	else{
		$("#contact_error").html("");
	}

	//tearms and con
	if(tnc==false){
	$("#tnc_error").html("Please accept the terms and conditions");
	validation=false;
	}else{
		$("#tnc_error").html("");
	}

	if(validation==true){
		$("#output_message").text("YES");
		$('#output_button').click(function(){
			close_popup();
		});
		 
		
	}else{
		$("#output_message").text("There's invalid data, please make sure all the data entered are valid");
		$('#output_button').click(function(){
			close_popup();
		});
	}
	verification_message();

});

</script>
</body>
</html>