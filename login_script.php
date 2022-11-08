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
    $result = mysqli_query ($conn, $sql);
    if(mysqli_num_rows($result) != 0){
        while ($row = mysqli_fetch_array($result))
        {
            $fname = $row["fname"];
            $lname = $row["lname"];
            $gender= $row["gender"];
            $phone = $row["phone"];
            $address = $row["address"].",".$row["city"].",".$row["state"].",".$row["pincode"];
            $email = $row["email"];
            $sql2 = "INSERT INTO `user_curr` (`fname`, `lname`, `gender`, `phone`, `address`, `email`) 
            VALUES ('$fname', '$lname', '$gender', '$phone', '$address', '$email')";   
            if (!(mysqli_query($conn,$sql2) === TRUE)) {
                echo "Error: " . $conn->error;
            }
        }
        $sql3 = "TRUNCATE TABLE `agrikartdb`.`cart`";
        $sql4 = "TRUNCATE TABLE `agrikartdb`.`order history`";
        if (($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE)) {
            header("location:Explore.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
    else{
        header("location:Login.php?message='invalid'");
    }
} else {
    echo "All fields are required!";
}

$conn->close();
?>
