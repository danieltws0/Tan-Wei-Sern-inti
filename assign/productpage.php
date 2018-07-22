<?php

$conn = mysqli_connect('localhost', 'root' ,null, 'customer');

if(!$conn){
	die("Connection failed : "  . mysql_error());
}

$query = "SELECT * FROM addproduct";
$result = mysqli_query($conn, $query);

if (!$result) {
	die("Failed to query : " . mysql_error());
}

mysqli_close($conn);

?>

<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
		
	</head>
	
	<body>

		<div class="float-right">
			<input type="button" class = "btn btn-primary" onclick="location.href='http://localhost/assign/addproduct.html';" value="Add A Product" />
		</div>
		
		<h1> Customer Products </h1>
		<br>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Company name</th>
					<th scope="col">Product Name</th>
					<th scope="col">Unit Price(RM)</th>
					<th scope="col">Description</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($result as $row): ?>
				<tr>
					<td><?php echo $row["companyName"]; ?></td>
					<td><?php echo $row["productName"]; ?></td>
					<td><?php echo $row["productPrice"]; ?></td>
					<td><?php echo $row["productDescription"]; ?></td>
					<td>
						<div class="btn-group">
								<button class="btn btn-primary dropdown-toggle" href="#" data-toggle="dropdown">
					
								</button>
								<ul class="dropdown-menu" role="menu" style="padding: 15px; min-width: 150px;">   
									<li>View Info</li>
									<li>Edit</li>
									<li>Delete</li>
									<li>Print</li>
								</ul>
						</div>
					</td>
				</tr>
				<?php endforeach; ?>
				
			</tbody>
		</table>
		<br><br><br>
		<div class="text-center btnDiv">
			<a href="http://localhost/assign/Homepage/Homepage.php" class="btn btn-primary btn-xl">Back to Homepage</a>
		</div>

	</body>
</html>