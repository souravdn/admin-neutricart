<?php
require("./others/dbconnection.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $pname=$_POST['pname'];
    $price=$_POST['price'];
    $dscnt=$_POST['dscnt'];
    $extnsn=$_POST['extnsn'];
}


$sql="INSERT INTO `shopping_cart` (`id`, `name`, `image`, `price`, `discount`)
 VALUES (NULL, '$pname', '$extnsn', '$price', '$dscnt')";
if($con->query($sql)){
echo "<h1 >Congratulation,Your product uploaded successfully.</h1>";
echo "<h3 >All done,Just upload product image to the website owner now.</h3>";
}
    ?>

