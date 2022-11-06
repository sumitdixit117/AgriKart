<?php

$productid = val($_POST["p_id"]);   
$productname = val($_POST["p_name"]);   
$productimage = val($_POST["p_image"]);   
$productprice = val($_POST["p_price"]);   

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

$sql = "INSERT INTO cart (id, name, image_link, quantity, price)
VALUES ('$productid', '$productname','$productimage','1','$productprice')";

if ($conn->query($sql) === TRUE) {
    header("location:Explore.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>