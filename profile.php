<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <style>
        <?php include "explore.css" ?>
        <?php include "profile.css"?>
    </style>

<?php require_once('header.php'); ?>
<div class="offer-heading">
        <h1>MY PROFILE</h1>
    </div>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "agrikartdb";
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM `user_curr` ";
        $result = mysqli_query ($conn, $sql);
        if($result){
        while ($row = mysqli_fetch_array($result))
        {
            $fname = $row["fname"];
            $lname = $row["lname"];
            $gender= $row["gender"];
            $phone = $row["phone"];
            $address = $row["address"];
            $email = $row["email"];
        }}
        
        ?>   
    <form action="logout.php">
        <div class="profile" >
            <div class="label1">
                <span>NAME  <span>
                    <div class="value"> <?php echo $fname." ".$lname ?></div>
                <span>GENDER  <span>
                    <div class="value"><?php echo $gender ?> </div>
                <span>PHONE  <span>
                    <div class="value"><?php echo $phone ?> </div>
                <span>ADDRESS  <span>
                    <div class="value"><?php echo $address  ?> </div>
                <span>EMAIL  <span>
                    <div class="value"><?php echo $email ?>  </div> 
            </div>
            <input type="submit" class="lgtbtn" value="LogOut">
        </div>
    </form>
    <?php require_once('footer.php'); ?>
