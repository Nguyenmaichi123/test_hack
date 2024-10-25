<form action="register.php" method="post">
    <label for="name">username</label>
    <input type="text" name="name" id="name">
    <label for="pass">password</label>
    <input type="pass" name="pass" id="pass">
    <button type="submit" name="regis">register</button>
</form>

<?php
include "connect.php";
if(isset($_POST['regis']))
{
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $sql = "select * from thanhvien WHERE username = '$name'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1)
    {
        echo "ten tai khoan da ton tai";
    }else
    {
        $sql = "INSERT INTO thanhvien(username,password) VALUES ('$name','$pass')";
        mysqli_query($con,$sql);
        
        header("location:login.php");
    }
}

?>