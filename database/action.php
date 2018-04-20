

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



<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="action.php", method="post">
			Enter Username: <input type="text", name="u_del"></input>
			<input type="submit", name="delete", value="Delete"></input>
		</form>
	</body>
	
	
</html>

<?php
$host = 'localhost';
$name = 'root';
$pass = '122';
$db = 'final';

$con = mysqli_connect($host, $name, $pass) or die ("DB error!");
mysqli_select_db($con, $db);

if(isset($_POST['delete'])){
	$del = $_POST['u_del'];
	
	$q = "DELETE FROM `login` WHERE username='$del'";
	$run = mysqli_query($con, $q);
	
	if($run){
		echo("User removed!");
	}else{
		echo("Query not working!");
	}
}
?>
