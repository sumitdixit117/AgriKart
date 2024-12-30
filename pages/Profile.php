<?php
require_once '../_conn.php';
$conn = getDatabaseConnection();

$stmt = $conn->prepare("SELECT * FROM `user curr`");
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "<script>alert('Login first!'); location.href = '../pages/Login.php';</script>";
    exit();
}

$row = $result->fetch_assoc();
$fname = $row["fname"];
$lname = $row["lname"];
$gender = ucfirst($row["gender"]);
$phone = $row["phone"];
$address = $row["address"];
$email = $row["email"];

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        <?php include "../css/header.css"; ?>
        <?php include "../css/profile.css"; ?>
    </style>
    <script src="https://kit.fontawesome.com/2cf05c34d2.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php require_once 'Header.php'; ?>

    <form action="../scripts/logout.php">
        <center>
            <div class="profile">
                <div class="offer-heading">
                    <h1>PROFILE</h1>
                </div>
                <?php if ($gender == "Male") { ?>
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" height="150px" width="150px"
                        style="border-radius: 50%; border:3px solid grey;"><?php } else { ?>
                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" height="150px" width="150px"
                        style="border-radius: 50%; border:3px solid grey;"><?php } ?>
                <table>
                    <tr class="head">
                        <td> Personal Information</td>
                    </tr>
                    <tr>
                        <td><span>Name<span></td>
                        <td>
                            <div class="value"> <?php echo $fname . " " . $lname ?></div>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Website<span></td>
                        <td>
                            <div class="value">www.agrikart.com</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;
                        </td>
                    </tr>
                    <tr class="head">
                        <td> Private Information</td>
                    </tr>
                    <tr>
                        <td><span>Email<span></td>
                        <td>
                            <div class="value"> <?php echo $email ?></div>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Phone<span></td>
                        <td>
                            <div class="value"> <?php echo $phone ?></div>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Gender<span></td>
                        <td>
                            <div class="value"><?php echo $gender ?></div>
                        </td>
                    </tr>
                </table>
                <button type="submit" value="LogOut">LogOut</button>
            </div>
        </center>
    </form>

    <?php require_once 'Footer.php'; ?>
</body>

</html>
