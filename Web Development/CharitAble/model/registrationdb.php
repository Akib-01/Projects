<?php  
$server="localhost";
$user="root";
$dbpass="";
$databasename="website";

$connect= new Mysqli($server,$user,$dbpass,$databasename);

if ($connect->connect_error) {
	die("Connection failed" . $connect->connect_error);
}


?>