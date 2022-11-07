<?php require_once('header.php'); ?>

<style>
    <?php include "explore.css" ?>
</style>
<?php

$dbhost = 'localhost';
$dbname = 'agrikartdb';
$dbuser = 'root';
$dbpass = '';
define("BASE_URL", "");

define("ADMIN_URL", BASE_URL . "admin" . "/");
try {
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connection error :" . $exception->getMessage();
} ?>

<div class="page-banner">
    <div class="overlay"></div>
    <div class="offer-heading">
        <h1>
            Search By:
            <?php
            $search_text = strip_tags($_REQUEST['search_text']);
            echo $search_text;
            ?>
        </h1>
    </div>
</div>

<div class="page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="products">
                    <div class="row">
                        <?php
                        $search_text = '%' . $search_text . '%';
                        ?>

                        <?php
                        /* ===================== Pagination Code Starts ================== */
                        $adjacents = 5;
                        $statement = $pdo->prepare("SELECT * FROM products WHERE name LIKE ? or category LIKE ?");
                        $statement->execute(array($search_text, $search_text));
                        $total_pages = $statement->rowCount();
                        if ($search_text == '') {
                            $targetpage = BASE_URL . "Explore.php";
                        }
                        $targetpage = BASE_URL . 'search_result.php?search_text=' . $_REQUEST['search_text'];   
                        $limit = 20;                                
                        $page = @$_GET['page'];
                        if ($page)
                            $start = ($page - 1) * $limit;         
                        else
                            $start = 0;


                        $statement = $pdo->prepare("SELECT * FROM products WHERE name LIKE ? or category LIKE ? LIMIT $start,$limit");
                        $statement->execute(array($search_text, $search_text));
                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);


                        if ($page == 0) $page = 1;                  
                        $prev = $page - 1;                          
                        $next = $page + 1;                          
                        $lastpage = ceil($total_pages / $limit);      
                        $lpm1 = $lastpage - 1;
                        $pagination = "";
                        if ($lastpage > 1) {
                            $pagination .= "<div class=\"pagination\">";
                            $pagination .= " ";
                            if ($page > 1) {
                                $pagination .= "<a href=\"$targetpage&page=$prev\">&#171; previous</a>";
                                $pagination .= " ";
                            } else {
                                $pagination .= "<span class=\"disabled\">&#171; previous</span>";
                                $pagination .= " ";
                            }
                            if ($lastpage < 7 + ($adjacents * 2))  
                            {
                                for ($counter = 1; $counter <= $lastpage; $counter++) {
                                    if ($counter == $page)
                                        $pagination .= "<span class=\"current\">$counter</span>";

                                    else
                                        $pagination .= "<a href=\"$targetpage&page=$counter\">$counter</a>";
                                    $pagination .= " ";
                                }
                            } elseif ($lastpage > 5 + ($adjacents * 2))   
                            {
                                if ($page < 1 + ($adjacents * 2)) {
                                    for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
                                        if ($counter == $page)
                                            $pagination .= "<span class=\"current\">$counter</span>";
                                        else
                                            $pagination .= "<a href=\"$targetpage&page=$counter\">$counter</a>";
                                        $pagination .= " ";
                                    }
                                    $pagination .= "...";
                                    $pagination .= "<a href=\"$targetpage&page=$lpm1\">$lpm1</a>";
                                    $pagination .= "<a href=\"$targetpage&page=$lastpage\">$lastpage</a>";
                                } elseif ($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
                                    $pagination .= "<a href=\"$targetpage&page=1\">1</a>";
                                    $pagination .= "<a href=\"$targetpage&page=2\">2</a>";
                                    $pagination .= "...";
                                    for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
                                        if ($counter == $page)
                                            $pagination .= "<span class=\"current\">$counter</span>";
                                        else
                                            $pagination .= "<a href=\"$targetpage&page=$counter\">$counter</a>";
                                        $pagination .= " ";
                                    }
                                    $pagination .= "...";
                                    $pagination .= "<a href=\"$targetpage&page=$lpm1\">$lpm1</a>";
                                    $pagination .= "<a href=\"$targetpage&page=$lastpage\">$lastpage</a>";
                                } else {
                                    $pagination .= "<a href=\"$targetpage&page=1\">1</a>";
                                    $pagination .= "<a href=\"$targetpage&page=2\">2</a>";
                                    $pagination .= "...";
                                    for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
                                        if ($counter == $page)
                                            $pagination .= "<span class=\"current\">$counter</span>";
                                        else
                                            $pagination .= "<a href=\"$targetpage&page=$counter\">$counter</a>";
                                        $pagination .= " ";
                                    }
                                }
                            }
                            if ($page < $counter - 1)
                                $pagination .= "<a href=\"$targetpage&page=$next\">next &#187;</a>";
                            else
                                $pagination .= "<span class=\"disabled\">next &#187;</span>";
                            $pagination .= "</div>\n";
                        }
                        /* ===================== Pagination Code Ends ================== */
                        ?>

                        <?php

                        if (!$total_pages) :
                            echo '<span style="color:red;font-size:18px;">No result found</span>';
                        else :
                            foreach ($result as $row) {
                        ?>
                                <form method="post" action="add_to_cart.php">
                                    <div class="product">
                                        <div class="img-div">
                                            <img src="<?php echo $row["image_link"] ?>" alt="Image">
                                        </div>

                                        <div class="tag-name">
                                            <?php if ($row["quantity"] > 0) { ?>
                                                <i class="fas fa-shopping-cart"></i>
                                                <button type="submit" name="add">Add To Cart</button>
                                                <input type="hidden" name="p_id" value="<?php echo $row["id"] ?>">
                                                <input type="hidden" name="p_name" value="<?php echo $row["name"] ?>">
                                                <input type="hidden" name="p_image" value="<?php echo $row["image_link"] ?>">
                                                <input type="hidden" name="p_price" value="<?php echo $row["price"] ?>">
                                            <?php } else { ?>
                                                <span style="cursor: default;">Out Of Stock</span>
                                            <?php } ?>
                                        </div>
                                        <div class="name">
                                            <p><?php echo $row["name"] ?></p>
                                            <p><?php echo "Rs. " . $row["price"] ?></p>
                                        </div>
                                    </div>
                                </form>
                            <?php
                            }
                            ?>
                            <div class="clear"></div>
                            <div class="item" style="text-decoration:none;color:black;font-size:20px;margin-top:15px">
                                <?php
                                echo $pagination;
                                ?>
                            </div>
                        <?php
                        endif;
                        ?>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>