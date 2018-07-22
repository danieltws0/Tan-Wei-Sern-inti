<?php
	SESSION_START();
	
	$_SESSION = array();
	session_destroy();
	echo 'You have successfully logged out';
?>

<?php
	include("loginserver.php");
?>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	</head>
	
	<body>
		<br>
		<h1 align="center">Veecho Tech Invoicing System</h1>
		<br>
		<center><img src="VeecoTechlogo.jpg" width="177" height="177"></center>
		<br>
		<div class ="container">
			<div class = "col-sm-10" style="width: 600px; margin-left: 250px; margin-top: 50px;">
				<div class "jumbotron">
					<div class = "form-group">
						<h3> Login </h3>
					</div>
					
					<form class="form-horrizontal" style="margin-left: 50 px;" method = "post">
						<div class = "form-group input-group">
							<input type="text" class= "form-control" id = "user" name="user" placeholder= "Enter Email...">
						</div>
						
						<div class = "form-group input-group">
							<input type="password" class= "form-control" id = "pass" name="pass" placeholder= "Enter Password...">
						</div>
						
						<span><?php echo $error;?></span>
						<div class="form-group">
							<button type = "submit" class="btn btn-primary" name = "submit">Login</button>		
						</div>
						
					</form>
					
				</div>
			</div>
		</div>
			
	
	</body>
</html>
	