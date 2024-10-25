<?php
include "connect.php";
session_start();
if(isset($_SESSION['user_session']))
{
    header('location:index.php');
}
if(isset($_POST['login']))
{
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $sql = "select * from thanhvien WHERE username = '$name'and password = '$pass'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) == 1)
    {
        $_SESSION['user_session'] = $name;
        header('Location:index.php');
    }else
    {
        echo "tai khoan hoac mat khau sai";
    }
}

?>



<form action="login.php" method="post">
    <label for="name">username</label>
    <input type="text" name="name" id="name">
    <label for="pass">password</label>
    <input type="password" name="pass" id="pass">
    <button type="submit" name="login">login</button>
</form>
<a href="register.php" style="text-decoration: none;">register</a>