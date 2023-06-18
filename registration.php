<?php

include_once('connectDB.php');

$result=array();//array json as ajax response

$email = $_POST['email'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$hashpwd = password_hash($password, PASSWORD_DEFAULT);


    
    insert("users","uFname, uLname, uEmail, uPassword, uPhone, uType","'$fname','$lname','$email','$hashpwd','$contact',2");
?>

    <form action="login.php" method="POST" id="gologin" />
		
		</form>
		<script type="text/javascript">
			document.getElementById("gologin").submit();
		</script>
<?php
/*
function check_email($email){
	$search_email=select("*","users","WHERE `uEmail`='$email'");
	if($search_email&&count($search_email)>0){
		//return $search_email; //return array if email is registered
		return true; //return array if email is registered
	}
	else{
		return false; //return false if email is not found in database
	}
}
*/
?>