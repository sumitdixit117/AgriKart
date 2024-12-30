<?php

$productid = val($_POST["p_id"]);
$productname = val($_POST["p_name"]);
$productimage = val($_POST["p_image"]);
$productprice = val($_POST["p_price"]);

function val($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

require_once '../_conn.php';
$conn = getDatabaseConnection();

$query = "SELECT * FROM cart";
$result = $conn->query($query);
$found = false;

while ($row = $result->fetch_assoc()) {
    if ($row["id"] == $productid) {
        $quan = $row["quantity"] + 1;

        $stmt = $conn->prepare("UPDATE cart SET quantity = ? WHERE id = ?");
        $stmt->bind_param("ii", $quan, $productid);
        $found = true;

        if ($stmt->execute()) {
            header("location:../pages/Home.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

if (!$found) {
    $stmt = $conn->prepare("INSERT INTO cart (id, name, image_link, quantity, price) VALUES (?, ?, ?, 1, ?)");
    $stmt->bind_param("issd", $productid, $productname, $productimage, $productprice);

    if ($stmt->execute()) {
        header("location:../pages/Home.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>