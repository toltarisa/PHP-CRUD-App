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
		//Add Connection
		include('dbconnect.php'); 

		//Add query
		$query = "SELECT * FROM books";

		$result = mysqli_query($connect,$query);
	?>
	<div class="container bg-info" style="padding-top:20px; padding-bottom:20px;">
		<h3>Bootstrap & Php CRUD App</h3>
		<div class="row">
			<div class="col-sm-4">
				<h3>Insert Book</h3>
				<form role="form" method="POST" action="insert.php">
					<div class="form-group"> 
						<label>Book Title</label>
						<input type="text" name="btitle" class="form-control">
					</div>

					<div class="form-group">
						<label>Book Price</label>
						<input type="text" name="bprice" class="form-control">
					</div>

					<button type="submit" class="btn btn-info btn-block">Add Books</button>
				</form>
			</div>
			<div class="col-sm-8">
				<h3>Display Records</h3>
				<table class="table">
					<thread>
						<tr>
							<th>Book Title</th>
							<th>Book Price</th>
							<th>CRUD Actions</th>
						</tr>
					</thread>
					<tbody>
						<?php 
							while($row = mysqli_fetch_assoc($result)){

							

						?>
						<tr>
							<td><?php echo $row['book_title']; ?></td>
							<td><?php echo $row['book_price']; ?></td>
							<td>
								<a href="editform.php?id=<?php echo $row['book_id']; ?>" class="btn btn-success" role="button"> Edit Book</a>
								<a href="delete.php?id=<?php echo $row['book_id']; ?>" class="btn btn-danger" role="button"> Delete Book</a>

							</td>
						</tr>
						<?php 
							}
							
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>