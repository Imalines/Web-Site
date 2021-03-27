<?php
    require "../db.php";

    $id = $_GET['id'];

    $result = R::exec("DELETE FROM os WHERE id='$id'");

    header("Location: database.php");
    exit;
?>
