<?php
include "connect.php"; // Kết nối đến cơ sở dữ liệu
   $id = $_GET['this_id'];
    $sql = "SELECT * FROM sanpham WHERE id = $id";
    $result = mysqli_query($con, $sql);
   $row =  mysqli_fetch_assoc($result);

if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $price = (float)$_POST['price'];
    $warranty = $_POST['warranty'];
    
        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $sql = "UPDATE sanpham SET name = '$name', image='$image', price=$price, warranty='$warranty' WHERE id = $id";
        mysqli_query($con,$sql);
        
        move_uploaded_file($image_tmp_name, 'img/product/' . $image);

     
   

  
  
}
?>

<!-- Form cập nhật sản phẩm -->
<form action="" method="post" enctype="multipart/form-data">
    <p>Name change</p>
    <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>">

    <p>Image change</p>
    <span>
        <img src="./img/product/<?php echo htmlspecialchars($row['image']); ?>" width="50px" height="50px" alt="Product Image">
    </span>
    <input type="file" name="image">

    <p>Price change</p>
    <input type="text" name="price" value="<?php echo htmlspecialchars($row['price']); ?>">

    <p>Warranty change</p>
    <input type="text" name="warranty" value="<?php echo htmlspecialchars($row['warranty']); ?>">

    <button id="btn" name="btn">Submit</button>
</form>
