<?php

//var_dump($_FILES);

    $tmp_name = $_FILES ['image']['tmp_name'];
    $name = "img/" . $_FILES['image']['name'];

    move_uploaded_file($tmp_name, $name);

    $mysql = new mysqli('localhost', 'root', '', 'db');
//    $name = $_GET['image'];
//    echo $name;
    $mysql->query("UPDATE `more_information` SET `image_name` = '$name' WHERE id = $_POST[id]");


    $mysql->close;

    header("Location: http://test/more_information.php?id=$_POST[id]");
    exit;


?>