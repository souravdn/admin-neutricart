<!DOCTYPE html>
<link rel="shortcut icon" href="favicon.ico">

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Add item and check new order</title>
</head>
<body>
  <div class="container">
    <div class="container">
      </div>
      <?php  require("./others/navbar.php"); ?>
      <h1>Welcome to Admine Panel!</h1>
  <h1> <a href="ViewOrderLog.php">See new orders.</a></h1>
  <h1>Add new item in website</h1>

 <form action="upload.php" method="post">
  <div class="form-group">
    <label >Product name:</label>
    <input required name="pname" type="text" class="form-control" placeholder="eg. tooth brush">
  </div>
  <div class="form-group">
    <label >price(rupee):</label>
    <input required name="price" type="text" class="form-control" placeholder="eg. 223">
  </div>
  <div class="form-group">
    <label >Discount(%):</label>
    <input required name="dscnt" type="text" class="form-control" placeholder="eg. 20">
  </div>
  <div class="form-group">
    <label >Product image name with extension:</label>
    <input required name="extnsn" type="text" class="form-control" placeholder="eg: myimage.jpg:">
  </div>
  
  
  
  
  <button class="flex-fill btn btn-success" type="submit">Upload product details</button>
<!-- </form>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileUpload" id="fileToUpload">
  <input type="submit" value="Upload" name="submit">
</form> 
<form action="dwnld.php" method="post" >
  click here to download
  <input type="submit" value ="download">-->
</form>
  </div>
 
</body>
</html>