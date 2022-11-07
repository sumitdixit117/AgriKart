<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "agrikartdb";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql3 = "TRUNCATE TABLE `agrikartdb`.`user_curr`";
        if ($conn->query($sql3) === TRUE) {

            header("location:Home.php");
        }
?>