<?php
include "connect.php";
if(isset($_POST['btn']))
{
   $name = $_POST['name'];
   $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $price = $_POST['price'];
   $warranty = $_POST['warranty'];
   $sql = "INSERT INTO sanpham (name,image,price,warranty)
   VALUE('$name','$image','$price','$warranty')";

   mysqli_query($con,$sql);
   move_uploaded_file($image_tmp_name,'img/product/'.$image);
}
?>

<form action="add_product.php" method="post" enctype="multipart/form-data">
    <p>Name</p>
    <input type="text" name="name">
    <p>Image</p>
    <input type="file" name="image">
    <p>Price</p>
    <input type="text" name="price">
    <p>Warranty</p>
    <input type="text" name="warranty">
    <button id="button"  name="btn">submit</button>
</form>