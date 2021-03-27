<?php
    require "../db.php";

    $id = $_GET['id'];
    $name_os = $_GET['name_os'];
    $type_eq = $_GET['type_eq'];
    $bit_dep = $_GET['bit_dep'];
    $developer = $_GET['developer'];
    $num_user = $_GET['num_user'];

    $result = R::exec("UPDATE os
        SET name_os='$name_os',
        type_eq='$type_eq',
        bit_dep='$bit_dep',
        developer='$developer',
        num_user='$num_user'
        WHERE id='$id'"
    );

    header("Location: database.php");
    exit;
?>
