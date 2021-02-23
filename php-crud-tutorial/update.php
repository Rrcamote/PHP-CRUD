<?php 
include('./database.php');

if (isset($_POST['edit'])){
    $editId = $_POST['editId'];
    $editUsername = $_POST['editUsername'];
    $editPassword = $_POST['editPassword'];
}
if (isset($_POST['update'])){
    $updateId = $_POST['updateId'];
    $updateUsername = $_POST['updateUsername'];
    $updatePassword = $_POST['updatePassword'];

    $queryUpdate = "UPDATE user SET username = '$updateUsername', password = '$updatePassword' WHERE id = '$updateId' ";
    $sqlUpdate = mysqli_query($connect,$queryUpdate);
    echo '<script>alert("successfully Updated!")</script>';
    echo '<script>window.location.href="/php-crud-tutorial/index.php"</script>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=   , initial-scale=1.0">
    <title>Document</title>
</head>
<style>
html, body {
    margin: 0;
    padding: 0;
}
.main {
    height: 100vh;
    display: grid;
    grid-template-rows: auto 1fr;
    justify-items: center;
    row-gap: 20px;   
}
.main .update-main{
    grid-row: 1/2;
    display: grid;
    grid-auto-rows: auto;
    row-gap: 5px;
}
.main .update-main h3{
    text-align: center;
}
</style>
<body>
    <div class="main">
        <form class="update-main" action="/php-crud-tutorial/update.php" method="POST">
            <h3>Update Users</h3>
                <input type="text" name="updateUsername" placeholder="Enter you UserName"  value="<?php $editUsername?>" required>
                <input type="password" name="updatePassword" placeholder="Enter your Password"  value="<?php $editPassword?>" required>
                <input type="submit" name="update" value="UPDATE">
                <input type="hidden" name="updateId" value="<?php echo $editId?>">
        </form>
    </div>
</body>
</html>