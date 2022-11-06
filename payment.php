<?php

$fname = val($_POST["fullname"]);      
$email = val($_POST["email"]);  
$address = val($_POST["address"]);
$city = val($_POST["city"]);  
$state = val($_POST["state"]);  
$pcode = val($_POST["zip"]);  
$name = val($_POST["cardname"]);
$number = val($_POST["cardnumber"]);

function val($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agrikartdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `card_details` (`fname`, `email`, `address`, `city`, `state`, `pincode`, `name`, `card_number`) 
        VALUES ('$fname', '$email', '$address', '$city', '$state', '$pcode', '$name', '$number')";

if ($conn->query($sql) === TRUE) {
    header("location:Explore.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>