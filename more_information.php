<?php

// определяем начальные данные


    $db_host = 'localhost';
    $db_name = 'db';
    $db_username = 'root';
    $db_password = '';
    $db_table_to_show = 'db';



    // соединяемся с сервером базы данных
    

    $mysql = new mysqli('localhost', 'root', '', 'db');


    // подключаемся к базе данных

    // выбираем все значения из таблицы "info_product"

    $sql = "SELECT `name_product` FROM `info_product` WHERE id = $_GET[id]";
    $sql2 = "SELECT `main_information`, `image_name` FROM `more_information` WHERE id = $_GET[id]";




$result = $mysql->query($sql);
$result2 = $mysql->query($sql2);


    while($row = $result->fetch_assoc()){

        $name_product=$row['name_product'];



        echo '<div style="text-align: center;"><h1>' . $name_product . '</h1></div>';

    }

while($row = $result2->fetch_assoc()) {

    $main_information=$row['main_information'];
    $image_name=$row['image_name'];
    echo '<p>' . $main_information . '</p>';
    echo "<img src={$image_name} width='260' height='170'>";

}

echo "<a href=delete.php?id={$_GET['id']} method=get>Удалить товар</a>";
echo "<a href=create_more_information.php?id={$_GET['id']} method=get>Редактировать</a>";


$mysql->close;

echo "<br>
    <form action='product_information.php'>
        <input type='submit' name='product_info' value='К списку товаров'>
    </form>";

?>