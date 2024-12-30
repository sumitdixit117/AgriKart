<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>
    <style>
        <?php include "../css/header.css"; ?>
        <?php include "../css/explore.css"; ?>
    </style>
    <script src="https://kit.fontawesome.com/2cf05c34d2.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php require_once 'Header.php'; ?>

    <div class="offer-heading">
        <h1>Our Products</h1>
    </div>

    <?php
    require_once '../_conn.php';
    $conn = getDatabaseConnection();
    $limit = 20;

    $category = isset($_GET["category"]) ? $_GET["category"] : '';
    $page_number = isset($_GET["page"]) ? $_GET["page"] : 1;
    $initial_page = ($page_number - 1) * $limit;

    $category_filter = $category ? "WHERE category='$category'" : '';

    $getQuery = "SELECT * FROM `products` $category_filter LIMIT $initial_page, $limit";
    $result = mysqli_query($conn, $getQuery);
    ?>

    <div class="products">
        <?php
        while ($row = mysqli_fetch_array($result)) {
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
    <div class="items">
        <?php
        $query = "SELECT * FROM `products` $category_filter";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $total_rows = mysqli_num_rows($result);
            mysqli_free_result($result);
        }

        $total_pages = ceil($total_rows / $limit);
        $pageURL = "";

        if ($page_number >= 2) {
            echo "<a href='Explore.php?page=" . ($page_number - 1) . "&category=$category'>  Prev </a>";
        }

        for ($i = 1; $i <= $total_pages; $i++) {
            if ($i == $page_number) {
                $pageURL .= "<a class='active' href='Explore.php?page=" . $i . "&category=$category'>" . $i . " </a>";
            } else {
                $pageURL .= "<a href='Explore.php?page=" . $i . "&category=$category'>" . $i . " </a>";
            }
        }

        echo $pageURL;

        if ($page_number < $total_pages) {
            echo "<a href='Explore.php?page=" . ($page_number + 1) . "&category=$category'>  Next </a>";
        }
        ?>
    </div>
    <div class="inline">
        <input id="page" type="number" min="1" style="height: 34px;" max="<?php echo $total_pages; ?>"
            placeholder="<?php echo $page_number . "/" . $total_pages; ?>" required>
        <button style="height: 34px;" onClick="go2Page();">Go</button>
    </div>

    <?php require_once 'Footer.php'; ?>

    <script type="text/javascript">
        function go2Page() {
            var page = document.getElementById("page").value;
            page = ((page > <?php echo $total_pages; ?>) ? <?php echo $total_pages; ?> : ((page < 1) ? 1 : page));
            window.location.href = 'Explore.php?page=' + page + '&category=<?php echo $category; ?>';
        }
    </script>
</body>

</html>