    <?php
      require "../db.php";

      $purchase_date = $_GET['purchase_date'];
      $expiry_date = $_GET['expiry_date'];
      $os_id = $_GET['os_id'];
      $store_id = $_GET['store_id'];
      $price = $_GET['price'];
      $key_code = $_GET['key_code'];

      // Выполнение запроса
      $result = R::exec("INSERT INTO os_keys
   SET date_acq='$purchase_date', date_end='$expiry_date',
   name_os='$os_id', name_store='$store_id',
   price='$price', cod='$key_code'"
      );

      echo '<meta http-equiv="refresh" content="0;URL=database.php">';
  ?>
