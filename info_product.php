<?php

// echo ("Имя продукта: " . $_GET['name_product'] . '<br/>'); 

// echo ("Устройства: " . $_GET['devices'] . '<br/>'); 


    $name_product = $_GET['name_product'];
    $devices = $_GET['devices'];

    if (!empty($_GET['product_available']))
    {
        $product_available = ('Есть в наличии');
    }

    $mysql = new mysqli('localhost', 'root', '', 'db');
    $mysql->query("INSERT INTO `info_product` (`name_product`, `devices`, `product_available`) VALUES('$name_product', '$devices', '$product_available')");
    $info = "Заполните поле";
    $mysql->query("INSERT INTO `more_information`(`image_name`, `h1`, `main_information`) VALUES ('$info', '$info', '$info')");

    header("Location: http://test/");
    exit;


//isset()
//empty()



?>