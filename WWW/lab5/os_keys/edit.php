<?
require "../db.php";
?>
<html>
    <head> <title> Редактирование данных о ключе </title> </head>
    <body>
        <form action='save_edit.php' method='get'>
            <?php

                $key_id = $_GET['id'];


                $q_result = R::getAll("SELECT os_keys.date_acq, os_keys.date_end,
                    os.name_os as name_os, store.name_store as name_store,
                    os.id as os_id, store.id as store_id,
                    os_keys.price, os_keys.cod FROM os_keys
                    LEFT JOIN os ON os_keys.name_os=os.id
                    LEFT JOIN store ON os_keys.name_store=store.id
                    WHERE os_keys.id=$key_id"
                );

                foreach ($q_result as $r_result) {
                  $purchase_date = $r_result['date_acq'];
                  $expiry_date = $r_result['date_end'];
                  $os_name = $r_result['name_os'];
                  $os_id = $r_result['os_id'];
                  $store_name = $r_result['store_name'];
                  $store_id = $r_result['store_id'];
                  $price = $r_result['price'];
                  $key_code = $r_result['cod'];


                // Создание формы
                print "Дата приобретения: <input name='purchase_date' size='50' type='date' placeholder='dd-mm-yyyy' value='$purchase_date'>";
                print "Дата окончания действия: <input name='expiry_date' size='50' type='date' placeholder='dd-mm-yyyy' value='$expiry_date'>";

                // Получение данных об играх
                $q_result = R::getAll("SELECT id, name_os FROM os");
                echo "<br>ОС: <select name='os_id'>";
                echo "<option selected value='$os_id'>$os_name</option>";



                if ($q_result){
                    foreach ($q_result as $r_result) {

                        $id = $r_result['id'];
                        $name = $r_result['name_os'];

                        echo "<option value='$id'>$name</option>";
                    }
                }
                echo "</select>";

                $q_result = R::getAll("SELECT id, name_store FROM store");
                echo "<br>Магазин: <select name='store_id'>";
                echo "<option selected value='$store_id'>$store_name</option>";

                if ($q_result){
                    foreach ($q_result as $r_result) {

                        $id = $r_result['id'];
                        $name = $r_result['name_store'];

                        echo "<option value='$id'>$name</option>";
                    }
                }
                echo "</select>";

                print "<br>Цена: <input name='price' size='30' type='text' value='$price'>";
                print "<br>Код активации: <input type='text' name='key_code' size='20' value='$key_code'>";
                print "<input type='hidden' name='id' size='30' value='$key_id'>";
              }
            ?>
            <p><input type='submit' name='save' value='Сохранить'></p>
        </form>
        <p><button style='color: blue' onclick="window.location.href='database.php'">Вернуться к списку ключей</button></td></p>
    </body>
</html>
