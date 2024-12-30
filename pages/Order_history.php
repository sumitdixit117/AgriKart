<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
    <style>
        <?php include "../css/header.css"; ?>
        <?php include "../css/order_history.css"; ?>
    </style>
    <script src="https://kit.fontawesome.com/2cf05c34d2.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php require_once 'Header.php'; ?>
    <?php
    require_once '../_conn.php';
    $conn = getDatabaseConnection();

    $user_stmt = $conn->prepare("SELECT email FROM `user curr`");
    $user_stmt->execute();
    $user_result = $user_stmt->get_result();
    $user_row = $user_result->fetch_assoc();
    $email = $user_row['email'];

    $stmt = $conn->prepare("SELECT * FROM `order history` WHERE email = ?");
    $stmt->bind_param("s", $email);
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
                        <td class="text-center">Status</td>
                        <td class="text-center">Date Added</td>
                        <td class="text-right">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
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
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p class="no-orders">No orders found.</p>
        <?php } ?>
    </div>

    <?php require_once 'Footer.php'; ?>
</body>

</html>