<?php
require_once('_conn.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "CREATE TABLE `users` 
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

$sql2 = "CREATE TABLE `products`
 ( `id` INT NOT NULL AUTO_INCREMENT , 
 `name` VARCHAR(50) NOT NULL , 
 `price` DOUBLE NOT NULL , 
 `image_link` VARCHAR(300) NOT NULL , 
 `season` VARCHAR(20) NOT NULL , 
 `quantity` INT NOT NULL , 
 `category` VARCHAR(10) NOT NULL , 
 PRIMARY KEY (`id`)) ENGINE = MyISAM";

$sql3 = "CREATE TABLE `cart` 
 ( `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image_link` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)) ENGINE=MyISAM";

$sql4 = "CREATE TABLE `order history` ( `name` VARCHAR(50) NOT NULL , `image_link` VARCHAR(200) NOT NULL , `order_id` VARCHAR(7) NOT NULL , `quantity` INT NOT NULL , `date` DATE NOT NULL , `price` DOUBLE NOT NULL ) ENGINE = MyISAM";
$sql5 = "CREATE TABLE `card details` ( `id` INT NOT NULL AUTO_INCREMENT , `fname` VARCHAR(30) NOT NULL , `email` VARCHAR(50) NOT NULL , `address` VARCHAR(50) NOT NULL , `city` VARCHAR(20) NOT NULL , `state` VARCHAR(20) NOT NULL , `pincode` VARCHAR(6) NOT NULL , `card_number` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM";
$sql6 = "CREATE TABLE `contact form` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(30) NOT NULL , `email` VARCHAR(50) NOT NULL , `subject` VARCHAR(50) NOT NULL , `query` VARCHAR(200) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM";
$sql7 = "CREATE TABLE `user curr` (`id` INT NOT NULL AUTO_INCREMENT ,  `fname` VARCHAR(30) NOT NULL , `lname` VARCHAR(30) NOT NULL , `gender` VARCHAR(6) NOT NULL , `phone` VARCHAR(15) NOT NULL , `address` VARCHAR(100) NOT NULL , `email` VARCHAR(40) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;";

$sql = "INSERT INTO products (name, price, image_link, season, quantity, category) 
           VALUES ('Yellow Marigold Seeds','450', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1xo1KBSFy14Z_u08pp85sFzFmzBVJlYi1IA&usqp=CAU', 'winter', '150','flower'),
          ('Orange Marigold Seeds','380', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYixyrbLtwsiUh5dNwN0QUon8KqC6mOhbPYg&usqp=CAU', 'winter', '150','flower'),
          ('White Marigold Seeds','510', '	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSiBJOHcKxVZ7nW5C6hv9_NbI_ly6kpCc0LA&usqp=CAU', 'winter', '150','flower'),
          ('Double Dwarf Mix Seeds','540', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-2xfw3dUnl1gaExplNtckEWEvqUyWmp6PZA&usqp=CAU', 'rainy', '150','flower'),
          ('Salvia Saint Fire Seeds','320', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsJQEgT7XNTIAx5upr5Z-1tAdfZwrcpRsOaA&usqp=CAU', 'winter', '0','flower'),
          ('Sweet Sultan Mix Seeds','740', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQde_6f37FYXg9s2dDIgXOt_7T2BLKSaQKhmg&usqp=CAU', 'rainy', '150','flower'),
          ('Sweet Alyssum White Seeds','100', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJpY71_Ivper1txCeV57I5-9sJ8QlqE8FYdA&usqp=CAU', 'spring', '0','flower'),
          ('Insect Killer', '900', '	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRb8bzOARF8LX0T-5voKE61qqK2qgS56qu1Wg&usqp=CAU', 'Null', '50', 'pest'),
          ('Brush Cutter 3700','9000', 'https://www.hondaindiapower.com/admin/public/uploads/Products/04a2VBeXVs.png', 'Null', '20', 'tools'),
          ('Multi Tool Brush Cutter','11000', 'https://5.imimg.com/data5/LL/EJ/TJ/SELLER-72729303/multi-tool-brush-cutter.jpg', 'Null', '10', 'tools'),
          ('Telescopic Wire Rake','900', 'https://5.imimg.com/data5/SELLER/Default/2023/3/293145721/CC/EX/CM/7248512/am5807d-agrimate-professional-telescopic-wirerake-taiwan-500x500.jpg', 'Null', '10', 'tools'),
          ('Fork','400', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdkm9sjmgK6tMy1PrGV6w6EXHxChqxZjgEgw&s', 'Null', '20', 'tools'),
          ('Transplanter','920', 'https://5.imimg.com/data5/DS/CW/MY-24923732/4-rows-paddy-transplanter.png', 'Null', '20', 'tools'),
          ('Lawn mower 54','9499', 'https://5.imimg.com/data5/SELLER/Default/2023/3/ZR/ZM/GG/5526328/husqvarna-exclusive-54-lawn-mowers-250x250.jpg', 'Null', '10', 'tools'),
          ('Hedge Trimmer','1750', 'https://5.imimg.com/data5/PJ/OO/MY-13804377/electric-hedge-trimmers.jpg', 'Null', '5', 'tools'),
          ('Agrimate Hedge shear','650', 'https://5.imimg.com/data5/SELLER/Default/2023/3/293127966/TW/YI/KM/7248512/am15158-agrimate-professional-forged-hedge-shear-taiwan.jpg', 'Null', '0', 'tools'),
          ('Round Straw Baler','11850', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQEm-0x05IRGnyv_ff2tqP4cc3fJBytob3wA&usqp=CAU', 'Null', '15', 'tools'),
          ('High Presser Washer','1800', 'https://5.imimg.com/data5/CS/QX/KN/SELLER-26682557/high-pressure-washer-500x500.jpg', 'Null', '10', 'tools'),
          ('Water Pump','2150', 'https://5.imimg.com/data5/JC/IZ/NF/IOS-9915076/product-jpeg.png', 'Null', '20', 'tools'),
          ('Automatic Sprayer','4540', 'https://5.imimg.com/data5/HI/WW/FL/SELLER-24672706/automatic-agricultural-sprayer.jpg', 'Null', '20', 'tools'),
          ('Long Mellon Seeds','120', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCDGvbHjc77GrgxKTyQ_BAslP8QNyj6bjsUg&s', 'spring', '150', 'seeds'),
          ('Carrot Seeds','90', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr5ZJ4rrvwZMuKwrcPJqA6W6iesT44qrWuPw&usqp=CAU', 'spring', '150', 'seeds'),
          ('Chilli Seeds','110', 'https://5.imimg.com/data5/SELLER/Default/2022/4/LB/UC/FV/86539219/natural-chilli-seeds.jpg', 'summer', '0', 'seeds'),
          ('Yellow Pumpkin Seeds','190', 'https://5.imimg.com/data5/SELLER/Default/2023/5/305435394/FU/IW/LD/24315506/yellow-pumpkin-seed-with-shell.jpg', 'winter', '150', 'seeds'),
          ('Spinach Seeds','110', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsB_DRj1JsVvUyMGAi7I-qT0m_woxiIen5tw&usqp=CAU', 'winter', '150', 'seeds'),
          ('Chinese Cabbage Seeds','245', '	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKx1LYoThB7hvBz-eeIWE_Y4bAV7kUmesZyg&usqp=CAU', 'winter', '150', 'seeds'),
          ('Bottle Gourd Seeds','192', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUr1teyPwIBQa3qsAacldevrDp2x4JJPyEIA&usqp=CAU', 'rainy', '150', 'seeds'),
          ('Red Raddish seeds','210', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSm4X_-Lz06pnHxOY_Y7TiEina1NYewvPlN1g&usqp=CAU', 'summer', '150', 'seeds'),
          ('Brocolli seeds','408', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHU8urDX7Gg7HXj2cBXakD7x17Y3wBUhKCow&usqp=CAU', 'summer', '150', 'seeds'),
          ('Cucumber Seeds','89', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShD9bMJm9k2GXot_4FK-AgBvlLwuIGeK-KeQ&usqp=CAU', 'summer', '150', 'seeds'),
          ('Spring Onion Seeds','90', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr50bP-aMjL1qnQYUlE--WjY8EgtfjgN9WDA&usqp=CAU', 'winter', '0', 'seeds'),
          ('Capsicum Seeds','190', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4TboDmuCbyDD_Rv-K8v7_E_9oCkQV9Zpt1A&usqp=CAU', 'summer', '150', 'seeds'),
          ('Cabbage Seeds','180', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7NRKI30FFkhK2jZfudCrsx_qI5YNf9YroeA&usqp=CAU', 'spring', '150', 'seeds'),
          ('Turnip Seeds','143', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrPwmicGeKoQarQYr4JItpSNuJk_dz2iyBpQ&usqp=CAU', 'rainy', '150', 'seeds'),
          ('Lavender Seeds','202', 'https://cdn11.bigcommerce.com/s-q83qdckkjh/images/stencil/1280x1280/products/196/4043/English-LavendarBC3__37193.1708562180.jpg?c=2?imbypass=on', 'summer', '150', 'flower'),
          ('Strawberry Seeds','230', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnsEYxcUDP8XqzIx3noYmf9xkDaK_Cb1QIXQ&usqp=CAU', 'spring', '150', 'seeds'),
          ('Fennel Seeds', '190', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROB4y9sCXJ7BKZ96rrcnXuFA2H7JGkL8biBA&usqp=CAU', 'winter', '150', 'seeds'),
          ('Lemon Basil Seeds', '200', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqgLj5kSPFzt3CDetQSEODOP9zNhBBQVPtuA&usqp=CAU','summer','0', 'seeds'),
          ('Parsley Seeds', '100', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlcb220MRews-3qGaYb5-keKUSbjxJG6Jg6A&usqp=CAU', 'winter', '150', 'seeds'),
          ('Sunflower Seeds','180', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkboJpmL2LlnWwjKnXWqzpDOCAYiktAV0FzQ&usqp=CAU', 'summer', '150', 'flower'),
          ('Antirrhinum Seeds', '190', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiGIJd93yXOOml2Bi0CKeXMGE0aWdsIr_LGw&usqp=CAU', 'rainy', '0', 'flower'),
          ('Poppy Seeds', '1500', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwP812xqYOx1nLeKL1qzBT_g3AVEH3WlE0eg&usqp=CAU', 'rainy', '150', 'seeds'),
          ('Guava Seeds' ,'90', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9CDSiRSI82MDRcHRKyV1uyeHCKalyc2LrwA&usqp=CAU', 'winter', '150', 'seeds'),
          ('Black Cardamom Seeds', '300', '	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKoag2K7LQppA3AhAaCeh3rUOpA3n7UBI3HA&usqp=CAU', 'winter', '150', 'seeds'),
          ('Mint Seeds', '290', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSc1pB-wxMGPHV0cBcDDlHz3o-AmS1l9v-4Qg&usqp=CAU', 'rainy', '150', 'seeds'),
          ('Beetroot Seeds' ,'230', '	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ7BTVeuqUxUH52qUHf5U6AuVeFwBKxrop2w&usqp=CAU', 'summer', '150', 'seeds'),
          ('Amaranthus Green Seeds' ,'290', 'https://m.media-amazon.com/images/I/814bTPG6IiL.jpg','summer', '150', 'seeds'),
          ('Tinda Seeds' ,'400', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8X9pEVPtoR73zEvcoNklnmpgQeg3P6WROPA&usqp=CAU', 'winter', '150', 'seeds'),
          ('Sponge Gourd seeds' ,'230', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3rGEVJOIhC5pf3HfaNdCSPdF35Wj9hfEXMQ&usqp=CAU', 'rainy', '150', 'seeds'),
          ('Sweet Corn Seeds', '250', 'https://sowtrueseed.com/cdn/shop/products/Corn_Sweet_Golden_Bantam_12_CD@2x.jpg?v=1613228450', 'rainy', '150', 'seeds'),
          ('Ridge Gourd Lufa Seeds', '240', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUlEAyjwEqRzFsqwVmthkmhI-tH150iSkj7A&usqp=CAU', 'rainy', '150', 'seeds'),
          ('Coriander Seeds' ,'430', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSj_ybZ0RoJ0kQCbT_i6iM0yAoBrerCLxlMwA&usqp=CAU', 'summer', '150', 'seeds'),
          ('Lettuce Seeds', '620', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR73yMOuwK76vgJbZa3pui2VSazsxPbJGv6VA&usqp=CAU', 'spring', '150', 'seeds'),
          ('WaterMelon Seeds', '250', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRa1dRbujSj12SLfIz6V-xVlGKqrULz688PNw&usqp=CAU', 'summer', '150', 'fruit'),
          ('Papaya Seeds', '350', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvQ4MtXz6xdoUO13vHTdZ3Wgd-A271YSfbfA&usqp=CAU', 'winter', '150', 'fruit'),
          ('Muskmelon Seeds', '300', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRc1rG5Co1TX9_aaWhQ2bejt1QUbdqMw4RlyQ&usqp=CAU', 'winter', '0', 'fruit'),
          ('Helichrysum Song Mix Seeds','700', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCEcvPNVnfO-uZalmEynHXsl9ydAwJh-CQNw&usqp=CAU', 'summer', '150', 'flower'),
          ('Mesembryanthemum Mix seeds', '420', '	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp64EXAYRhwrWTzHjQW6_YnLJNrnZQdiLBQA&usqp=CAU', 'winter', '150', 'flower'),
          ('Fenugreek Seeds','315', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpHPsj80c4l1ZzslOnxSiLicsDH-6HUBkVYg&usqp=CAU', 'rainy', '150','seeds'),
          ('Black Carrot Seeds','420', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCTLcQBnTZ8eQOH20SWrpYaLS11wHoBUodhw&usqp=CAU', 'winter', '150','seeds'),
          ('Red Cabbage Seeds','300', 'https://images.meesho.com/images/products/112389155/2hpz3_512.webp', 'winter', '150','seeds'),
          ('Iceland Poppy Seeds','400', '	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLL7jTdYgvwtPHeJVmbhMOyJoo8cSswceXqA&usqp=CAU', 'rainy', '150','flower'),
          ('Celosia Cristata Seeds','500', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaLlXxz5ggWUZ1cIeh8d1eHpYRFoccMthB3Q&usqp=CAU', 'spring', '150','flower'),
          ('Lupin Pixie Seeds','320', '	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHUpitu9nHsRzlSbWYBF4DAZXdmQ6rwfw69w&usqp=CAU', 'summer', '0','flower'),
          ('French Marigold orange seeds','420', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZFbnxnk7Yi043OIsk6rFDdGBC0sYaRZ9Lmg&usqp=CAU', 'winter', '150','flower'),
          ('Zinnia Orange seeds','320', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiRQjSc1XlNxthZ4dB_tBYJT5mYXsBvAAhYg&usqp=CAU', 'summer', '150','flower'),
          ('Amaranthus Pygmy Torch Seeds','320', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlJSFoesfjvl7vvMmIE4XXIadWGkKwlawJaA&usqp=CAU', 'summer', '150','flower'),
          ('Aster duchess Formula Mix Seeds','340', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTctbHfAZ20ZEtpGakEaepwbnCvTWPRt0UjIw&usqp=CAU', 'spring', '150','flower'),
          ('Gaillardia Aristata Tokajer Seeds','310', '	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1Nd6ULEctO_7UipDi0UuWavKHn9r5r84A5Q&usqp=CAU', 'spring', '0','flower'),
          ('Dahlia Seeds','240', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBI6fC8i8Ipt9GP9XICSsxj2PIUn-ncazF3Q&usqp=CAU', 'spring', '150','flower'),
          ('Dimorphotheca Pluviali Seeds','420', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLThpxw4EZ2BSzHLMCD-_x1Fw5FWAbpM6adw&usqp=CAU', 'winter', '150','flower'),
          ('Daisy Seeds','430', '	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSStjGdS_kpr1QLaavGl3rZtFhafpCN0IAvMA&usqp=CAU', 'winter', '150','flower'),
          ('Schizanthus Angel Wings Seeds','340', 'https://m.media-amazon.com/images/I/41n3WKip1CL._AC_UF1000,1000_QL80_.jpg', 'spring', '150','flower'),
          ('Vinca Red Cherry Dwarf Seeds','420', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRukJppKjt5JtZvO7JkytJw2iSxL__8e-HPsA&usqp=CAU', 'summer', '150','flower'),
          ('Vinca Dwarf White Seeds','290', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBrw2xpHk25Bnurs8-GibIQFp-6UXWrvyUDw&usqp=CAU', 'summer', '150','flower'),
          ('Zinnia Dahlia Mix seeds','310', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRABTOiRevq-udbC4JIQ36WKz8ODiHwDtu5AA&usqp=CAU', 'spring', '150','flower'),
          ('Indian Shirley Poppy Mix Seeds','330', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx4XGKzHlImaflVc1aIAGc5AEO4FHPA7ad7w&usqp=CAU', 'winter', '150','flower'),
          ('French Marigold Red Seeds','420', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvQVNupy7nlFy9FTsH1tL9aP6CT438aH1s5Q&usqp=CAU', 'spring', '0','flower'),
          ('Candituft Ebress Alba Seeds','190', '	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkaTpLtxsFlx9dotdjlZfezIYBpJ6bOtoycA&usqp=CAU', 'summer', '150','flower'),
          ('Blueberry Seeds','700', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRd30oqTpSvCnNutL6WBYnORuRO2APVbw7Iew&usqp=CAU', 'rainy', '150','fruit'),
          ('Apple Seeds','290', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4frIBWP3727X7T5A6T1mZul2K8BjvH4WE8g&usqp=CAU', 'spring', '150','fruit'),
          ('Mango Seeds','220', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJZLPcOkiSTSwU2wcVshT0fxGzWCEPqHiXbg&usqp=CAU', 'summer', '150','fruit'),
          ('Banana Seeds','200', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3RSO0QNb-a76obyzKLI_xUiD9cShKIpdJtA&usqp=CAU', 'rainy', '150','fruit'),
          ('Orange Seeds','190', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQki6YJoksD0eM_syR_BcAjdHXuh75LuIQgjg&usqp=CAU', 'rainy', '150','fruit'),
          ('Kiwi Seeds','450', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKVDqfEy4JmTkoGBq3P-xaeaDzwTqF3aYmrA&usqp=CAU', 'spring', '150','fruit'),
          ('Black Grapes seeds','320', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkF8d-d8aRaT-Yo_PjOhEzLaFRvft5jJxwow&usqp=CAU', 'rainy', '150','fruit'),
          ('Green Grapes seeds','290', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4UYDX-9qj8Rhirnl7FiDUREoUCLWaxgC2Ng&usqp=CAU', 'rainy', '0','fruit'),
          ('Red Cherry Seeds','800', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX-4_QztClwW8XsqBOahusbzcenWIXzYnwxw&usqp=CAU', 'summer', '150','fruit'),
          ('Asian Plum Seeds','500', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToRgVl-fObUKsIOBiPTT8ApF6oMojmIohuRA&usqp=CAU', 'summer', '150','fruit'),
          ('Cranberry Seeds','700', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgg1Ieb5aV-OhgGOl2l68vtYlL5T68USyAYQ&usqp=CAU', 'rainy', '150','fruit'),
          ('Pineapple Seeds','220', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfEFCH-wuJ6GHuS1SgTdyWUumca1RModDMwg&usqp=CAU', 'Null', '150','fruit'),
          ('Bio Enhancer','410', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjFnnS2JJoTTGbkm9qv2GMBY7ZR27iyxylMw&usqp=CAU', 'Null', '150','pest'),
          ('Suruga Pesticide','200', '	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrKCfU_b8YaxL-B4Kd01SYCnnz6MkUxy8R1Q&usqp=CAU', 'Null', '150','pest'),
          ('Konatsu Pesticide','200', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbVJnOi8jz_rJOpIRfVQoyztWrhnVEHt0Wdg&usqp=CAU', 'Null', '150','pest'),
          ('Komugi (Pyriproxyfen 10% EC)','390', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsXK5KGhTRLXGZXMz3rAaRYxIjWl_Q4FZTow&usqp=CAU', 'Null', '0','pest'),
          ('Rotator Blower','31500', 'https://5.imimg.com/data5/SELLER/Default/2021/8/TS/CT/KG/31184805/mist-blower-500x500.png', 'Null', '15','tools'),
          ('Lawn Mower LC 18','11500', 'https://5.imimg.com/data5/WB/MZ/MI/SELLER-35484018/lc-18-hasqverna-lawn-more.png', 'Null', '15','tools'),
          ('Hedge Trimmer HC 280XP','42300', 'https://www.myoleo-mac.com/media/filer_public_thumbnails/filer_public/72/3d/723ddbe0-4ca0-4a9e-8c87-33d3193e69c6/omhcs280xpsx.jpg__600x600_q85_subsampling-2.jpg', 'Null', '15','tools'),
          ('135 Mark II Gas Chainsaw','23400', 'https://5.imimg.com/data5/SELLER/Default/2021/10/UX/AY/OE/3779511/chainsaws-husqvarna-135-500x500.jpg', 'Null', '15','tools'),
          ('Radish Seeds','150', '	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrbPaCDzGvNiT34fOF3BEpMvnoCRAr9GwPOA&usqp=CAU', 'rainy', '150','seeds'),
          ('Bitter Gourd Seeds','200', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZamXw55Uvt9n2ltFLmIQ7AbUEzZsmAiIqkg&usqp=CAU', 'rainy', '150','seeds'),
          ('Tomato Seeds','100' ,'	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNrf0q5jUj_ruwLaNYmjInAPrJFd079E9fSQ&usqp=CAU', 'winter', '150','seeds'),
          ('LadyFinger Seeds','150', '	https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXCW-i6rikOMOMWRXX1spIG8OPaEtAXCel7w&usqp=CAU', 'Null', '150','seeds'),
          ('Acetosol','500', 'https://4.imimg.com/data4/XU/NO/NSDMERP-6329902/acetoaol-500x500.png', 'Null', '150','pest'),
          ('Phosphosol','1500', 'http://godavaribiofertilizers.com/uploads/1439813462pro10a.jpg', 'Null', '150','pest'),
          ('Potashsol','900', 'http://godavaribiofertilizers.com/uploads/1439813773pro2a.jpg', 'Null', '150','pest'),
          ('Manure','200', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPS5R3SZpNDfcwrTUJGSFB3HRF9Rul2klaIQ&usqp=CAU', 'Null', '150','pest'),
          ('Trowel','900', 'https://www.bigbasket.com/media/uploads/p/xxl/40246089-2_1-dp-hand-digging-trowel-for-cultivating-blending-soils.jpg', 'Null', '0','tools'),
          ('Agrimate Bypass Pruner','1100', 'https://agrimart.in/uploads/product_image/1/product_3003_1.jpg', 'Null', '150','tools'),
          ('Agrimate Forged Steel','1200', 'https://5.imimg.com/data5/SELLER/Default/2023/3/293127966/TW/YI/KM/7248512/am15158-agrimate-professional-forged-hedge-shear-taiwan.jpg', 'Null', '150','tools') ";
          
 

if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE && $conn->query($sql4) === TRUE && $conn->query($sql5) === TRUE && $conn->query($sql6) === TRUE && $conn->query($sql7) === TRUE && $conn->query($sql) === TRUE) {
  echo "Tables created successfully and data entered";
} else {
  echo "Error creating tables or entering data: " . $conn->error;
}

$conn->close();
?>
