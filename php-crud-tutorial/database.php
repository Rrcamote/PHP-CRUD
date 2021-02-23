<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'php-crud-tutorial'; 

$connect = mysqli_connect($host,$user,$password,$database);
// if(mysqli_connect_error()){
//     echo "Error: Unable to connect to MYSQLI <br>";
//     echo "Message: ".mysqli-connect_error()."<br>";
// } else {
//     echo "successfully connected";
// }
?>