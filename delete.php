<?php


    // соединяемся с сервером базы данных
    

    $mysql = new mysqli('localhost', 'root', '', 'db');

    $mysql->query("DELETE FROM `info_product` WHERE id = $_GET[id]");
    $mysql->query("DELETE FROM `more_information` WHERE id = $_GET[id]");


//    echo $sql;

    $mysql->close;
    header("Location: http://test/");
    exit;

?>
