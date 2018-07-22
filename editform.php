<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
	<body>

		<?php 
			$id = $_GET['id'];
			 

			//dbconnect
			include('dbconnect.php');

			//Adding query

			$query = "SELECT * FROM books WHERE book_id='$id'";
			$result = mysqli_query($connect,$query);

			
		
		?>

	<div class="container bg-info" style="padding-top:20px;">
		<h2>Edit Books</h2>
		<form role="form" action="edit.php">
			<?php 
				while($row = mysqli_fetch_assoc($result)){
		

			?>
			<input type="hidden" name="id" value="<?php echo $row['book_id']; ?>">
			<div class="form-group">
				<label>Book Title</label>
				<input type="text" name="btitle" class="form-control" value="<?php echo $row['book_title']; ?>">

			</div>

			<div class="form-group">
				<label>Book Price</label>
				<input type="text" name="bprice" class="form-control" value="<?php echo $row['book_price']; ?>">
			</div>
			<button type="submit" class="btn btn-warning btn-lg btn-block">Edit Book</button>
			<?php 
				mysqli_close($connect);
				}
			?>
		</form>
	</div>
	</body>
</html>