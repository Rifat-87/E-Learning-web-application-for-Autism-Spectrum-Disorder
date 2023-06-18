<?php
	include "connectDB.php"; // connections
	
	//retreive data from register.html
    if(isset($_POST['Fname'])) $Fname = $_POST['Fname'];
    if(isset($_POST['Lname'])) $Lname = $_POST['Lname'];
    if(isset($_POST['phone'])) $phone = $_POST['phone'];
    

	$userID = $_POST['user_id'];
    
    update("users", "uFname = '$Fname', uLname = '$Lname', uPhone = '$phone'", "WHERE uID = '$userID'");
	
	
	//echo $sql;
	if(mysqli_affected_rows($conn)<=0)
	{
		die("<script>alert('Unable to submit ! \\nPlease Try Again!');window.history.go(-1);</script>");		
	}

	echo "<script>alert('Submitted Successfully!Thank you!!');";
	echo "window.location.href='profile.php';</script>";
?>