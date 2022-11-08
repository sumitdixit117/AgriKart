<?php
$dbhost = 'localhost';
$dbname = 'agrikartdb';
$dbuser = 'root';
$dbpass = '';


try {
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connection error :" . $exception->getMessage();
}
$classifier->train($samples, $labels);
$statement = $pdo->prepare("SELECT  * FROM products where category LIKE ? or name LIKE ?");
$statement->execute(array($search_text,$search_text));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$i = 0;
$j = 0;
foreach ($result as $rows) {
    if ($j == 4) {
        $j = 0;
        $i++;
    }
    $arr[$i][$j++] = $rows['name'];
    $arr[$i][$j++] = $rows['id'];
    $arr[$i][$j++] = $rows['category'];
    $arr[$i][$j++] = $rows['price'];}
$sea=$classifier->predict($arr);
?>