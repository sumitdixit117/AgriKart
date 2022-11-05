<!DOCTYPE html>
<html>

<head>
    <title>Order History</title>
    <style>
        <?php include "order_history.css" ?>
    </style>

<?php require_once('header.php'); ?>

    <div class="orders-div">
        <legend>Your Orders</legend>
        <table class="orders-table">
            <thead>
                <tr>
                    <td class="text-center">Image</td>
                    <td class="text-left">Product Name</td>
                    <td class="text-center">Order ID</td>
                    <td class="text-center">Qty</td>
                    <td class="text-center">Status</td>
                    <td class="text-center">Date Added</td>
                    <td class="text-right">Total</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">
                        <img width="120" class="img-thumbnail" title="Rotator Blower"
                                alt="Rotator Blower" src="images/1.jpg">
                    </td>
                    <td class="text-left">Rotator Blower</td>
                    <td class="text-center">#214521</td>
                    <td class="text-center">1</td>
                    <td class="text-center">Shipped</td>
                    <td class="text-center">21/06/2022</td>
                    <td class="text-right">Rs. 35,000.00</td>
                    <td class="text-center"><a class="btn" title="" data-toggle="tooltip" href=""><i class="fa fa-reply"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <img width="120" class="img-thumbnail"
                                title="Lawn Mower LC 18" alt="Lawn Mower LC 18"
                                src="images/2.jpg">
                    </td>
                    <td class="text-left">Lawn Mower LC 18</td>
                    <td class="text-center">#1565245</td>
                    <td class="text-center">2</td>
                    <td class="text-center">Shipped</td>
                    <td class="text-center">20/06/2022</td>
                    <td class="text-right">Rs. 52,580.00</td>
                    <td class="text-center">
                        <a class="btn" title="" data-toggle="tooltip" href=""> <i class="fa fa-reply"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
<?php require_once('footer.php'); ?>