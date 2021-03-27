<?php
    require "../db.php";

    $id = $_GET['id'];

    $result = $mysqli->query("DELETE FROM os_keys WHERE id='$id'");

    header("Location: database.php");
    exit;
?>
