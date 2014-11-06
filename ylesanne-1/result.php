<?php 
	include "index.php";
	if ($age >= 18 ) {
	echo "Tere, {$username}! Olete lehekülje vaatamiseks piisavalt vana. "; 
	}
	else {
	echo "Tere, {$username}! Kahjuks olete liiga noor selle lehekülje külastamiseks."; 
	}
	if (!isset($username) || $username ==""){
	echo 'Palun sisesta kasutajanimi!'; 
	}
	if (!isset($age) || $age == ""){
	echo 'Palun sisesta vanus!'; 
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päringu tagasiside</title>
  </head>

  <body>
    <a href="index.php">Mine tagasi</a>
  </body>
</html>
