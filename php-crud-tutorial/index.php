<?php 
  include('./read.php');


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
    background-image: url("https://lh3.googleusercontent.com/proxy/3QGLRe7I5mEbinmu7Fz3PrCfLqW-aHs4bCevVlymfVTrpOqcX9CwfTZdX_A-R1QxONQb9BnseinNtYWKcbesijN7SbJHQQhQlYFy5JyEwLt2ovRKyyaY_6QXm9wGXgozeDpwv4lZe_L2KkllfiPrZUSXPyk1yVQa4TVRpaBRq71miwbzG5b-sA");
    color: white;
    background-repeat: no-repeat;
    background-size: cover;
}
.main {
    height: 100vh;
    display: grid;
    grid-template-rows: auto 1fr;
    justify-items: center;
    row-gap: 20px;   
}
.main .create-main{
    grid-row: 1/2;
    display: grid;
    grid-auto-rows: auto;
    row-gap: 5px;
}
.main .create-main h3{
    text-align: center;
}
.main .read-main{
    grid-row: 2/3;
}
.main .read-main tr th {
    width: 200px;
}
.main .read-main tr td {
    text-align: center;
}
.main .read-main tr td:nth-child(4){
    display: grid;
    grid-auto-flow: column  
}
.read-main{
    border: 1px solid green;
    border-bottom: solid thin ;
    border-right: solid thin ;
    border-left: solid thin ;
}
.main h3 {
    color: skyblue;
    font-size: 30px;
}


</style>
<body>
    <div class="main">
        <form class="create-main" action="/php-crud-tutorial/create.php" method="POST">
            <h3>Input Users</h3>
                <input type="text" name="username" placeholder="username" required>
                <input type="password" name="password" placeholder="enter your password" required>
                <input type="submit" name="create" value="CREATE">
        </form>
        <table class="read-main">
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>ACTIONS</th>
            </tr>
            <?php while($results = mysqli_fetch_array($sqluser)){?>
            <tr>
                <td><?php echo $results['id'] ?></td>
                <td><?php echo $results['username'] ?></td>
                <td><?php echo $results['password'] ?></td>
                <td>
                    <form action="/php-crud-tutorial/update.php" method="POST">
                        <input type="submit" name="edit" value="EDIT">
                        <input type="hidden" name="editId" value="<?php echo $results['id']?>">
                        <input type="hidden" name="editUsername" value="<?php echo $results['username']?>">
                        <input type="hidden" name="editPassword" value="<?php echo $results['password']?>">
                    </form>
                    <form action="/php-crud-tutorial/delete.php" method="POST">
                        <input type="submit" name="delete" value="Delete">
                        <input type="hidden" name="deleteId" value="<?php echo $results['id']?>">
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>