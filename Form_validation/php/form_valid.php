<html>
	<head>
	</head>
	
	<body>
		<?php
			if(isset($_POST['submit'])){
				$uid = $_POST['uid'];
				$pass = $_POST['pass'];
		
				if($uid==""){
					echo("Please fill the User ID field");
				}
				elseif($pass==""){
					echo("Please fill the Password field");
				}
				elseif(strlen($pass) < 6){
					echo("Enter the Password more then 6 characters");
				}
				else{
					echo("Welcome!");
				}
			}	
		?>
	</body>
</html>

