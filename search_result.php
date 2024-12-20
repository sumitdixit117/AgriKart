<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
    <style>
        <?php include "css/explore.css" ?>
    </style>
</head>

<body>
    <?php require_once 'Header.php'; ?>

    <?php
    require_once '_conn.php';

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
        $stmt = $pdo->prepare("SELECT * FROM products WHERE name LIKE :search_text OR description LIKE :search_text");
        $stmt->execute(['search_text' => '%' . $search_text . '%']);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($results) {
            foreach ($results as $row) {
                ?>
                <div class="product">
                    <div class="img-div">
                        <img src="<?php echo htmlspecialchars($row['image_link'], ENT_QUOTES, 'UTF-8'); ?>" alt="Product Image">
                    </div>
                    <div class="name">
                        <p><?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <p><?php echo "Rs. " . htmlspecialchars($row['price'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                </div>
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