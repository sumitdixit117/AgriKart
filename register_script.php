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
	die("Passwords do not match.");
}

require_once '_conn.php';
$conn = getDatabaseConnection();

$hashed_password = password_hash($passwrd, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (fname, lname, date, gender, phone, address, city, state, pincode, country, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssss", $fname, $lname, $date, $gender, $phone, $address, $city, $state, $pcode, $country, $email, $hashed_password);

if ($stmt->execute()) {
	header("Location: Login.php?message=registration_success");
} else {
	echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>