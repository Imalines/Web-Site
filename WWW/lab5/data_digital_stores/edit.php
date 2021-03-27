<?
require "../db.php";
$id=$_GET['id'];?>
<html>
    <head> <title> Редактирование данных Магазина </title> </head>
    <body>
        <form action='save_edit.php' method='get'>
            <?
            // Выборка данных
            $q_result= R::getAll("SELECT * FROM store WHERE id='$id'");

              // Обработка данных для получения ID
              foreach ($q_result as $r_result) {

                  $id_store=$r_result['id'];
                  $name_store=$r_result['name_store'];
                  $url_store=$r_result['url_store'];

                // Создание формы
                echo "<label for=name_store>Название магазина</label>
                <input type=text name=name_store value=$name_store>
            <br>
                <label for=url_store>Ссылка на сайт</label>
                <input type text name=url_store value=$url_store>
            <br>
                <input type=hidden name=id value=$id>

                <p><input type='submit' name='save' value='Сохранить'></p>";
  }?>
        </form>
        <p><button style='color: purple' onclick="window.location.href='database.php'">Вернуться к списку ОС</button></td></p>
    </body>
</html>
