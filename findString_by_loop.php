<?php 
$cars = array("Acura", "Alfa Romeo", "Aston Martin", "Audi", "Bentley", "BMW", "Bugatti", "Buick"); 
$arrLen = count($cars);

$search_inp = "BMW";

foreach ($cars as $value) {
    if ($value == $search_inp){
    	echo("Car Found! (Output from foreach)");
    	echo "<br>";
    }
}

for($i = 0; $i < $arrLen; $i++){
	if ($cars[$i] == $search_inp){
    	echo("Car Found! (Output from for loop)");
    	echo "<br>";
    }
}
?>
