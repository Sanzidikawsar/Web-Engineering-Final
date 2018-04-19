<?php
setcookie("username", "John Carter", time()+30*24*60*60);

echo $_COOKIE["username"]."<br>"."<br>";


echo("Showing in another way (Best practice)-"."<br>");
if(isset($_COOKIE["username"])){
    echo "Hi " . $_COOKIE["username"]."<br>";
} else{
    echo "Welcome Guest!"."<br>";
}

//by removing the comment of below, nothing will be showed. here cookie deleted-

//setcookie("username", "", time()-3600);
//echo $_COOKIE["username"]."<br>"."<br>";

?>

