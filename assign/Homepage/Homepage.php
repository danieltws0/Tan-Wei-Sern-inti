<?php session_start(); ?>



<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
		<title>Navigation Menu</title>
		<link rel = "stylesheet" type = "text/css" href = "hpstyle.css">
	</head>
	
	<body background = "wallpaper_1.jpeg" >
	<div> 
			<div class="float-right">
				<input type="button" class = "btn btn-primary" onclick="location.href='http://localhost/assign/logout.php';" value="Log Out" />
				
			</div>
		<h1 style="color: white">Welcome, <?php echo $_SESSION['user']; ?></h1>
		<ul>
			<li><a href = "http://localhost/assign/Homepage/Homepage.php">Home</a></li>
			<li><a href = "http://localhost/assign/quotation.php">Quotation</a></li>
			<li><a href = "">Purchase Order</a></li>
			<li><a href = "">Invoice</a></li>
			<li><a href = "http://localhost/assign/customerpage.php">Customer</a></li>
			<li><a href = "http://localhost/assign/productpage.php">Product</a></li>

		</ul>
	</body>
</html>