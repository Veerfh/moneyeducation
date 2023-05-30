<?php
require("connect.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход|Регистрация</title>
</head>
<body>
    <?php
    $users=$db->prepare(SELECT * FROM `users`);
    $users->execute();
    while($login=$users->fetch()):
        ?>
        <h3 <?=$login['login']?>></h3>
        <?php endwhile;?>

        <h5>Регистрация</h5>
        <form action="reg.php" method="post">
            <input type="text" name="name">
            <input type="password" name="password">
            <button type="submit">Регистрация</button>
        </form>
</body>    
</html>