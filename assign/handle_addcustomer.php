<?php

$var = mysqli_connect('localhost','root',null, 'customer');

if(!$var){
	die('Not connect :'  . mysql_error());
}
	
$companyname = $_POST['companyName'];
$adress = $_POST['inputAddress'];
$adress2 = $_POST['inputAddress2'];
$city = $_POST['inputCity'];
$country = $_POST['inputCountry'];
$state = $_POST['inputState'];
$zip = $_POST['inputZip'];
$phone = $_POST['inputPhone'];
$email = $_POST['inputEmail'];
$fax = $_POST['inputFax'];
$mobile = $_POST['inputMobile'];
$tollfree = $_POST['inputTollfree'];
$website = $_POST['inputWebsite'];

$sql = "INSERT INTO addcustomer (companyName, inputAddress, inputAddress2, inputCity, inputCountry, inputState, inputZip, inputPhone, inputEmail, inputFax, inputMobile, inputTollfree, inputWebsite) VALUES ('$companyname', '$adress', '$adress2', '$city','$state', '$country', '$zip', '$phone', '$email', '$fax', '$mobile', '$tollfree', '$website')";

$url = "http://localhost/assign/customerpage.php";

if (mysqli_query($var, $sql)) {
    header('Location: ' . $url);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($var);
?>