<?php

function val($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$fname = val($_POST["fname"]);
$lname = val($_POST["lname"]);
$date = val($_POST["date"]);
$gender = val($_POST["gender"]);
$phone = val($_POST["code"]) . " " . val($_POST["phno"]);
$address = val($_POST["stname"]) . " " . val($_POST["arname"]);
$city = val($_POST["city"]);
$state = val($_POST["state"]);
$pcode = val($_POST["pin"]);
$country = val($_POST["country"]);
$email = val($_POST["email"]);
$passwrd = val($_POST["pass"]);
$cpasswrd = val($_POST["c-pass"]);

if ($passwrd !== $cpasswrd) {
	echo "<script>alert('Passwords do not match.'); location.href = '../pages/Register.php';</script>";
	exit();
}

require_once '../_conn.php';
$conn = getDatabaseConnection();

$stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
	echo "<script>alert('An account with this email already exists.'); location.href = '../pages/Register.php';</script>";
	exit();
}
$stmt->close();

$hashed_password = password_hash($passwrd, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (fname, lname, date, gender, phone, address, city, state, pincode, country, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssss", $fname, $lname, $date, $gender, $phone, $address, $city, $state, $pcode, $country, $email, $hashed_password);

if ($stmt->execute()) {
	header("Location:../pages/Login.php");
} else {
	echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>