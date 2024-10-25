<h1>day la trang chu</h1>;
<form action="index.php" method="post">
    <p>find product</p>
    <input type="text" name="product_name">
    <button type="submit" name="search">search</button>
</form>
<form action="index.php" method="post">
<button type="submit" name="logout">logout</button>
</form>


<?php
include "connect.php";
session_start();
if(!isset($_SESSION['user_session']))
{
    header('location:login.php');
}
if(isset($_POST['logout']))
{
    unset($_SESSION['user_session']);
    header("location:login.php");
}
if(isset($_POST['search']))
{
    $product_name = $_POST['product_name'];
    $sql = "select * from sanpham WHERE name LIKE '%$product_name%'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>=1)
    {
        while($row = mysqli_fetch_array($result))
        {
?>
            <h1><?php echo $row['name']; ?></h1>
            <p>Giá: <?php echo $row['price']; ?> </p>
            <p><?php echo $row['warranty']; ?></p>
<?php
        }

    }else
    {
        echo "khong co san pham";
    }

}

?>