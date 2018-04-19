<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<body>
		<?php
		$_SESSION["favcolor"] = "green";
		$_SESSION["favanimal"] = "cat";
		?>
	</body>
</html>

<?php
echo "Favorite color is " . $_SESSION["favcolor"] . "<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . "<br>";
?>


<?php
session_unset(); 
session_destroy(); 
?>

<?php
echo("<br>"."No more values of session variables.."."<br>");
echo "Favorite color is " . $_SESSION["favcolor"] . "<br>";
echo "Favorite animal is " . $_SESSION["favanimal"];
?>


