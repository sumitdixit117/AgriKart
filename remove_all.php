<?php
        require_once('_conn.php');
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "TRUNCATE TABLE `agrikartdb`.`cart`";
        if ($conn->query($sql) === TRUE) {

            header("location:Cart.php");
        }
?>