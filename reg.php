<?php
require("connect.php");
$user = $db->prepare("INSERT INTO users ('id' , 'name' , 'password') VALUES (NULL,:name, :pass )")
$user->execute([
    'name' =>$_POST['name'],
    'password' =>$_POST['password']
])