<?php
	include "connectDB.php"; // connections
	
	//retreive data from register.html
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Feedback = $_POST['Feedback'];
	$userID = $_POST['user_id'];

	insert("feedback", "fName, fEmail, fComment, uID", "'$Name', '$Email', '$Feedback', '$userID'");
	
	
	//echo $sql;
	if(mysqli_affected_rows($conn)<=0)
	{
		die("<script>alert('Unable to submit ! \\nPlease Try Again!');window.history.go(-1);</script>");		
	}

	echo "<script>alert('Submitted Successfully!Thank you!!');";
	echo "window.location.href='feedback.php';</script>";
?>