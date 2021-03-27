<?
require "../db.php";
?>
<html>
    <head> <title> Добавление нового ключа </title> </head>
    <body>
        <H2>Добавление нового ключа</H2>

        <form action="save_new.php" method="get">

            Дата приобретения: <input name="purchase_date" size="50" placeholder="dd-mm-yyyy" type="date">
            <br>Дата окончания действия: <input name="expiry_date" size="20" placeholder="dd-mm-yyyy" type="date">

            <?php
                // Получение данных об ОС
                $q_result = R::getAll("SELECT id, name_os FROM os");
                echo "<br>ОС: <select name='os_id'>";

                if ($q_result){
                    foreach ($q_result as $r_result) {

                        $id = $r_result['id'];
                        $name_os = $r_result['name_os'];

                        echo "<option value='$id'>$name_os</option>";
                    }
                }
                echo "</select>";

                // Получение данных о магазинах
                $q_result = R::getAll("SELECT id, name_store FROM store");
                echo "<br>Магазин: <select name='store_id'>";
                if ($q_result){
                    foreach ($q_result as $r_result) {

                      $id = $r_result['id'];
                      $name_store = $r_result['name_store'];;

                        echo "<option value='$id'>$name_store</option>";
                    }
                }
                echo "</select>";
            ?>
            <br>Цена: <input name="price" size="30" type="text">
            <br>Код активации: <input name="key_code" size="30" type="text">
            <p>
                <input name="add" type="submit" value="Добавить">
                <input name="b2" type="reset" value="Очистить">
            </p>
        </form>
        <p><button style='color: blue' onclick="window.location.href='database.php'">Вернуться к списку ключей</button></td></p>
    </body>
</html>
