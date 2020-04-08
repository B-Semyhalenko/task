<?php


    $mysql = new mysqli('localhost', 'root', '', 'db');
    $main_information = $_GET['main_information'];
    $id = $_GET['id'];
    $mysql->query("UPDATE `more_information` SET `main_information` = '$main_information' WHERE id = $_GET[id]");
    // $mysql->query("INSERT INTO `more_information` (`main_information`) VALUES('$main_information')");



    $mysql->close;


    header("Location: http://test/more_information.php?id=$_GET[id]");
    exit;

?>