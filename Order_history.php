<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
    <style>
        <?php include "css/order_history.css"; ?>
    </style>
    <style>
        <?php include "css/header.css"; ?>
    </style>
</head>

<body>
    <?php require_once 'Header.php'; ?>
    <?php
    require_once '_conn.php';
    $conn = getDatabaseConnection();

    session_start();
    $user_email = $_SESSION['email'];

    $stmt = $conn->prepare("SELECT * FROM `order history` WHERE email = ?");
    $stmt->bind_param("s", $user_email);
    $stmt->execute();
    $result = $stmt->get_result();
    $rows = $result->num_rows;
    ?>

    <div class="orders-div">
        <?php if ($rows) { ?>
            <legend>Your Orders</legend>
            <table class="orders-table">
                <thead>
                    <tr>
                        <td class="text-center">Image</td>
                        <td class="text-left">Product Name</td>
                        <td class="text-center">Order ID</td>
                        <td class="text-center">Quantity</td>
                        <td class="text-center">Price</td>
                        <td class="text-center">Order Date</td>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td class="text-center"><img src="<?php echo $row['image_link']; ?>" alt="Product Image"></td>
                            <td class="text-left"><?php echo $row['product_name']; ?></td>
                            <td class="text-center"><?php echo $row['order_id']; ?></td>
                            <td class="text-center">
                                <img width="120" class="img-thumbnail" src="<?php echo $row['image_link'] ?>">
                            </td>
                            <td class="text-left"><?php echo $row["name"] ?></td>
                            <td class="text-center"><?php echo $row["order_id"] ?></td>
                            <td class="text-center"><?php echo $row["quantity"] ?></td>
                            <td class="text-center">Shipped</td>
                            <td class="text-center"><?php echo $row["date"] ?></td>
                            <td class="text-right">Rs. <?php echo $row["price"] ?></td>
                            <td class="text-center"><a class="btn" title="" data-toggle="tooltip" href=""><i
                                        class="fa fa-reply"></i></a>
                            </td>
                            <td class="text-center"><?php echo $row['price']; ?></td>
                            <td class="text-center"><?php echo $row['order_date']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p>No orders found.</p>
        <?php } ?>
    </div>

    <?php require_once 'Footer.php'; ?>
</body>

</html>