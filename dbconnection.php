<?php
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "courierdb";

$dbcon = mysqli_connect($sname, $unmae, $password, $db_name);
if (!$dbcon) {
	echo "Connection failed!";
}

  /*  $dbcon = mysqli_connect('localhost','root','','courierdb');

    if($dbcon==false)
    {
        echo "Database is not Connected!";
    }
        */
   
?>