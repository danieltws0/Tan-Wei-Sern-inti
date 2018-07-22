<?php

$var = mysqli_connect('localhost','root',null, 'customer');

if(!$var){
	die('Not connect :'  . mysql_error());
}

$proname = $_POST['productName'];
$price = $_POST['productPrice'];
$descrip = $_POST['productDescription'];
$comname = $_POST['companyName'];

$sql = "INSERT INTO addproduct (productName,productPrice,productDescription,companyName) VALUES ('$proname', '$price', '$descrip', '$comname')";

$url = "http://localhost/assign/productpage.php";

if (mysqli_query($var, $sql)) {
    header('Location: ' . $url);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($var);
?>