<?php 

	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "bookshop";


	$connect = mysqli_connect($host,$user,$pass,$dbname);
	if(!$connect){
		die('There was Error occured');
	}
	
		

?>

