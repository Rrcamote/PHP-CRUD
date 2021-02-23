<?php 
include('./database.php');

if(isset($_POST['delete'])){
$deleteId = $_POST['deleteId'];

$queryDelete = "DELETE FROM user WHERE id = $deleteId";
$sqlDelete = mysqli_query($connect,$queryDelete);

echo '<script>alert("successfully deleted!")</script>';
echo '<script>window.location.href="/php-crud-tutorial/index.php"</script>';
} else {
 echo '<script>window.location.href="/php-crud-tutorial/index.php"</script>';
}

?>