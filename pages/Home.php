<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <style>
        <?php include "../css/header.css"; ?>
        <?php include "../css/explore.css"; ?>
    </style>
    <script src="https://kit.fontawesome.com/2cf05c34d2.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php require_once 'Header.php'; ?>

    <div class="offer-heading">
        <h1>Recommended Seeds</h1>
        <h3>Recommendation based on the season</h3>
    </div>

    <?php
    require_once '../_conn.php';
    $conn = getDatabaseConnection();

    function findseason($x)
    {
        if ($x >= 4 && $x <= 6) {
            return "summer";
        } elseif ($x == 11 || $x == 12 || $x == 1) {
            return "winter";
        } elseif ($x == 2 || $x == 3) {
            return "spring";
        } else {
            return "rainy";
        }
    }

    $currentmonth = date('m');
    $sea = findseason($currentmonth);

    $statement = $conn->prepare("SELECT * FROM products WHERE season=?");
    $statement->bind_param("s", $sea);
    $statement->execute();
    $result = $statement->get_result();
    ?>

    <div class="products" style="margin-bottom: 70px;">
        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <form method="post" action="../scripts/add_to_cart.php">
                <div class="product">
                    <div class="img-div">
                        <img src="<?php echo $row["image_link"]; ?>" alt="Image">
                    </div>

                    <div class="tag-name">
                        <?php if ($row["quantity"] > 0) { ?>
                            <i class="fas fa-shopping-cart"></i>
                            <button type="submit" name="add">Add To Cart</button>
                            <input type="hidden" name="p_id" value="<?php echo $row["id"]; ?>">
                            <input type="hidden" name="p_name" value="<?php echo $row["name"]; ?>">
                            <input type="hidden" name="p_image" value="<?php echo $row["image_link"]; ?>">
                            <input type="hidden" name="p_price" value="<?php echo $row["price"]; ?>">
                        <?php } else { ?>
                            <span style="cursor: default;">Out Of Stock</span>
                        <?php } ?>
                    </div>
                    <div class="name">
                        <p><?php echo $row["name"]; ?></p>
                        <p><?php echo "Rs. " . $row["price"]; ?></p>
                    </div>
                </div>
            </form>
            <?php
        }
        ?>
    </div>

    <?php require_once 'Footer.php'; ?>
</body>

</html>