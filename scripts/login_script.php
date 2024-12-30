<?php

function val($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

require_once '../_conn.php';
$conn = getDatabaseConnection();

if (!empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['captcha'])) {
    session_start();
    $email = val($_POST["email"]);
    $passwrd = val($_POST["pass"]);
    $captcha = $_POST["captcha"];

    if ($_SESSION['CODE'] == $captcha) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows != 0) {
            $row = $result->fetch_assoc();
            if (password_verify($passwrd, $row['password'])) {
                $fname = $row["fname"];
                $lname = $row["lname"];
                $gender = $row["gender"];
                $phone = $row["phone"];
                $address = $row["address"] . "," . $row["city"] . "," . $row["state"] . "," . $row["pincode"];
                $email = $row["email"];

                $stmt2 = $conn->prepare("INSERT INTO `user curr` (`fname`, `lname`, `gender`, `phone`, `address`, `email`) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt2->bind_param("ssssss", $fname, $lname, $gender, $phone, $address, $email);
                if ($stmt2->execute()) {
                    $conn->query("TRUNCATE TABLE `cart`");
                    $conn->query("TRUNCATE TABLE `order history`");
                    header("location:../pages/Home.php");
                } else {
                    echo "Error: " . $conn->error;
                }
            } else {
                header("location:../pages/Login.php?imessage=invalid");
            }
        } else {
            header("location:../pages/Login.php?imessage=invalid");
        }
    } else {
        header("location:../pages/Login.php?cmessage=invalid");
    }
} else {
    echo "All fields are required!";
}

$conn->close();
?>