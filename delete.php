
<form method="POST">
        <button id="btn" name="btn">Return</button>
    </form>


<?php
include "connect.php";

if(isset($_GET['this_id']))
{
    $id = $_GET['this_id'];
    $sql = "DELETE FROM sanpham WHERE id = $id";
    mysqli_query($con,$sql);
    echo "đã xóa thành công";
}if(isset($_POST['btn']))
{
    header("Location:product.php");
}



?>