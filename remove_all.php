<?php
require_once '_conn.php';
$conn = getDatabaseConnection();
$sql = "TRUNCATE TABLE `cart`";
if ($conn->query($sql) === TRUE) {

    header("location:Cart.php");
}
?>