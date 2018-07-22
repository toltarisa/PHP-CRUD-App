<?php 

		//including dbconnect.php

	include('dbconnect.php');

	$id = $_GET['id'];
	$title = $_GET['btitle'];
	$price = $_GET['bprice'];

	//create query

	$query = "UPDATE books SET book_title = '$title', book_price = '$price' WHERE book_id = '$id' ";
	if (mysqli_query($connect,$query)) {
		//redirect page from edit.php to index.php
		header('Location:index.php');

	}
	else{
		echo " There is error in your query";
	}

	mysqli_close($connect);

?>