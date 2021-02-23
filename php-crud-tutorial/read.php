<?php 
include('./database.php');

$queryuser = "SELECT * FROM user";
$sqluser = mysqli_query($connect,$queryuser);
?>