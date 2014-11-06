<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 3 - POST päringu tagasiside</title>
  </head>

  <body>
    <!-- Kustuta see funktsioon (print_r() koos <pre> elemendiga) pärast seda, kui oled veendunud, et programm töötab. -->
    <pre><?php print_r($_POST); ?></pre>
	<?php 
	
	
	if ($username = $_POST ["username"] && $_POST["sex"]){
	echo "Tere, {$username}, tundub, et olete {$sex}";
	}
	elseif (empty($sex) ) {
	echo	"Palun minge tagasi ja valige sugu."; 
	}
	elseif (empty($username)) {
	echo "Palun minge tagasi ja sisestage nimi.";
	}
	elseif (empty($username) && empty($sex)) {
	echo "Palun minge tagasi ja täitke väljad.";
	}
	
	?>

    <div><a href="index.php">Mine tagasi</a></div>
  </body>
</html>
