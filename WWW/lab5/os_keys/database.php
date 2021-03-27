<?
require "../db.php";
?>
<html>
    <head> <title> Сведения об ключах </title>
    </head>

    <h2 id="h2"> Список ключей: </h2>
    <div class="container">

<?
// Проверка на существование таблицы news в БД
if ($find  = R::find('os_keys')) {
?>

    <table border="1">
        <tr>
            <th> Дата приобретения </th> <th> Дата окончания действия </th> <th> ОС </th>
            <th> Магазин </th> <th> Цена </th> <th> Код активации </th>
        </tr>
        <?php


            // Запрос на выборку
            $q_result = R::getAll("SELECT os_keys.id, os_keys.date_acq, os_keys.date_end,
                os.name_os as os, store.name_store as store, os_keys.price, os_keys.cod FROM os_keys
                LEFT JOIN os ON os_keys.name_os=os.id
                LEFT JOIN store ON os_keys.name_store=store.id"
            );

            $counter=0;

            if ($q_result){
                foreach ($q_result as $r_result) {

                    $id = $r_result['id'];
                    $date_esq = $r_result['date_acq'];
                    $date_end = $r_result['date_end'];
                    $os = $r_result['os'];
                    $store = $r_result['store'];
                    $price = $r_result['price'];
                    $key_code = $r_result['cod'];
                    $date_esq = date('d-m-Y', strtotime($date_esq));
                    $date_end = date('d-m-Y', strtotime($date_end));
                    echo "<tr>";
                    echo "<td>$date_esq</td><td>$date_end</td><td>$os</td><td>$store</td><td>$price</td><td>$key_code</td>";
                    echo "<td><button style='color: blue' onclick=\"window.location.href='edit.php?id=$id'\">Редактировать</button></td>";
                    echo "<td><button style='color: blue' onclick=\"window.location.href='delete.php?id=$id'\">Удалить</button></td>";
                    echo "</tr>";
                    $counter++;
                }
            }
            print "</table>";
            print("<p id=count>Всего ключей: $counter </p>");
}else{
    echo "Данные отсутствуют<br>";
}
        ?>
  <br>
    <button id="button" style='color: blue' onclick="window.location.href='new.php'">Добавить ключ</button></td>
  <br><br>
    <button id="button" style='color: blue' onclick="window.location.href='../index.php'">Вернуться в меню</button></td>
</html>
