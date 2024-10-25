<?php
$sever = 'localhost';
$user = 'root';
$pass ='';
$database = 'project1';

$con = new mysqli($sever,$user,$pass,$database);
if($con)
{
    mysqli_query($con, "SET NAMES'utf8'");
  
}
else
{
    echo 'ket noi that bai';
}
?>