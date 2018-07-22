<?php 
	
	$id = $_GET['id'];


	//include dbconnect.php
	include('dbconnect.php');

	//create query 

	$query = "DELETE FROM books WHERE book_id='$id' ";

	if (mysqli_query($connect,$query)) {
			header('Location:index.php');
		}	
		else{
			echo "There is error in your query";
		}
?>