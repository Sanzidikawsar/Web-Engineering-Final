<?php
$host = 'localhost';
$name = 'root';
$pass = '122';
$db = 'final';

$con = mysqli_connect($host, $name, $pass) or die ("DB error!");
mysqli_select_db($con, $db);

if(isset($_POST['submit'])){
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	
	$q = "INSERT INTO `login`(`username`, `password`) VALUES ('$uname','$pass')";
	$run = mysqli_query($con, $q);
	
	if($run){
		echo("User added!");
	}else{
		echo("Query not working!");
	}
}
?>
