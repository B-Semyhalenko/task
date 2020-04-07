<?php

/*
echo ("Имя: " . mb_strtoupper($_GET['user_data']) . " ") . "<br />" . "<br />";
echo ("Пол: " . mb_strtoupper($_GET['sex'])); 
*/

$user_data = mb_strtoupper($_GET['user_data']);
$sex = mb_strtoupper($_GET['sex']);


$mysql = new mysqli('localhost', 'root', '', 'db');
$mysql->query("INSERT INTO `user_create` (`user_data`, `sex`) VALUES('$user_data', '$sex')");

$mysql -> close();
?>  