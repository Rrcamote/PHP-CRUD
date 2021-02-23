<?php
include('./database.php');

if(isset($_POST['create'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

$querycreate = "INSERT INTO user VALUES(null,'$username','$password')";
$sqlcreate = mysqli_query($connect,$querycreate);

echo '<script>alert("successfully created")</script>';
echo '<script>window.location.href="/php-crud-tutorial/index.php"</script>';
} else {
 echo '<script>window.location.href="/php-crud-tutorial/index.php"</script>';
}
?>