<?php 
	
	//Add dbConnect
	include('dbconnect.php');
	include('index.php');

	$title = $_POST['btitle'];
	$price = $_POST['bprice'];

	//Create QUERY

	$query = "INSERT INTO books(book_title,book_price) VALUES('$title','$price')";
	if(mysqli_query($connect,$query)){
		header("Location:index.php");
	}
	else{
		echo "Error in Query";
	}

	

	

?>