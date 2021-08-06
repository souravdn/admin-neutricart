<!DOCTYPE html>
<html lang="en">
<link href="https://fonts.googleapis.com/css2?family=Rammetto+One&display=swap" rel="stylesheet">

<head>
    <title>New recent order in last hour.</title>
</head>
<?php
include('./others/navbar.php');
?>

<body class="container">
    <h1 style="  font-family: 'Rammetto One'; color:#000080" class="text-center">New order logs and customer details
    </h1>

    <form action="checkout.php" method="post">

        <table class="text-center table table-bordered">
            <thead>
                <tr>
                    <!-- <th scope="col">Sl no.</th> -->
                    <th scope="col">Product name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Pincode</th>
                    <th scope="col">Country</th>
                    <th scope="col">email</th>
                    <th scope="col">Phone</th>
                </tr>
            </thead>




            <?php
                    require("./others/dbconnection.php");
                    $sql="SELECT * FROM `order_log`";
                    $reuslt=$con->query($sql);
                    foreach($reuslt as $value){
                    echo " <tbody>";
                       echo "<tr>";
                       echo "<td>". $value['pname'] ."</td>";
                       echo "<td>". $value['qntty'] ."</td>";
                       echo "<td>". $value['price'] ."</td>";
                       echo "<td>". $value['fullname'] ."</td>";
                       echo "<td>". $value['address'] ."</td>";
                       echo "<td>". $value['pincode'] ."</td>";
                       echo "<td>". $value['country'] ."</td>";
                       echo "<td>". $value['email'] ."</td>";
                       echo "<td>". $value['ph'] ."</td>";
                       echo"</tr>";
                   echo  "</tbody>";

                    }



                    ?>
        </table>
    </form>
</body>

</html>