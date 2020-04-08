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

    $sql = "SELECT * FROM `info_product`";
    $result = $mysql->query($sql);


    // выводим на страницу сайта заголовки HTML-таблицы
    echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>id</th>';
    echo '<th>name_product</th>';
    echo '<th>devices</th>';
    echo '<th>product_available</th>';
    echo '<th>Подробнее о товаре</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
  
   // выводим в HTML-таблицу все данные клиентов из таблицы MySQL

  while ($data = $result->fetch_assoc())
  { 
    echo '<tr>';
    echo '<td>' . $data['id'] . '</td>';
    echo '<td>' . $data['name_product'] . '</td>';
    echo '<td>' . $data['devices'] . '</td>';
    echo '<td>' . $data['product_available'] . '</td>';
    echo "<td>
          <div style=\"text-align: center;\">
          <a href=more_information.php?id={$data['id']}>Подробнее</a>
          </div>
          </td>";
    echo '</tr>';
  }
  
    echo '</tbody>';
    echo '</table>';


    // закрываем соединение с сервером  базы данных

    $mysql->close;

    echo "<br>
           <form action=\"index.php\">
            <input type=\"submit\" name=\"main_menu\" value=\"В главное меню\">
          </form>";

?>