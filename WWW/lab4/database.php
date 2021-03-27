<?php
require "db.php";
$data=$_POST;

// Проверка на существование таблицы news в БД
if ($find  = R::find('os')) {
?>
<html>
    <head> <title> Операционные системы. Исаев </title> </head>
    <h2>Список банков:</h2>
    <table border="1">
        <tr>
            <th> Название ОС </th> <th> Тип оборудования </th> <th> Разрядность </th>
            <th> Имя разработчика </th> <th> Количество пользователей </th> <th> Редактирование </th> <th> Удаление </th>
        </tr>
        <?php

            // Выборка данных у users, для получения ID нового зарегистрировавшегося пользователя
            $q_result= R::getAll("SELECT * FROM os");

            if ($q_result){


              // Обработка данных для получения ID
              foreach ($q_result as $r_result) {

                  $id_os=$r_result['id'];
                  $name_os=$r_result['name_os'];
                  $type_eq=$r_result['type_eq'];
                  $bit_dep=$r_result['bit_dep'];
                  $developer=$r_result['developer'];
                  $num_user=$r_result['num_user'];

                    echo "<tr>";
                    echo "<td>$name_os</td><td>$type_eq</td><td>$bit_dep</td><td>$developer</td><td>$num_user</td>";
                    echo "<td><a href='edit.php?id=$id_os'>Редактировать</a></td>";
                    echo "<td><a href='delete.php?id=$id_os'>Удалить</a></td>";
                    echo "</tr>";
                }
                print "</table>";
            }
}else{

    echo "Данные отсутствуют";
}
        ?>
        <form class="" action="register.php" method="post">

              <p><strong>Наименование  ОС</strong></p>
              <input type="text" name="name_os">
            <br>

              <p><strong>Тип оборудования</strong></p>
              <input type="text" name="type_eq">
            <br>

              <p><strong>Разрядность</strong></p>
              <input type="text" name="bit_dep">
            <br>

              <p><strong>Разработчик</strong></p>
              <input type="text" name="developer">
            <br>

              <p><strong>Количество пользователей</strong></p>
              <input type="text" name="num_user">

            <p><button type="submit" name="do_add">Добавить</button></p>
        </form>
        <a href='index.php'> Вернуться в меню </a>
</html>
