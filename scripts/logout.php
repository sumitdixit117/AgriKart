<?php
require_once '../_conn.php';
$conn = getDatabaseConnection();
$sql = "TRUNCATE TABLE `user curr`";
if ($conn->query($sql) === TRUE) {

    header("location:../index.php");
}
?>