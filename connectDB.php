<?php

//$host = "localhost";
//$user = "myscandasky";
//$pw = "sasIqAGO";
//$db = "db_scandasky"; 
$homePath = "localhost/fyp";
$host = "127.0.0.1";
$user = "root";
$pw = "";
$db = "fyp"; 
$conn = mysqli_connect($host, $user, $pw, $db);

//retrieve data from databse
function select($column,$table,$condition){
	global $conn;
	$query="SELECT $column FROM $table $condition";
	//echo $query."<br>\n";
	$result = mysqli_query($conn, $query);
	if($result && mysqli_num_rows($result)>0){
		for ($i=0;$i<mysqli_num_rows($result);$i++){
			$row[$i] = mysqli_fetch_assoc($result);
		}
		return $row;
	}
	else{
		return false;
	}
}

function insert($table,$column,$value){
	global $conn;
	$query="INSERT INTO $table ($column) VALUES ($value)";
	//echo $query."<br>\n";
	$conn->query($query) or die($conn->error);
	return;
}

function insertReplace($table,$column,$value){
	global $conn;
	$query="INSERT REPLACE INTO $table ($column) VALUES ($value)";
	//echo $query."<br>\n";
	$conn->query($query) or die($conn->error);
	return;
}	

function update($table,$newData,$condition){
	global $conn;
	$query="UPDATE $table SET $newData $condition";
	//echo $query."<br>\n";
	$conn->query($query) or die($conn->error);
	return;
}	
?>