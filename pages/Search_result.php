<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
    <style>
        <?php include "../css/header.css"; ?>
        <?php include "../css/explore.css" ?>
    </style>
    <script src="https://kit.fontawesome.com/2cf05c34d2.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php require_once 'Header.php'; ?>

    <?php
    require_once '../_conn.php';

    try {
        $pdo = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exception) {
        echo "Connection error: " . $exception->getMessage();
        exit();
    }

    $search_text = strip_tags($_REQUEST['search_text']);
    ?>

    <div class="page-banner">
        <div class="offer-heading">
            <h1>
                <?php echo "Search By: '" . htmlspecialchars($search_text, ENT_QUOTES, 'UTF-8') . "'"; ?>
            </h1>
        </div>
    </div>

    <div class="products">
        <?php
        $stmt = $pdo->prepare("SELECT * FROM products WHERE name LIKE :search_text  or category LIKE :search_text");
        $stmt->execute(['search_text' => '%' . $search_text . '%']);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($results) {
            foreach ($results as $row) {
                ?>
                <form method="post" action="../scripts/add_to_cart.php">
                    <div class="product">
                        <div class="img-div">
                            <img src="<?php echo $row['image_link']; ?>" alt="Image">
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
        } else {
            echo "<p>No results found for '" . htmlspecialchars($search_text, ENT_QUOTES, 'UTF-8') . "'</p>";
        }
        ?>
    </div>

    <?php require_once 'Footer.php'; ?>
</body>

</html>