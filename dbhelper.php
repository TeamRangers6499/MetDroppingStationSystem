<?php

$sname = "localhost";
$unmae = "root";
$password ="";

$db_name = "system";

$conn = mysqli_connect($sname, $unmae, $password, $db_name );

if (!$conn) {

	echo "Connecttion Failed!";

}

?>