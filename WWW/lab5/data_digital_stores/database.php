<?php
require "../db.php";
$data=$_POST;

// Проверка на существование таблицы news в БД
if ($find  = R::find('store')) {
?>
<html>
    <head> <title> Цифровые магазины. Исаев </title> </head>
    <h2>Список магазинов:</h2>
    <table border="1">
        <tr>
            <th> Название магазина </th> <th> Ссылка на сайт </th> <th> Редактирование </th> <th> Удаление </th>
        </tr>
        <?php

            // Выборка данных у users, для получения ID нового зарегистрировавшегося пользователя
            $q_result= R::getAll("SELECT * FROM store");

            if ($q_result){


              // Обработка данных для получения ID
              foreach ($q_result as $r_result) {

                  $id_store=$r_result['id'];
                  $name_store=$r_result['name_store'];
                  $url_store=$r_result['url_store'];


                    echo "<tr>";
                    echo "<td>$name_store</td><td>$url_store</td>";
                    echo "<td><a href='edit.php?id=$id_store'>Редактировать</a></td>";
                    echo "<td><a href='delete.php?id=$id_store'>Удалить</a></td>";
                    echo "</tr>";
                }
                print "</table>";
            }
}else{

    echo "Данные отсутствуют";
}
        ?>
        <form class="" action="register.php" method="post">

              <p><strong>Наименование  магазина</strong></p>
              <input type="text" name="name_store">
            <br>

              <p><strong>Ссылка на сайт</strong></p>
              <input type="text" name="url_store">
            <br>

            <p><button type="submit" name="do_add">Добавить</button></p>
        </form>
        <a href='../index.php'> Вернуться в меню </a>
</html>
