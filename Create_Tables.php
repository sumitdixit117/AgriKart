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

// sql to create table
$sql1 = "CREATE TABLE `agrikartdb`.`users` 
( `id` INT NOT NULL AUTO_INCREMENT ,
 `fname` VARCHAR(20) NOT NULL , 
 `lname` VARCHAR(20) NOT NULL , 
 `gender` VARCHAR(6) NOT NULL , 
 `date` DATE NOT NULL , 
 `phone` VARCHAR(15) NOT NULL , 
 `address` VARCHAR(50) NOT NULL , 
 `city` VARCHAR(20) NOT NULL , 
 `state` VARCHAR(20) NOT NULL , 
 `pincode` VARCHAR(6) NOT NULL , 
 `country` VARCHAR(20) NOT NULL , 
 `email` VARCHAR(30) NOT NULL , 
 `password` VARCHAR(30) NOT NULL , 
 PRIMARY KEY (`id`)) ENGINE = MyISAM";

$sql2 = "CREATE TABLE `agrikartdb`.`products`
 ( `id` INT NOT NULL AUTO_INCREMENT , 
 `name` VARCHAR(50) NOT NULL , 
 `price` DOUBLE NOT NULL , 
 `image_link` VARCHAR(200) NOT NULL , 
 `season` VARCHAR(20) NOT NULL , 
 `quantity` INT NOT NULL , 
 `category` VARCHAR(10) NOT NULL , 
 PRIMARY KEY (`id`)) ENGINE = MyISAM";

$sql3 = "INSERT INTO products (name, price, image_link, season, quantity, category) 
           VALUES ('Yellow Marigold Seeds','450', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img53.jpg?raw=true', 'winter', '150','flower'),
          ('Orange Marigold Seeds','380', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img54.jpg?raw=true', 'winter', '150','flower'),
          ('Orange Marigold Seeds','510', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img55.jpg?raw=true', 'winter', '150','flower'),
          ('Hollyhocks Double Dwarf Mix Seeds','540', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img56.jpg?raw=true', 'rainy', '150','flower'),
          ('Salvia Saint Fire Seeds','320', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img57.jpg?raw=true', 'winter', '150','flower'),
          ('Sweet Sultan Mix Seeds','740', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img58.jpg?raw=true', 'rainy', '150','flower'),
          ('Sweet Alyssum White Seeds','100', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img59.jpg?raw=true', 'spring', '150','flower'),
           ('Insect Killer', '900', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/pest2.jpg?raw=true', 'Null', '50', 'pest'),
           ('Brush Cutter 3700','9000', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img1.jpg?raw=true', 'Null', '20', 'tools'),
           ('Multi Tool Brush cutter','11000', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img2.jpg?raw=true', 'Null', '10', 'tools'),
           ('Telescopic Wire Rake','900', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img3.jpg?raw=true', 'Null', '10', 'tools'),
           ('Agrimate Professional secateur','1000', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img4.jpg?raw=true', 'Null', '20', 'tools'),
           ('Fork','400', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img5.jpg?raw=true', 'Null', '20', 'tools'),
           ('Transplanter','920', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img6.jpg?raw=true', 'Null', '20', 'tools'),
           ('Lawn mower 54','9499', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img7.jpg?raw=true', 'Null', '10', 'tools'),
           ('Hedge Trimmer','1750', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img8.jpg?raw=true', 'Null', '5', 'tools'),
           ('Gas Chainsaw','3450', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img9.jpg?raw=true', 'Null', '10', 'tools'),
           ('Agrimate Forged Handle Hedge shear','650', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img10.jpg?raw=true', 'Null', '20', 'tools'),
           ('Round Straw Baler','11850', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img11.jpg?raw=true', 'Null', '15', 'tools'),
           ('High Presser Washer','1800', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img12.jpg?raw=true', 'Null', '10', 'tools'),
           ('Water Pump','2150', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img13.jpg?raw=true', 'Null', '20', 'tools'),
           ('Automatic Sprayer','4540', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img14.jpg?raw=true', 'Null', '20', 'tools'),
           ('Long Mellon Seeds','120', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img15.jpg?raw=true', 'spring', '150', 'seeds'),
           ('Carrot Seeds','90', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img16.jpg?raw=true', 'spring', '150', 'seeds'),
           ('Chilli Seeds','110', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img17.jpg?raw=true', 'summer', '150', 'seeds'),
           ('Yellow Pumpkin Seeds','190', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img18.jpg?raw=true', 'winter', '150', 'seeds'),
           ('Spinach Seeds','110', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img19.jpg?raw=true', 'winter', '150', 'seeds'),
           ('Chinese Cabbage Seeds','245', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img20.jpg?raw=true', 'winter', '150', 'seeds'),
           ('Bottle Gourd Seeds','192', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img21.jpg?raw=true', 'rainy', '150', 'seeds'),
           ('Red Raddish seeds','210', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img22.jpg?raw=true', 'summer', '150', 'seeds'),
           ('Brocolli seeds','408', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img23.jpg?raw=true', 'summer', '150', 'seeds'),
           ('Cucumber Seeds','89', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img24.jpg?raw=true', 'summer', '150', 'seeds'),
           ('SpringOnion Seeds','90', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img25.jpg?raw=true', 'winter', '150', 'seeds'),
           ('Capsicum Seeds','190', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img26.jpg?raw=true', 'summer', '150', 'seeds'),
           ('Cabbage Seeds','180', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img27.jpg?raw=true', 'spring', '150', 'seeds'),
           ('Turnip Seeds','143', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img28.jpg?raw=true', 'rainy', '150', 'seeds'),
           ('Lavender Seeds','202', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img29.jpg?raw=true', 'summer', '150', 'flower'),
           ('Strawberry Seeds','230', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img30.jpg?raw=true', 'spring', '150', 'seeds'),
           ('Fennel Seeds', '190', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img31.jpg?raw=true', 'winter', '150', 'seeds'),
           ('Lemon Basil Seeds', '200', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img32.jpg?raw=true','summer','150', 'seeds'),
           ('Parsley Seeds', '100', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img33.jpg?raw=true', 'winter', '150', 'seeds'),
           ('Sunflower Seeds','180', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img34.jpg?raw=true', 'summer', '150', 'flower'),
           ('Antirrhinum Seeds', '190', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img35.jpg?raw=true', 'rainy', '150', 'flower'),
           ('Poppy Seeds', '1500', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img36.jpg?raw=true', 'rainy', '150', 'seeds'),
           ('Guava Seeds' ,'90', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img37.jpg?raw=true', 'winter', '150', 'seeds'),
           ('Black Cardamom Seeds', '300', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img38.jpg?raw=true', 'winter', '150', 'seeds'),
           ('Mint Seeds', '290', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img39.jpg?raw=true', 'rainy', '150', 'seeds'),
           ('Beetroot Seeds' ,'230', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img40.jpg?raw=true', 'summer', '150', 'seeds'),
           ('Amaranthus Green Seeds' ,'290', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img41.jpg?raw=true','summer', '150', 'seeds'),
           ('Tinda Seeds' ,'400', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img42.jpg?raw=true', 'winter', '150', 'seeds'),
           ('Sponge Gourd seeds' ,'230', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img43.jpg?raw=true', 'rainy', '150', 'seeds'),
           ('Sweet Corn Seeds', '250', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img44.jpg?raw=true', 'rainy', '150', 'seeds'),
           ('Ridge Gourd Lufa Seeds', '240', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img45.jpg?raw=true', 'rainy', '150', 'seeds'),
           ('Coriander Seeds' ,'430', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img46.jpg?raw=true', 'summer', '150', 'seeds'),
           ('Lettuce Seeds', '620', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img47.jpg?raw=true', 'spring', '150', 'flower'),
           ('WaterMelon Seeds', '250', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img48.jpg?raw=true', 'summer', '150', 'flower'),
           ('Pappaya Seeds', '350', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img49.jpg?raw=true', 'winter', '150', 'flower'),
           ('Muskmelon Seeds', '300', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img50.jpg?raw=true', 'winter', '150', 'flower'),
           ('Helichrysum Song Mix Seeds','700', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img51.jpg?raw=true', 'summer', '150', 'flower'),
           ('Mesembryanthemum Mix seeds', '420', 'https://github.com/sumitdixit117/AgriKart/blob/main/images/img52.jpg?raw=true', 'winter', '150', 'flower') ";
          
 

if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE) {
  echo "Tables created successfully and data entered";
} else {
  echo "Error creating tables or entering data: " . $conn->error;
}

$conn->close();
?>