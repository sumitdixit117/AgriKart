<!DOCTYPE html>
<html>

<head>
    <title>Explore</title>
    <style>
        <?php include "explore.css" ?>
    </style>

<?php require_once('header.php'); ?>

    <!-- <div class="icons">
        <i class="fas fa-code-branch a"></i>
        <i class="fas fa-heart b"></i>
        <i class="fas fa-search-plus c"></i>
    </div> -->
    <div class="offer-heading">
        <h1>Today's Offers</h1>
    </div>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "agrikartdb";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $limit = 20;    

        // update the active page number

        if (isset($_GET["page"])) {    
            $page_number  = $_GET["page"];    
        }   else {    
            $page_number=1;
        }       

        // get the initial page number

        $initial_page = ($page_number-1) * $limit;       

        // get data of selected rows per page 

        $getQuery = "SELECT * FROM `products` LIMIT $initial_page, $limit";     

        $result = mysqli_query ($conn, $getQuery); ?>

                <div class="products">
                <?php
               // OUTPUT DATA OF EACH ROW
               while ($row = mysqli_fetch_array($result))
               {
                    ?>
                    <div class="product">
                        <div class="img-div">
                            <img src="<?php echo $row["image_link"] ?>" alt="Image">
                        </div>

                        <div class="tag-name">
                            <i class="fas fa-shopping-cart"></i>
                            <button>Add To Cart</button>
                        </div>
                        <div class="name">
                            <p><?php echo $row["name"] ?></p>
                            <p><?php echo "Rs. " . $row["price"] ?></p>
                        </div>
                    </div>
                    <?php
               } ?>
               </div>
            <div class="items">
               
            <?php

            $total_rows = 117;     

            $total_pages = ceil($total_rows / $limit);     

            $pageURL = "";             

            if($page_number>=2){   

                echo "<a href='Explore.php?page=".($page_number-1)."'>  Prev </a>";   

            }                          

            for ($i=1; $i<=$total_pages; $i++) {   

                if ($i == $page_number) {   
                    $pageURL .= "<a class = 'active' href='Explore.php?page=" .$i."'>".$i." </a>";   
                }               

                else  {   
                    $pageURL .= "<a href='Explore.php?page=".$i."'>".$i." </a>";     
                }   

            };     

            echo $pageURL;    

            if($page_number<$total_pages){   

                echo "<a href='Explore.php?page=".($page_number+1)."'>  Next </a>";   

            } ?>  
            </div>   
            <div class="inline">   

                <input id="page" type="number" min="1" style="height: 34px;" max="<?php echo $total_pages?>" placeholder="<?php echo $page_number."/".$total_pages; ?>" required>   

                <button style="height: 34px;" onClick="go2Page();">Go</button>   

            </div>    
            

    <?php require_once('footer.php'); ?>
    
<script>

    function go2Page()   
    {   
        var page = document.getElementById("page").value;   

        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   

        window.location.href = 'Explore.php?page='+page;   
    }   
</script>
 