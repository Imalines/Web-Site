<?php
    require "../db.php";

    $id = $_GET['id'];
    $name_store = $_GET['name_store'];
    $url_store = $_GET['url_store'];

    $result = R::exec("UPDATE store
        SET name_store='$name_store',
        url_store='$url_store'
        WHERE id='$id'"
    );

    header("Location: database.php");
    exit;
?>
