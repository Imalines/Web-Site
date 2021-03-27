<?
require "db.php";
$id=$_GET['id'];
?>
<html>
    <head> <title> Редактирование ОС </title> </head>
    <body>
        <form action='save_edit.php' method='get'>
            <?
            // Выборка данных у users, для получения ID нового зарегистрировавшегося пользователя
            $q_result= R::getAll("SELECT * FROM os WHERE id='$id'");

              // Обработка данных для получения ID
              foreach ($q_result as $r_result) {

                  $id_os=$r_result['id'];
                  $name_os=$r_result['name_os'];
                  $type_eq=$r_result['type_eq'];
                  $bit_dep=$r_result['bit_dep'];
                  $developer=$r_result['developer'];
                  $num_user=$r_result['num_user'];


                // Создание формы
                echo "<label for=name_os>Название ОС</label>
                <input type=text name=name_os value=$name_os>
            <br>
                <label for=type_eq>Тип оборудования</label>
                <input type text name=type_eq value=$type_eq>
            <br>
                <label for=bit_dep>Разрядность</label>
                <input type=text name=bit_dep value=$bit_dep>
            <br>
                <label for=developer>Разработчик</label>
                <input type=text name=developer value=$developer>
            <br>
                <label for=num_user>Количество пользователей</label>
                <input type=text name=num_user value=$num_user>

                <input type=hidden name=id value=$id>

                <p><input type='submit' name='save' value='Сохранить'></p>";
  }
            ?>

        </form>
        <p><button style='color: purple' onclick="window.location.href='database.php'">Вернуться к списку ОС</button></td></p>
    </body>
</html>
