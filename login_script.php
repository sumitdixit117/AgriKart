<?php

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

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (!empty($_POST['email']) && !empty($_POST['pass'])) {
    $email = val($_POST["email"]);  
    $passwrd = val($_POST["pass"]);  
    
    $sql = "SELECT * FROM users WHERE Email='$email' AND Password='$passwrd'";

    $result = $conn->query($sql);

    
    if ($result->num_rows != 0) {
        header("location: Explore.php");
    } else {
        header("location:Login.php?message='invalid'");
    }
} else {
    echo "All fields are required!";
}

$conn->close();
?>