<?php
	
	$error = ''; //Variable to store error message;
	if(isset($_POST['submit'])){
		if(empty($_POST['user']) || empty($_POST['pass'])){
			$error = "Username or Password is Invalid";
		}
		else{
			//Define User and Password
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			
			//Establishing Connection with server
			$conn = mysqli_connect("localhost", "root", null);
			$db = mysqli_select_db($conn, "login");
			
			//sql query to fetch information of registered user and finds user match
			$query = mysqli_query($conn, "SELECT * FROM userpass WHERE pass = '$pass' AND user = '$user'");
			
			$rows = mysqli_num_rows($query);
			if ($rows == 1){
				session_start();
				$_SESSION['user']=$_POST['user'];
				$_SESSION['loggedin']=time();
				
				header("Location: http://localhost/assign/Homepage/Homepage.php"); // Redicrect to other page
				exit();
			}
			else{
				$error = "Your username or password is incorrect";
			}
			mysqli_close($conn); //Close connection
		}
	}
?>