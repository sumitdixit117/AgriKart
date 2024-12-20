<?php

function val($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

require_once '_conn.php';
$conn = getDatabaseConnection();

$user_stmt = $conn->prepare("SELECT username FROM `user curr`");
$user_stmt->execute();
$user_result = $user_stmt->get_result();
$user_row = $user_result->fetch_assoc();
$email = $user_row['email'];

session_start();

if (!empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zip']) && !empty($_POST['cardnumber']) && !empty($_POST['captcha'])) {
    $fname = val($_POST["fullname"]);
    $email = val($_POST["email"]);
    $address = val($_POST["address"]);
    $city = val($_POST["city"]);
    $state = val($_POST["state"]);
    $pcode = val($_POST["zip"]);
    $number = val($_POST["cardnumber"]);
    $captcha = $_POST["captcha"];

    $sql = "INSERT INTO `card details` (`fname`, `email`, `address`, `city`, `state`, `pincode`, `card_number`) 
        VALUES ('$fname', '$email', '$address', '$city', '$state', '$pcode', '$number')";

    $sql1 = "SELECT * FROM cart";

    if ($_SESSION['CODE'] == $captcha) {
        $result = mysqli_query($conn, $sql1);
        while ($row = mysqli_fetch_array($result)) {
            $oname = $row["name"];
            $oimage = $row["image_link"];
            $oid = "#" . rand(100000, 999999);
            $oquan = $row["quantity"];
            $odate = date("Y-m-d");
            $oprice = $row["price"] * $oquan;

            $sql2 = "INSERT INTO `order history`(`name`, `image_link`, `order_id`, `quantity`, `date`, `price`, `email`) VALUES ('$oname','$oimage','$oid','$oquan','$odate','$oprice', '$email')";
            if (!($conn->query($sql2) === TRUE)) {
                echo "Error: " . $conn->error;
            }
        }

        $sql3 = "TRUNCATE TABLE `cart`";

        if ($conn->query($sql) === TRUE && $conn->query($sql3) === TRUE) {

            header("location:Explore.php");
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        header("location:Payment_gateway.php?cmessage=invalid");
    }
} else {
    echo "All fields are required!";
}

$conn->close();
?>