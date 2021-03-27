<?php
    require "../db.php";

    $id = $_GET['id'];

    $purchase_date = $_GET['purchase_date'];
    $expiry_date = $_GET['expiry_date'];
    $os_id = $_GET['os_id'];
    $store_id = $_GET['store_id'];
    $price = $_GET['price'];
    $key_code = $_GET['key_code'];

    $result = R::exec("UPDATE os_keys
        SET date_acq='$purchase_date', date_end='$expiry_date',
        name_os='$os_id', name_store='$store_id',
        price='$price', cod='$key_code'
        WHERE id='$id'"
    );

    header("Location: database.php");
    exit;
?>
